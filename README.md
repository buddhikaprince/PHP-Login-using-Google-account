Login using Google OAuth Login API
 
As we all know, in today's world of the internet, social media is an essential component of any web-based application. So, if your web application has a feature that allows users to log in using social media, it will attract more new users. Google has provided Google OAuth API for login with Google Account using PHP, which is very simple and helpful for you to incorporate login with Google Account into your Website. Users may use the Google Login API to log into a website using their Google account credentials without having to register on that website.

1. As the first step we need to get the client ID and client secret for the Google API 
First you need to login to the your Google account and type console.cloud.google.com .After that click on create new project link for create a new project. In here I have created the demo 1 project.

 
2. After click on project select box, you will find newly created demo project, Now from the the left pane, OAuth console screen, Here you can define application name and click save button.
 

3.Once you click the save button it will redirect to another page and select create credential button. 
 

4.Once you provided the project name as slit demo and the redirect URL ,click save button.
Then you will find the earth client ID and client secret, And keep those credentials for future use 
 .
 


5. Since I use PHP for create the webpage you will need to download ,Composer setup to check PHP dependencies .
 
6. Install the composer setup and check whether that dependencies have installed correctly installed or not by running  the CMD and type composer .
Write the following command if if you have not install the Google API client library for PHP 
composer require google/apiclient:"^2.0"
 

7. For create the login page here we have using three PHP files config.php and the next one is index.php and logout.php

Index.php

<?php

include('config.php');

$login_button = '';

if(isset($_GET["code"]))
{
 
 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

 if(!isset($token['error']))
 {

  $google_client->setAccessToken($token['access_token']);

  $_SESSION['access_token'] = $token['access_token'];

  $google_service = new Google_Service_Oauth2($google_client);

  $data = $google_service->userinfo->get();

  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
 }
}

//This is for check user has login into system by using Google account, if User not login into system then it will execute if block of code and make code for display Login link for Login using Google account.
if(!isset($_SESSION['access_token']))
{
 //Create a URL to obtain user authorization
 $login_button = '<a href="'.$google_client->createAuthUrl().'"><img src="sign-in-with-google.png" /></a>';
}

?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>PHP Login using Google Account</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
  
 </head>
 <body>
  <div class="container">
   <br />
   <h2 align="center">PHP Login using Google Account</h2>
   <br />
   <div class="panel panel-default">
   <?php
   if($login_button == '')
   {
    echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
    echo '<img src="'.$_SESSION["user_image"].'" class="img-responsive img-circle img-thumbnail" />';
    echo '<h3><b>Name :</b> '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h3>';
    echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3>';
    echo '<h3><a href="logout.php">Logout</h3></div>';
   }
   else
   {
    echo '<div align="center">'.$login_button . '</div>';
   }
   ?>
   </div>
  </div>
 </body>
</html>


Config.php
<?php

//config.php

require_once 'vendor/autoload.php';

$google_client = new Google_Client();

$google_client->setClientId('897301713373-40i4qb63f1ceo9oio8oujmc0amkk397i.apps.googleusercontent.com');

$google_client->setClientSecret('ueTMefNcdcwruWkFmly7tkWf');

$google_client->setRedirectUri('http://localhost/test2/index.php');

$google_client->addScope('email');

$google_client->addScope('profile');

 
session_start();

?>

Logout.php
<?php

//logout.php

include('config.php');

//Reset OAuth access token
$google_client->revokeToken();

//Destroy entire session data.
session_destroy();

//redirect page to index.php
header('location:index.php');

?>

8.I have used the XAMPP Apache server as the local server.
 
9. Place the all the files  in a one folder and access it using the local host ,


 










Once you select the sign in with Google but it will redirect you to the Google sign in page ,

 
 
 
 
