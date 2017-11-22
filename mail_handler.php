<?php
    if(isset($_POST['Sendmsg'])){
        $Navn=$_POST['Navn'];
        $Efternavn=$_POST['Efternavn'];
        $Tlf=$_POST['Tlf'];
        $mail=$_POST['mail'];
        $msg=$_POST['msg'];


        $to='mmrangeen@gmail.com';
        $subject='Form Murermester Jørgen Høgedal Aps';
        $message="Navn: ".$Navn."\n"."Efternavn: ".$Efternavn."\n"."Tlf: ".$Tlf."\n"."mail: ".$mail."\n"."msg: ".$msg."\n"."\n";
        $headers="From: ".$email;

        if(mail($to, $subject, $message, $headers)){
            echo "<h1> Tak for din henvendelse"." ".$Navn.", vi kontakter dig snarest muligt.</h1>";
        }
        else{
            echo "Noget gik galt, prøv igen";
        }
    }
?>
