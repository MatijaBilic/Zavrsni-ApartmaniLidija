
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
        <link href="css/aps.css" rel="stylesheet">

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
                <h3>Apartmani Lidija</h3>
                <article class="row">
                    
                    <div class="col-sm-4 hidden-xs" id="slider-thumbs">
                        <!-- thumb navigacija -->
                        <ul class="hide-bullets">
                            <li class="col-sm-4">
                                <a class="thumbnail" id="carousel-selector-0"><img src="images/kuca/IMG_20150605_140143.jpg" class="img-responsive">
                                </a>
                            </li>

                            <li class="col-sm-4">
                                <a class="thumbnail" id="carousel-selector-1"><img src="images/kuca/IMG_20150605_135704.jpg" class="img-responsive"></a>
                            </li>

                            <li class="col-sm-4">
                                <a class="thumbnail" id="carousel-selector-2"><img src="images/kuca/IMG_20150605_135715.jpg" class="img-responsive"></a>
                            </li>

                            <li class="col-sm-4">
                                <a class="thumbnail" id="carousel-selector-3"><img src="images/kuca/IMG_20150605_135757.jpg" class="img-responsive"></a>
                            </li>

                            <li class="col-sm-4">
                                <a class="thumbnail" id="carousel-selector-4"><img src="images/kuca/IMG_20150605_135943.jpg" class="img-responsive"></a>
                            </li>
                            
                            <li class="col-sm-4">
                                <a class="thumbnail" id="carousel-selector-5"><img src="images/kuca/IMG_20150605_135531.jpg" class="img-responsive"></a>
                            </li>
                            
                            <li class="col-sm-4">
                                <a class="thumbnail" id="carousel-selector-6"><img src="images/kuca/IMG_20150605_135541.jpg" class="img-responsive"></a>
                            </li>
                            
                            <li class="col-sm-4">
                                <a class="thumbnail" id="carousel-selector-7"><img src="images/kuca/IMG_20150605_140146.jpg" class="img-responsive"></a>
                            </li>

                            <li class="col-sm-4">
                                <a class="thumbnail" id="carousel-selector-8"><img src="images/kuca/IMG_20150605_161841.jpg" class="img-responsive"></a>
                            </li>

                            <li class="col-sm-4">
                                <a class="thumbnail" id="carousel-selector-9"><img src="images/kuca/IMG_20150605_140033.jpg" class="img-responsive"></a>
                            </li>
                            
                            <li class="col-sm-4">
                                <a class="thumbnail" id="carousel-selector-10"><img src="images/kuca/IMG_20150605_161930.jpg" class="img-responsive"></a>
                            </li>
                            
                            <li class="col-sm-4">
                                <a class="thumbnail" id="carousel-selector-11"><img src="images/kuca/IMG_20170710_153618.jpg" class="img-responsive"></a>
                            </li>
                            
                            <li class="col-sm-4">
                                <a class="thumbnail" id="carousel-selector-12"><img src="images/kuca/IMG_20170812_123108.jpg" class="img-responsive"></a>
                            </li>
                            
                            <li class="col-sm-4">
                                <a class="thumbnail" id="carousel-selector-13"><img src="images/kuca/IMG_20170812_123236.jpg" class="img-responsive"></a>
                            </li>
                            
                        </ul>
                    </div>
                    
                    <div class="col-sm-8 col-xs-12">
                        <div class="col-xs-12" id="slider">
                            <!-- Top part of the slider -->
                            <div class="row">
                                
                                <div class="col-xs-12" id="carousel-bounding-box">
                                    <div class="carousel slide" id="myCarousel">
                                        <!-- Carousel items -->
                                        <div class="carousel-inner">
                                            <div class="active item" data-slide-number="0">
                                                <img src="images/kuca/IMG_20150605_140143.jpg" class="img-responsive"></div>

                                            <div class="item" data-slide-number="1">
                                                <img src="images/kuca/IMG_20150605_135704.jpg" class="img-responsive"></div>

                                            <div class="item" data-slide-number="2">
                                                <img src="images/kuca/IMG_20150605_135715.jpg" class="img-responsive"></div>

                                            <div class="item" data-slide-number="3">
                                                <img src="images/kuca/IMG_20150605_135757.jpg" class="img-responsive"></div>

                                            <div class="item" data-slide-number="4">
                                                <img src="images/kuca/IMG_20150605_135943.jpg" class="img-responsive"></div>

                                            <div class="item" data-slide-number="5">
                                                <img src="images/kuca/IMG_20150605_135531.jpg" class="img-responsive"></div>
                                            
                                            <div class="item" data-slide-number="6">
                                                <img src="images/kuca/IMG_20150605_135541.jpg" class="img-responsive"></div>

                                            <div class="item" data-slide-number="7">
                                                <img src="images/kuca/IMG_20150605_140146.jpg" class="img-responsive"></div>

                                            <div class="item" data-slide-number="8">
                                                <img src="images/kuca/IMG_20150605_161841.jpg" class="img-responsive"></div>

                                            <div class="item" data-slide-number="9">
                                                <img src="images/kuca/IMG_20150605_140033.jpg" class="img-responsive"></div>

                                            <div class="item" data-slide-number="10">
                                                <img src="images/kuca/IMG_20150605_161930.jpg" class="img-responsive"></div>

                                            <div class="item" data-slide-number="11">
                                                <img src="images/kuca/IMG_20170710_153618.jpg" class="img-responsive"/></div>
                                            
                                            <div class="item" data-slide-number="12">
                                                <img src="images/kuca/IMG_20170812_123108.jpg" class="img-responsive"/></div>
                                            
                                            <div class="item" data-slide-number="13">
                                                <img src="images/kuca/IMG_20170812_123236.jpg" class="img-responsive"/></div>

                                        </div>
                                        <!-- Carousel nav -->
                                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                        </a>
                                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="row">
                    <div class="aps">
                        <a href="ap1.html">Apartman 1 <br/><span> do 5 osoba</span></a>
                        
                    </div>
                    
                    <div class="aps">
                        <a href="ap2.html">Apartman 2 <br/><span> do 3 osobe</span></a>
                        
                    </div>
                    
                    <div class="aps">
                        <a href="ap3.html">Apartman 3 <br/><span> do 4 osobe</span></a>
                        
                    </div>
                    
                    <div class="aps">
                        <a href="ap4.html">Apartman 4 <br/><span> do 4 osobe</span></a>
                        
                    </div>
                    
                    <div class="aps">
                        <a href="ap5.html">Apartman 5 <br/><span> do 3 osobe</span></a>
                       
                    </div>
                </article>
            </div>

        </section>

        <?php
            require 'footer.php';
        ?>
        
        
       
        <script src="js/jquery.fancybox.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
             $(document).ready(function($) {
 
                $('#myCarousel').carousel({
                        interval: 3000
                });

                //Handles the carousel thumbnails
                $('[id^=carousel-selector-]').click(function () {
                var id_selector = $(this).attr("id");
                try {
                    var id = /-(\d+)$/.exec(id_selector)[1];
                    console.log(id_selector, id);
                    jQuery('#myCarousel').carousel(parseInt(id));
                } catch (e) {
                    console.log('Regex failed!', e);
                }
            });
                // When the carousel slides, auto update the text
                $('#myCarousel').on('slid.bs.carousel', function (e) {
                         var id = $('.item.active').data('slide-number');
                        $('#carousel-text').html($('#slide-content-'+id).html());
                });
        });
        </script>
        
    </body>
</html>