
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
        <link href="css/otok.css" rel="stylesheet">

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
                
                <div class="tabbable">
                    
                    <!-- izbor kartica -->
                    <ul id="kart" class="nav nav-tabs">
                        <li class="active"><a href="#betina" data-toggle="tab">Betina</a></li>
                        <li><a href="#murter" data-toggle="tab">Murter</a></li>
                        <li><a href="#tisno" data-toggle="tab">Tisno</a></li>
                        <li><a href="#jezera" data-toggle="tab">Jezera</a></li>
                    </ul>
                
                    <!-- sadržaj kartica -->
                    <div class="tab-content">
                        <article id="betina" class="row tab-pane active">
                        <div class="col-xs-12 col-md-6">
                            <h4>Betina</h4>
                            <p>
                                Ime Betina potječe od keltske riječi «bet» što znači – usta i opisuje izgled prirodno formirane luke Betine koja, poput usta, štiti brodove od naleta vjetra. Ime je simbolično i stoga što su Betinu kroz povijest zvali «ustima šibenskog kraja», zbog plodnog betinskog «Poja», bogatog ponajprije maslinama i smokvama, ali i povrćem koje je hranilo cijeli kraj.
                                <br/><br/>
                                Betina je izgrađena na padinama rta Artić. Smatra se jednim od najljepših mjesta na Jadranu. Mjestom dominira župna crkva Sv. Franje Asiškog iz 15. st. s prekrasnim baroknim zvonikom, a od nje se zrakasto spušta mreža starih kamenih uličica sa slikovitim bolticama i svodovima. Neke su još uvijek popločane žalom, kamenim oblutcima izvađenim iz mora, što je bio običaj popločavanja ulica u Betini kroz 17. i 18. st. Zbog slikovitosti i očuvanosti povijesne jezgre mjesto je pod zaštitom kao spomenik kulture. Mnogi je zbog ovih obilježlja i predivne vizure nazivaju "ljepoticom pučke mediteranske arhitekture".
                                <br/><br/>
                                Zanimaju li vas kulturne znamenitosti preporučujemo Vam da osim crkve sv. Franje posjetite i Plitku Valu gdje su pronađeni ostaci antičke Ville Rustice i starorimskog groblja, a između Betine i Murtera, na području Gradine nalaze se ostaci antičkog grada Colentuma sa starim vilama i cisternom. U blizini je starokršćanska crkva Gospe od Gradine iz 6. st. Na otočiću Mosteru, udaljenom svega pola nautičke milje od Betine nalaze se ostaci franjevačkog samostana iz 12. stoljeća. </p>
                        </div>

                        <div class="col-xs-12 col-md-6">
                            <img src="images/betina_namoru.jpg" class="img-responsive"/>
                        </div>
                    </article>
                        
                        <article id="murter" class="tab-pane row">                 
                        <div class="col-xs-12 col-md-6">
                            <img src="images/murter_marina.jpg" class="img-responsive"/>
                        </div>

                         <div class="col-xs-12 col-md-6">
                            <h4>Murter</h4>
                            <p> Murter je naselje na sjeverozapadnom dijelu istoimenog otoka. Najprije se zvalo Veliko Selo
    (od XIII. st.) i Srimač (Srimac), a od 1715. ima sadašnje ime. Širi se prema uvali Hramina, u kojoj je izgrađena marina, prema uvali Slanica, u kojoj je najljepša plaža na šibenskoj rivijeri, te kamp i hotel "Colentum". Uvala Hramina zaštićena je od svih vjetrova i dobro je zaklonište jahtama. <br/><br/>
    Gospodarska je osnova poljodjelstvo, ribarstvo i turizam. Na regionalnoj je prometnici i broji oko 2000 stalnih stanovnika, dok je u turističkim mjesecima taj broj daleko veći, po slobodnoj procjeni do oko četiri puta.<br/><br/>

                                Na podnožju uzvisine Gradine, u uvali Hramina i drugdje nalaze se ostaci rimskih građevina,ostaci antičkog naselja Colentum. Na rtu Gradini nalazi se mjesno groblje, u kojemu su pronađeni starohrvatski grobovi. Na groblju je crkva Gospe u Gradini iz XVII. st. Župna crkva sv. Mihovila (rekonstruirana 1770. godine) ima barokni oltar, rad majstora Pija i Vicka dall'Acqua i jednu ikonu kretsko - venecijanske škole. U župnome uredu nalazi se gotičko-renesansni procesijski križ te nekoliko vrednijih slika. Iznad sela, na brdu Vršini, je crkva sv. Roka iz 1760.  </p>
                        </div>
                    </article>

                        <article id="tisno" class="tab-pane row">
                        <div class="col-xs-12 col-md-6">
                            <h4>Tisno</h4>
                            <p>Preci današnjih Tišnjana doselivši na otok Murter, zauzeli su sjeveroistočni dio otoka i po tjesnacu, na kojem su se smjestili, mjesto je dobilo svoje ime. Najstariji hrvatski naziv Tishno nalazimo na nacrtu iz 1567. god. koji se nalazi u Muzeju grada Šibenika.
                            <br/><br/>
                                Sam naziv mjesta kroz povijest bio je mijenjan nekoliko puta. Prvobitno ime Tisno u vrijeme vršenja popisa stanovnika i izrade topografskih karata za Austrougarske bilo je prevedeno na talijanski u Stretto, a kasnije za stare Jugoslavije opet prevedeno u Tijesno kao obična riječ, a ne geografsko ime. Iako su po pravopisu u to vrijeme imena mjesta trebala čitati i pisati na onom dijelektu kojim stanovnici tog mjesta govore, Tisno je i dalje ostalo Tijesno. Ponovno originalno ime 'Tisno', mjesto dobiva nazad nakon osamostaljenja Republike Hrvatske.
                            <br/><br/>
                                Most se započeo graditi odmah nakon propasti Mletačke republike, ali je na zahtjev drugih naselja na otoku ponovno prestala njegova gradnja. lpak, uskoro se gradi i na tom mjestu ostaje do danas iako je doživio niz rekonstrukcija. Potpuna rekonstrukcija i postavljanje novog pokretnog mosta, izvršena je u 1991. godini kada je na dan 20. kolovoza pušten u promet.
                            </p>
                        </div>

                        <div class="col-xs-12 col-md-6">
                            <img src="images/tisno_kanal.jpg" class="img-responsive"/>
                        </div>
                    </article>

                        <article id="jezera" class="tab-pane row">
                    <div class="col-xs-12 col-md-6">
                        <img src="images/jezera.jpg" class="img-responsive"/>
                    </div>
                    
                     <div class="col-xs-12 col-md-6">
                        <h4>Jezera</h4>
                        <p>Jezera, mjesto pomoraca, ribara i ronilaca smješteno je na jugoistočnoj strani otoka Murtera. Jezera su uvučena u zaljev oblika potkove koji je okružen pitomim brežuljcima. Zbog svog prirodnog položaja mjesto nije izloženo udarima jačih vjetrova pa je njegova uvala idealna kao pristanište i stanište brodova. Mjesto broji 960 stanovnika. Na ulazu u uvalu (luku) dva su mjesna kupališta i šetnica.<br/><br/>

                        Ime Jezera dolazi od toga što se kišnica zaustavlja na djelu nepropusnog tla pa stvara velike lokve. Blato ili Jezero, u davnini močvarno tlo jugozapadno od samog mjesta, većim djelom je isušeno zbog malarije početkom 20 st., dok je druga vodena površina zvana Lokva puna vode od prvih do zadnjih kišnih razdoblja.<br/><br/>
                         
                         Prvi pisani podaci o Jezerima datiraju iz 1298 g. No mjesto je puno starije. Na poluotoku Murtariću u blizini današnjeg mjesta nalazimo tragove ilirskog naselja iz 11. stoljeća prije Krista. Nedaleko od samog mjesta, u uvali Podjasenovac 1938 g. u jednoj gomili nađena su dva groba ilirskog plemena Liburna. Takvih sličnih gomila u okolici mjesta ima dosta. Posebno se ističe velika gomila nalik krnjem stošcu do čijeg se vrha uspinje spiralno. Mještani je zovu «Pudarica» jer su u starije vrijeme na njoj pudari, odnosno poljari, čuvali polja.</p>
                    </div>
                </article>
                    
                    </div>
                  
                </div>
                
            </div>
        </section>

        <?php
            require 'footer.php';
        ?>
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>