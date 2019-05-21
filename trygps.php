<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>Trygps </title>
        <meta name="description" content="Gps tracker application.">
        <meta name="keywords" content="Laravel,Php,Vue,JavaScript,Developer,Web">
        <meta name="author" content="Andres Quintero">
        <!-- <link rel="icon" type="image/png" href="assets/images/favicon.png" /> -->

        <!--Core CSS -->
        <link rel="stylesheet" href="assets/css/bulma.css">
        <link rel="stylesheet" href="assets/css/app.css">
        <link rel="stylesheet" href="assets/css/core_deep-blue.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css">


        <style>
            .min-height{
                
            }
            .project-text{
                text-align: justify;
                text-justify: inter-word;
                min-height: 160px;
            }

            .content{
                color: #66676b;
            }

            @media only screen and (max-width: 950px) {
                .project-text{
                    min-height: 0px;
                }
                .columns{
                    display: inline-block !important;
                }

            }
        </style>

    </head>
    <body>
        <div class="pageloader"></div>
        <div class="infraloader is-active"></div>        
        
        <!-- Hero and nav -->
        <div class="hero hero-wavy is-relative is-theme-primary huge-pb">
            
            <nav class="navbar navbar-wrapper navbar-fade navbar-light is-transparent">
                <div class="container">
                    <!-- Brand -->
                    <div class="navbar-brand">
                        <a class="navbar-item" href="/">
                            <b>Trygps</b>
                        </a>
            
                        
                    </div>
            
                    <!-- Navbar menu -->
                    <div class="navbar-menu">
                        <!-- Navbar Start -->
                        <div class="navbar-start">
                            <!-- Navbar item -->
                            <!-- <a class="navbar-item is-slide" href="landing-v2-features.html">
                                Features 2
                            </a> -->
                            <!-- Navbar item -->
                            <!-- <a class="navbar-item is-slide" href="landing-v2-pricing.html">
                                Pricing
                            </a>  -->
                            <!-- Navbar item -->
                            <!-- <a class="navbar-item is-slide" href="app/">
                                Login
                            </a> -->
                        </div>
            
                        <!-- Navbar end -->
                        <div class="navbar-end">
                            <!-- Signup button -->
                            <div class="navbar-item">
                                <!-- <a href="#contact-us" class="button button-signup btn-outlined is-bold btn-align light-btn rounded raised">
                                    Contact
                                </a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Hero image -->
            <div id="main-hero" class="hero-body">
                <div class="container has-text-centered">
                    <div class="columns is-vcentered">
                        <div class="column is-4 hero-caption">
                            <h1 class="title big-landing-title text-bold is-2">
                               Trygps
                            </h1>
                            <h2 class="subtitle is-5 light-text pt-10 pb-10">
                                Application to track gps devices on real time. Create geofence and point of interest, 
                                assign it to the device and receive alerts when device leave the geofence or is near the point of interest.
                                Manage driver information and detailed device reports
                            </h2>
                            <p class="pt-10 pb-10">
                                <a href="#contact-us" class="button button-cta light-btn btn-outlined is-bold rounded z-index-2">
                                   View details
                                </a>
                            </p>
                        </div>
                        <div class="column is-9 is-offset-1">
                            <!-- Hero mockup -->
                            <figure class="image">
                                <img class="levitate" src="assets/images/trygps-marketing.png" alt="">
                            </figure>
                            <!-- /Hero mockup -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Hero image -->
        </div>
        <!-- /Hero and nav -->



    <!-- Real time graphics -->
    <section class="section is-medium">
        <div class="container">
            <div class="columns is-vcentered">
                <div class="column is-6 has-text-centered">
                    <!-- Featured illustration -->
                    <img class="featured-svg levitate" src="assets/images/trygps-map.png" alt="">
                    <!-- /Featured illustration -->
                </div>
                <!-- Content -->
                <div class="column is-4 is-offset-1">
                    <div class="icon-subtitle"><i class="im im-icon-Speach-Bubble2"></i></div>
                    <h2 class="title quick-feature is-handwritten">
                        Real time map
                        <span class="bg-number text-bold"></span>
                    </h2>
                    <div class="title-divider is-small"></div>
                    <span class="section-feature-description">Keep track of your device with real time maps.</span>
                    <div class="pt-10 pb-10">
                        <a href="#" class="button btn-align btn-more is-link color-primary">
                            <!-- Learn more about this <i class="sl sl-icon-arrow-right"></i> -->
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Real time graphics -->
        
    <!-- Filter servers -->
    <section class="section section-feature-grey is-medium is-relative is-skewed-sm">
    
        <!-- Floating chat bubbles -->
        <div class="floating-bubbles">
            <div class="bubble">
                <img class="bubble-1st levitate" src="assets/images/illustrations/drawings/bub-purple.svg" alt="">
            </div>
            <div class="bubble">
                <img class="bubble-2nd levitate" src="assets/images/illustrations/drawings/bub-blue.svg" alt="">
            </div>
            <div class="bubble">
                <img class="bubble-3rd levitate" src="assets/images/illustrations/drawings/bub-blue.svg" alt="">
            </div>
            <div class="bubble">
                <img class="bubble-4th levitate" src="assets/images/illustrations/drawings/bub-blue.svg" alt="">
            </div>
        </div>
        <!-- /Floating chat bubbles -->
    
        <div class="container is-reverse-skewed-sm">
    
            <!-- Feature -->
            <div class="columns is-vcentered">
                <!-- Content -->
                <div class="column is-4 is-offset-2">
                    <div class="icon-subtitle"><i class="im im-icon-Share-Window"></i></div>
                    <h2 class="title quick-feature is-handwritten">
                        Create your geofences
                        <span class="bg-number text-bold"></span>
                    </h2>
                    <div class="title-divider is-small"></div>
                    <span class="section-feature-description">Configure geofences and alerts to be sent when device enter/leave a specific geofence.</span>
                    <div class="pt-10 pb-10">
                        <a href="#" class="button btn-align btn-more is-link color-primary">
                            <!-- Learn more about this <i class="sl sl-icon-arrow-right"></i> -->
                        </a>
                    </div>
                </div>
    
                <div class="column is-6 has-text-centered">
                    <!-- Featured illustration -->
                    <img class="featured-svg levitate" src="assets/images/trygps-geofences.png" alt="">
                    <!-- /Featured illustration -->
                </div>
            </div>
        </div>
    </section>
    <!-- /Filter servers -->

    <!-- Remote Tasks -->
    <section class="section is-medium">
        <div class="container">
            <div class="columns is-vcentered">
                <div class="column is-6 has-text-centered">
                    <!-- Featured illustration -->
                    <img class="featured-svg levitate" src="assets/images/trygps-devices.png" alt="">
                    <!-- /Featured illustration -->
                </div>
                <!-- Content -->
                <div class="column is-4 is-offset-1">
                    <div class="icon-subtitle"><i class="im im-icon-Speach-Bubble2"></i></div>
                    <h2 class="title quick-feature is-handwritten">
                        Store device information
                        <span class="bg-number text-bold"></span>
                    </h2>
                    <div class="title-divider is-small"></div>
                    <span class="section-feature-description">Store all the important information related with the device.</span>
                    <div class="pt-10 pb-10">
                        <a href="#" class="button btn-align btn-more is-link color-primary">
                            <!-- Learn more about this <i class="sl sl-icon-arrow-right"></i> -->
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Feature -->

    <!-- Server alerts -->
    <section class="section section-feature-grey is-medium is-relative is-skewed-sm">
    
        <!-- Floating chat bubbles -->
        <div class="floating-bubbles">
            <div class="bubble">
                <img class="bubble-1st levitate" src="assets/images/illustrations/drawings/bub-purple.svg" alt="">
            </div>
            <div class="bubble">
                <img class="bubble-2nd levitate" src="assets/images/illustrations/drawings/bub-blue.svg" alt="">
            </div>
            <div class="bubble">
                <img class="bubble-3rd levitate" src="assets/images/illustrations/drawings/bub-blue.svg" alt="">
            </div>
            <div class="bubble">
                <img class="bubble-4th levitate" src="assets/images/illustrations/drawings/bub-blue.svg" alt="">
            </div>
        </div>
        <!-- /Floating chat bubbles -->
    
        <div class="container is-reverse-skewed-sm">
    
            <!-- Feature -->
            <div class="columns is-vcentered">
                <!-- Content -->
                <div class="column is-4 is-offset-2">
                    <div class="icon-subtitle"><i class="im im-icon-Share-Window"></i></div>
                    <h2 class="title quick-feature is-handwritten">
                        Configure alerts and point of interest
                        <span class="bg-number text-bold"></span>
                    </h2>
                    <div class="title-divider is-small"></div>
                    <span class="section-feature-description">Configure point of interest and alerts to be sent when device is near it.</span>
                    <div class="pt-10 pb-10">
                        <a href="#" class="button btn-align btn-more is-link color-primary">
                            <!-- Learn more about this <i class="sl sl-icon-arrow-right"></i> -->
                        </a>
                    </div>
                </div>
    
                <div class="column is-6 has-text-centered">
                    <!-- Featured illustration -->
                    <img class="featured-svg levitate" src="assets/images/trygps-points.png" alt="">
                    <!-- /Featured illustration -->
                </div>
            </div>
        </div>
    </section>
    <!-- /Server alerts -->




        
        <!-- Footer light -->
        <footer class="footer footer-light">
            <div class="container">
                <div class="columns footer-columns is-flex-mobile">
              
                    <!-- Column -->
                    <div class="column is-half-mobile">
                        <div class="footer-column">
                            <div class="footer-logo">
                              
                            </div>
                            <div class="footer-header">
                                <nav class="level is-mobile">
                                    <div class="level-left level-social">
                                        <a href="https://twitter.com/anndresquintero" class="level-item">
                                            <span class="icon"><i class="fa fa-twitter"></i></span>
                                        </a>
                                        <a href="https://www.linkedin.com/in/afquinterog/" class="level-item">
                                            <span class="icon"><i class="fa fa-linkedin"></i></span>
                                        </a>
                                        <a href="https://github.com/afquinterog" class="level-item">
                                            <span class="icon"><i class="fa fa-github"></i></span>
                                        </a>
                                    </div>
                                </nav>
                            </div>
                            <div class="copyright">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /Footer light -->        
        <!-- Side navigation -->
        <div class="side-navigation-menu">
            <!-- Categories menu -->
            <div class="category-menu-wrapper">
                <!-- Menu -->
                <ul class="categories">
                    <li class="square-logo"><img src="assets/images/logos/square-white.svg" alt=""></li>
                    <li class="category-link is-active" data-navigation-menu="demo-pages"><i class="sl sl-icon-layers"></i></li>
                    <li class="category-link" data-navigation-menu="components"><i class="sl sl-icon-grid"></i></li>
                    <li class="category-link" data-navigation-menu="extras"><i class="sl sl-icon-present"></i></li>
                </ul>
                <!-- Menu -->
        
                <ul class="author">
                    <li>
                        <!-- Theme author -->
                        <a href="" target="_blank">
                            <img class="main-menu-author" src="" alt="">
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /Categories menu -->
        
            <!-- Navigation menu -->
            <div id="demo-pages" class="navigation-menu-wrapper animated preFadeInRight fadeInRight">
                <!-- Navigation Header -->
                <div class="navigation-menu-header">
                    <span>Demo pages</span>
                    <a class="ml-auto hamburger-btn navigation-close" href="javascript:void(0);">
                        <span class="menu-toggle">  
                            <span class="icon-box-toggle">  
                                <span class="rotate">
                                    <i class="icon-line-top"></i>
                                    <i class="icon-line-center"></i>
                                    <i class="icon-line-bottom"></i> 
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
                <!-- Navigation Body -->
                <ul class="navigation-menu">
                    <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">weekend</span>Agency kit</a>
                        <ul>
                            <li><a class="is-submenu" href="/agency/index.html">Homepage</a></li>
                            <li><a class="is-submenu" href="/agency/agency-about.html">About</a></li>
                            <li><a class="is-submenu" href="/agency/agency-portfolio.html">Portfolio</a></li>
                            <li><a class="is-submenu" href="/agency/agency-contact.html">Contact</a></li>
                            <li><a class="is-submenu" href="/agency/agency-blog.html">Blog</a></li>
                            <li><a class="is-submenu" href="/agency/agency-post-sidebar.html">Post sidebar</a></li>
                            <li><a class="is-submenu" href="/agency/agency-post-nosidebar.html">Post no sidebar</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">wb_incandescent</span>Startup kit</a>
                        <ul>
                            <li><a class="is-submenu" href="/startup/index.html">Homepage</a></li>
                            <li><a class="is-submenu" href="/startup/startup-about.html">About</a></li>
                            <li><a class="is-submenu" href="/startup/startup-product.html">Product</a></li>
                            <li><a class="is-submenu" href="/startup/startup-contact.html">Contact</a></li>
                            <li><a class="is-submenu" href="/startup/startup-login.html">Login</a></li>
                            <li><a class="is-submenu" href="/startup/startup-signup.html">Sign up</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">looks</span>Landing kit v1</a>
                        <ul>
                            <li><a class="is-submenu" href="/landing-kits/kit-1/index.html">Landing page</a></li>
                            <li><a class="is-submenu" href="/landing-kits/kit-1/landing-features.html">Feature page</a></li>
                            <li><a class="is-submenu" href="/landing-kits/kit-1/landing-pricing.html">Pricing page</a></li>
                            <li><a class="is-submenu" href="/landing-kits/kit-1/landing-login.html">Login page</a></li>
                            <li><a class="is-submenu" href="/landing-kits/kit-1/landing-signup.html">Signup page</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">invert_colors</span>Landing kit v2</a>
                        <ul>
                            <li><a class="is-submenu" href="/landing-kits/kit-2/index.html">Landing page</a></li>
                            <li><a class="is-submenu" href="/landing-kits/kit-2/landing-v1-features.html">Feature page</a></li>
                            <li><a class="is-submenu" href="/landing-kits/kit-2/landing-v1-pricing.html">Pricing page</a></li>
                            <li><a class="is-submenu" href="/landing-kits/kit-2/landing-v1-login.html">Login page</a></li>
                            <li><a class="is-submenu" href="/landing-kits/kit-2/landing-v1-signup.html">Signup page</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">chat_bubble</span>Landing kit v3</a>
                        <ul>
                            <li><a class="is-submenu" href="/landing-kits/kit-3/index.html">Landing page</a></li>
                            <li><a class="is-submenu" href="/landing-kits/kit-3/landing-v2-features.html">Feature page</a></li>
                            <li><a class="is-submenu" href="/landing-kits/kit-3/landing-v2-pricing.html">Pricing page</a></li>
                            <li><a class="is-submenu" href="/landing-kits/kit-3/landing-v2-login.html">Login page</a></li>
                            <li><a class="is-submenu" href="/landing-kits/kit-3/landing-v2-signup.html">Signup page</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">business</span>Landing kit v4</a>
                        <ul>
                            <li><a class="is-submenu" href="/landing-kits/kit-4/index.html">Landing page</a></li>
                            <li><a class="is-submenu" href="/landing-kits/kit-4/landing-v3-pricing.html">Pricing page</a></li>
                            <li><a class="is-submenu" href="/landing-kits/kit-4/landing-v3-help.html">Help center</a></li>
                            <li><a class="is-submenu" href="/landing-kits/kit-4/landing-v3-help-category.html">Help category</a></li>
                            <li><a class="is-submenu" href="/landing-kits/kit-4/landing-v3-help-article.html">Help article</a></li>
                            <li><a class="is-submenu" href="/landing-kits/kit-4/landing-v3-signup.html">Login</a></li>
                            <li><a class="is-submenu" href="/landing-kits/kit-4/landing-v3-login.html">Sign up</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a class="parent-link has-new" href="#"><span class="material-icons">face</span>Landing kit v5</a>
                        <ul>
                            <li><a class="is-submenu has-new-feature" href="/landing-kits/kit-5/index.html">Landing page</a></li>
                            <li><a class="is-submenu has-new-feature" href="/landing-kits/kit-5/landing-v4-features.html">Feature page</a></li>
                            <li><a class="is-submenu has-new-feature" href="/landing-kits/kit-5/landing-v4-pricing.html">Pricing Page</a></li>
                            <li><a class="is-submenu has-new-feature" href="/landing-kits/kit-5/landing-v4-login.html">Login / Signup</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /Navigation menu -->
            <!-- Navigation menu -->
            <div id="components" class="navigation-menu-wrapper animated preFadeInRight fadeInRight is-hidden">
                <!-- Navigation Header -->
                <div class="navigation-menu-header">
                    <span>Components</span>
                    <a class="ml-auto hamburger-btn navigation-close" href="javascript:void(0);">
                        <span class="menu-toggle">  
                            <span class="icon-box-toggle">  
                                <span class="rotate">
                                    <i class="icon-line-top"></i>
                                    <i class="icon-line-center"></i>
                                    <i class="icon-line-bottom"></i> 
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
                <!-- Navigation body -->
                <ul class="navigation-menu">
                    <li class="has-children"><a class="parent-link has-new" href="#"><span class="material-icons">view_quilt</span>Layout</a>
                        <ul>
                            <li><a class="is-submenu has-new-feature" href="/_components-layout-grid.html">Grid system</a></li>
                            <li><a class="is-submenu" href="/_components-layout-video.html">Video background</a></li>
                            <li><a class="is-submenu" href="/_components-layout-parallax.html">Parallax</a></li>
                            <li><a class="is-submenu" href="/_components-layout-headers.html">Headers</a></li>
                            <li><a class="is-submenu" href="/_components-layout-footers.html">Footers</a></li>
                            <li><a class="is-submenu has-new-feature" href="/_components-layout-typography.html">Typography</a></li>
                            <li><a class="is-submenu" href="/_components-layout-colors.html">Colors</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a class="parent-link has-new" href="#"><span class="material-icons">subject</span>Navbars</a>
                        <ul>
                            <li><a class="is-submenu has-new-feature" href="/_components-layout-navbar-fade-light.html">Fade light</a></li>
                            <li><a class="is-submenu has-new-feature" href="/_components-layout-navbar-fade-dark.html">Fade dark</a></li>
                            <li><a class="is-submenu has-new-feature" href="/_components-layout-navbar-static-light.html">Static light</a></li>
                            <li><a class="is-submenu has-new-feature" href="/_components-layout-navbar-static-dark.html">Static dark</a></li>
                            <li><a class="is-submenu has-new-feature" href="/_components-layout-navbar-static-solid.html">Static solid</a></li>
                            <li><a class="is-submenu has-new-feature" href="/_components-layout-navbar-double-dark.html">Double dark</a></li>
                            <li><a class="is-submenu has-new-feature" href="/_components-layout-navbar-double-light.html">Double light</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">view_stream</span>Sections</a>
                        <ul>
                            <li><a class="is-submenu" href="/_components-sections-features.html">Features</a></li>
                            <li><a class="is-submenu" href="/_components-sections-pricing.html">Pricing</a></li>
                            <li><a class="is-submenu" href="/_components-sections-team.html">Team</a></li>
                            <li><a class="is-submenu" href="/_components-sections-testimonials.html">Testimonials</a></li>
                            <li><a class="is-submenu" href="/_components-sections-clients.html">Clients</a></li>
                            <li><a class="is-submenu" href="/_components-sections-counters.html">Counters</a></li>
                            <li><a class="is-submenu" href="/_components-sections-carousel.html">Carousel</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">playlist_add_check</span>Basic UI</a>
                        <ul>
                            <li><a class="is-submenu" href="/_components-basicui-cards.html">Cards</a></li>
                            <li><a class="is-submenu" href="/_components-basicui-buttons.html">Buttons</a></li>
                            <li><a class="is-submenu" href="/_components-basicui-dropdowns.html">Dropdowns</a></li>
                            <li><a class="is-submenu" href="/_components-basicui-lists.html">Lists</a></li>
                            <li><a class="is-submenu" href="/_components-basicui-modals.html">Modals</a></li>
                            <li><a class="is-submenu" href="/_components-basicui-tabs.html">Tabs & pills</a></li>
                            <li><a class="is-submenu" href="/_components-basicui-accordion.html">Accordions</a></li>
                            <li><a class="is-submenu" href="/_components-basicui-badges.html">Badges & labels</a></li>
                            <li><a class="is-submenu" href="/_components-basicui-popups.html">Popups</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a class="parent-link has-new" href="#"><span class="material-icons">playlist_add</span>Advanced UI</a>
                        <ul>
                            <li><a class="is-submenu" href="/_components-advancedui-tables.html">Tables</a></li>
                            <li><a class="is-submenu" href="/_components-advancedui-timeline.html">Timeline</a></li>
                            <li><a class="is-submenu" href="/_components-advancedui-boxes.html">Boxes</a></li>
                            <li><a class="is-submenu" href="/_components-advancedui-messages.html">Messages</a></li>
                            <li><a class="is-submenu has-new-feature" href="/_components-advancedui-megamenu.html">Megamenu</a></li>
                            <li><a class="is-submenu has-new-feature" href="/_components-advancedui-calendar.html">Calendar</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a class="parent-link has-new" href="#"><span class="material-icons">check_box</span>Forms</a>
                        <ul>
                            <li><a class="is-submenu has-new-feature" href="/_components-forms-inputs.html">Inputs</a></li>
                            <li><a class="is-submenu" href="/_components-forms-controls.html">Controls</a></li>
                            <li><a class="is-submenu" href="/_components-forms-layouts.html">Form layouts</a></li>
                            <li><a class="is-submenu has-new-feature" href="/_components-forms-steps.html">Step forms</a></li>
                            <li><a class="is-submenu" href="/_components-forms-uploader.html">Uploader</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a class="parent-link has-new" href="#"><span class="material-icons">adjust</span>Icons</a>
                        <ul>
                            <li><a class="is-submenu" href="/_components-icons-im.html">Icons Mind</a></li>
                            <li><a class="is-submenu" href="/_components-icons-sl.html">Simple Line Icons</a></li>
                            <li><a class="is-submenu" href="/_components-icons-fa.html">Font Awesome</a></li>
                            <li><a class="is-submenu" href="https://material.io/icons/" target="_blank">Material Icons</a></li>
                            <li><a class="is-submenu has-new-feature" href="/_components-extensions-iconpicker.html">Icon Picker</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /Navigation menu -->
            <!-- Navigation menu -->
            <div id="extras" class="navigation-menu-wrapper animated preFadeInRight fadeInRight is-hidden">
                <!-- Navigation Header -->
                <div class="navigation-menu-header">
                    <span>Extras</span>
                    <a class="ml-auto hamburger-btn navigation-close" href="javascript:void(0);">
                        <span class="menu-toggle">  
                            <span class="icon-box-toggle">  
                                <span class="rotate">
                                    <i class="icon-line-top"></i>
                                    <i class="icon-line-center"></i>
                                    <i class="icon-line-bottom"></i> 
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
                <!-- Navigation body -->
                <ul class="navigation-menu">
                    <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">dashboard</span>Dashboard kit</a>
                        <ul>
                            <li><a class="is-submenu" href="/dashboard/index.html">Main Layout</a></li>
                            <li><a class="is-submenu" href="/dashboard/dashboard-dark-nav.html">Dark Sidebar</a></li>
                            <li><a class="is-submenu" href="/dashboard/dashboard-blank.html">Blank page</a></li>
                            <li><a class="is-submenu" href="/dashboard/dashboard-widgets-data.html">Data widgets</a></li>
                            <li><a class="is-submenu" href="/dashboard/dashboard-widgets-social.html">Social widgets</a></li>
                            <li><a class="is-submenu" href="/dashboard/dashboard-feed.html">Dashboard feed</a></li>
                            <li><a class="is-submenu" href="/dashboard/dashboard-feed-post.html">Feed post</a></li>
                            <li><a class="is-submenu" href="/dashboard/dashboard-login.html">Login</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">insert_chart</span>Charts</a>
                        <ul>
                            <li><a class="is-submenu" href="/dashboard/dashboard-chartjs.html">Chartjs charts</a></li>
                            <li><a class="is-submenu" href="/dashboard/dashboard-billboardjs.html">Billboardjs charts</a></li>
                            <li><a class="is-submenu" href="/dashboard/dashboard-peityjs.html">Peity charts</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a class="parent-link has-new" href="#"><span class="material-icons">assignment</span>Projects</a>
                        <ul>
                            <li><a class="is-submenu has-new-feature" href="/dashboard/dashboard-project-list.html">Projects</a></li>
                            <li><a class="is-submenu has-new-feature" href="/dashboard/dashboard-project-details.html">Project details</a></li>
                            <li><a class="is-submenu has-new-feature" href="/dashboard/dashboard-project-task.html">Project Task</a></li>
                            <li><a class="is-submenu has-new-feature" href="/dashboard/dashboard-project-mytasks.html">My Tasks</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a class="parent-link has-new" href="#"><span class="material-icons">grid_on</span>Datatable</a>
                        <ul>
                            <li><a class="is-submenu has-new-feature" href="/dashboard/dashboard-datatable-basic.html">Basic</a></li>
                            <li><a class="is-submenu has-new-feature" href="/dashboard/dashboard-datatable-variations.html">Variations</a></li>
                            <li><a class="is-submenu has-new-feature" href="/dashboard/dashboard-datatable-advanced.html">Advanced</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /Navigation menu --></div>
        <!-- /Side navigation -->        
        <!-- Back To Top Button -->
        <div id="backtotop"><a href="#"></a></div>        
        <!-- Bulchat Button -->
        <!-- <div id="bulchat" class="open"><div class="chat-button open g-item"></div></div> -->
        <!-- Chat widget -->
        <div id="chat-widget">
            <div class="chat-widget-body is-closed">
                <div class="chat-header">
                    <div class="close-chat is-hidden-desktop is-hidden-tablet"><img src="assets/images/illustrations/icons/landing-v2/close-small.svg" alt=""></div>
                    <div class="chat-team">
                        <div class="team-member has-text-centered">
                            <img src="https://via.placeholder.com/250x250" alt="">
                            <div class="is-handwritten">Alan maynard</div>
                        </div>
                    </div>
                    <div class="response-delay has-text-centered">
                        Answers in less than 18 hours
                    </div>
                </div>
                <div class="message-container">
                    <div class="divider">
                        <span class="before-divider"></span>
                        <div class="children">Today</div>
                        <span class="after-divider"></span>
                    </div>
                    <div class="chat-message from">
                        <img src="https://via.placeholder.com/250x250" alt="">
                        <div class="bubble-wrapper">
                            <div class="timestamp">02:49 pm</div>
                            <div class="chat-bubble">
                                Hey iam Alan ! Iam here to help. What can i do for you ?
                            </div>
                        </div>
                    </div>
                    <div class="chat-message to">
                        <div class="bubble-wrapper">
                            <div class="timestamp">02:48 pm</div>
                            <div class="chat-bubble">
                                Hello, someone out there ? I could use some help
                            </div>
                        </div>
                        <img src="https://via.placeholder.com/250x250" alt="">
                    </div>
                </div>
                <div class="message-input">
                    <textarea class="" rows="1" placeholder="Send a message ..."></textarea>
                    <div class="message-options">
                        <div class="emoji-button"></div>
                        <div class="attach-button"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Chat widget -->        
        <!-- Concatenated jQuery and plugins -->
        <script src="assets/js/app.js"></script>
        
        <!-- Bulkit js -->
        <script src="assets/js/landingv2.js"></script>
        <script src="assets/js/auth.js"></script>
        <script src="assets/js/main.js"></script> 
        <script src="assets/js/components-toasts.js"></script>    
        

        <?php if (isset($_GET["msg"])) { ?>
            <script type='text/javascript'>
                //$('#top-left-toast').click(function(){
                $(document).ready(function($){
                    console.log('sample');
                    iziToast.show({
                        title: 'Message sent,',
                        message: 'We will contact you soon !',
                        position: 'bottomRight',
                        zindex: 99999
                    });
                });
            </script>
        <?php 
      } ?>
        
    </body>  
</html>
