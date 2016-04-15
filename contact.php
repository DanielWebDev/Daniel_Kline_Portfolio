
        <div id="contactx"></div><!-- pressing the 'contactx' nav button brings you here -->
            <section class="contact">
                <div class="container">
                    
                    <h2>Contact</h2>

                    <form method="post" id="feedback" action="process_form.php">
                        <fieldset>
                            
                            <div class="form-group" class="first">
                                <label for="name">Name:</label>
                                <input name="name" type="text" class="form-control" id="name" placeholder="name">
                            </div>
                            
                            <div class="form-group" class="second">
                                <label for="email">Email:</label>
                                <input name="email" type="text" class="form-control" id="email" placeholder="email">
                            </div>
                            
                            <div class="form-group" class="third">
                                <label for="comment">Question / Comment:</label>
                                <input name="comment" type="text" class="form-control" id="comment" placeholder="question / comment">
                            </div>
                            
                            <div class="g-recaptcha" data-sitekey="6LfEPtUSAAAAAFzh-NxZnp-8_pac_V0O4knyXuiu"></div>
                            
                            <p id="submit-form">
                                <input name="send" id="send" type="submit" value="Submit">
                            </p>
                            
                        </fieldset>
                    </form>
                    
                </div><!-- .container -->
           </section><!-- .contact -->

            <!-- google analytics for contact.php page -->
            <script>
              (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
              })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            
              ga('create', 'UA-75441405-1', 'auto');
              ga('send', 'pageview');
            </script>
