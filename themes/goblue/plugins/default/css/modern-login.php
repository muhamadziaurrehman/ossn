
<?php header("Content-type: text/css"); ?>

/***************************
    Modern Login Page Styles
****************************/

.modern-login-container {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    position: relative;
    overflow: hidden;
    padding: 20px;
}

.login-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: 0;
}

.floating-shapes {
    position: relative;
    width: 100%;
    height: 100%;
}

.shape {
    position: absolute;
    opacity: 0.1;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.2);
    animation: float 20s infinite ease-in-out;
}

.shape-1 {
    width: 200px;
    height: 200px;
    top: 10%;
    left: 10%;
    animation-delay: 0s;
}

.shape-2 {
    width: 150px;
    height: 150px;
    top: 60%;
    right: 15%;
    animation-delay: 5s;
}

.shape-3 {
    width: 100px;
    height: 100px;
    top: 30%;
    right: 30%;
    animation-delay: 10s;
}

.shape-4 {
    width: 250px;
    height: 250px;
    bottom: 10%;
    left: 20%;
    animation-delay: 15s;
}

@keyframes float {
    0%, 100% {
        transform: translateY(0px) rotate(0deg);
        opacity: 0.1;
    }
    50% {
        transform: translateY(-20px) rotate(180deg);
        opacity: 0.3;
    }
}

.login-card {
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(10px);
    border-radius: 20px;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    max-width: 450px;
    width: 100%;
    position: relative;
    z-index: 1;
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.login-card-inner {
    padding: 40px;
}

.modern-login-form {
    width: 100%;
}

.login-header {
    text-align: center;
    margin-bottom: 30px;
}

.login-title {
    font-size: 28px;
    font-weight: 700;
    color: #2d3748;
    margin-bottom: 8px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.login-subtitle {
    color: #718096;
    font-size: 14px;
    margin: 0;
    font-weight: 400;
}

.modern-form-group {
    margin-bottom: 25px;
    position: relative;
}

.input-wrapper {
    position: relative;
    display: flex;
    align-items: center;
}

.input-icon {
    position: absolute;
    left: 15px;
    color: #a0aec0;
    font-size: 16px;
    z-index: 2;
    transition: all 0.3s ease;
}

.modern-input {
    width: 100%;
    padding: 16px 20px 16px 45px;
    border: 2px solid #e2e8f0;
    border-radius: 12px;
    font-size: 16px;
    background: #ffffff;
    transition: all 0.3s ease;
    outline: none;
    color: #2d3748;
    font-weight: 500;
}

.modern-input:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
    transform: translateY(-2px);
}

.modern-input:focus + .floating-label,
.modern-input:not(:placeholder-shown) + .floating-label {
    transform: translateY(-30px) scale(0.85);
    color: #667eea;
    font-weight: 600;
}

.modern-input:focus ~ .input-icon {
    color: #667eea;
    transform: scale(1.1);
}

.floating-label {
    position: absolute;
    left: 45px;
    top: 50%;
    transform: translateY(-50%);
    background: #ffffff;
    padding: 0 8px;
    color: #a0aec0;
    font-size: 14px;
    font-weight: 500;
    transition: all 0.3s ease;
    pointer-events: none;
    z-index: 1;
}

.modern-alert {
    padding: 16px;
    border-radius: 12px;
    margin-bottom: 25px;
    display: flex;
    align-items: flex-start;
    gap: 12px;
}

.modern-alert-error {
    background: linear-gradient(135deg, #fed7d7 0%, #feb2b2 100%);
    border: 1px solid #fc8181;
    color: #c53030;
}

.alert-icon {
    font-size: 20px;
    margin-top: 2px;
}

.alert-content {
    flex: 1;
}

.alert-content strong {
    display: block;
    font-weight: 600;
    margin-bottom: 4px;
}

.alert-content p {
    margin: 0;
    font-size: 14px;
    opacity: 0.9;
}

.login-actions {
    margin-top: 30px;
}

.modern-login-btn {
    width: 100%;
    padding: 16px 24px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    border: none;
    border-radius: 12px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
}

.modern-login-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
}

.modern-login-btn:active {
    transform: translateY(0);
}

.login-links {
    text-align: center;
    margin-top: 20px;
}

.reset-password-link {
    color: #667eea;
    text-decoration: none;
    font-size: 14px;
    font-weight: 500;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    transition: all 0.3s ease;
}

.reset-password-link:hover {
    color: #5a67d8;
    text-decoration: none;
    transform: translateY(-1px);
}

.login-footer {
    margin-top: 30px;
    text-align: center;
}

.social-login-divider {
    position: relative;
    margin: 25px 0;
}

.social-login-divider::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    height: 1px;
    background: #e2e8f0;
}

.social-login-divider span {
    background: #ffffff;
    color: #a0aec0;
    padding: 0 15px;
    font-size: 12px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.signup-prompt {
    color: #718096;
    font-size: 14px;
    margin: 0;
}

.signup-link {
    color: #667eea;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
}

.signup-link:hover {
    color: #5a67d8;
    text-decoration: none;
}

/* Mobile Responsive */
@media (max-width: 768px) {
    .modern-login-container {
        padding: 15px;
        min-height: 100vh;
    }
    
    .login-card-inner {
        padding: 30px 25px;
    }
    
    .login-title {
        font-size: 24px;
    }
    
    .modern-input {
        padding: 14px 18px 14px 40px;
        font-size: 16px; /* Prevent zoom on iOS */
    }
    
    .input-icon {
        left: 12px;
    }
    
    .floating-label {
        left: 40px;
    }
    
    .shape {
        display: none; /* Hide floating shapes on mobile for better performance */
    }
}

/* Remove default form widget styling for login page */
.modern-login-form-wrapper .ossn-widget,
.modern-login-form-wrapper .widget-heading,
.modern-login-form-wrapper .widget-contents {
    background: none !important;
    border: none !important;
    box-shadow: none !important;
    padding: 0 !important;
    margin: 0 !important;
}

.modern-login-form-wrapper .widget-heading {
    display: none !important;
}

/* Ensure the page container uses full height */
.ossn-page-container {
    min-height: 100vh;
    padding: 0;
    margin: 0;
    background: transparent;
}

/* Hide default page content styling on login page */
body.ossn-login-page .ossn-page-contents {
    background: none !important;
    border: none !important;
    box-shadow: none !important;
    padding: 0 !important;
    margin: 0 !important;
}

body.ossn-login-page .container {
    max-width: 100% !important;
    padding: 0 !important;
}

body.ossn-login-page .row {
    margin: 0 !important;
}

body.ossn-login-page [class*="col-"] {
    padding: 0 !important;
}
