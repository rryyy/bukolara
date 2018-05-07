<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>BuKo (BuhayKomyuter)</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
   <!--  <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css"> -->
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- script
    ================================================== -->
   <!--  <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script> -->

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="buko.ico" type="image/x-icon">
    <link rel="icon" href="images/buko.ico" type="image/x-icon">

</head>

<body id="top">

    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="index.html">
                <img src="images/logo.png" alt="Homepage">
            </a>
        </div>

        <nav class="header-nav">

            <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

            <div class="header-nav__content">
                <h3>Navigation</h3>
                
                <ul class="header-nav__list">
                    <li class="current"><a class="smoothscroll"  href="#home" title="home">Home</a></li>
                    <li><a class="smoothscroll"  href="#about" title="about">About</a></li>
                    <li><a class="smoothscroll"  href="#services" title="services">Services</a></li>
                    <li><a class="smoothscroll"  href="#works" title="news">News</a></li>
                    <li><a class="smoothscroll"  href="#clients" title="partners">Partners</a></li>
                    <li><a class="smoothscroll"  href="#contact" title="contact">Contact</a></li>
                    <li><a class="smoothscroll"  href="#login" title="sign up / login">Accounts</a></li>
                </ul>
    
                <p>BuKo is now available in <br> <a href='https://play.google.com/store/apps/details?id=com.foundmenot.buko&hl=en'>Google Play Store</a>, download and  share to us your commuting experience.</p>
    
                <ul class="header-nav__social">
                    <li>
                        <a href="https://www.facebook.com/GordonCollegeBuKo/"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/GC_BuKo"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="https://instagram.com/gc_buko/"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>

            </div> <!-- end header-nav__content -->

        </nav>  <!-- end header-nav -->

        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-text">Menu</span>
            <span class="header-menu-icon"></span>
        </a>

    </header> <!-- end s-header -->


    <!-- home
    ================================================== -->
    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="images/hero-bg.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="overlay"></div>
        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">

                <h3>Welcome to BuKo</h3>

                <h1>
                    We are a concerned group <br>
                    of people who will <br>
                    make changes in your <br>
                    commuting experiences.
                </h1>

                <div class="home-content__buttons">
                    <a href="#login" class="smoothscroll btn btn--stroke">
                        Sign Up / Login
                    </a>
                    <a href="#about" class="smoothscroll btn btn--stroke">
                        More About Us
                    </a>
                </div>

            </div>

            <div class="home-content__scroll">
                <a href="#about" class="scroll-link smoothscroll">
                    <span>Scroll Down</span>
                </a>
            </div>

            <div class="home-content__line"></div>

        </div> <!-- end home-content -->


        <ul class="home-social">
            <li>
                <a href="https://www.facebook.com/GordonCOllegeBuKo/"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a>
            </li>
            <li>
                <a href="https://twitter.com/GC_BuKo""><i class="fa fa-twitter" aria-hidden="true"></i><span>Twitter</span></a>
            </li>
            <li>
                <a href="https://instagram.com/gc_buko/"><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>
            </li>
        </ul> 
        <!-- end home-social -->

    </section> <!-- end s-home -->


    <!-- about
    ================================================== -->
    <section id='about' class="s-about">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead subhead--dark">Hello There</h3>
                <h1 class="display-1 display-1--light">We Are BuKo</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row about-desc" data-aos="fade-up">
            <div class="col-full">
                <h4>
                An application for the commuters' feedbacks and reviews for Public Utility Vehicles (PUVs) using Crowd-Sourcing Model and Sentiment Analysis Algorithm. 
                </h4>
            </div>
        </div> <!-- end about-desc -->

        <div class="row about-stats stats block-1-4 block-m-1-2 block-mob-full" data-aos="fade-up">
                
            <div class="col-block stats__col ">
                <div class="stats__count">1505</div>
                <h5>Number of Commuters</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">1036</div>
                <h5>Happy Commuters</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">1092</div>
                <h5>Neutral Commuters</h5>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">1409</div>
                <h5>Sad Commuters</h5> 
            </div>

        </div> <!-- end about-stats -->

        <div class="about__line"></div>

    </section> <!-- end s-about -->


    <!-- services
    ================================================== -->
    <section id='services' class="s-services">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">What We Do</h3>
                <h1 class="display-2">We’ve got everything you need for your commuting experience</h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row services-list block-1-2 block-tab-full">

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="fa fa-pencil-square-o"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Post Feedbacks and Reviews</h3>
                    <p style="text-align: justify;"> How's your commuting experience? You can share it with us. Either its good or fair or bad, anything. We like hearing how's your feedbacks and reviews about PUVs. And we are sure that you would also like to be informed about how other commuters feedback and review the PUVs you ride in. Sounds great!
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="fa fa-file"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">File Complaints</h3>
                    <p style="text-align: justify;"> Free yourself from anger. Now, you can easily report those PUV Drivers who violated against the rules and regulations, and most importantly against your rights as commuters. No worries from filing complaints directly to managements because BuKo will deliver it to them. Just tell us your story, and BuKo will make sure of its delivery.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="fa fa-line-chart"></i>
                </div>  
                <div class="service-text">
                    <h3 class="h2">Analytics and Statistics</h3>
                    <p style="text-align: justify;"> Having trouble in decision making? Amazing! BuKo provides useful analytics and statistics of Public Utility Vehicles (PUVs) in different locations based on the commuters' posts. It's not just helpful for you, but also to different Transportation Service Providers who wanted to know their commuters' feedbacks so they could operate more efficient operations for their commuters' satisfaction.
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="fa fa-group"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">Commuting Community</h3>
                    <p style="text-align: justify;"> BuKo aims to be an effective commuting community in the country. You can read and react to other commuters' feedbacks and reviews about Public Utility Vehicles (PUVs) in your location. Have an opportuniy to notify them and be notified by them about the current situation of their commuting. Isn't it cool? It looks like you will be having a bunch of commuting friends in your place?
                    </p>
                </div>
            </div>

            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="fa fa-question-circle-o"></i>
                </div>
                <div class="service-text">
                    <h3 class="h2">PUVs Violation Guide</h3>
                    <p style="text-align: justify;"> Don't be silly! Don't be carried away by your emotions! BuKo doesn't want to make every PUV Drivers that bad. So we want to guide and educate every commuters from the PUVs Violations that they might encounter. We are into justice! We all want justice! So let's work for it.
                    </p>
                </div>
            </div>
    
            <!-- <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i class="fa fa-bell"></i></div>
                <div class="service-text">
                    <h3 class="h2">Complaints Notification</h3>
                    <p style="text-align: justify;"> Nemo cupiditate ab quibusdam quaerat impedit magni. Earum suscipit ipsum laudantium. 
                    Quo delectus est. Maiores voluptas ab sit natus veritatis ut. Debitis nulla cumque veritatis.
                    Sunt suscipit voluptas ipsa in tempora esse soluta sint.
                    </p>
                </div>
            </div> -->

        </div> <!-- end services-list -->

    </section> <!-- end s-services -->


    <!-- news
    ================================================== -->
    <section id='works' class="s-works">

        <div class="intro-wrap">
                
            <div class="row section-header has-bottom-sep light-sep" data-aos="fade-up">
                <div class="col-full">
                    <h3 class="subhead">Transportation and Commuting News</h3>
                    <h1 class="display-2 display-2--light">In case you missed it, we love to keep you informed</h1>
                </div>
            </div> <!-- end section-header -->

        </div> <!-- end intro-wrap -->

        <div class="row works-content">
            <div class="col-full masonry-wrap">
                <div class="masonry">
    
                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/gallery/g-shutterbug.jpg" class="thumb-link" title="" data-size="1050x700">
                                    <img src="images/portfolio/lady-shutterbug.jpg" 
                                         srcset="images/portfolio/lady-shutterbug.jpg 1x, images/portfolio/lady-shutterbug@2x.jpg 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    MRT-3 train malfunctions again
                                </h3>
                                <p class="item-folio__cat">
                                    870 passengers offloaded
                                </p>
                            </div>
    
                            <div class="item-folio__caption">
                                <p style="text-align: justify;">More than 800 passengers were unloaded again on Monday from the Metro Rail Transit line 3 (MRT-3) as another southbound train stopped due to a system failure.

                                In an advisory, MRT-3 media relations officer Aly Narvaez said 870 commuters were affected by the second technical glitch that occurred at the Shaw Boulevard Station.

                                The service disruption at 9:49 a.m. was caused by an “electrical failure in motor” due to “worn-out electrical sub-components”, Narvaez said.

                                Affected passengers were loaded on a different train, which arrived four minutes after.

                                This latest incident on Monday happened just over an hour after an MRT-3 train offloaded 580 passengers at the southbound of the Araneta Center-Cubao Station due to Signaling Error.<br><br>

                                See full details: <a href='http://newsinfo.inquirer.net/978142/mrt-3-train-malfunctions-again-870-passengers-offloaded'> http://newsinfo.inquirer.net/978142/mrt-3-train-malfunctions-again-870-passengers-offloaded</a></p>
                            </div>
    
                        </div>
                    </div> <!-- end masonry__brick -->

                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/gallery/g-woodcraft.jpg" class="thumb-link" title="" data-size="1050x700">
                                    <img src="images/portfolio/woodcraft.jpg" 
                                         srcset="images/portfolio/woodcraft.jpg 1x, images/portfolio/woodcraft@2x.jpg 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Commuters tell LTFRB: #WeWantUberGrab
                                </h3>
                                <p class="item-folio__cat">
                                    Uber ride sharing scheme
                                </p>
                            </div>
    
                            <div class="item-folio__caption">
                                <p style="text-align: justify;">MANILA — Commuters are rallying behind transport network companies (TNCs) Grab and Uber in an effort to convince the government not to push through with its crackdown on app-based drivers who do not have franchises to operate.

                                As of 5:45 p.m., the hashtag #WeWantUberGrab was the top trending Twitter topic in the country.
                                <br><br> See full details: <a href='http://newsinfo.inquirer.net/914652/commuters-tell-ltfrb-wewantubergrab'> http://newsinfo.inquirer.net/914652/commuters-tell-ltfrb-wewantubergrab</a></p>
                            </div>
    
                        </div>
                    </div> <!-- end masonry__brick -->
    
                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/gallery/g-beetle.jpg" class="thumb-link" title="" data-size="1050x700">
                                    <img src="images/portfolio/the-beetle.jpg"
                                         srcset="images/portfolio/the-beetle.jpg 1x, images/portfolio/the-beetle@2x.jpg 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Uber to sell south-east Asia business to competitor Grab
                                </h3>
                                <p class="item-folio__cat">
                                    US ride-hailing firm will take 27.5% stake in Asia-based Grab and its CEO will join Grab’s board
                                </p>
                            </div>
    
                            <div class="item-folio__caption">
                                <p style="text-align: justify;">MANILA, Philippines – An economist warned that Filipino commuters could face higher fares and fewer incentives, after California-based Uber decided to sell its entire Southeast Asian business to its rival Grab.

                                Ending stiff competition between the ride-hailing behemoths, Uber on Monday, March 26, sold its operations in Southeast Asia to Grab. In turn, Uber will receive a 27.5% stake in the business.

                                "Obviously, it is not good. From a duopoly, it becomes a monopoly," Fernando Aldaba, dean and professor of economics at the Ateneo de Manila University and a senior fellow of Eagle Watch, told Rappler.

                                "Without competition, prices may go up and quality of service might deteriorate," Aldaba added.

                                <br><br> See full details: <a href='https://www.theguardian.com/technology/2018/mar/26/uber-to-sell-south-east-asia-business-to-competitor-grab'> https://www.theguardian.com/technology/2018/mar/26/uber-to-sell-south-east-asia-business-to-competitor-grab</a></p>
                            </div>
    
                        </div>
                    </div> <!-- end masonry__brick -->
    
                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/gallery/g-grow-green.jpg" class="thumb-link" title="" data-size="1050x700">
                                    <img src="images/portfolio/grow-green.jpg" 
                                         srcset="images/portfolio/grow-green.jpg 1x, images/portfolio/grow-green@2x.jpg 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    No To Jeepney Phase Out!
                                </h3>
                                <p class="item-folio__cat">
                                    Transport strike to paralyze Davao traffic by 90%
                                </p>
                            </div>
    
                            <div class="item-folio__caption">
                                <p style="text-align: justify;">DAVAO CITY, Philippines – Public utility jeepney (PUJ) drivers here will join the two-day nationwide transport strike set next week to demand for the junking of the government’s jeepney modernization program.

                                The transport strike will come four days before the set schedule of the unveiling of the jeepney prototypes at the Philippine Trade Training Center on October 12.

                                Rick Baron, spokesperson of Transport of Southern Mindanao for Solidarity, Independence and Nationalism-Pagkakaisa ng mga Samahan ng Tsuper at Opereytor Nationwide (Transmision-Piston), said they are preparing for the nationwide transport sector protest set on October 16 to October 17.

                                Baron added that the Transmission-Piston is targeting to paralyze the traffic in Davao City by “90 to 99 percent.”<br><br> See full details: <a href='http://davaotoday.com/main/economy/transport-strike-to-paralyze-davao-traffic-by-90/'>http://davaotoday.com/main/economy/transport-strike-to-paralyze-davao-traffic-by-90/</a> </p>
                            </div>
    
                        </div>
                    </div> <!-- end masonry__brick -->

                    <!-- <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/gallery/g-guitarist.jpg" class="thumb-link" title="Guitarist" data-size="1050x700">
                                    <img src="images/portfolio/guitarist.jpg" 
                                         srcset="images/portfolio/guitarist.jpg 1x, images/portfolio/guitarist@2x.jpg 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Guitarist
                                </h3>
                                <p class="item-folio__cat">
                                    Web Design
                                </p>
                            </div>
    
                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.

                                <br><br> See full details: <a href='http://davaotoday.com/main/economy/transport-strike-to-paralyze-davao-traffic-by-90/'>http://davaotoday.com/main/economy/transport-strike-to-paralyze-davao-traffic-by-90/</a></p>
                            </div>
    
                        </div>
                    </div> --> <!-- end masonry__brick -->
    
                    <!-- <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="images/portfolio/gallery/g-palmeira.jpg" class="thumb-link" title="Palmeira" data-size="1050x700">
                                    <img src="images/portfolio/palmeira.jpg"
                                         srcset="images/portfolio/palmeira.jpg 1x, images/portfolio/palmeira@2x.jpg 2x" alt="">
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    Palmeira
                                </h3>
                                <p class="item-folio__cat">
                                    Web Design
                                </p>
                            </div>
    
                            <div class="item-folio__caption">
                                <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.

                                <br><br> See full details: <a href='http://davaotoday.com/main/economy/transport-strike-to-paralyze-davao-traffic-by-90/'>http://davaotoday.com/main/economy/transport-strike-to-paralyze-davao-traffic-by-90/</a></p>
                            </div>
    
                        </div>
                    </div> --> <!-- end masonry__brick -->

                </div> <!-- end masonry -->
            </div> <!-- end col-full -->
        </div> <!-- end works-content -->

    </section> <!-- end s-works -->


    <!-- clients
    ================================================== -->
    <section id="clients" class="s-clients">

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Our Partners</h3>
                <h1 class="display-2">BuKo has been honored to
                partner up with these clients</h1>
            </div>
        </div> <!-- end section-header -->

        <!-- <div class="row clients-outer" data-aos="fade-up">
            <div class="col-full">
                <div class="clients">
                    
                    <a href="#0" title="" class="clients__slide"><img src="images/clients/apple.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/clients/atom.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/clients/blackberry.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/clients/dropbox.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/clients/envato.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/clients/firefox.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/clients/joomla.png" /></a>
                    <a href="#0" title="" class="clients__slide"><img src="images/clients/magento.png" /></a>
                     
                </div> <!-- end clients -->
            </div> <!-- end col-full -->
        </div> <!-- end clients-outer --> -->

        <div class="row clients-testimonials" data-aos="fade-up">
            <div class="col-full">
                <div class="testimonials">

                    <div class="testimonials__slide">

                <aside class="pull-quote">
                    <blockquote>
                        <p>Testimony or sentiment here</p>
                    </blockquote>
                </aside>

                        <img src="images/avatars/girl-commuter.png" alt="Author image" class="testimonials__avatar">
                        <div class="testimonials__info">
                            <span class="testimonials__name">Name here</span> 
                            <span class="testimonials__pos">Title here</span>
                        </div>

                    </div>

                    <div class="testimonials__slide">
                        
                <aside class="pull-quote">
                    <blockquote>
                        <p>Testimony or sentiment here</p>
                    </blockquote>
                </aside>
                        <img src="images/avatars/boy-commuter.png" alt="Author image" class="testimonials__avatar">
                        <div class="testimonials__info">
                            <span class="testimonials__name">Name here</span> 
                            <span class="testimonials__pos">Title here</span>
                        </div>

                    </div>

                    <div class="testimonials__slide">
                        
                <aside class="pull-quote">
                    <blockquote>
                        <p>Testimony or sentiment here</p>
                    </blockquote>
                </aside>

                        <img src="images/avatars/girl-2-commuter.png" alt="Author image" class="testimonials__avatar">
                        <div class="testimonials__info">
                            <span class="testimonials__name">Name here</span> 
                            <span class="testimonials__pos">Title here</span>
                        </div>

                    </div>

                </div><!-- end testimonials -->
                
            </div> <!-- end col-full -->
        </div> <!-- end client-testimonials -->

    </section> <!-- end s-clients -->


    <!-- contact
    ================================================== -->
    <section id="contact" class="s-contact">

        <div class="overlay"></div>
        <div class="contact__line"></div>

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Contact Us</h3>
                <h1 class="display-2 display-2--light">For questions and suggestions, don't hesitate to message us</h1>
            </div>
        </div>

        <div class="row contact-content" data-aos="fade-up">
            
            <div class="contact-primary">

                <h3 class="h6">Send Us A Message</h3>

                <form name="contactForm" id="contactForm" method="post" action="" novalidate="novalidate">
                    <fieldset>
    
                    <div class="form-field">
                        <input name="contactName" type="text" id="contactName" placeholder="Your Name" value="" minlength="2" required="" aria-required="true" class="full-width">
                    </div>
                    <div class="form-field">
                        <input name="contactEmail" type="email" id="contactEmail" placeholder="Your Email" value="" required="" aria-required="true" class="full-width">
                    </div>
                    <div class="form-field">
                        <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="" class="full-width">
                    </div>
                    <div class="form-field">
                        <textarea name="contactMessage" id="contactMessage" placeholder="Your Message" rows="10" cols="50" required="" aria-required="true" class="full-width"></textarea>
                    </div>
                    <div class="form-field">
                        <button class="full-width btn--primary">Submit</button>
                        <div class="submit-loader">
                            <div class="text-loader">Sending...</div>
                            <div class="s-loader">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>
                        </div>
                    </div>
    
                    </fieldset>
                </form>

                <!-- contact-warning -->
                <div class="message-warning">
                    Something went wrong. Please try again.
                </div> 
            
                <!-- contact-success -->
                <div class="message-success">
                    Your message was sent, thank you!<br>
                </div>

            </div> <!-- end contact-primary -->

            <div class="contact-secondary">
                <div class="contact-info">

                    <h3 class="h6 hide-on-fullwidth">Contact Info</h3>

                    <div class="cinfo">
                        <h5>Where to Find Us</h5>
                        <p>
                            Olongapo City Sports Complex,<br>
                            Gordon College,<br>
                            Olongapo City, Zambales
                        </p>
                    </div>

                    <div class="cinfo">
                        <h5>Email Us At</h5>
                        <p>
                            gordoncollegebuko@gmail.com<br>
                        </p>
                    </div>

                    <div class="cinfo">
                        <h5>Call Us At</h5>
                        <p>
                            Mobile: (+63) 915 289 4697 <br>
                            Mobile: (+63) 910 653 3667 <br>
                            Mobile: (+63) 977 094 3716
                        </p>
                    </div>

                    <h5 class="cinfo">Or Connect With Us At</h5>
                    <ul class="contact-social">
                        <li>
                            <a href="https://www.facebook.com/GordonCOllegeBuKo/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/GC_BuKo"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://instagram.com/gc_buko"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </li>
                    </ul> <!-- end contact-social -->

                </div> <!-- end contact-info -->
            </div> <!-- end contact-secondary -->

        </div> <!-- end contact-content -->

    </section> <!-- end s-contact -->


    <!-- footer
    ================================================== -->
    <footer>
        <section id="login" class="s-login">

        <div class="row footer-main">

            <div class="col-six tab-full left footer-desc">

                <div class="footer-logo"></div>
                How's your commuting experience? Was it good? Fair? Or Bad? Any story you want to share, we are here to listen and to make actions. You can download our application at <a href='https://play.google.com/store/apps/details?id=com.foundmenot.buko&hl=en'>Google Play Store</a>, or you can sign up and login here.

            </div>

            <div class="col-six tab-full right footer-subscribe">

                <h4>Get Notified</h4>
                <p>Sign Up or Login with your account</p>

                <!-- <div class="subscribe-form">
                    <form id="mc-form" class="group" novalidate="true">
                        <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required="">
                        <input type="submit" name="subscribe" value="Subscribe">
                        <label for="mc-email" class="subscribe-message"></label>
                    </form>
                </div> -->

                <a class="btn btn--primary full-width" href="{{ route('login') }}">Sign Up / Login</a>

            </div>

        </div> <!-- end footer-main -->

        <div class="row footer-bottom">

            <div class="col-twelve">
                <div class="copyright">
                    <span>GC BuKo (BuhayKomyuter) 2018</span> 
                </div>

                <div class="go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
                </div>
            </div>

        </div> <!-- end footer-bottom -->

        </section>
    </footer> <!-- end footer -->


    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                    <button class="pswp__button pswp__button--share" title="Share"></button>
                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div> <!-- end photoSwipe background -->


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale-pulse-out">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>


    <!-- Java Script
    ================================================== -->
   <!--  <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script> -->
    <script src="js/all.js"></script>

</body>

</html>