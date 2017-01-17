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
$contactform7 = $_POST["contactform7"];
$duplicator = $_POST["duplicator"];
$wordfence = $_POST["wordfence"];


exec("curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar");
exec("php wp-cli.phar --info");
exec("chmod +x wp-cli.phar");
exec("sudo mv wp-cli.phar /usr/local/bin/wp");
exec("wp core download ");
exec("wp core config --dbname=".$dbname." --dbuser=root --dbpass=0000 --locale=en_EN ");
exec("wp db create " . $dbname);

exec("wp core install --url=" . $url . " --title=" . $title . " --admin_user=root --admin_password=0000 --admin_email=" . $admin_email . " --skip-email ");

exec("wp plugin delete akismet");
exec("wp theme delete twenty*");
exec("wp plugin delete hello-dolly");
exec("wp plugin delete akismet");

exec("wp install activello --activate");


if ($contactform7 == 'on'){
   exec("wp plugin install contact-form-7 --activate");
}
if ($duplicator == 'on'){
    exec("wp plugin install Duplicator --activate");
}
if ($wordfence == 'on'){
    exec("wp plugin install Wordfence Security --activate");
}
?>
