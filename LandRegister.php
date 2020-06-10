<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>
        Sign in to my site | mysite.org
    </title>
   <!----Meta tags for this page---->
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="UvVP23KA-xdDS6KUpR3-1CEMMmNRev5bXUFo" name="csrf-token">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assests/css/bootstrap.css" crossorigin="anonymous">
    <link rel="stylesheet" href="assests/css/style.css" crossorigin="anonymous">
</head>
<body>

<header class="gh-head">
    <nav>
        <a href="#">
            <img alt="fastscroll.com" class="" src="assests/images/undraw_welcome_cats_thqn.svg" width="9%">
        </a>
    </nav>
</header>

<div class="">
    <main>
        <div class="sign-up-area-land">
            <div>
                <hgroup class="land-reg-headings">
                <h1>
                    آدرس دامنه سایت
                </h1>
                <h3>
برای یادگیری رایگان برنامه نویسی به ما بپیوندید
                </h3>
                </hgroup>
                <div class="register-landing-page-buttons">
                    <button id="login-google" class="btn btn-outline-light btn-block text-dark border-primary">
                       <small>ورود با گوگل</small>
                    </button>
                    <button id="login-github" class="btn btn-outline-light btn-block text-dark border-primary">
                      <small> ورود با گیت هاب</small>
                    </button>
                    <button id="login-facebook" class="btn btn-outline-light btn-block text-dark border-primary">
                        <small>ورود با لینکدین</small>
                    </button>
    <a href="EmailLogin.php" class="text-dark link">
        <button id="login-email" class="btn btn-outline-light btn-block text-dark border-primary">
            <small>ورود با ایمیل</small></button></a>
                </div>


                <!-- Start passwordless-email -->
                <!--     <div class="passwordless-email" style="display: none;">
                        <div class="enter-email">
                            <form novalidate>
                                <div class="form-group">
                                    <label for="email" class="control-label">
                                        Enter your email address to continue:
                                    </label>
                                    <input autofocus="" class="form-control" id="email" name="email" oninput="setCustomValidity('')" value
                                           autocomplete="off" placeholder="" required="" type="email">
                                </div>
                                <div class="button-holder">
                                    <button class="btn btn-primary" id="send-email-btn">
                                        Email me a short code to continue
                                    </button>
                                </div>
                       </form>
                        </div>
                        <!--
                        <div class="enter-code" style="display: none;">
                            <form>
                                <div class="form-group">
                                    <label for="code" class="control-label">
                                        Enter the short code you received on your email:
                                    </label>
                                    <input autofocus="" class="form-control" id="code" name="code" placeholder="" value=""
                                           autocomplete="off">
                                </div>
                                <div class="button-holder">
                                    <button class="btn btn-primary" id="send-code-btn">
                                        Submit code and continue to site.org</button>
                                </div>
                            </form>
                        </div>
                        -->
                </div>
                <!-- End passwordless-email -->


            </div> <!-- End page-content -->

            <img src="assests/images/landreg.svg" class="regpic">

        </div> <!-- End container -->
    </main>
</div> <!--  End default-layout -->

<!--- For Suport IE browser --->
<!--[if IE 8]>
<script src="//cdnjs.cloudflare.com/ajax/libs/ie8/0.2.5/ie8.js"></script>
<![endif]-->
<!--[if lte IE 9]>
<script src="https://cdn.auth0.com/js/polyfills/1.0/base64.min.js"></script>
<script src="https://cdn.auth0.com/js/polyfills/1.0/es5-shim.min.js"></script>
<![endif]-->
<!----------------------------->

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.freecodecamp.org/login-assets/cash-4-1-5/cash.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.auth0.com/js/auth0/9.11.3/auth0.min.js"></script>
<script defer src="https://cdn.auth0.com/js/polyfills/1.0/object-assign.min.js"></script>

<!--Start Script For redirect-->
<script>
    var config, params, webAuth = null;

    $('form').on('submit', function (event) {
        event.preventDefault();
    });

    function setupAuth0FromConfig() {
        config = JSON.parse(
            decodeURIComponent(escape(window.atob('eyJpY29uIjoiaHR0cHM6Ly9jZG4uZnJlZWNvZGVjYW1wLm9yZy9wbGF0Zm9ybS91bml2ZXJzYWwvbG9nby01MTJYNTEyLnBuZyIsImFzc2V0c1VybCI6IiIsImF1dGgwRG9tYWluIjoiYXV0aC5mcmVlY29kZWNhbXAub3JnIiwiYXV0aDBUZW5hbnQiOiJmcmVlY29kZWNhbXAiLCJjbGllbnRDb25maWd1cmF0aW9uQmFzZVVybCI6Imh0dHBzOi8vY2RuLmF1dGgwLmNvbS8iLCJjYWxsYmFja09uTG9jYXRpb25IYXNoIjpmYWxzZSwiY2FsbGJhY2tVUkwiOiJodHRwczovL2FwaS5mcmVlY29kZWNhbXAub3JnL2F1dGgvYXV0aDAvY2FsbGJhY2siLCJjZG4iOiJodHRwczovL3Nkay5hdXRoMC5jb20vIiwiY2xpZW50SUQiOiJhVUR2OWpWcVRmeEJSRTFsNjBOQTVBZjd5VENHRTRjeSIsImRpY3QiOnsic2lnbmluIjp7InRpdGxlIjoiZnJlZUNvZGVDYW1wLm9yZyJ9fSwiZXh0cmFQYXJhbXMiOnsicHJvdG9jb2wiOiJvYXV0aDIiLCJyZXNwb25zZV90eXBlIjoiY29kZSIsInNjb3BlIjoib3BlbmlkIHByb2ZpbGUgZW1haWwiLCJfY3NyZiI6IkJVeUNNaEV3LTJrUXlWTWR5VTJYZHU0aVpJZm0wVy0tNEhmVSIsIl9pbnRzdGF0ZSI6ImRlcHJlY2F0ZWQiLCJzdGF0ZSI6Imc2Rm8yU0JJWm14UVgyVkZSa3h5Wm5RME4xbFZjMlJMY21WcllYVjZTblJ6V0ZaMVJhTjBhV1RaSUhCbldHNVRia1UxZURSSlJsQnZWRUZWVXpaZmVYWk1WR1pJTW0xa1YyNTFvMk5wWk5rZ1lWVkVkamxxVm5GVVpuaENVa1V4YkRZd1RrRTFRV1kzZVZSRFIwVTBZM2sifSwiaW50ZXJuYWxPcHRpb25zIjp7InByb3RvY29sIjoib2F1dGgyIiwicmVzcG9uc2VfdHlwZSI6ImNvZGUiLCJzY29wZSI6Im9wZW5pZCBwcm9maWxlIGVtYWlsIiwiX2NzcmYiOiJCVXlDTWhFdy0ya1F5Vk1keVUyWGR1NGlaSWZtMFctLTRIZlUiLCJfaW50c3RhdGUiOiJkZXByZWNhdGVkIiwic3RhdGUiOiJnNkZvMlNCSVpteFFYMlZGUmt4eVpuUTBOMWxWYzJSTGNtVnJZWFY2U25SeldGWjFSYU4wYVdUWklIQm5XRzVUYmtVMWVEUkpSbEJ2VkVGVlV6WmZlWFpNVkdaSU1tMWtWMjUxbzJOcFpOa2dZVlZFZGpscVZuRlVabmhDVWtVeGJEWXdUa0UxUVdZM2VWUkRSMFUwWTNrIn0sIndpZGdldFVybCI6Imh0dHBzOi8vY2RuLmF1dGgwLmNvbS93Mi9hdXRoMC13aWRnZXQtNS4xLm1pbi5qcyIsImlzVGhpcmRQYXJ0eUNsaWVudCI6ZmFsc2UsImF1dGhvcml6YXRpb25TZXJ2ZXIiOnsidXJsIjoiaHR0cHM6Ly9hdXRoLmZyZWVjb2RlY2FtcC5vcmciLCJpc3N1ZXIiOiJodHRwczovL2F1dGguZnJlZWNvZGVjYW1wLm9yZy8ifSwiY29sb3JzIjp7InBhZ2VfYmFja2dyb3VuZCI6IiNmZmZmZmYiLCJwcmltYXJ5IjoiIzBhMGEyMyJ9fQ==')))
        );

        params = Object.assign({
            domain: config.auth0Domain,
            clientID: config.clientID,
            redirectUri: config.callbackURL,
            scope: 'openid email',
            audience: 'https://' + config.auth0Domain + '/userinfo',
            responseType: 'code'
        }, config.internalOptions);

        webAuth = new auth0.WebAuth(params);
    }

    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }

    function passwordlessSendEmail() {

        var email = $('#email').val();
        if (isEmail(email)) {
            webAuth.passwordlessStart({
                connection: 'email',
                send: 'code',
                email: email
            }, function (err, res) {
                if (err) {

                    var generalErrorMessage = 'Oops...something is not right. Please go back to freeCodeCamp.org and try again.';
                    displayErrorMessage(generalErrorMessage);

                    console.log('err', err);
                }

                console.log('res', res);

                // Hide email input and any error messages, then show the code entry screen
                $('.enter-email').hide();
                removeErrorMessage();
                $('.enter-code').show();

            });

        } else {
            // Invalid email entered
            var emailErrorMessage = 'The email you entered is not valid. Please check and try again.';
            displayErrorMessage(emailErrorMessage);
        }
    }

    function passwordlessLogin() {

        var email = $('#email').val();
        var code = $('#code').val();
        webAuth.passwordlessLogin({
            connection: 'email',
            email: email,
            verificationCode: code
        }, function (err, res) {

            if (err) {

                console.log('error logging-in', err);

                var OTPErrorMessage = 'The code you entered is not valid. Please check the last OTP you received and try again.';
                displayErrorMessage(OTPErrorMessage);
            } else {
                // Remove error when correct OTP code entered
                removeErrorMessage();
            }
        });
    };

    function displayErrorMessage(errMsg) {
        $('.form-group').addClass('has-error');
        if ($('.form-group .help-block').length === 0) {
            $('.form-group').append(
                '<div class="help-block">' + errMsg + '</div>'
            );
        }
    }

    function removeErrorMessage() {
        $('.form-group').removeClass('has-error');
        $('.help-block').remove();
    }

    $('#login-email').on('click', function () {
        $('.social-signin-methods').hide();
        $('.passwordless-email').show();
        setupAuth0FromConfig();
    });

    $('#send-email-btn').on('click', function () {
        passwordlessSendEmail();
    });

    $('#send-code-btn').on('click', function () {
        passwordlessLogin();
    });

    $('#login-google').on('click', function () {
        setupAuth0FromConfig();
        webAuth.authorize({
            connection: 'google-oauth2'
        });
    });

    $('#login-github').on('click', function () {
        setupAuth0FromConfig();
        webAuth.authorize({
            connection: 'github'
        });
    });

    $('#login-facebook').on('click', function () {
        setupAuth0FromConfig();
        webAuth.authorize({
            connection: 'facebook'
        });
    });
</script>
<script>
    (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }
                ,
                i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        }
    )(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-55446531-1', 'auto');
    ga('require', 'displayfeatures');
    ga('send', 'pageview');
</script>
<!--End Script For redirect-->

</body>

</html>