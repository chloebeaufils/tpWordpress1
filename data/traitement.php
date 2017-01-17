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

$fname = "tpWordpress1/data/Vagrantfile";
$fhandle = fopen($fname,"r");
$content = fread($fhandle,filesize($fname));

$content = str_replace("192.168.33.10", "localhost", $content);

if (is_writable($fname)) {

    // Dans notre exemple, nous ouvrons le fichier $fname en mode d'ajout
    // Le pointeur de fichier est placé à la fin du fichier
    // c'est là que $content sera placé
    if (!$fhandle = fopen($fname, 'r')) {
        echo "Impossible d'ouvrir le fichier ($fname)";
        exit;
    }

    // Ecrivons quelque chose dans notre fichier.
    if (fwrite($fhandle, $content) === FALSE) {
        echo "Impossible d'écrire dans le fichier ($fname)";
        exit;
    }

    echo "L'écriture de ($content) dans le fichier ($fname) a réussi";

    fclose($fhandle);

} else {
    echo "Le fichier $fname n'est pas accessible en écriture.";
}
