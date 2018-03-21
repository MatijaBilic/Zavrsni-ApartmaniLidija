
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
        <link href="css/zanimljivosti.css" rel="stylesheet">

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
                <h3>Plaže na otoku</h3>
                <article class="row">
                    <div class="col-xs-1"></div>
                    <div class="col-xs-10" id="plaze">
                        <img src="images/backs/plaze.png" class="img-responsive plaze"/>
                        <img src="images/backs/ping.ico" class="img-responsive pings" id="zdrace"/>
                        <img src="images/backs/ping.ico" class="img-responsive pings" id="podvrske"/>
                        <img src="images/backs/ping.ico" class="img-responsive pings" id="slanica"/>
                        <img src="images/backs/ping.ico" class="img-responsive pings" id="cigrada"/>
                        <img src="images/backs/ping.ico" class="img-responsive pings" id="kosirina"/>
                        <img src="images/backs/ping.ico" class="img-responsive pings" id="plitka"/>
                        <img src="images/backs/ping.ico" class="img-responsive pings" id="lovisca"/>
                        <img src="images/backs/ping.ico" class="img-responsive pings" id="broscica"/>
                        <img src="images/backs/ping.ico" class="img-responsive pings" id="andrija"/>
                        <img src="images/backs/ping.ico" class="img-responsive pings" id="bilave"/>
                    </div>
                    <div class="col-xs-1"></div>
                </article>
                
                <article class="row">
                    <div class="col-xs-1"></div>
                    <div id="pics" class="col-xs-10">
                        <div class="slike" id="zdraceP">
                            <h4>Plaža Zdrače (Betina) </h4>
                            <img src="images/plaze/zdrace.png" class="img-responsive" />
                        </div>
                        <div class="slike" id="podvrskeP">
                            <h4>Plaža Podvrške (Murter) </h4>
                            <img src="images/plaze/podvrske.jpg" class="img-responsive" />
                        </div>
                        <div class="slike" id="slanicaP">
                            <h4>Plaža Slanica (Murter) </h4>
                            <img src="images/plaze/murter_slanica.jpg" class="img-responsive" />
                        </div>
                        <div class="slike" id="cigradaP">
                            <h4>Plaža Čigrađa (Murter) </h4>
                            <img src="images/plaze/cigrada.jpeg" class="img-responsive" />
                        </div>
                        <div class="slike" id="kosirinaP">
                            <h4>Plaža Kosirina (Betina) </h4>
                            <img src="images/plaze/kosirina.jpg" class="img-responsive" />
                        </div>
                        <div class="slike" id="plitkaP">
                            <h4>Plaža Plitka vala (Betina) </h4>
                            <img src="images/plaze/plitka.jpg" class="img-responsive" />
                        </div>
                        <div class="slike" id="loviscaP">
                            <h4>Plaža Lovišća (Jezera) </h4>
                            <img src="images/plaze/lovisca.jpg" class="img-responsive" />
                        </div>
                        <div class="slike" id="broscicaP">
                            <h4>Plaža Broščica (Tisno) </h4>
                            <img src="images/plaze/broscica.jpg" class="img-responsive" />
                        </div>
                        <div class="slike" id="andrijaP">
                            <h4>Plaža sv. Andrija (Tisno) </h4>
                            <img src="images/plaze/andrija.jpg" class="img-responsive" />
                        </div>
                        <div class="slike" id="bilaveP">
                            <h4>Plaža Bilave (Betina) </h4>
                            <img src="images/plaze/bilave.png" class="img-responsive"/>
                        </div>

                    </div>
                    <div class="col-xs-1"></div>
                    
                </article>
                
            
            </div>
        
        </section>

        <?php
            require 'footer.php';
        ?>
        
        <script>            
            var pings = Array.from(document.getElementsByClassName("pings"));
            var slike = Array.from(document.getElementsByClassName("slike"));
            
            pings.forEach(function(ping, i) {
                ping.addEventListener("click", function() {
                    slike.forEach(function(slika){
                        slika.style.display = "none";
                        slike[i].style.display = "block"; 
                    });
                });
            });
            
        </script>
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>