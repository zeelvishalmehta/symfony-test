# symfony-test
 Code for Palindrome, Anagram and Pangram
 
<b>Technical Requirements</b><br><br>
    - PHP 7.3 or higher<br>
    - Install Composer using (https://getcomposer.org/download/), which is used to install PHP packages.<br>
    - Download Symfony using (https://symfony.com/download). This creates a binary called symfony that provides all the tools you need to develop and run your Symfony application locally.<br><br>
    
 <b>Installation</b><br>
 
      1) Go to xampp/htdocs.
      2) Right click on htdocs open Gitbash cmd
      3) Using composer, create a new symfony project
            - composer create-project symfony/skeleton symphart
      4) You can open symfony application using localhost://symphart/public. But we can run through virtual host.     
      5) Setup a virtual host
            - Go to xampp/apache/conf/extra/httpd-vhosts
            - At the end of  httpd-vhosts file make the following changes.
              <VirtualHost *:80> <br>
              DocumentRoot "C:/xampp/htdocs/symphart/public" <br>
              ServerName symphart.test <br>
              </VirtualHost>
              
            - Edit the host file.<br>
                 a) open notepad file and run as administrator.           
                 b) open the host file and make the following changes at the end of file.
                    127.0.0.1 symphart.test
       6) Restart apache server.<br>      
       7) Now you can run symfony application using your servername that assign in virtual host file (eg:http://servername).<br>
       8) Lastly, you have to add .htaccess file inside public folder and write general htaccess code.
       
  <b>Notes:</b> There is a below github url for reviewing the code for palindrome, anagram and pangram.<br>
                •	https://github.com/zeelvishalmehta/symfony-test/blob/main/src/Controller/CheckerController.php
    
