<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
    <script src="js/jquery-1.6.2.min.js" type="text/javascript"></script>
    <script src="js/jquery.galleriffic.js" type="text/javascript"></script>
    <script src="js/jquery.opacityrollover.js" type="text/javascript"></script>
    <script src="js/index.js" type="text/javascript"></script>
    <!--[if lt IE 7]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0"  alt="" /></a>
    </div>
    <![endif]-->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="js/html5.js"></script>
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
    <![endif]-->
</head>
<body id="page1">
<!--==============================header=================================-->
<header>
    <div class="row-1">
        <div class="main">
            <div class="container_12">
                <div class="grid_12">
                    <nav>
                        <ul class="menu">
                            <li><a class="active" href="welcome.php">Rechercher</a></li>
                            <li><a href="presentation.php">Qui sommes-nous ? </a></li>
                            <li><a href="contact.php">Nous contacter</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="row-2">
        <div class="main">
            <div class="container_12">
                <div class="grid_9">
                    <h1>
                        <a class="logo" href="welcome.php">EPS<strong>I</strong>mdb</a>
                        <span>Enjoy</span>
                    </h1>
                </div>
                <div class="grid_3">
                    <form id="search-form" method="get" enctype="multipart/form-data">
                        <fieldset>
                            <div class="search-field">
                                <input name="search" type="text" placeholder="Rechercher un film" />
                                <a class="search-button" href="#" onClick="AffichageResultat()"><span>search</span></a>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</header>

<!-- content -->
<section id="content">
    <div class="bg-top">
        <div class="bg-top-2">
            <div class="bg">
                <div class="bg-top-shadow">
                    <div class="main" id="resultat">
                        <div class="gallery p3">
                            <div class="wrapper indent-bot">
                                <div id="gallery" class="content">
                                    <div class="wrapper">
                                        <div class="slideshow-container">
                                            <div id="slideshow" class="slideshow"></div>
                                        </div>
                                    </div>
                                </div>
                                <div id="thumbs" class="navigation">
                                    <ul class="thumbs noscript">
                                        <li>
                                            <a class="thumb" href="img/img_theme/fast.jpeg" width="620" height="403" title=""> <img src="img/img_theme/fast.jpeg" width="140" height="121" alt="" /><span></span> </a>
                                        </li>
                                        <li>
                                            <a class="thumb" href="img/img_theme/adele.jpg" width="620" height="403" title=""> <img src="img/img_theme/adele.jpg" width="140" height="121" alt="" /> <span></span></a>
                                        </li>
                                        <li>
                                            <a class="thumb" href="img/img_theme/james.jpg" width="620" height="403" title=""> <img src="img/img_theme/james.jpg" width="140" height="121" alt="" /> <span></span></a>
                                        </li>
                                        <li>
                                            <a class="thumb" href="img/img_theme/vol_coucou.jpg" width="620" height="403" title=""> <img src="img/img_theme/vol_coucou.jpg" width="140" height="121" alt="" /> <span></span></a>
                                        </li>
                                        <li>
                                            <a class="thumb" href="img/img_theme/le_vent.jpg" width="620" height="403"  title=""> <img src="img/img_theme/le_vent.jpg" width="140" height="121" alt="" /> <span></span></a>
                                        </li>
                                        <li>
                                            <a class="thumb" href="img/img_theme/edward.jpg"width="620" height="403" title=""> <img src="img/img_theme/edward.jpg" width="140" height="121" alt="" /> <span></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="inner">
                                <div class="wrapper">
                                    <span class="title img-indent3">BIENVENUE !</span>
                                    <div class="extra-wrap indent-top2">
                                        <strong>EpsImdb</strong> est toujours là pour vous aider à gérer vos films.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container_12">
                            <div class="wrapper">
                                <article class="grid_12">
                                    <h3 class="color-1">Notre Savoir-Faire</h3>
                                    <div class="wrapper">
                                        <article class="grid_6 alpha">
                                            <figure class="img-indent frame"><img src="img/img_theme/300.jpg" width="200" height="121" alt="" /></figure>
                                            <div class="extra-wrap">
                                                <div class="indent-top">
                                                    <ul class="list-1">
                                                        <li>Modification des informations </br> d'un film </a></li>
                                                        <li class="last"> Ajout d'un film</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </article>
                                        <article class="grid_6 omega">
                                            <figure class="img-indent frame"><img src="img/img_theme/birdman.jpeg" width="200" height="121" alt="" /></figure>
                                            <div class="extra-wrap">
                                                <div class="indent-top">
                                                    <ul class="list-1">
                                                        <li>Ergonomie <br>pour plus de plaisir</li>
                                                        <li class="last">
                                                            Simplicité</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </article>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-bot">
        <div class="main">
            <div class="container_12">
                <div class="wrapper">
                    <article class="grid_4">
                        <h3 class="prev-indent-bot">A propos de nous</h3>
                        <p class="prev-indent-bot">Nous sommes trois étudiants de l'école EPSI Lille. Passionnés, nous vous proposons le meilleur.</p>

                    </article>
                    <article class="grid_4">
                        <h3 class="prev-indent-bot">Le cinéma</h3>

                        <p class="prev-indent-bot">Rien de mieux pour s'évader, s'amuser et oublier ses soucis</p>

                    </article>
                    <article class="grid_4">
                        <h3 class="prev-indent-bot">Retrouvez-nous !</h3>
                        <p class="prev-indent-bot">Sur Facebook, Twitter, Instagram </p>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="main">
        <div class="container_12">
            <div class="wrapper">
                <div class="grid_4">
                    <div>EpsIMDB &copy; 2015</div>
                    <!-- {%FOOTER_LINK} -->
                </div>
                <div class="grid_4">
                    <span class="phone-numb">01-23-45-67-89</span>
                </div>
                <div class="grid_4">
                    <ul class="list-services">
                        <li><a href="#"></a></li>
                        <li><a class="item-2" href="#"></a></li>
                        <li><a class="item-3" href="#"></a></li>
                        <li><a class="item-4" href="#"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<script type="text/javascript">
    $(window).load(function() {
        // We only want these styles applied when javascript is enabled
        $('div.navigation').css({'width' : '320px', 'float' : 'right'});
        $('div.content').css('display', 'block');

        // Initially set opacity on thumbs and add
        // additional styling for hover effect on thumbs
        var onMouseOutOpacity = 0.5;
        $('#thumbs ul.thumbs li span').opacityrollover({
            mouseOutOpacity:   onMouseOutOpacity,
            mouseOverOpacity:  0.0,
            fadeSpeed:         'fast',
            exemptionSelector: '.selected'
        });

        // Initialize Advanced Galleriffic Gallery
        var gallery = $('#thumbs').galleriffic({
            delay:                     7000,
            numThumbs:                 12,
            preloadAhead:              6,
            enableTopPager:            false,
            enableBottomPager:         false,
            imageContainerSel:         '#slideshow',
            controlsContainerSel:      '',
            captionContainerSel:       '',
            loadingContainerSel:       '',
            renderSSControls:          true,
            renderNavControls:         true,
            playLinkText:              'Play Slideshow',
            pauseLinkText:             'Pause Slideshow',
            prevLinkText:              'Prev',
            nextLinkText:              'Next',
            nextPageLinkText:          'Next',
            prevPageLinkText:          'Prev',
            enableHistory:             true,
            autoStart:                 7000,
            syncTransitions:           true,
            defaultTransitionDuration: 900,
            onSlideChange:             function(prevIndex, nextIndex) {
                // 'this' refers to the gallery, which is an extension of $('#thumbs')
                this.find('ul.thumbs li span')
                    .css({opacity:0.5})
            },
            onPageTransitionOut:       function(callback) {
                this.find('ul.thumbs li span').css({display:'block'});
            },
            onPageTransitionIn:        function() {
                this.find('ul.thumbs li span').css({display:'none'});
            }
        });
    });
</script>
</body>
</html>
