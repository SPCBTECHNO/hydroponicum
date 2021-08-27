<script src="../js/jquery.min.js"></script>

<?
    require('data.php');

    $name = $_POST["NAME"];
    $tel = $_POST["TEL"];
    $email = $_POST["EMAIL"];

    $name = htmlspecialchars($name);
    $tel = htmlspecialchars($tel);
    $email = htmlspecialchars($email);

    $name = urldecode($name);
    $tel = urldecode($tel);
    $email = urldecode($email);

    $name = trim($name);
    $tel = trim($tel);
    $email = trim($email);

    $to = $arContacts['EMAIL'];
    $subject = "Заявка с сайта";
    $subject = '=?UTF-8?B?'.base64_encode($subject).'?=';
    $message = "Имя: ".$name." Телефон: ".$tel." E-mail: ".$email;
    $headers = "From:" . $arContacts['EMAIL'] . "\r\n" . "Content-type: text/plain; charset=utf-8"."\r\n";

?>

<?if(mail($to, $subject, $message, $headers)):?>
    <script>
        $(document).ready(function() {
            window.location.href = '/#contacts?form=success'
        })
    </script>
<?else:?>
    <script>
        $(document).ready(function() {
            window.location.href = '/#contacts?form=error'
        })
    </script>
<?endif?>

    
