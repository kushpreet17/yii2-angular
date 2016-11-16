<!--
        Twenty by HTML5 UP
        html5up.net | @ajlkn
        Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>Twenty by HTML5 UP</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="<?php echo config_item('css_url') . "main.css"; ?>" />
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
        <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
        <style>
            /* The Modal (background) */
            .modal {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                padding-top: 100px; /* Location of the box */
                left: 0;
                top: 0;
                width: 100%; /* Full width */
                height: 100%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            }

            /* Modal Content */
            .modal-content {
                background-color: #fefefe;
                margin: auto;
                padding: 20px;
                border: 1px solid #888;
                width: 80%;
            }

            /* The Close Button */
            .close {
                color: #aaaaaa;
                float: right;
                font-size: 28px;
                font-weight: bold;
            }

            .close:hover,
            .close:focus {
                color: #000;
                text-decoration: none;
                cursor: pointer;
            }
        </style>




    </head>

    <body class="index">
          
        <div id="myModal" class="modal">
            <?php if (validation_errors()) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= validation_errors() ?>
				</div>
			</div>
		<?php endif; ?>
		<?php if (isset($error)) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= $error ?>
				</div>
			</div>
		<?php endif; ?>
          
            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">×</span>
                <form name="signup"  method="post" id="signup" action="<?php echo base_url(); ?>user/register">
                    <div class="form-group">
                        <label>First Name</label>    
                        <input type="text" id="firstname" name="firstname">
                        <span id="err_firstname" style="color:red"></span>
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>    
                        <input type="text" id="lastname" name="lastname">
                        <span id="err_lastname" style="color:red"></span>
                    </div>
                    <div class="form-group">
                        <label>E mail</label>    
                        <input type="text" id="email" name="email">
                        <span id="err_email" style="color:red"></span>
                    </div>
                    <div class="form-group">
                        <label>Password</label>    
                        <input type="password" id="password" name="password">
                        <span id="err_password" style="color:red"></span>
                    </div>
                    <div class="form-group">
                        <label>Phone No</label>    
                        <input type="text" id="phone_no" name="phone_no">
                        <span id="err_phone_no" style="color:red"></span>
                    </div>
                    <div class="form-group">
                        <label>Country</label>  
                        <select name="country" id="country">
                            <option value="">Select Country</option>
                            <option value="india">India</option>
                            <option value="united states">United States</option>
                            <option value="america">America</option>
                        </select><br>
                        <span id="err_country" style="color:red"></span>
                    </div>
                    <div class="form-group">
                        <label>Address</label>    
                        <input type="text" id="address" name="address">
                        <span id="err_address" style="color:red"></span>
                    </div>
                    <!--<button type="submit">Register</button>-->
                    <button type="submit" id="btnSubmit" />submit</button>
                </form>
            </div>

        </div>

        <div id="myLogin" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span class="closelogin">×</span>
                <form name="signup"  method="post" id="login" action="<?php echo base_url(); ?>user/login">
                    <div class="form-group">
                        <label>E mail</label>    
                        <input type="text" id="email" name="email">
                        <span id="err_email" style="color:red"></span>
                    </div>
                    <div class="form-group">
                        <label>Password</label>    
                        <input type="password" id="password" name="password">
                        <span id="err_password" style="color:red"></span>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input name="lgn_remember" type="checkbox" <?php
                            if (isset($_COOKIE['lgn_remember'])) {
                                echo 'checked';
                            }
                            ?> >Remember Me
                        </label>
                    </div>
                    <!--<button type="submit">Register</button>-->
                    <button type="submit" id="btnSubmit" />submit</button>
                </form>
            </div>

        </div>



        <div id="page-wrapper">

            <!-- Header -->
            <header id="header" class="alt">
                <h1 id="logo"><a href="index.html">Twenty <span>by HTML5 UP</span></a></h1>
                <nav id="nav">
                    <ul>
                        <li class="current"><a href="index.html">Welcome</a></li>
                        <li class="submenu">
                            <a href="#">Layouts</a>
                            <ul>
                                <li><a href="left-sidebar.html">Left Sidebar</a></li>
                                <li><a href="right-sidebar.html">Right Sidebar</a></li>
                                <li><a href="no-sidebar.html">No Sidebar</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li class="submenu">
                                    <a href="#">Submenu</a>
                                    <ul>
                                        <li><a href="#">Dolore Sed</a></li>
                                        <li><a href="#">Consequat</a></li>
                                        <li><a href="#">Lorem Magna</a></li>
                                        <li><a href="#">Sed Magna</a></li>
                                        <li><a href="#">Ipsum Nisl</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><button id="create_user" class="button special">Sign Up</button></li>
                        <li><button id="login_user" class="button special">Login</button></li>
                    </ul>
                </nav>
            </header>

            <!-- Banner -->
            <section id="banner">

                <!--
                        ".inner" is set up as an inline-block so it automatically expands
                        in both directions to fit whatever's inside it. This means it won't
                        automatically wrap lines, so be sure to use line breaks where
                        appropriate (<br />).
                -->
                <div class="inner">

                    <header>
                        <h2>TWENTY</h2>
                    </header>
                    <p>This is <strong>Twenty</strong>, a free
                        <br />
                        responsive template
                        <br />
                        by <a href="http://html5up.net">HTML5 UP</a>.</p>
                    <footer>
                        <ul class="buttons vertical">
                            <li><a href="#main" class="button fit scrolly">Tell Me More</a></li>
                        </ul>
                    </footer>

                </div>

            </section>

            <!-- Main -->
            <article id="main">

                <header class="special container">
                    <span class="icon fa-bar-chart-o"></span>
                    <h2>As this is my <strong>twentieth</strong> freebie for HTML5 UP
                        <br />
                        I decided to give it a really creative name.</h2>
                    <p>Turns out <strong>Twenty</strong> was the best I could come up with. Anyway, lame name aside,
                        <br />
                        it's minimally designed, fully responsive, built on HTML5/CSS3/<strong>skel</strong>,
                        and, like all my stuff,
                        <br />
                        released for free under the <a href="http://html5up.net/license">Creative Commons Attribution 3.0</a> license. Have fun!</p>
                </header>

                <!-- One -->
                <section class="wrapper style2 container special-alt">
                    <div class="row 50%">
                        <div class="8u 12u(narrower)">

                            <header>
                                <h2>Behold the <strong>icons</strong> that visualize what you’re all about. or just take up space. your call bro.</h2>
                            </header>
                            <p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu comteger ut fermentum lorem. Lorem ipsum dolor sit amet. Sed tristique purus vitae volutpat ultrices. eu elit eget commodo. Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo.</p>
                            <footer>
                                <ul class="buttons">
                                    <li><a href="#" class="button">Find Out More</a></li>
                                </ul>
                            </footer>

                        </div>
                        <div class="4u 12u(narrower) important(narrower)">

                            <ul class="featured-icons">
                                <li><span class="icon fa-clock-o"><span class="label">Feature 1</span></span></li>
                                <li><span class="icon fa-volume-up"><span class="label">Feature 2</span></span></li>
                                <li><span class="icon fa-laptop"><span class="label">Feature 3</span></span></li>
                                <li><span class="icon fa-inbox"><span class="label">Feature 4</span></span></li>
                                <li><span class="icon fa-lock"><span class="label">Feature 5</span></span></li>
                                <li><span class="icon fa-cog"><span class="label">Feature 6</span></span></li>
                            </ul>

                        </div>
                    </div>
                </section>

                <!-- Two -->
                <section class="wrapper style1 container special">
                    <div class="row">
                        <div class="4u 12u(narrower)">

                            <section>
                                <span class="icon featured fa-check"></span>
                                <header>
                                    <h3>This is Something</h3>
                                </header>
                                <p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>
                            </section>

                        </div>
                        <div class="4u 12u(narrower)">

                            <section>
                                <span class="icon featured fa-check"></span>
                                <header>
                                    <h3>Also Something</h3>
                                </header>
                                <p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>
                            </section>

                        </div>
                        <div class="4u 12u(narrower)">

                            <section>
                                <span class="icon featured fa-check"></span>
                                <header>
                                    <h3>Probably Something</h3>
                                </header>
                                <p>Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.</p>
                            </section>

                        </div>
                    </div>
                </section>

                <!-- Three -->
                <section class="wrapper style3 container special">

                    <header class="major">
                        <h2>Next look at this <strong>cool stuff</strong></h2>
                    </header>

                    <div class="row">
                        <div class="6u 12u(narrower)">

                            <section>
                                <a href="#" class="image featured"><img src="<?php echo config_item('image_url') . "pic01.jpg"; ?>" alt="" /></a>
                                <header>
                                    <h3>A Really Fast Train</h3>
                                </header>
                                <p>Sed tristique purus vitae volutpat commodo suscipit amet sed nibh. Proin a ullamcorper sed blandit. Sed tristique purus vitae volutpat commodo suscipit ullamcorper sed blandit lorem ipsum dolore.</p>
                            </section>

                        </div>
                        <div class="6u 12u(narrower)">

                            <section>
                                <a href="#" class="image featured"><img src="<?php echo config_item('image_url') . "pic02.jpg"; ?>" alt="" /></a>
                                <header>
                                    <h3>An Airport Terminal</h3>
                                </header>
                                <p>Sed tristique purus vitae volutpat commodo suscipit amet sed nibh. Proin a ullamcorper sed blandit. Sed tristique purus vitae volutpat commodo suscipit ullamcorper sed blandit lorem ipsum dolore.</p>
                            </section>

                        </div>
                    </div>
                    <div class="row">
                        <div class="6u 12u(narrower)">

                            <section>
                                <a href="#" class="image featured"><img src="<?php echo config_item('image_url') . "pic03.jpg"; ?>" alt="" /></a>
                                <header>
                                    <h3>Hyperspace Travel</h3>
                                </header>
                                <p>Sed tristique purus vitae volutpat commodo suscipit amet sed nibh. Proin a ullamcorper sed blandit. Sed tristique purus vitae volutpat commodo suscipit ullamcorper sed blandit lorem ipsum dolore.</p>
                            </section>

                        </div>
                        <div class="6u 12u(narrower)">

                            <section>
                                <a href="#" class="image featured"><img src="<?php echo config_item('image_url') . "pic04.jpg"; ?>" alt="" /></a>
                                <header>
                                    <h3>And Another Train</h3>
                                </header>
                                <p>Sed tristique purus vitae volutpat commodo suscipit amet sed nibh. Proin a ullamcorper sed blandit. Sed tristique purus vitae volutpat commodo suscipit ullamcorper sed blandit lorem ipsum dolore.</p>
                            </section>

                        </div>
                    </div>

                    <footer class="major">
                        <ul class="buttons">
                            <li><a href="#" class="button">See More</a></li>
                        </ul>
                    </footer>

                </section>

            </article>

            <!-- CTA -->
            <section id="cta">

                <header>
                    <h2>Ready to do <strong>something</strong>?</h2>
                    <p>Proin a ullamcorper elit, et sagittis turpis integer ut fermentum.</p>
                </header>
                <footer>
                    <ul class="buttons">
                        <li><a href="#" class="button special">Take My Money</a></li>
                        <li><a href="#" class="button">LOL Wut</a></li>
                    </ul>
                </footer>

            </section>

            <!-- Footer -->
            <footer id="footer">

                <ul class="icons">
                    <li><a href="#" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon circle fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon circle fa-google-plus"><span class="label">Google+</span></a></li>
                    <li><a href="#" class="icon circle fa-github"><span class="label">Github</span></a></li>
                    <li><a href="#" class="icon circle fa-dribbble"><span class="label">Dribbble</span></a></li>
                </ul>

                <ul class="copyright">
                    <li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                </ul>

            </footer>

        </div>

        <!-- Scripts -->

        <script src="<?php echo config_item('js_url') . "jquery.min.js"; ?>"</script>
        <script src="<?php echo config_item('js_url') . "jquery.dropotron.min.js"; ?>"></script>
        <script src="<?php echo config_item('js_url') . "jquery.scrolly.min.js"; ?>"></script>
        <script src="<?php echo config_item('js_url') . "jquery.scrollgress.min.js"; ?>"></script>
        <script src="<?php echo config_item('js_url') . "skel.min.js"; ?>"></script>
        <script src="<?php echo config_item('js_url') . "util.js"; ?>"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
        <script src="<?php echo config_item('js_url') . "custom.js"; ?>"></script>
    <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
        <script src="<?php echo config_item('js_url') . "main.js"; ?>"></script>

    </body>
</html>
