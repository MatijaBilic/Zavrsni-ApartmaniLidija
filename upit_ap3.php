<?php 
if(isset($_POST['submit'])){
    $to = "matija.bilic130801@gmail.com"; 
    $mail = $_POST['mail']; 
    $ime = $_POST['ime'];
    $broj = $_POST['broj'];
    $dolazak = $_POST['dolazak'];
    $odlazak = $_POST['odlazak'];
    $upit = $_POST['upit'];
    $subject = "Upit o apartmanu 3";
    
    $poruka = $ime . " ostavlja upit:" . "\n\n" . "Mail: " . $mail . "\n" . "Dolazak: " . $dolazak . "\n" . "Odlazak: " . $odlazak . "\n" . "Broj osoba: " . $broj . "\n\n" . "Upit: " . $upit;
    

    $headers = "From: matija.bilic130801@gmail.com";
    
    mail($to, $subject, $poruka, $headers);
    
    $Message = "<h4>Vaš upit je uspješno poslan.</h4> <br/>  Zahvaljujemo Vam na interesu, kontaktirat ćemo Vas uskoro s odgovorom.";
    
    header("Location:ap3.php?Message=".$Message);
    }
else{
    header("Location:ap3.php");
}
?>