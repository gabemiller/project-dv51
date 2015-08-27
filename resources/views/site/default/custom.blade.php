@extends('site.default._frontend.master')
@section('content')

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Divide</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">Rólunk</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Szolgáltatásaink</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Portfolió</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Kapcsolat</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header class="container-fluid header-section window-height">

        <div class="header-carousel">
            <div class="item owl-bg-image owl-image-1"></div>
            <div class="item owl-bg-image owl-image-2"></div>
            <div class="item owl-bg-image owl-image-3"></div>
        </div>


        <div class="i-want-form">

            <div class="logo">
                <img itemprop="image" src="img/divide_logo.svg" alt="Divide">
            </div>
            <h1 class="main-head-text">Írjuk meg közösen a történeted.</h1>

            <div class="text-center">
                <p class="main-text">Szükségem van egy új...</p>

                <div class="btn-group">
                    <button type="button" class="btn btn-dropdown btn-square btn-xl dropdown-toggle"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        weboldalra <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="#" data-value="1">weboldalra</a></li>
                        <li><a href="#" data-value="2">android alkalmazásra</a></li>
                        <li><a href="#" data-value="3">iOS alkalmazásra</a></li>
                    </ul>
                </div>
            </div>
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="order" class="col-sm-2 control-label sr-only">Szükségem van egy új...</label>

                    <div class="col-sm-10">
                        <input name="order" type="hidden" value="1">
                    </div>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button type="submit" class="btn btn-border btn-divide-green btn-round btn-lg">Vágjunk bele</button>
                    </div>
                </div>
            </form>
        </div>

    </header>
    <section class="bg-dark" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Nálunk megtalálod, amire szükséged van!</h2>
                    <hr class="light">
                    <p class="text-faded">Cégünk fő profilja a magasszintű megoldások szállítása kis és nagy vállalkozásoknak egyaránt, egyszerűbbtől a bonyolultabb IT támogatást igénylő feladatokra.
                        A Divide Expo Kft. számára a legfontosabb az ügyfél elégedetsége, amit átlagon feletti üzleti elemzési folyamatokkal és professzinális együttműködéssel érünk el.
                        Platformok között otthonosan mozgund mind webes, mind mobilos platformokon, beleértve az androidot és az ios-t.</p>
                </div>
            </div>
        </div>
    </section>

    <!--//end about -->

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">At Your Service</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-diamond wow bounceIn text-primary"></i>

                        <h3>Sturdy Templates</h3>

                        <p class="text-muted">Our templates are updated regularly so they don't break.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paper-plane wow bounceIn text-primary" data-wow-delay=".1s"></i>

                        <h3>Ready to Ship</h3>

                        <p class="text-muted">You can use this theme as is, or you can make changes!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o wow bounceIn text-primary" data-wow-delay=".2s"></i>

                        <h3>Up to Date</h3>

                        <p class="text-muted">We update dependencies to keep things fresh.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".3s"></i>

                        <h3>Made with Love</h3>

                        <p class="text-muted">You have to make your websites with love these days!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--//end services -->


    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/1.jpg" class="img-responsive" alt="">

                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Kategória
                                </div>
                                <div class="project-name">
                                    Projekt Név
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/2.jpg" class="img-responsive" alt="">

                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Kategória
                                </div>
                                <div class="project-name">
                                    Projekt Név
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/3.jpg" class="img-responsive" alt="">

                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Kategória
                                </div>
                                <div class="project-name">
                                    Projekt Név
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/4.jpg" class="img-responsive" alt="">

                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Kategória
                                </div>
                                <div class="project-name">
                                    Projekt Név
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/5.jpg" class="img-responsive" alt="">

                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Kategória
                                </div>
                                <div class="project-name">
                                    Projekt Név
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="#" class="portfolio-box">
                        <img src="img/portfolio/6.jpg" class="img-responsive" alt="">

                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Kategória
                                </div>
                                <div class="project-name">
                                    Projekt Név
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--//end portfólió -->

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Vedd fel velünk a kapcsolatot!</h2>
                    <hr class="primary">
                    <p>Neu totidem tuti discordia norant astra tellure ita. Zephyro coegit circumfuso natus habitabilis. Siccis magni. Iapeto litora aestu gentes septemque! Dissociata terrae orba arce coeperunt. Triones in corpore mentisque. Haec hunc animalia figuras principio ne sata spisso sunt. Mundo freta nova eodem nam.</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>

                    <p>123-456-6789</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>

                    <p><a href="mailto:info@divide.hu">info@divide.hu</a></p>
                </div>
            </div>
        </div>
    </section>
@endsection