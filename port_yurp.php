
<?php require_once('./dwk_includes/header.inc.php'); ?>

<body id="topx">
    <div id="wrapper" >
        <section id="port_main">
            <div id="port_container">

                <div id="port_head">

                    <div class="col-sm-1 col-xs-1"></div>
                    <div class="col-sm-6 col-xs-6">
                        <h3>Yurp Web Development</h3>
                    </div>
                    <div class="col-sm-5 col-xs-5"></div>

                </div>
                
                <div class="header_buttons">

                    <div class="col-sm-1 col-xs-1"></div>
                    <div class="col-sm-1 col-xs-1">
                        <a href="http://danielklineweb.com">Home</a>
                    </div>
                    <div class="col-sm-1 col-xs-1"></div>
                    <div class="col-sm-1 col-xs-1">
                        <a href="http://danielklineweb.com/yurp_production/index.php">Visit Site</a>
                    </div>
                    <div class="col-sm-8 col-xs-8"></div>

                </div>
                
                <div id="purpose">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-4">
                        <h2>Purpose</h2>
                        <p>This website is a membership site that allows users to view entertainment and activity venues in Oklahoma City.  Users can purchase a membership using the Stripe eCommerce interface</p>
                        <h2>Features</h2>
                        <ul>
                            <li>eCommerce payment system allowing users to make an on-line purchase with their credit card</li>
                            <li>Responsive design apparent when rendering on mobile device</li>
                            <li>While on a mobile device, a hamburger menu appears in the upper left-hand corner, pressing it displays menu options</li>
                        </ul>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-6">
                        <img src="./dwk_images/yurp.jpg" class="img-responsive" alt="yurp website homepage image" width="600" height="399">
                    </div>
                    <div class="col-sm-1"></div>
                </div><!-- #purpose -->
                
                <div id="techs_did">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-2">
                        <h3>APIs used</h3>
                        <ul>
                            <li>Stripe eCommerce interface</li>
                            <li>FancyBox</li>
                            <li>Un-Semantic Responsive</li>
                        </ul>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-2">
                        <h3>Languages</h3>
                        <ul>
                            <li>JavaScript</li>
                            <li>jQuery</li>
                            <li>PHP</li>
                            <li>HTML5</li>
                            <li>CSS3</li>
                        </ul>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-4">
                        <h3>What I Did</h3>
                        <ul>
                            <li>Wrote all the programming for the eCommerce using the Stripe interface.  This allows customers to register by filling out a contact form whose information is verified.  Then the customer enters their credit card information.  If funds are available on the credit card, funds are deposited into admin back account to complete the membership payment processing.  The customer and admin receives an email verifying the purchase.</li>
                            <li>Consolidated the headers and footers from the respective HTML/PHP files to be required in multiple files</li>
                            <li>Implemented and tested the Un-Semantic responsive code to verify the website renders on both desktop and mobile devices</li>
                        </ul>
                    </div>
                    <div class="col-sm-1"></div>
                </div><!-- #techs_did -->

                <div id="screen_capture_section_1">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-4">
                        <h3>Screen Shot: &nbsp;&quot;charge.php&quot;</h3>
                        <h3>Challenges</h3>
                        <ul>
                            <li>payment was not being accepted</li>
                        </ul>
                        <h3>Solution</h3>
                        <ul>
                            <li>path for the &quot;config.php&quot; was incorrect. &nbsp;&nbsp;After troubshooting this issue,&nbsp; the charges were taken from the credit card.</li>
                        </ul>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-6">
                        <img src="./dwk_images/yurp_charge_php_capture.jpg" alt="yurp php file screen shot of code for taking payments" class="img-responsive" width="600" height="400">
                    </div>
                </div><!-- #screen_capture_section_1 -->
                
                <div id="screen_capture_section_2">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-4">
                        <h3>Screen Shot: &nbsp;&nbsp;&quot;config.php&quot;</h3>
                        <h3>Information</h3>
                        <ul>
                            <li>This &quot;config.php&quot; file contains the publishable and secret API keys.</li>
                            <li>Note the respective test API keys only used in test mode.</li>
                        </ul>               
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-6">
                        <img src="./dwk_images/yurp_config_php_capture.jpg" alt="yurp php file screen shot of code for taking payments" class="img-responsive" width="600" height="400">
                    </div>
                </div><!-- #screen_capture_section_2 -->
                
                <div id="screen_capture_section_3">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-4">
                        <h3>Screen Shot: &nbsp;Stripe payment page</h3>
                        <ul>
                            <li>At this point, user has filled out the registration form and agreeed to the terms of service.</li>
                            <li>This is the Stripe API accepting $50 for the membership, user enters their email and credit card info then selects the &quot;Pay $50&quot; to accept their payment</li>
                        </ul>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-6">
                        <img src="./dwk_images/stripe_payment_screen_capture.jpg" alt="yurp php file screen shot of code for taking payments" class="img-responsive" width="600" height="400">
                    </div>
                </div><!-- #screen_capture_section_3 -->
                
            </div><!-- #port_container -->
        </section><!-- #port_yurp -->

        <!-- google analytics for port_yurp.php page -->
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        
          ga('create', 'UA-75441405-1', 'auto');
          ga('send', 'pageview');
        </script>
        
<? require_once('./dwk_includes/footer.inc.php'); ?>
