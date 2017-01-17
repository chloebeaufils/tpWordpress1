<?php
$NomSite = $_POST["NomSite"];
$dbname = $_POST["dbname"];
$dbuser = $_POST["dbuser"];
$dbpass = $_POST["dbpass"];
$url = $_POST["url"];
$title = $_POST["title"];
$admin_user = $_POST["admin_user"];
$admin_password = $_POST["admin_password"];
$admin_email = $_POST["admin_email"];

var_dump($NomSite);

exec("rm -R ".$NomSite);

exec("mkdir ". $NomSite);
exec("cd " . $NomSite . "/ && curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar");
exec("cd " . $NomSite . "/ && php wp-cli.phar --info");
exec("cd " . $NomSite . "/ && chmod +x wp-cli.phar");
exec("cd " . $NomSite . "/ && sudo mv wp-cli.phar /usr/local/bin/wp");
exec("cd " . $NomSite . "/ && wp core download ");
exec("cd " . $NomSite . "/ && wp core config --dbname=".$dbname." --dbuser=root --dbpass=0000 --locale=en_EN ");
exec("cd " . $NomSite . "/ && wp db create " . $dbname);

exec("cd " . $NomSite . "/ && wp core install --url=" . $url . " --title=" . $title . " --admin_user=root --admin_password=0000 --admin_email=" . $admin_email . " --skip-email ");

?>
