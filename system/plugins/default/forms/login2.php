<?php
/**
 * Open Source Social Network
 *
 * @package   Open Source Social Network
 * @author    Open Source Social Network Core Team <info@openteknik.com>
 * @copyright (C) OpenTeknik LLC
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
?>
<div class="modern-login-form">
    <div class="login-header">
        <h2 class="login-title"><?php echo ossn_print('site:login'); ?></h2>
        <p class="login-subtitle">Welcome back! Please sign in to your account</p>
    </div>
    
    <div class="form-group modern-form-group">
        <div class="input-wrapper">
            <i class="fa fa-user input-icon"></i>
            <input type="text" name="username" placeholder="<?php echo ossn_print('username'); ?>" class="modern-input" required />
            <label class="floating-label"><?php echo ossn_print('username'); ?></label>
        </div>
    </div>

    <div class="form-group modern-form-group">
        <div class="input-wrapper">
            <i class="fa fa-lock input-icon"></i>
            <input type="password" name="password" placeholder="<?php echo ossn_print('password'); ?>" class="modern-input" autocomplete="off" required />
            <label class="floating-label"><?php echo ossn_print('password'); ?></label>
        </div>
    </div>
    
    <div class="form-group">
        <?php echo ossn_fetch_extend_views('forms/login2/before/submit'); ?>
    </div>
    
    <div class="login-actions">
        <button type="submit" class="modern-login-btn">
            <i class="fa fa-sign-in-alt"></i>
            <?php echo ossn_print('site:login'); ?>
        </button>
        
        <div class="login-links">
            <a class="reset-password-link" href="<?php echo ossn_site_url('resetlogin'); ?>">
                <i class="fa fa-key"></i>
                <?php echo ossn_print('reset:login'); ?>
            </a>
        </div>
    </div>
</div>
