Login using Google OAuth Login API

 ![image](https://user-images.githubusercontent.com/48545760/116288930-a0927400-a7af-11eb-979d-b3d534473b1f.png)

As we all know, in today's world of the internet, social media is an essential component of any web-based application. So, if your web application has a feature that allows users to log in using social media, it will attract more new users. Google has provided Google OAuth API for login with Google Account using PHP, which is very simple and helpful for you to incorporate login with Google Account into your Website. Users may use the Google Login API to log into a website using their Google account credentials without having to register on that website.

1. As the first step we need to get the client ID and client secret for the Google API 
First you need to login to the your Google account and type console.cloud.google.com .After that click on create new project link for create a new project. In here I have created the demo 1 project.

![image](https://user-images.githubusercontent.com/48545760/116288411-219d3b80-a7af-11eb-9403-877577ec13af.png)

2. After click on project select box, you will find newly created demo project, Now from the the left pane, OAuth console screen, Here you can define application name and click save button.
 
 ![image](https://user-images.githubusercontent.com/48545760/116289023-b6079e00-a7af-11eb-82b3-a27e76b4cd08.png)


3.Once you click the save button it will redirect to another page and select create credential button. 
 
 ![image](https://user-images.githubusercontent.com/48545760/116289058-c455ba00-a7af-11eb-8ddc-12b6208395ca.png)


4.Once you provided the project name as slit demo and the redirect URL ,click save button.
Then you will find the earth client ID and client secret, And keep those credentials for future use 
![image](https://user-images.githubusercontent.com/48545760/116289092-cddf2200-a7af-11eb-91b0-b4462f6d2d54.png)


5. Since I use PHP for create the webpage you will need to download ,Composer setup to check PHP dependencies .

![image](https://user-images.githubusercontent.com/48545760/116289137-d8012080-a7af-11eb-8293-64b117322bf2.png)

 
6. Install the composer setup and check whether that dependencies have installed correctly installed or not by running  the CMD and type composer .
Write the following command if if you have not install the Google API client library for PHP 
composer require google/apiclient:"^2.0"
 
 ![image](https://user-images.githubusercontent.com/48545760/116289171-e0595b80-a7af-11eb-8048-efba91b6988c.png)


7. For create the login page here we have using three PHP files config.php and the next one is index.php and logout.php
Index.php


8.I have used the XAMPP Apache server as the local server.
 
 ![image](https://user-images.githubusercontent.com/48545760/116289362-0d0d7300-a7b0-11eb-8926-76c5ffb01b1a.png)

9. Place the all the files  in a one folder and access it using the local host ,
![image](https://user-images.githubusercontent.com/48545760/116289419-1a2a6200-a7b0-11eb-9f20-d11445b1243c.png)

![image](https://user-images.githubusercontent.com/48545760/116289452-20204300-a7b0-11eb-8a25-a0fbca66a360.png)


Once you select the sign in with Google but it will redirect you to the Google sign in page 
![image](https://user-images.githubusercontent.com/48545760/116289490-29a9ab00-a7b0-11eb-97c9-0b8e99fcdea3.png)


 
 
 
 
