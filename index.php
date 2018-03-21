<!DOCTYPE html>

<html>
    <head>
        <meta charset="cp-1250">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Apartmani Lidija</title>
        <link href="images/feather.png" rel="icon"/>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="css/nav.css" rel="stylesheet">
        <link href="css/hero.css" rel="stylesheet">

    </head>
    <body>

       <?php require 'navigation.php'; ?>

        <header class="container-fluid">
          <div class="row">
              <div  id="hero_div" class="col-xs-12">
                  <div id="hero" class="carousel slide" data-ride="carousel">

                      <div class="carousel-inner" role="listbox">
                          <div class="item active">
                              <img id="hero_img" src="images/betina_crkva.jpg" alt="Betina" class="img-responsive">
                          </div>

                          <div class="item">
                              <img id="hero_img" src="images/betina_brod.jpg" alt="Betina" class="img-responsive">
                          </div>

                          <div class="item">
                              <img id="hero_img" src="images/betina_more.jpg" alt="Betina" class="img-responsive">
                          </div>

                          <div class="item">
                              <img id="hero_img" src="images/tisno_velika.jpg" alt="Tisno" class="img-responsive">
                          </div>

                          <div class="item">
                              <img id="hero_img" src="images/betina_zalazak.jpg" alt="Betina" class="img-responsive">
                          </div>


                      </div>

                      <a class="left carousel-control" href="#hero" role="button" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                      </a>

                      <a class="right carousel-control" href="#hero" role="button" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                      </a>
                  </div>
              </div>    
          </div>

        </header> 

        <section class="container-fluid">
                
            <article class="row" id="ap">
                    <div class="flex">
                       
                        <div id="ap1" class="col-xs-11 col-md-5 col-lg-6" >
                            <div id="I">
                                <img src="images/ap1/Apartman_I_18.jpg" alt="Apartman 1" class="img-responsive"/>
                            </div>
                            
                            <div id="I_text">
                                <h3>Apartman I</h3>
                                <span>4+1</span><br/>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                <a href="ap1.html" class="btn btn-info">Više...</a>
                            </div> 
                        </div>
                        
                        <div id="ap2" class="col-xs-11 col-md-6 col-lg-5" >
                            <div id="II">
                                <img src="images/ap2/Apartman_II_06.jpg" alt="Apartman 2" class="img-responsive"/>
                            </div>
                            
                            <div id="II_text">
                                <h3>Apartman II</h3>
                                <span>2+1</span>
                                <p>
                                    Potpuno opremljen apartman s pogledom na vrt.  Apartman ima jednu spavaću sobu, jednu kupaonu te jedan pomoćni ležaj u dnevnom boravku. 
                                </p>
                                <a href="ap2.html" class="btn btn-info">Više...</a>
                            </div>
                        </div>
                        
                        <div id="ap3" class="col-xs-11 col-md-6 col-lg-4 " >
                            <div id="III">
                                <img src="images/ap3/apartman_III_09.jpg" alt="Apartman 3" class="img-responsive" />
                            </div>
                            
                            <div id="III_text">
                                <h3>Apartman III</h3>
                                <span>2+1</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <a href="ap3.html" class="btn btn-info">Više...</a>
                            </div>
                        </div>
                        
                        <div id="ap4" class="col-xs-11 col-md-5 col-lg-3" >
                            <div id="IV">
                                <img src="images/ap4/apartman_IV_01.jpg" alt="Apartman 4" class="img-responsive"/>
                            </div>
                            
                            <div id="IV_text">
                                <h3>Apartman IV</h3>
                                <span>2+1</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <a href="ap4.html" class="btn btn-info">Više...</a>
                            </div>
                        </div>
                        
                        <div id="ap5" class="col-xs-11 col-md-8 col-lg-4" >
                            <div id="V">
                                <img src="images/ap5/apartman_V_01.jpg" alt="Apartman 5" class="img-responsive"/>
                            </div>
                            
                            <div id="V_text">
                                <h3>Apartman V</h3>
                                <span>2+1</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <a href="ap5.html" class="btn btn-info">Više...</a>
                            </div>
                        </div>
                    </div>
                </article>

            <div class="container" >
                <article class="row" id="as">
                    <div class="col-xs-12">
                        <h4>Turističke zajednice otoka Murtera</h4>
                        <p>Posjetite službene stranice turističkih zajednica na otoku Murteru gdje možete saznati više o tekućim događajima i aktivnostima. </p>
                        <a href="http://www.tz-betina.hr/hr/" >TZ Betina</a>
                    
                        <a href="http://www.tzo-murter.hr/">TZ Murter</a>
                        <a href="http://tz-tisno.hr/hr/" >TZ Tisno</a>
                   
                        <a href="https://tzjezera.hr/index.php/hr/" >TZ Jezera</a>
                    </div>
                
                </article>
            </div>
            
            <div class="container">
                 <article class="row">
                    <div class="col-xs-12">
                        
                        <h3>Komentari</h3>
                        <div id="komentari" class="col-xs-6">
                            <?php
                                $dbc = mysqli_connect('localhost', 'root', '', 'komentari')  or die('Error connecting to MySQL server.');
                                
                                $query = "SELECT * FROM komentar";
                                
                                $rezultat = mysqli_query($dbc, $query);

                                while($row= mysqli_fetch_array($rezultat)){
                                    if($row['prikaz']==1){
                                        echo '<div id="kom" class="col-xs-12">
                                        <span>' . $row['ime'] . '</span> <br/><br/>
                                        <p>' . $row['tekst'] . '</p>
                                        </div>';

                                        }
                                    else {}
                                }
                            ?>
                        </div>

                        <div class="col-xs-6">
                            <h4>Ostavite nam Vaše dojmove</h4>
                            <form method="post" action="komentari.php">
                                <div class="form-group">
                                    <label for="ime">Autor: </label>
                                    <input class="form-control" type="text" id="ime" name="ime"/>
                                </div>

                                <div class="form-group">
                                    <label for="tekst">Vaš komentar: </label>
                                    <textarea class="form-control" id="tekst" type="text" name="tekst"></textarea>
                                </div>

                                <button class="btn btn-primary" name="submit" type="submit">Ostavite komentar</button>
                            </form>
                        </div>
                    </div>
                </article>
            </div>
            
        </section>

        <?php
            require 'footer.php';
        ?>
        
        <script>
            var ap1 = document.getElementById("ap1");
            var ap2 = document.getElementById("ap2");
            var ap3 = document.getElementById("ap3");
            var ap4 = document.getElementById("ap4");
            var ap5 = document.getElementById("ap5");
            
            var I_text = document.getElementById("I_text");
            var II_text = document.getElementById("II_text");
            var III_text = document.getElementById("III_text");
            var IV_text = document.getElementById("IV_text");
            var V_text = document.getElementById("V_text");
            
            ap1.addEventListener("mouseover", function(){
                I_text.style.top = "-320px";
                I_text.style.display = "block";
            })
            
            ap1.addEventListener("mouseout", function(){
                I_text.style.top = "0px";
                I_text.style.display = "none";
            })
            
            
            ap2.addEventListener("mouseover", function(){
                II_text.style.top = "-320px";
                II_text.style.display = "block";
            })
            
            ap2.addEventListener("mouseout", function(){
                II_text.style.top = "0px";
                II_text.style.display = "none";
            })
            
            
            ap3.addEventListener("mouseover", function(){
                III_text.style.top = "-320px";
                III_text.style.display = "block";
            })
            
            ap3.addEventListener("mouseout", function(){
                III_text.style.top = "0px";
                III_text.style.display = "none";
            })
            
            
            ap4.addEventListener("mouseover", function(){
                IV_text.style.top = "-320px";
                IV_text.style.display = "block";
            })
            
            ap4.addEventListener("mouseout", function(){
                IV_text.style.top = "0px";
                IV_text.style.display = "none";
            })
            
            
            ap5.addEventListener("mouseover", function(){
                V_text.style.top = "-320px";
                V_text.style.display = "block";
            })
            
            ap5.addEventListener("mouseout", function(){
                V_text.style.top = "0px";
                V_text.style.display = "none";
            })
        </script>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
