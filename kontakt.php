
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Apartmani Lidija</title>
        <link href="images/feather.png" rel="icon"/>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="css/jquery.fancybox.min.css" rel="stylesheet">
        <link href="css/nav.css" rel="stylesheet">
        <link href="css/kontakt.css" rel="stylesheet">

    </head>
    <body>

        <?php
            require 'navigation.php';
        ?>

        <section id="section_id" class="container-fluid">
            <div class="container">
                
                <div class="row">
                    <h3>Kontakt</h3>
                    <article class="col-xs-12 col-md-6">
                        <h4>Kontakt podaci</h4>
                        <div id="podaci">
                            <span><span class="glyphicon glyphicon-user"></span>Lidija Bilić</span><br/>
                            <span><span class="glyphicon glyphicon-home"></span>Zrinskih i Frankopana 16, Betina, Hrvatska</span><br/>
                            <span><span class="glyphicon glyphicon-earphone"></span>+385981805494</span><br/>
                            <span><span class="glyphicon glyphicon-envelope"></span>lidijabilic123@gmail.com</span><br/>
                            <p id="upit">Ako imate pitanja u vezi smještajnih jedinica, prijevoza, organiziranih izleta ili aktivnosti, ostavite nam upit i kontaktirat ćemo Vas povratno s informacijama. </p>
                        </div>
                    </article>

                    <article class="col-xs-12 col-md-6">

                        <h4>Ostavite nam upit</h4>
                        
                        <form action="upit.php" method="post" class="form-group">
                            <div>
                                <label for="ime">Ime i prezime: </label> 
                                <input class="form-control" type="text" name="ime">
                            </div>

                            <div>
                                <label for="email">Vaš e-mail: </label> 
                                <input class="form-control" type="text" name="email" required>
                            </div>

                            <div>
                                <label for="message">Upit: </label>
                                <textarea class="form-control" rows="5" name="message" cols="30" required></textarea>
                            </div>

                            <input class="btn btn-primary" type="submit" name="submit" value="Pošalji upit">
                        </form>
                        <!-- poruka iz upit.php -->
                        <div class="col-xs-12">
                            <?php
                                if(isset($_REQUEST['Message']))
                                    echo '<p>' . $_REQUEST['Message'] . '</p>';

                            ?>
                        </div>
                        
                    </article>
                </div>
            </div>
        
        </section>

        <?php
            require 'footer.php';
        ?>
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.fancybox.min.js"></script>
    </body>
</html>