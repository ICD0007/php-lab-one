<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>::Login::</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="/mywebapp/css/main.css" type="text/css">
    <link rel="shortcut icon" href="/mywebapp/images/favicon.ico?v=2" type="image/x-icon"/>
</head>
<body>
<div id="wrapper">
    <div id="maincontent">

        <div id="header">
            <div id="logo" class="left">
                <a href="/mywebapp">ICD0007</a>
            </div>
            <div class="right marT10">
                <b>
                    <a href="/mywebapp/login.php">Login</a> | <a href="/mywebapp/register.html">Register</a>
                </b>
            </div>
            <br><br>
            <ul class="topmenu">
                <li><a href="/mywebapp">Home</a></li>
                <li><a href="/mywebapp">Student Lists</a></li>
                <li><a href="/mywebapp">Contact Us</a></li>
            </ul>
            <br>
            <div class="banner"><p></p></div>
            <br class="clear"/>
        </div>

        <div class="content">
            <br/>
            <div class="content-area">

                <h2>Login</h2>
                <br/>

                <b>Please enter your information.</b><br/><br/>
                <form action="/mywebapp/application/loginHandler.php" method="POST">
                    <?php
                        if (isset($_SESSION['error_message'])) {
                            echo '<p>' . $_SESSION['error_message'] . '</p>';
                        }
                        if (isset($_SESSION['success_message'])) {
                            echo '<p>' . $_SESSION['success_message'] . '</p>';
                        }
                     ?>
                    <p>
                        <label>Email: </label>
                        <input type="text" name="data[email]" />
                    </p>
                    <p>
                        <label>Password: </label>
                        <input type="password" name="data[password]" />
                    <p>
                    <p>
                        <input type="submit" name="data[submit]" value="Submit" class="button marL10"/>
                    </p>
                </form>

                <br>
                <br>
                <br>
                <a href="resetpassword.php">Forgot password</a>
            </div>
        </div>

    </div><!-- maincontent -->
    <br>
    <div id="footer">
        <div class="footer">
            Copyright &copy; 2018 ICD0007. <br/>
            <a href="/mywebapp">Home</a> | <a href="about">About Us</a> | <a href="contact">Contact Us</a> <br/>
            <span class="contact">Tel: +372-1111111&nbsp;
			Email:icd007@icd0007.com</span>
        </div>
    </div><!-- footer -->

</div><!-- wrapper -->
<?php
unset($_SESSION['error_message']);
unset($_SESSION['success_message']);
?>
</body>
</html>
