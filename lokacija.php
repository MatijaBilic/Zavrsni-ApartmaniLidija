
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
        <link href="css/nav.css" rel="stylesheet">
        <link href="css/kontakt.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <?php
            require 'navigation.php';
        ?>
        
        <section id="section_id" class="container-fluid">
            <div class="container">
                <h3>Pronađite našu lokaciju na karti</h3>
                <article class="row">
                    <div class="col-xs-12">
                        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5757.043445205742!2d15.601327314205426!3d43.82427915733499!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2a45b91f2c6102ea!2sApartmani+Lidija!5e0!3m2!1shr!2shr!4v1501845970042" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        
                    </div>
                </article>
                
            
            </div>
        
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