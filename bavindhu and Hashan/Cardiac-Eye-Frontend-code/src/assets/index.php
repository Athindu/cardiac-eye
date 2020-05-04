<!DOCTYPE html>
     <head>
        <meta charset="UTF-8" />

        <meta http-equiv="Cache-control" content="no-cache">
        <title>Cardiac-Eye Login</title>
            <link rel="icon" type="image/png" href="images/logoicon1.ico" /> 
        <link rel="stylesheet" type="text/css" href="css_login/demo.css" />
        <link rel="stylesheet" type="text/css" href="css_login/style.css" />
        <link rel="stylesheet" type="text/css" href="css_login/animate-custom.css" />
         <link rel="stylesheet" type="text/css" href="css_login/footer.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/100/three.min.js"></script>
        <script src="https://www.vantajs.com/dist/vanta.net.min.js"></script>
        <script src="https://kit.fontawesome.com/132017e901.js" crossorigin="anonymous"></script>
    </head>
    <div id="vantajs">
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                
                <span class="right">
                    <a href=" http://tympanus.net/codrops/2012/03/27/login-and-registration-form-with-html5-and-css3/">
                        
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <img src="images/logo.png" alt="Smiley face" height="200" width="150">
				
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
        <form action="Login\Login.php" method="post">
                                <h1 id="login_h1">Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your User ID </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="My User ID "/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="Password" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" Title = "Login Sucessful"/> 
								</p>
                                <p class="change_link">
									I am a New User
									<a href="#toregister" class="to_register">Join Now</a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="Registation\Registation_index.php" method="post"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u">Enter Your User Name</label>
                                    <input id="username" name="username" required="required" type="text" placeholder="MyUserName" />
                                </p>
                                <p> 
                                    <label for="id" class="youmail" data-icon="e" >Enter Your User ID</label>
                                    <input id="id" name="id" required="required" type="text" placeholder="NIC Number"/> 
                                </p>
                                <p> 
                                    <label for="password_1" class="youpasswd" data-icon="p">Enter Your password </label>
                                    <input id="password_1" name="password_1" required="required" type="password" placeholder="Password"/>
                                </p>
                                <p> 
                                    <label for="password_2" class="youpasswd" data-icon="p">Enter Confirm Password</label>
                                    <input id="password_2" name="password_2" required="required" type="password" placeholder="Confirm Password"/>
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Sign up"/> 
								</p>
                                <p class="change_link">  
									I am an Existing User
									<a href="#tologin" class="to_register"> LogIn </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</div>
    <script>
        VANTA.NET({
            el: "#vantajs",
            mouseControls: true,
            touchControls: true,
            minHeight: 100.00,
            minWidth: 100.00,
            scale: 1.00,
            scaleMobile: 1.00,
            color: 0xcc7575,
            backgroundColor: 0x7f4f4f,
            points: 7.00,
            spacing: 19.00
        })
    </script>
     <!-- Site footer -->
    <footer class="site-footer">
    <!--   <div class="container1">
        <div class="row">
          <div class="col-">
            <h6 class="about-justify">About</h6>
            <p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative  to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
          </div>

          div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="http://scanfcode.com/about/">About Us</a></li>
              <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
              <li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
              <li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
              <li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div> -->
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by 
         <a href="#">Ctrl Intelligence</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>
</html>