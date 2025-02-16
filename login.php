<html>

<head>
    <meta charset="utf-8">
    <title>Neo Wallet :Login/Register</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.css"
        integrity="sha512-GmZYQ9SKTnOea030Tbiat0Y+jhnYLIpsGAe6QTnToi8hI2nNbVMETHeK4wm4MuYMQdrc38x+sX77+kVD01eNsQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .hidden {
            display: none;
        }

        .fade-in {
            animation: fadeIn 0.5s;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        .input-container {
    position: relative;
}

.input-container i {
    position: absolute;
    right: 16px;
    top: 50%;
    transform: translateY(-50%);
    color: #000;
}
    </style>
</head>

<body>
    <script src="script.js"></script>
    <div class="login">
        <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
            <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
                <h1><a href="#" rel="dofollow"> Neo Wallet</a></h1>
            </div>
            <div class="formbg" id="form-container" style="border-radius: 50px;">
                <div class="formbg-inner padding-horizontal--48">
                    <span class="padding-bottom--15" id="form-title">Sign in to your account</span>
                    <form id="login-form" action="database.php" method="POST" class="fade-in">
                        <div class="field padding-bottom--24">
                            <label for="email">Email</label>
                            <div class="input-container">
                                <input type="email" name="email" required>
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="field padding-bottom--24">
                            <div class="grid--50-50">
                                <label for="password">Password</label>
                            </div>
                            <div class="input-container">
                                <input type="password" name="password" required>
                                <i class="fas fa-lock" aria-hidden="true"></i>
                            </div>
                            <div class="reset-pass">
                                <a href="#">Forgot your password?</a>
                            </div>
                        </div>
                        <div class="field field-checkbox padding-bottom--24 flex-flex align-center">
                            <label for="checkbox">
                                <input type="checkbox" name="checkbox"> Stay signed in for a week
                            </label>
                        </div>
                        <div class="field padding-bottom--24">
                            <input type="submit" name="login" class="btn" value="Login">
                        </div>
                        <div class="field">
                            <a class="ssolink" href="#" id="switch-to-register">Sign Up Instead?</a>
                        </div>
                    </form>

                    <form id="register-form" action="database.php" method="POST" class="hidden fade-in">
                        <div class="field padding-bottom--24">
                            <label for="name">Full Name</label>
                            <div class="input-container">
                                <input type="text" name="name" required>
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="field padding-bottom--24">
                            <label for="phone">Phone Number</label>
                            <div class="input-container">
                                <input type="number" name="phone" required>
                                <i class="fa fa-mobile" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="field padding-bottom--24">
                            <label for="email">Email</label>
                            <div class="input-container">
                                <input type="email" name="email" required>
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="field padding-bottom--24">
                            <div class="grid--50-50">
                                <label for="password">Password</label>
                            </div>
                            <div class="input-container">
                                <input type="password" name="password" required>
                                <i class="fas fa-lock" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="field padding-bottom--24">
                            <input type="submit" name="register" value="Sign Up" class="btn">
                        </div>
                        <div class="field">
                            <a class="ssolink" href="#" id="switch-to-login">Already have an account? Login</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="footer-link padding-top--24">
                <div class="listing padding-top--24 padding-bottom--24 flex-flex center-center">
                    <span><a href="#">©Neo Wallet</a></span>
                    <span><a href="#">Contact</a></span>
                    <span><a href="#">Privacy & terms</a></span>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('switch-to-register').addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('login-form').classList.add('hidden');
            document.getElementById('register-form').classList.remove('hidden');
            document.getElementById('form-title').textContent = 'Register your account';
        });

        document.getElementById('switch-to-login').addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('register-form').classList.add('hidden');
            document.getElementById('login-form').classList.remove('hidden');
            document.getElementById('form-title').textContent = 'Sign in to your account';
        });
    </script>
</body>

</html>
