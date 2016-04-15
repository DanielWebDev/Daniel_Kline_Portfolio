
        </div><!-- #main -->

        <footer>
            <div class="container clearfix">
                <p>&copy; 2012-2016 Daniel Kline Web Developer</p>
            </div>
            
            <a class="ir anim" href="#topx">
                <div class="top-align">
                    <p>Top</p>
                </div>
            </a>
        </footer><!-- footer -->
    
        <script src="./dwk_js/jquery-1.8.2.min.js"></script>

        <!-- AJAX contact form handling -->        
        <script src="./dwk_js/utilities.js"></script>
        <script src="./dwk_js/login.js"></script>

        <!-- bootstrap code -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <!-- reCAPTCHA code -->
        <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=<?php echo $lang; ?>">
        </script>

        <!-- collapsible header code -->        
        <script src="./dwk_js/script.js"></script>
        
        <!-- BEGIN collapsible header scripts -->
        <script src="./dwk_js/classie.js"></script>
        <script>
            function init() {
                window.addEventListener('scroll', function(e){
                    var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                        shrinkOn = 300,
                        header = document.querySelector("header");
                    if (distanceY > shrinkOn) {
                        classie.add(header,"smaller");
                    } else {
                        if (classie.has(header,"smaller")) {
                            classie.remove(header,"smaller");
                        }
                    }
                });
            }
            window.onload = init();
        </script>
        <!-- END collapsible header scripts -->

    </div><!-- #wrapper -->

</body>
</html>