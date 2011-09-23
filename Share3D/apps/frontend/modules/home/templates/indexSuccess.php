 <div id="main_container"><!--start main_container-->
                <div id="header"><!--start header-->
                        <div id="logo"><!--start logo-->
                                <a href="index-2.html"><img src="images/logo.png" alt="logo" title="logo" border="0" /></a>
                        </div><!--end logo-->
                        <div id="menu_tab"><!--start menu_tab-->
                                <ul id="menu"><!--start menu-->
                                        <!--border--><li><img src="images/border_menu.jpg" width="2" height="48" alt="border_menu" /></li>
                                        <li><a href="<?php echo $twitterOauthUrl; ?>"  class="current"> Sign in With Twitter</a></li>
                                        <!--border--><li><img src="images/border_menu.jpg" width="2" height="48" alt="border_menu" /></li>
                                        <?php
        if ($sf_user->hasFlash('error')) {
           echo '<div id="flashError">'.$sf_user->getFlash('error').'</div>';
        }
     ?>
                                </ul><!--end menu-->
                        </div><!--end menu_tab-->
                </div><!--end header-->
                <div id="main_content"><!--start main_content-->
                        <div id="banner"><!--start banner-->
                                <div id="cu3er-container"><!--start cu3er-container-->
                                        <a href="http://www.adobe.com/go/getflashplayer">
                                                <img src="../../../www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
                                        </a>
                                </div><!--end cu3er-container-->
                                <img id="shadow" src="images/banner_shadow.png" width="910" height="149" alt="shadow" />
                        </div><!--end banner-->
                        <div class="left_content"><!--start left_content-->
                                <div class="left_box"><!--start left_box-->
                                        <div class="left_text_box">
                                                <h1>What's this?</h1>
                                                <p>
                                                    A demo symfony app, where you can login with Twitter (Oauth) and view 3D models using HTML5, Javascript 3D engine. Mouse over above for some 3d Effects!
                                                </p>
                                        </div>
                                </div><!--end left_box-->
                                
                        </div><!--end left_content-->
                        <div class="right_content"><!-- start right_content-->
                               
                        </div><!--end right_content-->
                        <div class="clear"></div>
                </div><!--end main_content-->
                <div id="footer"><!-- start footer-->
                        <img src="images/footer_logo.png" height="30" width="150" alt="" title="" class="footer_logo" />
                        <div class="left_footer"><!-- start left_footer-->
                                Demo Symfony app by Veni Movva
                        </div><!-- end left_footer-->
                        <ul class="right_footer"><!-- start right_footer-->
                                <li><a href="#">About</a></li>
                        </ul><!-- end right_footer-->
                </div><!-- end footer-->
        </div><!--end main_container-->


<?php
    
?>