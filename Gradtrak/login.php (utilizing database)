<?php
require_once "db.php";
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
    header("Location: student.php");
}

?>
<!-- Source code for login.php: https://shib.csub.edu/idp/Authn/External?conversation=e1s1 --> 
<html lang="en">
<head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />

    <title>CSUB Shib Login</title>
    <link rel="stylesheet" type="text/css" href="login.css" media="screen">
    <link rel="stylesheet" type="text/css" href="login2.css" media="screen">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="login3.css" media="screen">

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


    <!-- CSB Custom Javascript to add google analytics -->
    <script src="https://www.csub.edu/static/js/google-analytics.js"></script>
<script language="JavaScript" type="text/javascript">
var uri = "";
var globActionUrl = "";

<?php

if(isset($_POST) && !empty($_POST)) {
    if (!empty($_POST['NetID']) && !empty($_POST['Password'])) {
        $credentials = array_map('sanitize', $_POST);
        $db = get_mysqli_connection();
        $stmt = $db->prepare("SELECT * FROM StudentInfo WHERE NetID = ?");
        $stmt->bind_param("s", $credentials['NetID']);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_all(MYSQLI_ASSOC);

           
  
        if (count($row) > 0) {
            $hash = $row[0]['Password'];
        }

        if (password_verify($_POST['Password'], $hash)) {
            $login_username = $_POST['NetID'];
            $_SESSION['NetID'] = $login_username;
            $_SESSION['Name'] = $row['Name'];
            $_SESSION['active'] = true;
            $_SESSION['logged_in'] = true;				
            header("Location: student.php");
        }

else {
    
        }
    }
} 

?>
function getPath(url) {
    var parser = document.createElement('a');
    parser.href = url;
    var path = parser.pathname;
    var search = parser.search;
    path = path + search.substring(0, search.indexOf("&"));
    return path;
}

function reLogin() {
    location.replace(uri + "&actionUrl=" + globActionUrl);
}

function setFocus(elId) {
    var el;
    if (elId == null || elId == "null" || elId == "") {
        var inputs = document.getElementsByTagName("input")
            for (var i = 0; i < inputs.length; i++) {
                if (inputs[i].type != "hidden" && !inputs[i].disabled) {
                    el = inputs[i];
                    break;
                }
            }
    }
    else
        el = document.getElementById(elId);

    if (el && el.focus && !el.disabled)
        el.focus();
}

</script>
</head>

<body>
     <div id="spinner" class="progress" style="display:none;">
    <div class="indeterminate"></div>
</div>


    <div class="containerwrap">

        <div class="container">
            <div class="logonbody">
                <div id="loginPanel" class="logonloc wrapper">


                    <form  method="POST" id="loginform" name="loginform" autocomplete="off">


                            <input type="hidden" name="launchKeyAuthenticated" />
                            <div id="loginformaarea" class="loginUserIdArea formContent">
                                <div class="csubLoginHeader">
                                    <img src="csub-logo.jpg" alt="CSUB Seal" id="footerLogo"
                                        class="img-fluid">
                                </div>

                                <div id="duoSection" class="row justify-content-sm-center py-2 m-0">
                                    <div class="col-sm-2 col-xs-12 center">
                                        <a ref="https://www.csub.edu/2step/duoapp/" target="_blank">
                                            <img src="duologo.jpg" alt="Duo Logo">
                                        </a>
                                    </div>

                                    <div class="col-sm-6 text-center">
                                    <a class="duoLink underlineHover" href="https://www.csub.edu/2step/duoapp/" target="_blank">
                                        Enroll in 2Step today by downloading Duo Mobile
                                    </a>
                                    </div>
                                </div>

                                <div class="csubLoginBody">
                                    <table class="sectionbodytext" cellspacing="5">
                                        <tbody>

                                            <tr>
                                                <td class="maxwidth">
                                                    <label for="NetID" class="sr-only">NetID (e.g.jdoe)</label>
                                                    <input name="NetID"  type="text" class="loginInput" placeholder="NetID (e.g.jdoe)" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="maxwidth">
                                                    <label for="Password" class="sr-only">Password</label>
                                                    <input name="Password" type="password" class="loginInput" placeholder="Password" />
                                                </td>
                                            </tr>

                                            <tr>
                                                <td></td>
                                                <td colspan="2">
                                                    <div align="right" style="text-align:left;padding-right:5px">
                                                        <span id="launchKeyWaitTxt" class="resendText" style="display:none;">
                                                        Please continue authentication on your mobile device.<br />
                                                        </span>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                            <tr id="loginBtnRow">
                                                <td colspan="2">
                                                    <input id="loginform:loginBtn" name="loginform:loginBtn" value="Login" class="loginButton" type="submit">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div id="sysMsg" class="alert alert-info d-none" role="alert">
                                    <h1 class="alert-heading"></h1>
                                    <p class="mb-0"></p>
                                </div>



                            </div>
                            <div id="formFooter">
                                <a class="underlineHover" href="http://2step.csub.edu/">
                                    More Information about 2Step
                                </a>
                                <br />
                                <a class="underlineHover" href="https://csub.edu/lookup/">
                                    Don't know your NetID?
                                </a>
                                <br />
                                <a class="underlineHover" href="https://csub.edu/accounts/">
                                    Forgot your password?
                                </a>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
