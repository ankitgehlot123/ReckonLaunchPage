<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes"/>
 
    <link rel="shortcut icon" href="assets/images/icons/favicon.ico">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/g/semantic-ui@2.2.1(components/reset.min.css+components/grid.min.css+semantic.min.css)">
    <link href="https://fonts.googleapis.com/css?family=Karla|Poppins:400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="stylesheets/app.css">

    <title>RECKON-jiet 2018</title>

    <!-- for Facebook -->
    <meta property="og:title" content="RECKON-jiet 2018"/
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="assets/images/hack-fb-logo.png"/>
    <meta property="og:image:width" content="470"/>
    <meta property="og:image:height" content="250"/>
    <meta property="og:image:type" content="image/png"/>
    <meta property="og:url" content="#"/>
    <meta property="og:description" content="Hack, build,innovate at Jodhpur&#39;s largest hackathon. Jan 29-30 2018."/>

    <!-- for Twitter -->
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="#"/>
    <meta name="twitter:title" content="RECKON-jiet 2018"/>
    <meta name="twitter:description" content="Hack, build, and innovate at Jodhpur&#39;s largest hackathon.Jan 29-30 2018."/>
    <meta name="twitter:image" content="assets/images/hack-twitter-logo.png"/>
    <meta property="og:image:type" content="image/png"/>
    <meta name="twitter:image:width" content="512"/>
    <meta name="twitter:image:height" content="512"/>

    <!-- Facebook Pixel Code -->
    <!--script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
    n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
    document,'script','https://connect.facebook.net/en_US/fbevents.js');
    
    fbq('init',       '1248563001937607'); // Insert your pixel ID here.
    fbq('addPixelId', '128200464453427'); // Insert your pixel ID here.
    fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1248563001937607&ev=PageView&noscript=1"/>
        <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=128200464453427&ev=PageView&noscript=1"/>
    </noscript-->

    <!-- DO NOT MODIFY -->
    <!-- End Facebook Pixel Code -->

</head>
<body>
<!-- PROBLEM POPUP -->
<div id="problem_popup" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">
    
  </div>
</div>
    <span id="splash">
    

    <header>
        <div class="left"><h1 class="mobile-only brand"> - jiet</h1></div>
        <div class="mid"></div>
        <div class="right"></div>
        <div class="copyright desktop-only">
            <a href="http://jietjodhpur.ac.in/"> Copyright (c) 2018 RECKON.
            </a>
        </div>
    </header>
    <div class="mobile-only mobile-dates">
        <h3 class="light days">36 DAYS REMAINING</h3>
        <h3>JANUARY 29-30th 2018</h3>
    </div>
    <div class="fixed-view" >

        <div class="top">
            <div class="desktop-only lead middle aligned content">
                <h3 class="light days">36 DAYS REMAINING</h3>
                <h3>JANUARY 29-30th 2018</h3>
                <h1 class="brand">-jiet</h1>

                <!--p>It is the year MMXVII. 1000 hackers gather at the Massachusetts Institute of Technology for its annual undergraduate student hackathon.</p>

                <p>They represent the <span class="red">Red Faction</span> and the <span class="blue">Blue Faction</span>. But over 24 hours, they will work together to envision and develop the technology of tomorrow.</p-->
            </div>

             <a class="spinner middle aligned content" href="#!" draggable="false">
                <div class="spinner-container">
                    <img id="outer-spinner" src="assets/images/outer-spinner.svg" draggable="false"/>
                    <object data="assets/images/spinner.svg" type="image/svg+xml" id="spinner"
                        width="100%" height="100%"></object>
                </div>
            </a>



            <div class="controls middle aligned content">
                <ul>
                    <li id="theme-section">
                        <a class="back-button small blue round button" href="#!"><i class="back"></i></a>
                        <a class="compact-button small round button" href="#theme"><i class="faq"></i></a>
                        <a class="primary-button round button" href="#theme"><i class="faq"></i>PROBLEM</a>

                        <section class="content">
                            <div>
                                <h4 class="question">
                                    Problem1
                                </h4>
                                <ul hidden>
                                    <li>pb11</li>
                                    <li>pb12</li>
                                    <li>pb13</li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="question">
                                    Problem2
                                </h4>
                                <ul hidden>
                                    <li>pb21</li>
                                    <li>pb22</li>
                                </ul>
                            </div>
                        </section>

                    </li>
                    
                    <li id="register-section">
                        <a class="back-button small blue round button" href="#!"><i class="back"></i></a>
                        <a class="compact-button small round button" href="#register"><i class="plus"></i></a>
                        <a class="primary-button round button" href="#register"><i class="plus"></i>REGISTER</a>

                        <section class="content">
                            <h5>Coming Soon!</h5>
                            <a href="https://reckon.herokuapp.com/" class="hexagon button" id="register-button">REGISTER</a>
                        </section>
                    </li>
                    <li id="faq-section">
                        <a class="back-button small blue round button" href="#!"><i class="back"></i></a>
                        <a class="compact-button small round button" href="#faq"><i class="faq"></i></a>
                        <a class="primary-button round button" href="#faq"><i class="faq"></i>FAQ</a>

                        <section class="content">
                            <div>
                                <h4 class="question">
                                    Can I attend?
                                </h4>
                                <p class="answer">
                                    Registration are open to all.Students(school/college),professionals,startups etc can surely participate.
                                </p>
                            </div>
                            <div>
                                <h4 class="question">
                                    How does registration work?
                                </h4>
                                <p class="answer">
                                    Registration is open until JAN 27th, 11:59 pm GMT+0530! Admissions will be based on a feasibility along with business espect of your idea. If you’re accepted, you’ll have to confirm your attendance by JAN 27th 2018 .
                                </p>
                            </div>
                            <div>
                                <h4 class="question">
                                    Does this cost money?
                                </h4>
                                <p class="answer">
                                    Nope! Admission is free and includes meals,drinks, snacks, overnight hosting,swag, and a memorable experience (if we do say so ourselves)!
                                </p>
                            </div>
                            <div>
                                <h4 class="question">
                                    What will I eat?
                                </h4>
                                <p class="answer">
                                    We’ll provide food for all meals from Monday’s breakfast to Tuesday’s breakfast..
                                </p>
                            </div>
                            <div>
                                <h4 class="question">
                                    Where will I sleep?
                                </h4>
                                <p class="answer">
                                    Hacking all night is fun, but you can also get some rest when you need it in our rest room!
                                </p>
                            </div>
                            <div>
                                <div>
                                <h4 class="question">
                                    What if i reach venue before event and i need accomodation?
                                </h4>
                                <p class="answer">
                                    We will start check-ins for paid accomodation by JAN 28th 6:00 pm GMT+0530 but you have to check-out by JAN 30th 12:00 pm GMT+0530.
                                </p>
                            </div>
                                <h4 class="question">
                                    How do I get there?
                                </h4>
                                <p class="answer">
                                    You can reach venue on your own convinience or reach to JODHPUR's selected checkpoints, JIET buses will pick you.Futher details will be given to you by mail if you are selected.
                                </p>
                            </div>
                            <div>
                                <h4 class="question">
                                    What should I bring?
                                </h4>
                                <p class="answer">
                                    Bring a valid student ID or government-issued ID for admission and a laptop for hacking. We’ll provide pretty much everything else—meals,snacks,toiletries, stickers, sponsor swag, and more! If you like to be comfy, you can bring a blanket, pillow, and towel.
                                </p>
                            </div>
                            <div>
                                <h4 class="question">
                                    What about Internet?
                                </h4>
                                <p class="answer">
                                    We will provide you free WIFI/LAN ,for better experience try to bring your own.
                                </p>
                            </div>
                            <div>
                                <h4 class="question">
                                    How do teams work?
                                </h4>
                                <p class="answer">
                                    Teams are at most 4 people. You can select teammates when you register, or you can register individually without specified teammates.
                                </p>
                            </div>
                            <div>
                                <h4 class="question">
                                    What if I don’t have a team?
                                </h4>
                                <p class="answer">
                                    If you don’t have a team now, that’s okay! We’ll have team formation and ideation events geared towards helping you find people to work with.
                                </p>
                            </div>
                            <div>
                                <h4 class="question">
                                    What if I’m an JIET student?
                                </h4>
                                <p class="answer">
                                    Registration are open to all students(school/college),professionals,startups etc can surely participate.
                                </p>
                            </div>
                            <div>
                                <h4 class="question">
                                    What about hardware hacks?
                                </h4>
                                <p class="answer">
                                    You have to bring your hack's hardware components.
                                </p>
                            </div>
                            <div>
                                <h4 class="question">
                                    Where’s the schedule?
                                </h4>
                                <p class="answer">
                                    We’ll release a more detailed schedule after closing date of registration and comfirmation.
                                </p>
                            </div>
                            <div>
                                <h4 class="question">
                                    What are factions?
                                </h4>
                                <p class="answer">
                                    We created factions to encourage hackers to have fun and interact with each other outside of normal teams when you’re not working on your projects.  The Red Faction and Blue Faction are hackathon-wide groups  that collectively complete challenges at RECKON-jiet 2018 for points.  The faction with the most points will win and get a surprise upon the conclusion of the hackathon.
                                </p>
                            </div>
                            <div>
                                <h4 class="question">
                                    How do I choose a faction?
                                </h4>
                                <p class="answer">
                                    We will allot you faction during hall registration.
                                </p>
                            </div>
                            <div>
                                <h4 class="question">
                                    Can team members belong to different factions?
                                </h4>
                                <p class="answer">
                                    Yes, factions do not limit your forming of individual teams.
                                </p>
                            </div>
                            <div>
                                <h4 class="question">
                                    What if this FAQ didn’t answer my questions?
                                </h4>
                                <p class="answer">
                                    Please email us at <a href="mailto:#">#</a> if you’re in any way confused or concerned!  We’d love to help you out :)
                                </p>
                            </div>
                        </section>
                    </li>
                    <li id="speakers-section">
                        <a class="back-button small blue round button" href="#!"><i class="back"></i></a>
                        <a class="compact-button small round button" href="#speakers"><i class="speakers"></i></a>
                        <a class="primary-button round button" href="#speakers"><i class="speakers"></i>SPEAKERS</a>

                        <div class="above-right-wrapper">
                            <div class="above">
                                <section class="content">
                                    Speakers from our sponsors will present on topics ranging from technology to the development of professional skills. A detailed schedule of talks will be sent to hackers.
                                </section>
                            </div>

                            <div class="right">
                                <section class="content">
                                    <h2>KEYNOTE SPEAKERS</h2>

                                    <div class="speaker">
                                        1<!--img src="#"-->
                                        <div class="info">
                                            <h1></h1>
                                            <h5></h5>
                                        </div>
                                    </div>
                                    <p></p>

                                    <div class="speaker blue">
                                        2
                                        <div class="info">
                                            <h1></h1>
                                            <h5></h5>
                                        </div>
                                    </div>
                                    <p></p>

                                    <h2></h2>

                                    <div class="speaker">
                                        3
                                        <div class="info">
                                            <h1></h1>
                                            <h5></h5>
                                        </div>
                                    </div>
                                    <p></p>

                                    <div class="speaker blue">
                                        4
                                        <div class="info">
                                            <h1></h1>
                                            <h5></h5>
                                        </div>
                                    </div>
                                    <p></p>

                                    <div class="speaker">
                                        5
                                        <div class="info">
                                            <h1></h1>
                                            <h5></h5>
                                        </div>
                                    </div>
                                    <p></p>

                                    <div class="speaker blue">
                                        6
                                        <div class="info">
                                            <h1></h1>
                                            <h5></h5>
                                        </div>
                                    </div>
                                    <p></p>
                                </section>
                            </div>
                        </div>
                    </li>
                    <li id="sponsors-section">
                        <a class="back-button small blue round button" href="#!"><i class="back"></i></a>
                        <a class="compact-button small round button" href="#sponsors"><i class="sponsors"></i></a>
                        <a class="primary-button round button" href="#sponsors"><i class="sponsors"></i>SPONSORS</a>

                        <div class="above">
                            <section class="content">
                                If you are interested in sponsoring RECKON-jiet 2018, <a href="mailto:#">email us</a> for more details!
                            </section>
                        </div>
                        <div class="right">
                            <section class="content">
                                coming soon!
                                <!--sponsers 
                                a href="#" style="background-image: url('/assets/logos/NVBots-logo.png')" class="logo bronze"></a-->
                            </section>
                        </div>
                    </li>
                    <!--<li id="gallery-section">
                        <a class="back-button small blue round button" href="#!"><i class="back"></i></a>
                        <a class="compact-button small round button" href="#gallery"><i class="sponsors"></i></a>
                        <a class="primary-button round button" href="#gallery"><i class="sponsors"></i>GALLERY</a>

                        <div class="above">
                            <section class="content">
                                GALLERY RECKON-jiet 2018
                            </section>
                        </div>
                        <div class="right">
                            <section class="content">
                                <iframe id="slider" src="gallery.php"></iframe>
                            </section>
                        </div>
                    </li>-->
                    <li id="team-section">
                        <a class="back-button small blue round button" href="#!"><i class="back"></i></a>
                        <a class="compact-button small round button" href="#team"><i class="team"></i></a>
                        <a class="primary-button round button" href="#team"><i class="team"></i>OUR TEAM</a>

                        <div class="above-right-wrapper">
                            <div class="above">
                                <section class="content">
                                    ....
                                </section>
                            </div>

                            <div class="right">
                                <section class="content">
                                    <h2>OUR TEAM</h2>

                                    <div class="team">
                                        will be updated soon!<!--img src="#">
                                        <div class="info">
                                            <h1></h1>
                                            <h5></h5>
                                        </div>
                                    </div>
                                    <p></p>

                                    <div class="team blue">
                                        2
                                        <div class="info">
                                            <h1></h1>
                                            <h5></h5>
                                        </div>
                                    </div>
                                    <p></p>

                                    <h2></h2>

                                    <div class="team">
                                        3
                                        <div class="info">
                                            <h1></h1>
                                            <h5></h5>
                                        </div>
                                    </div>
                                    <p></p>

                                    <div class="team blue">
                                        4
                                        <div class="info">
                                            <h1></h1>
                                            <h5></h5>
                                        </div>
                                    </div>
                                    <p></p>

                                    <div class="team">
                                        5
                                        <div class="info">
                                            <h1></h1>
                                            <h5></h5>
                                        </div>
                                    </div>
                                    <p></p>

                                    <div class="team blue">
                                        6
                                        <div class="info">
                                            <h1></h1>
                                            <h5></h5>
                                        </div>
                                    </div>
                                    <p></p-->
                                </section>
                            </div>
                          </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="mobile-only scrolling-view">
        <div class="lead-bottom">
        </div>
    </div>

    <footer>
        <div class="left"></div>
        <div class="mid"></div>
        <div class="right">
            <ul class="social">
                <li><a href="mailto:#"><i class="mail"></i></a></li>
                <li><a href="https://twitter.com/#"><i class="twitter"></i></a></li>
                <li><a href="https://www.facebook.com/#"><i class="facebook"></i></a></li>
                <li><a href="https://www.instagram.com/#/"><i class="instagram"></i></a></li>
                <li><a href="https://medium.com/#"><i class="medium"></i></a></li>
            </ul>
        </div>
    </footer>

    </span>
  <div id="fs-container">
        <video muted id="fs-video" style="display:none">
            <source src="assets/videos/splash-intro-compressed.mp4" type="video/mp4">
        </video>
    </div>
    <script type="text/javascript" src="js/zepto.min.js"></script>
    <script type="text/javascript" src="js/zepto-fx.js"></script>
    <script type="text/javascript" src="js/video.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
    <!---script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-63828172-1', 'auto');
        ga('send', 'pageview');
    </script-->
    <!--script>
    // Facebook pixel
    $( '#register-button' ).click(function() {
        fbq('track', 'Lead');
        fbq('track', 'CompleteRegistration');
    });
    </script-->
<script type="text/javascript">
  function openModal() {
    document.getElementById("problem_popup").style.display = "block";
    document.getElementById("splash").setAttribute('hidden','true');
  }

  function closeModal() {
    document.getElementById("problem_popup").style.display = "none";
    document.getElementById("splash").removeAttribute('hidden');
  }
  
  function currentSlide(n){
    var problem_id = document.getElementsByTagName("h")[n - 1];
    document.getElementById("slider").setAttribute('src',src);
    openModal();
  }
</script>
</body>
</html>