const { src, dest, parallel, series, watch } = require('gulp');
const browserSync  = require('browser-sync').create();
const concat       = require('gulp-concat');
const uglify       = require('gulp-uglify');
const sass         = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const cleancss     = require('gulp-clean-css');
const imagemin     = require('gulp-imagemin');
const newer        = require('gulp-newer');
const del          = require('del');

sass.compiler = require('node-sass');

function browsersync() {
    browserSync.init({
        server: { baseDir: 'app/' },
        notify: false,
        online: true /* Включение и отключение режима работы по сети */
    })
}
function jquery() {
    return src('node_modules/jquery/dist/jquery.min.js')
    .pipe(dest('app/assets/js/'))
}

function styles() {
    return src('app/assets/scss/app.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(concat('app.min.css'))
    .pipe(autoprefixer({ overrideBrowserslist:['last 10 versions'], grid: true }))
    .pipe(cleancss(( { level: { 1: { specialComments: 0} } } )))
    .pipe(dest("app/assets/css/"))
    .pipe(browserSync.stream())
}

function scripts() {
    return src([
        'app/assets/js/app.js'
    ])
    .pipe(concat('app.min.js'))
    .pipe(uglify())
    .pipe(dest('app/assets/js/'))
    .pipe(browserSync.stream())
}

function images() {
    return src('app/assets/img/src/**/*', { base: 'app/assets/img/src/'})
    .pipe(newer('app/assets/img/dist/'))
    .pipe(imagemin())
    .pipe(dest('app/assets/img/dist/'))
}

function cleanimg() {
    return del('app/assets/img/dist/**/*', { force: true })

}

function copybuild() {
    return src([
        'app/assets/css/**/*.min.css',
        'app/assets/js/**/*.min.js',
        'app/assets/img/dist/**/*',
        'app/assets/img/*.*',
        'app/**/*.html',
        'app/**/*.mp3',
        'app/favicon.png',
    ], { base: 'app' })
    .pipe(dest('build'))
}

function cleanbuild() {
    return del('build/**/*')
}

function startwatch() {
    watch('app/**/*.html').on('change', browserSync.reload);
    watch('app/assets/img/src/**/*', images);
    watch('app/**/*.scss', styles);
    watch(['app/**/*.js', '!app/**/*.min.js'], scripts);

}

exports.browsersync = browsersync;
exports.jquery      = jquery;
exports.styles      = styles;
exports.scripts     = scripts;
exports.images      = images;
exports.cleanimg    = cleanimg;
exports.cleanbuild  = cleanbuild;
 
exports.build       = series(cleanbuild, styles, scripts, images, copybuild);

exports.default     = parallel(styles, scripts, browsersync, startwatch);