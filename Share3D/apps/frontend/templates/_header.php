<?php use_helper('activeLink') ?>
<div id="mainHeader">
    <div class="page clearfix">
        <h1 id="logoPost3D" class="logoPost3D"><?php echo link_to('Post3D', 'home') ?></h1>
        <div id="mainNav">
            <ul class="clearfix">
                <?php if ($sf_user->isAuthenticated()): ?>
                    <li><?php echo sfContext::getInstance()->getUser()->getAttribute('username', null) ?></li>

                    <!-- this blocks renders only for the admin account with username post3dAdmin -->
                    <?php
                        if(sfContext::getInstance()->getUser()->getAttribute('username', null) == "post3dAdmin"){ ?>
                             <li class="separator">|</li>
                            <li class="<?php echo isCurrentRoute('admin') ?>"><?php echo link_to('Admin Console', 'admin') ?></li>

                    <?php    }

                    ?>

                    <li class="separator">|</li>
                    <li class="<?php echo isCurrentRoute('dashboard') ?>"><?php echo link_to('Dashboard', 'dashboard') ?></li>
                    <li class="separator">|</li>
                    <li class="<?php echo isCurrentRoute('account_settings') ?>"><?php echo link_to('Account Settings', 'account_settings') ?></li>
                    <li class="separator">|</li>
                    <li class="inActiveLink"><?php echo link_to('Log Out', 'security_logout') ?></li>
                <?php else: ?>
                        <li class="<?php echo isCurrentRoute('registration') ?>">
                            <?php 
                                if(isset($requestUri)) {
                                    echo link_to('Sign Up', url_for('registration', array('requestUri' => $requestUri)));
                                } 
                                else { 
                                    echo link_to('Sign Up', url_for('registration')); 
                                }
                            ?>
                        </li>
                        <li class="separator">|</li>
                        <li class="<?php echo isCurrentRoute('security_login') ?>"><?php echo link_to('Log In', 'security_login') ?></li>
                <?php endif ?>
                    </ul>
                </div>
            </div>
        </div>



