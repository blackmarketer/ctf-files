<?php

$password = "UDQ1NVcwUkQ";
$username = "VTUzUk40TTM";
$flag= "<br><br><h1 align='center' style='color: red'>hehe{y0u_g0t_th3_fl4g_h3h3}</h1>";
$url = urldecode($_SERVER['REQUEST_URI']);
$url = parse_url($url, PHP_URL_QUERY);
if (preg_match("/[#$%^*()+\-\[\]\';,.\/{}|:<>?~\\\\]/", $url))
{
        die("<html><header class='intro'><h1>403</h1><p>You... you can't have that.</p></header><style>.intro{text-align:center;color: #fff;font-family: monospace;overflow: hidden;white-space: nowrap;margin: 0 auto;letter-spacing: .15em;}body {background: #333;padding-top: 5em;display: flex;justify-content: center;}</style></html>");
}
if ( isset($_GET['username']) and isset($_GET['pass']) ) {
                if (strcmp($_GET['username'], $username) == 0 )
{
                if (strcmp($_GET['pass'], $password) == 0 ) 
                        print($flag);
                else 
                        print("<br><br><h1 align='center' style='color: red'>Wrong Credentials</h1>"); 
}
        else
                print ("<br><br><h1 align='center' style='color: red'>Wrong Credentials</h1>");
}

?>



<!--



$url = urldecode($_SERVER['REQUEST_URI']);
$url = parse_url($url, PHP_URL_QUERY);
if (preg_match("/[#$%^*()+\-\[\]\';,.\/{}|:<>?~\\\\]/", $url))
{
        die("blocked bye:)");
}

if ( isset($_GET['username']) and isset($_GET['pass']) ) {
                if (strcmp($_GET['username'], $username) == 0 )
{
                if (strcmp($_GET['pass'], $password) == 0 ) 
                        print($flag);
                else 
                        print("Wrong Credentials"); 
}

        else
                print ("Wrong Credentials");
}
  

                      
-->














































































































































































<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<!-- css --><!-- css --><!-- css --><!-- css --><!-- css --><!-- css -->

<link rel="icon" type="image/png" href="favicon.ico" />
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="icon-font.min.css">
<link rel="stylesheet" type="text/css" href="animate.css">
<link rel="stylesheet" type="text/css" href="hamburgers.min.css">
<link rel="stylesheet" type="text/css" href="animsition.min.css">
<link rel="stylesheet" type="text/css" href="select2.min.css">
<link rel="stylesheet" type="text/css" href="daterangepicker.css">
<link rel="stylesheet" type="text/css" href="util.css">
<link rel="stylesheet" type="text/css" href="main.css">

<!-- css --><!-- css --><!-- css --><!-- css --><!-- css --><!-- css -->



</head>
<body>

<!-- username  -->
<div class="limiter">
<div class="container-login100">
<div class="wrap-login100 p-t-50 p-b-90">
<form class="login100-form validate-form flex-sb flex-w">
<span class="login100-form-title p-b-51">
Login
</span>
<div class="wrap-input100 validate-input m-b-16" data-validate="Username is required">
<input class="input100" type="text" name="username" placeholder="Username">
<span class="focus-input100"></span>
</div>
<!-- username  -->




<!-- password  -->
<div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
<input class="input100" type="password" name="pass" placeholder="Password">
<span class="focus-input100"></span>
</div>
<!-- password  -->





<div class="flex-sb-m w-full p-t-3 p-b-24">
<div class="contact100-form-checkbox">
<input class="input-checkbox100" id="ckb1" type="checkbox" name="rememberme">
<label class="label-checkbox100" for="ckb1">
Remember me
</label>
</div>
</div>
<div class="container-login100-form-btn m-t-17">
<button class="login100-form-btn">
Login
</button>
</div>
</form>
</div>
</div>
</div>
<div id="dropDownSelect1"></div>
<style>img[src*="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
display: none;}</style>

<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
</body>
</html>
