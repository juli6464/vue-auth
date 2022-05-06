<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Vueauth</title>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.14.1/dist/css/uikit.min.css" />

</head>
<body>

    <div id="app"></div>

    <div class="uk-section uk-padding-remove uk-section-muted">
        <div class="uk-container">
            <nav class="uk-navbar-container" uk-navbar>
                <div class="uk-navbar-left">
                    <ul class="uk-navbar-nav">
                        <li class="uk-active"><a href="">VueAuth</a></li>
                    </ul>
                </div>
                <div class="uk-navbar-right">
                    <ul class="uk-navbar-nav">
                        <li class="uk-parent"><a href="#" uk-toggle="target: #auth-modal">Acceso</a></li>
                    </ul>
                </div>
            </nav>
        </div>

    </div>

    <div class="uk-section">
        <div class="uk-container">
            <p>El resto de app</p>
        </div>
    </div>

    <!-- This is the modal -->
    <div id="auth-modal" uk-modal>
        <div class="uk-modal-dialog uk-modal-body">
            <!-- This is the form section -->
            <ul class="uk-tab uk-flex-center" uk-grid uk-switcher="animation: uk-animation-fade">
                <li><a href="#">Registro</a></li>
                <li><a href="#">Acceso</a></li>
                <li class="uk-hidden"><a>Recuperar contraseña</a></li>
            </ul>
            <ul class="uk-switcher uk-margin">
                <!-- This is the registration form -->
                <li>
                    <h3 class="uk-card-title uk-text-center">Sign up today. It's free!</h3>
                    <form>
                        <div class="uk-margin">
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon" uk-icon="icon: user"></span>
                                <input class="uk-input uk-form-large" type="text" placeholder="First and last name">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon" uk-icon="icon: mail"></span>
                                <input class="uk-input uk-form-large" type="text" placeholder="Email address">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                <input class="uk-input uk-form-large" type="password" placeholder="Set a password">
                            </div>
                        </div>
                        <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                            <label><input class="uk-checkbox" type="checkbox"> I agree the Terms and Conditions.</label>
                        </div>
                        <div class="uk-margin">
                            <button class="uk-button uk-button-primary uk-button-large uk-width-1-1">Login</button>
                        </div>
                        <div class="uk-text-small uk-text-center">
                            Already have an account? <a href="#" uk-switcher-item="1">Log in</a>
                        </div>
                    </form>
                </li>
                <!-- This is the login form -->
                <li>
                    <h3 class="uk-card-title uk-text-center">Welcome back!</h3>
                    <form>
                        <div class="uk-margin">
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon" uk-icon="icon: mail"></span>
                                <input class="uk-input uk-form-large" type="text" placeholder="Email address">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                <input class="uk-input uk-form-large" type="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="uk-margin uk-text-right@s uk-text-center uk-text-small">
                            <a href="#" uk-switcher-item="2">Forgot Password?</a>
                        </div>
                        <div class="uk-margin">
                            <button class="uk-button uk-button-primary uk-button-large uk-width-1-1">Login</button>
                        </div>
                        <div class="uk-text-small uk-text-center">
                            Not registered? <a href="#" uk-switcher-item="0">Create an account</a>
                        </div>
                    </form>
                </li>
                <!-- This is the forgot password form -->
                <li>
                    <h3 class="uk-card-title uk-text-center">Forgot your password?</h3>
                    <p class="uk-text-center uk-width-medium@s uk-margin-auto">Enter your email address and we will send you a link to reset your password.</p>
                    <form>
                        <div class="uk-margin">
                            <div class="uk-inline uk-width-1-1">
                                <span class="uk-form-icon" uk-icon="icon: mail"></span>
                                <input class="uk-input uk-form-large" type="text" placeholder="Email address">
                            </div>
                        </div>
                        <div class="uk-margin">
                            <button class="uk-button uk-button-primary uk-button-large uk-width-1-1">Send Email</button>
                        </div>
                        <div class="uk-text-small uk-text-center">
                            <a href="#" uk-switcher-item="1">Back to login</a>
                        </div>
                    </form>
                </li>
            </ul>
        </div>
    </div>

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.14.1/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.14.1/dist/js/uikit-icons.min.js"></script>
</body>
</html>
