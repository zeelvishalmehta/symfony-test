# symfony-test
 Code for Palindrome, Anagram and Pangram
 
<b>Technical Requirements</b><br><br>
    - PHP 7.3 or higher<br>
    - Install Composer using (https://getcomposer.org/download/), which is used to install PHP packages.<br>
    - Download Symfony using (https://symfony.com/download). This creates a binary called symfony that provides all the tools you need to develop and run your Symfony application locally.<br><br>
    
 <b>Installation</b><br>
 
      1) Go to xampp/htdocs.<br>
      2) Right click on htdocs open Gitbash cmd<br>
      3) Using composer create symfony project: <br>           
            - composer create-project symfony/skeleton symphart<br> 
      4) You can open symfony application using localhost://symphart/public. But we can run through virtual host.     
      4) Setup a virtual host<br>     
            - Go to xampp/apache/conf/extra/httpd-vhosts<br>     
            - At the end of file, httpd-vhosts make the following changes.<br> 
          <VirtualHost *:80><br>
            DocumentRoot "C:/xampp/htdocs/symphart/public"<br>
            ServerName symphart.test<br>
           </VirtualHost><br>
      - Edit the host file.<br>            
            1) open notepad file and run as administrator.<br>            
            2) open the host file and make the following changes at the end of file.<br>
                   127.0.0.1 symphart.test<br>
       - Restart apache server.<br>      
       - Now you can run symfony application using http://symphart.test.<br>
       - Lastly, you have to add .htaccess file inside public folder and write general htaccess code.
       
  <b>Notes:</b> You can check code for palindrome, anagram and pangram inside src/controller/CheckerController.php file.     
