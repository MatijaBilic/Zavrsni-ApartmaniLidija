
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
        <link href="css/apartman.css" rel="stylesheet">
        <link href="css/jquery-ui.structure.min.css" rel="stylesheet">
        <link href="css/jquery-ui.theme.min.css" rel="stylesheet">
        <link href="css/availability-calendar.css" rel="stylesheet">
        
        <link rel="stylesheet" href="assets/style.css" />
        <link rel="stylesheet" href="assets/dateTimePicker.css" />
        
    </head>
    <body>

        <?php
            require 'navigation.php';
        ?>

        <section id="section_id" class="container-fluid">
            <div class="container">
                <h3>Apartman V</h3>
                <article class="row">
                    <div class="col-xs-12 col-md-5">
                        <img src="images/ap5/apartman_V_01.jpg" class="img-responsive"/>
                    </div>
                    
                    <div class="col-xs-12 col-md-7">
                        <table class="table table-striped table-condensed">
                            <tr>
                                <td>Broj osoba</td>
                                <td>do 4</td>
                            </tr>
                            
                            <tr>
                                <td>Broj soba</td>
                                <td>1 (jednosobni)</td>
                            </tr>
                            
                            <tr>
                                <td>Broj pomoćnih ležajeva</td>
                                <td>1</td>
                            </tr>
                            
                            <tr>
                                <td>Broj kupaonica</td>
                                <td>1</td>
                            </tr>
                            
                            <tr>
                                <td>Površina</td>
                                <td>40 m<sup>2</sup></td>
                            </tr>
                            
                            <tr>
                                <td>Udaljenost od mora</td>
                                <td>50 m</td>
                            </tr>
                            
                            <tr>
                                <td>Klimatizacija</td>
                                <td>da</td>
                            </tr>
                            
                            <tr>
                                <td>Internet</td>
                                <td>da</td>
                            </tr>
                            
                            <tr>
                                <td>Parking</td>
                                <td>da</td>
                            </tr>
                            
                            <tr>
                                <td>Ostalo</td>
                                <td>kućni ljubimci dozvoljeni, roštilj, u cijenu su uključeni parking, klimatizacija i internet pristup, grijanje</td>
                            </tr>
                        </table>
                    </div>
                </article>
                
                <article class="row">
                    <h4>Opis apartmana</h4>
                    <table class="table table-striped table-condensed">
                        <tr class="info">
                            <th>Prostorija</th>
                            <th>Opis</th>
                        </tr>
                        
                        <tr>
                            <td>Spavaća soba</td>
                            <td>noćne lampe, ormar, noćni stolići, bračni krevet - površina 12m<sup>2</sup></td>
                        </tr>
                        
                        <tr>
                            <td>Kupaonica</td>
                            <td>bidet, ormarić, ogledalo, stalak za sušenje rublja, WC, tuš, bojler - površina 5m<sup>2</sup></td>
                        </tr>
                        
                        <tr>
                            <td>Kuhinja i dnevni boravak</td>
                            <td>aparat za kavu, kuhalo za vodu, posuđe, stol za blagovanje, električni štednjak, hladnjak 250 l, zamrzivač 10 l, kauč na razvlačenje, TV - površina 15m<sup>2</sup> </td>
                        </tr>
                        
                        <tr>
                            <td>Balkon</td>
                            <td>zaštita od sunca, stalak za sušenje rublja, pogled na vrt, garnitura za sjedenje - površina 8m<sup>2</sup></td>
                        </tr>
                    </table>
                </article>
                
                <article class="row">
                    <h4>Galerija slika</h4>
                    <div class='list-group gallery'>
                        <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                            <a class="thumbnail fancybox" data-fancybox="images" rel="ligthbox" href="images/ap5/apartman_V_01.jpg">
                                <img class="img-responsive" alt="" src="images/ap5/apartman_V_01_thumb.jpg" />
                                <div class='text-right'>
                                    <small class='text-muted'>Balkon</small>
                                </div> <!-- text-right / end -->
                            </a>
                        </div> <!-- col-6 / end -->
                        <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                            <a class="thumbnail fancybox" data-fancybox="images" rel="ligthbox" href="images/ap5/apartman_V_02.jpg">
                                <img class="img-responsive" alt="" src="images/ap5/apartman_V_02.jpg" />
                                <div class='text-right'>
                                    <small class='text-muted'>Kuhinja</small>
                                </div> <!-- text-right / end -->
                            </a>
                        </div> <!-- col-6 / end -->
                        <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                            <a class="thumbnail fancybox" data-fancybox="images" rel="ligthbox" href="images/ap5/apartman_V_03.jpg">
                                <img class="img-responsive" alt="" src="images/ap5/apartman_V_03.jpg" />
                                <div class='text-right'>
                                    <small class='text-muted'>Dnevni boravak</small>
                                </div> <!-- text-right / end -->
                            </a>
                        </div> <!-- col-6 / end -->
                        <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                            <a class="thumbnail fancybox" data-fancybox="images" rel="ligthbox" href="images/ap5/apartman_V_04.jpg">
                                <img class="img-responsive" alt="" src="images/ap5/apartman_V_04_thumb.jpg" />
                                <div class='text-right'>
                                    <small class='text-muted'>Balkon</small>
                                </div> <!-- text-right / end -->
                            </a>
                        </div> <!-- col-6 / end -->
                        <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                            <a class="thumbnail fancybox" data-fancybox="images" rel="ligthbox" href="images/ap5/apartman_V_05.jpg">
                                <img class="img-responsive" alt="" src="images/ap5/apartman_V_05.jpg" />
                                <div class='text-right'>
                                    <small class='text-muted'>Balkon</small>
                                </div> <!-- text-right / end -->
                            </a>
                        </div> <!-- col-6 / end -->
                        <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                            <a class="thumbnail fancybox" data-fancybox="images" rel="ligthbox" href="images/ap5/apartman_V_07.jpg">
                                <img class="img-responsive" alt="" src="images/ap5/apartman_V_07.jpg" />
                                <div class='text-right'>
                                    <small class='text-muted'>Balkon</small>
                                </div> <!-- text-right / end -->
                            </a>
                        </div> <!-- col-6 / end -->
                        
                        <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                            <a class="thumbnail fancybox" data-fancybox="images" rel="ligthbox" href="images/ap5/apartman_V_08.jpg">
                                <img class="img-responsive" alt="" src="images/ap5/apartman_V_08_thumb.jpg" />
                                <div class='text-right'>
                                    <small class='text-muted'>Spavaća soba</small>
                                </div> <!-- text-right / end -->
                            </a>
                        </div> <!-- col-6 / end -->
                        
                        <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                            <a class="thumbnail fancybox" data-fancybox="images" rel="ligthbox" href="images/ap5/apartman_V_09.jpg">
                                <img class="img-responsive" alt="" src="images/ap5/apartman_V_09_thumb.jpg" />
                                <div class='text-right'>
                                    <small class='text-muted'>Spavaća soba</small>
                                </div> <!-- text-right / end -->
                            </a>
                        </div> <!-- col-6 / end -->
                        
                        
                    </div> <!-- list-group / end -->
                </article>
                
                <article class="row">
                    <div class="col-xs-12 col-md-9" >
                        <h4>Cijene</h4>
                        <table id="cijene" class="table table-striped table-condensed table-bordered">
                            <tr class="info">
                                <th rowspan="2">Period</th>
                                <th colspan="2">Broj osoba (cijena po noćenju)</th>
                            </tr>
                            <tr class="info">
                                <th>2</th>
                                <th>3</th>
                            </tr>
                            
                            <tr>
                                <td>01.05. - 30.06.</td>
                                <td>35 €</td>
                                <td>40 €</td>
                            </tr>
                            
                            <tr>
                                <td>01.07. - 31.08.</td>
                                <td>45 €</td>
                                <td>50 €</td>
                            </tr>
                            
                            <tr>
                                <td>01.09. - 30.10.</td>
                                <td>35 €</td>
                                <td>40 €</td>
                            </tr>
                            
                            <tr>
                                <td>01.11. - 30.04.</td>
                                <td>30 €</td>
                                <td>35 €</td>
                            </tr>
                        </table>
                    </div>
                </article>
                
                <article class="row">
                    <h4>Dostupnost apartmana</h4>
                    
                    <div class="col-xs-12 col-md-8">
                        <p>Ovdje možete pronaći kada je ovaj apartman dostupan. Kako je dostupnost apartmana podležna promjenama, preporučamo Vam da nam ostavite upit preko formulara sa željenim periodom posjeta.</p>
                        <div class="col-xs-12" id="basic" data-toggle="calendar" data-month="8" data-year="2017" ></div>
                    </div>
                    
                    <div class="col-xs-12 col-md-4">
                        <h5>Ostavite nam upit</h5>
                        <form action="upit_ap5.php" method="post">
                            <div class="form-group">
                                <label for="ime">Ime i prezime:  </label>
                                <input class="form-control" type="text" name="ime" required/>
                            </div>
                            
                            <div class="form-group">
                                <label for="mail">E-mail:  </label>
                                <input class="form-control" type="email" name="mail" required/>
                            </div>
                            
                            <div class="form-group">
                                <label for="broj">Broj osoba:  </label>
                                <select class="form-control" name="broj">
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="dolazak">Dolazak:  </label>
                                <input class="form-control" class="datepicker" id="datepicker1" type="date" name="dolazak" />
                            </div>
                            
                            <div class="form-group">
                                <label for="odlazak">Odlazak:  </label>
                                <input class="form-control"  class="datepicker" id="datepicker2" type="date" name="odlazak" />
                            </div>
                            
                            <div class="form-group">
                                <label for="upit">Poruka:  </label>
                                <textarea class="form-control" type="text" name="upit" required></textarea>
                            </div>
                            
                            
                            <button type="submit" name="submit" class="btn btn-primary">Pošalji upit</button>
                        </form>
                        
                        <div class="col-xs-12">
                            <?php
                                if(isset($_REQUEST['Message']))
                                    echo '<p>' . $_REQUEST['Message'] . '</p>';
                            ?>
                        </div>
                    </div>
                </article>
            </div>
        
        </section>

        <?php
            require 'footer.php';
        ?>
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.fancybox.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/availability-calendar.js"></script>
        
        <script type="text/javascript" src="scripts/dateTimePicker.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#basic').calendar({
                    adapter: 'server/adapter.php'
                }); 
            });
        </script>
        
        <script>

            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            
            if( $('[type="date"]').prop('type') != 'date' ) {
              $('[type="date"]').datepicker();
            }
            
            $('#basic').calendar({
                    day_name: ['Pon', 'Uto', 'Sri', 'Čet', 'Pet', 'Sub', 'Ned'],
                    month_name: ['Siječanj', 'Veljača', 'Ožujak', 'Travanj', 'Svibanj', 'Lipanj', 'Srpanj', 'Kolovoz', 'Rujan', 'Listopad', 'Studeni', 'Prosinac'], 

                    num_next_month: 1, 
                    num_prev_month: 2, 
                
                unavailable: [ '2017-06-16', '2017-06-17', '2017-06-18', '2017-06-19', '2017-06-20', '2017-06-21', '2017-06-22', '2017-06-23', '2017-06-24', '2017-06-25', '2017-06-26', '2017-06-27', '2017-07-02', '2017-07-03', '2017-07-04', '2017-07-05', '2017-07-06', '2017-07-07', '2017-07-08', '2017-07-09', '2017-07-10', '2017-07-14', '2017-07-15', '2017-07-16', '2017-07-17', '2017-07-18', '2017-07-19', '2017-07-20', '2017-07-21', '2017-07-22', '2017-07-23', '2017-07-24', '2017-07-25', '2017-07-26', '2017-07-27', '2017-07-28', '2017-07-29', '2017-07-30', '2017-07-31', '2017-08-01', '2017-08-02', '2017-08-03', '2017-08-04', '2017-08-05', '2017-08-06', '2017-08-07', '2017-08-08', '2017-08-09', '2017-08-13', '2017-08-14', '2017-08-15', '2017-08-16', '2017-08-17', '2017-08-18', '2017-08-19', '2017-08-20', '2017-08-21', '2017-08-22', '2017-08-23', '2017-08-24', '2017-08-27' ]
                    
            });
            
            
            /* 
            var unavailableDates = [
                {start: '2017-08-01', end: '2017-08-07'},
                {start: '2017-08-08', end: '2017-08-16'},
                {start: '2017-08-16', end: '2017-08-24'},
                {start: '2017-08-28', end: '2017-09-07'},
                {start: '2017-09-11', end: '2017-09-15'},
                {start: '2017-09-15', end: '2017-09-20'}
            ];

            <script src="js/availability-calendar.js">  $('#calendar').availabilityCalendar(unavailableDates);*/
        </script>
    </body>
</html>