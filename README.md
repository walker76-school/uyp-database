## Preview

To use this project, download Xampp

Navigate to <XamppInstall>/apache/conf/httpd.conf and change the lines 

DocumentRoot "<XamppInstall>/htdocs/"
<Directory "<XamppInstall>/htdocs/">

to the following

DocumentRoot "<ProjectInstall>"
<Directory "<ProjectInstall>">

Once you've configured Xampp, open the Xampp dashboard and run Apache once it's installed

After running Apache, navigate to https://localhost 
