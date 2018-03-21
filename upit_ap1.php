<?php 
if(isset($_POST['submit'])){
    $to = "matija.bilic130801@gmail.com"; 
    $mail = $_POST['mail'];
    $ime = $_POST["ime"];
    $broj = $_POST["broj"];
    $dolazak = $_POST["dolazak"];
    $odlazak = $_POST["odlazak"];
    $upit = $_POST["upit"];
   // $subject = "Upit o apartmanu 1";
    
    $poruka = $ime . " ostavlja upit:" . "\n\n" . "Mail: " . $mail . "\n" . "Dolazak: " . $dolazak . "\n" . "Odlazak: " . $odlazak . "\n" . "Broj osoba: " . $broj . "\n\n" . "Upit: " . $upit;
    

  //  $headers = "From: matija.bilic130801@gmail";
    
    mail($to, "Upit o apartmanu 1", $poruka, "From: matija.bilic130801@gmail");
    
    $Message = "<h4>Vaš upit je uspješno poslan.</h4> <br/>  Zahvaljujemo Vam na interesu, kontaktirat ćemo Vas uskoro s odgovorom.";
    
    header("Location:ap1.php?Message=".$Message);
    }
else{
    header("Location:ap1.php");
}
?>