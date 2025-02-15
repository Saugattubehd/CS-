<html>

<head>
    <meta charset="utf-8">
    <title>Neo Wallet :Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <script src="script.js"></script>
    <div class="login">
        <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
            <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
                <h1><a href="#" rel="dofollow"> Neo Wallet</a></h1>
            </div>
            <div class="formbg" id="login-form">
                <div class="formbg-inner padding-horizontal--48">
                    <span class="padding-bottom--15 ">Sign in to your account</span>
                    <form id="login" action="database.php" method="POST">
                        <div class="field padding-bottom--24">
                            <label for="email">Email</label>
                            <input type="email" name="email" required>
                        </div>
                        <div class="field padding-bottom--24">
                            <div class="grid--50-50">
                                <label for="password">Password</label>
                            </div>
                            <input type="password" name="password" required>
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
                           <input type="submit" name="login" class="btn" value="Login in" >
                        </div>
                        <div class="field">
                            <a class="ssolink" href="register.php" id="registerbtn">Sign Up Instead?</a>
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
        </dv>
    </div>

</body>

</html>