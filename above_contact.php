
<body id="topx">
    <div id="homex"></div><!-- pressing the 'home' nav button brings you here -->
        <div id="wrapper">
            <header>
                <div class="container clearfix">
                    <div class="col-sm-3">
                        <h1 id="logo">
                            <img src="./dwk_images/logo_title.jpg" alt="header logo says Daniel Kline Web Developer">
                        </h1>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-8">
                        <nav>
                            <a class="anim" href="#homex">Home</a>
                            <a class="anim" href="#aboutx">About</a>
                            <a class="anim" href="#portfoliox">Portfolio</a>
                            <a href="https://danielkline19.wordpress.com">Blog</a>
                            <a class="anim" href="#resumex">Resume</a>
                            <a class="anim" href="#contactx">Contact</a>
                        </nav><!-- class="ir anim" allows user to go to specific section of page upon selecting respective menu item -->
                    </div>
                </div><!-- .container .clearfix -->
            </header><!-- header -->
            
            <div id="aboutx"></div><!-- pressing the 'about' nav button brings you here -->
            
            <div id="main">
                <section class="about">
                    <div class="container">
                        <h2>About</h2>
                        <p>A variety of experience in creating mobile friendly websites for user interaction including collapsible header, smooth scrolling to page sections, eCommerce programming, form processing, displaying random text, accessing database and working with WordPress plugins and themes. Additional experience includes giving presentations on WordPress plugin and PHP object-oriented programming and blogging. Graphic experiences include logo creation, color enhancing and editing of photos. This also includes removing scratches and blemish marks on old photographs. Languages and programs include HTML5, CSS3, Bootstrap, JavaScript, jQuery, AJAX, PHP, MySQL, WordPress plugins, accessing MySQL data with PHP, JavaScript, Adobe Photoshop and Ilustrator.</p>
                        <div class="col-sm-9 col-xs-9"></div>
                        <div class="col-sm-1 col-xs-1">
                            <a href="https://github.com/DanielWebDev"><img src="./dwk_images/github_logo.jpg" alt="git hub social media icon" width="32" height="32"></a>
                        </div>
                        <div class="col-sm-1 col-xs-1">
                            <a href="https://twitter.com/"><img src="./dwk_images/twitter_logo.jpg" alt="twitter social media icon" width="32" height="26"></a>
                        </div>
                        <div class="col-sm-1 col-xs-1">
                            <a href="https://www.linkedin.com/in/daniel-kline-9a188924"><img src="./dwk_images/linkedin_logo.jpg" alt="linked in social media icon" width="32" height="32"></a>    
                        </div>
                    </div><!-- .container -->
                </section>
                
                <div id="portfoliox"></div><!-- pressing the 'portfoliox' nav button brings you here -->
                
                <?php
                    // include portfolio seciton of main page            
                    include('portfolio.php');
                ?>
    
                <div id="blogx"></div><!-- pressing the 'blog' nav button brings you here -->
                    
                <section class="blog">
                    <div class="container">
                        <h2>Blog</h2>
                        <p>The WordPress content management system is very versatile for creating blogs and websites. Installed, it comes with basic features and plugins. However, in order to expand its functionality, we need to use plugins. There are plugins that provide a variety of functionality including: SEO, backup, security, eCommerce, analytics, contact forms, etc. Many of these types of plugins are available for free or for purchase. However, if you need a function to be accomplished that the existing plugins do not offer, then you can write a plugin.</p>
    <p>What are the characteristics of a plugin that make it unique? First of all, the code is written in php, html, css and javascript. Most or all of these languages are necessary for writing functionality from scratch. But if you want to make this functionality operate in WordPress, it is necessary to use hooks in your code.</p>
    <p>What are hooks? Hooks are functions that reference internal functions in Word Press. First thing to know is that when a WordPress web page loads or is refreshed, a number of internal functions execute. You will not see these functions execute unless there is a problem with their execution.</p>
    <p>For instance, when the page loads, one of the internal functions is admin_notices. The purpose of this function is to display notices in the header area of the admin area, if there are any to be displayed. If you want to display text in this area it is necessary to use an add??_action hook. Syntax is shown below:</p>
    
    <p>add_action( &lsquo; admin_notices&rsquo;,&nbsp; &lsquo; function_name&rsquo;);</p>
    
    <p>Let&rsquo;s say that the said function_name uses HTML to echo a character string. When the page is refreshed and the admin?_notices function is encountered in the wordpress page execution, then the execution of the said function_name is added to it. Therefore, the character string that the function echos will display in the admin_notices area.</p>
                    </div>
                </section>
                
                <section class="presentation">
                    <div class="container">
                        <h2>Presentations</h2>
                        <p>Available for download are two of the most recent presentations for which I have made the recent WordPress Meetup and PHP Web Developers Meetup:</p>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Selection</th>
                                    <th>Date</th>
                                    <th>Title</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="download.php?file=OOP_PHP_Basics.pptx">
                                            <div class="button">
                                                <p>Download</p>
                                            </div>
                                        </a>
                                    </td>
                                    <td>1/7/16</td>
                                    <td>PHP Object Oriented Programming Basics</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="download.php?file=wordpress_plugin_creation_overview.pptx">
                                            <div class="button">
                                                <p>Download</p>
                                            </div>
                                        </a>    
                                    </td>
                                    <td>10/26/15</td>
                                    <td>Wordpress Plugin Creation Overview</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                
                <div id="resumex"></div><!-- pressing the 'resumex' nav button brings you here -->
                
                <section class="resume">
                    <div class="container">
                        <h2>Resume</h2>
                        <a href="download.php?file=resume.pdf">
                            <div class="button">
                                <p>PDF Download</p>
                            </div>
                        </a>
                        <?php include ('resume.php'); ?>
                    </div>
                </section>
