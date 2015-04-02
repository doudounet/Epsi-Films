<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
    <script src="js/jquery-1.6.2.min.js" type="text/javascript"></script>
</head>
<body id="page5">
<!--==============================header=================================-->
<header>
    <div class="row-1">
        <div class="main">
            <div class="container_12">
                <div class="grid_12">
                    <nav>
                        <ul class="menu">
                            <li><a href="welcome.php">Rechercher</a></li>
                            <li><a href="presentation.php">Qui sommes-nous ?</a></li>
                            <li><a class="active" href="contact.php">Nous contacter</a></li>
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
                        <a class="logo" href="welcome.php">Eps<strong>i</strong>mdb</a>
                        <span>Enjoy</span>
                    </h1>
                </div>
                <div class="grid_3">
                    <form id="search-form" method="post" enctype="multipart/form-data">
                        <fieldset>
                            <div class="search-field">
                                <input name="search" type="text" />
                                <a class="search-button" href="#" onClick="document.getElementById('search-form').submit()"><span>Rechercher</span></a>
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
                    <div class="main">
                        <div class="box">
                            <div class="padding">
                                <div class="container_12">
                                    <div class="wrapper">
                                        <div class="grid_12">
                                            <div class="indent-left">
                                                <h3 class="p2">Formulaire de contact</h3>
                                                <form id="contact-form" method="post" enctype="multipart/form-data">
                                                    <fieldset>
                                                        <label><span class="text-form">Nom :</span><input name="p1" type="text" /></label>
                                                        <label><span class="text-form">Adresse Mail :</span><input name="p2" type="text" /></label>
                                                        <label><span class="text-form">Telephone : </span><input name="p3" type="text" /></label>
                                                        <div class="wrapper"><div class="text-form">Votre message :</div><textarea></textarea></div>
                                                        <div class="buttons">
                                                            <a class="button" href="#" onClick="document.getElementById('contact-form').submit()">Envoyer</a>
                                                        </div>
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                    <article class="grid_3">
                        <h3 class="prev-indent-bot">Notre Adresse</h3>
                        <dl>
                            <dt class="indent-bot">Rue Nationale. 59000 Lille.</dt>
                            <dd><span>Telephone :</span>  +33 1 23 45 67 89 </dd>
                            <dd><span>Fax :</span>  +33 9 87 65 43 21 </dd>
                            <dd><strong>E-mail:</strong> <a href="#">mail@epsimdb</a></dd>
                        </dl>
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
</body>
</html>
