<?php
    if(isset($_POST['submit'])){
        $to = "matija.bilic130801@gmail.com"; 
        $mail = $_POST['email']; 
        $ime = $_POST['ime'];
        $upit = $_POST['message'];
        $subject = "Opceniti upit";
        $subject2 = "Vas primjerak upita";

        $poruka = $ime . " ostavlja upit:" . "\n\n" . "Mail: " . $mail . "\n\n" . "Upit: " . $upit;

        $poruka2 = "Ostavili ste upit: " . "\n" . $upit . "\n\n" . "Kontaktirat ćemo Vas povratno s odgovorom." . "\n\n" . "Hvala Vam i srdačni pozdravi, \n Apartmani Lidija";

        $headers = "From: matija.bilic130801@gmail.com";

        mail($to, $subject, $poruka, $headers);

        mail($mail, $subject2, $poruka2, $headers); 

        $Message = "<h4>Vaš upit je uspješno poslan.</h4> <br/>  Zahvaljujemo Vam na interesu, kontaktirat ćemo Vas uskoro s odgovorom.";
    
        header("Location:kontakt.php?Message=".$Message);

    }
    else{
        header("Location:kontakt.php");
    }
?>