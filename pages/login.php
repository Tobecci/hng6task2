<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>TeamRocket | Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/	bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="http://fonts.googleapis.com/css?family=roboto">
    <link rel="stylesheet" type="text/css" href="./assets/css/main.css">
    <script type="text/javascript" src="assets/js/script.js"></script>
</head>

<body>

    <div class="container-fluid row">
        <div class="col-md-6 left-pane">
            <div id="team-roc-txt">TeamRocket
                <div id="dot"></div>
            </div>
            <center>
                <img style="width:90%" src="https://res.cloudinary.com/okafohenrie/image/upload/v1568773421/Illustration_eg8fta.png" id="illustration">
                <span class="ilstn-txt">
                    <div id="grp-dsc-txt1">Group Discussions</div>
                    <div id="grp-dsc-txt2">
                        Communicative situation that Allows Its Participant To Share Their Views And Opinions
                    </div>
                </span>
            </center>
        </div>
        <div class="col-md-6 right-pane">
            <div class="right">
                <div class="welcome-txt">
                    <h2>Hello,</h2>
                    <h2>Welcome back </h2>
                </div>
                <form action="controllers/login_handler.php" method="post" class="form">
                    <label for="username">Email</label><br>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Username/Email"  required>
                    <br>
                    <label for="password">Password</label><br>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password"  required>
                    <br>
                    <span id="fgt-psd"><a href="#">Forgot Password?</a></span>
                    <br>
                    <span class="check-item">
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember" id="rem-me">Remember me</label>
                    </span>
                    <br>
                    <center>
                        <input type="submit" value="Login" id="login-btn" class="btn btn-info">
                    </center>
                    <p class="signup-msg-link">
                        <span id="signupmsg"> New to TeamRocket?</span>
                        <a href="signup.php" id="signuplink">Signup now</a>
                        <p>
                </form>
            </div>
        </div>
    </div>

    
</body>

<?php
// if the entry is invalid ,control will be redirected back here...with additional information
//like an error messsage.Also, the invalid data entered will be retained
if (isset($_SESSION['username'])) {

    $script = "<script type=text/javascript>\n";
    $script .= "window.onload=function(){";

    $script .= "document.getElementById('error_message').firstChild.nodeValue='Invalid entry';\n";

    $script .= "document.getElementById('username').value ='";
    $script .= $_SESSION['username'];
    $script .= "';\n";

    $script .= "document.getElementById('password').value ='";
    $script .= $_SESSION['password'];
    $script .= "';\n";

    $script .= "}\n";
    $script .= "</script>";
    session_destroy();
    echo $script;
}
?>

</html>