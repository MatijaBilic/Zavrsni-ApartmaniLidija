<!doctype html>
<html>
    <head>
        <meta charset="cp-1250">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Apartmani Lidija - Vaš Komentar</title>
        <link href="images/feather.png" rel="icon"/>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="css/nav.css" rel="stylesheet">
        <link href="css/hero.css" rel="stylesheet">

    </head>
    <body>
        <?php
            require 'navigation.php';
        ?>
        
        <section class="container-fluid">
            <article class="container">
                <div class="row">
                <div class="col-xs-12">
                     <?php
                        $dbc = mysqli_connect('localhost', 'root', '', 'komentari') or die('Error connecting to MySQL server.');

                        $ime = $_POST['ime'];
                        $tekst = $_POST['tekst'];
                        $prikaz = 0;

                        $query = "INSERT INTO komentar (`ime`, `tekst`, `prikaz`) VALUES ('$ime', '$tekst', '$prikaz')";

                        $rez = mysqli_query($dbc, $query) or die('Error querying database.');

                        mysqli_close($dbc);

                        echo "<div id='koment'>
                        <h3>Vaš komentar je pohranjen.</h3> <br/> 
                        <p>Hvala Vam što ste nam ostavili svoje dojmove.</p> <br/><br/> 
                        
                        <p>Povratak na glavnu stranicu</p>
                        <a href='index.php' class='btn btn-primary'>Vrati se</a>
                        </div>
                        ";

                    ?>
                </div>
                </div>
            </article>
       
        </section>
        
        <?php
            require 'footer.php';
        ?>
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        
        
    </body>
</html>
