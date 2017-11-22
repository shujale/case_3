<?php
    if(isset($_POST['Sendmsg'])){
        $Navn=$_POST['Navn'];
        $Efternavn=$_POST['Efternavn'];
        $Tlf=$_POST['Tlf'];
        $mail=$_POST['mail'];
        $besked=$_POST['besked'];



        $to='mmrangeen@gmail.com';
        $subject='Form Murermester Jørgen Høgedal ApS';
        $message="Navn: ".$Navn."\n"."Efternavn: ".$Efternavn."\n"."Tlf: ".$Tlf."\n"."mail: ".$mail."\n"."Besked: ".$besked."\n"."\n";
        $headers="From: ".$email;

        if(mail($to, $subject, $message, $headers)){
            echo "<h1> Tak for din henvendelse"." ".$Navn.", du vil blive kontaktet snarest muligt</h1>";
        }
        else{
            echo "Noget gik galt, prøv igen";
        }
    }
?>
