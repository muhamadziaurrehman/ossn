<?php
/**
 * Open Source Social Network
 *
 * @package   Open Source Social Network (OSSN)
 * @author    OSSN Core Team <info@openteknik.com>
 * @copyright (C) OpenTeknik LLC
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
$error = input('error');
?>
<div class="modern-login-container">
    <div class="login-card">
        <div class="login-card-inner">
            <?php if ($error == 1) { ?>
                <div class="modern-alert modern-alert-error">
                    <div class="alert-icon">
                        <i class="fa fa-exclamation-triangle"></i>
                    </div>
                    <div class="alert-content">
                        <strong><?php echo ossn_print('login:error'); ?></strong>
                        <p><?php echo ossn_print('login:error:sub'); ?></p>
                    </div>
                </div>
            <?php } ?>       
            
            <?php 
                $contents = ossn_view_form('login2', array(
                        'id' => 'ossn-modern-login',
                        'action' => ossn_site_url('action/user/login'),
                        'class' => 'modern-login-form-wrapper'
                ));
                echo $contents;
            ?>
            
            <div class="login-footer">
                <div class="social-login-divider">
                    <span>or</span>
                </div>
                <p class="signup-prompt">
                    Don't have an account? 
                    <a href="<?php echo ossn_site_url(); ?>" class="signup-link">Sign up here</a>
                </p>
            </div>
        </div>
    </div>
    
    <div class="login-background">
        <div class="floating-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
            <div class="shape shape-4"></div>
        </div>
    </div>
</div>	
