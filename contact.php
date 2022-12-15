<html>
<body>

Beste <?php echo $_GET["name"]; ?>, bedankt dat u contact met ons opgenomen heeft!<br>
We zullen zo snel mogelijk contact met u opnemen via: <?php echo $_GET["email"]; ?>

<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['bericht'];
    $headers = 'From: Team_6_IUW';
    $to = $_POST['email'];
    $subject = 'Contactformulier';
    
    mail($to,$subject,$message,$headers);
?>

<?php
    $myfile = fopen("$_POST[name].txt", "w");
    $txt = "Neem contact op met: ";
    fwrite($myfile, $txt);
    fwrite($myfile, $_POST['name']);
    $txt = "Email: ";
    fwrite($m)
    d0ce56c391813842a11934

</body>
</html>