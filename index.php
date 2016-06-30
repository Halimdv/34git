<?php

// Pour lire un fichier avec fopen, j'ouvre le fichier
$file = fopen('texte.txt', "r");
// Avec fread, je peux lire le fichier, je dois lui donner une taille
var_dump(fread($file, filesize('texte.txt')));
// Je ferme le fichier
fclose($file);

// Pour écrire dans un fichier
$file = fopen("texte.log", "a");
fwrite($file, date("Y-m-d H:i:s")." : Le script a été ouvert\r\n");
fclose($file);

// Fonctions équivalentes
$content = file_get_contents("texte.log");
$content .=  date("Y-m-d H:i:s")." : FPC Le script a été ouvert\r\n";
file_put_contents("texte.log", $content);

// Pour supprimer un fichier
// unlink("texte.log");

// Vérifier si un fichier existe ou non
if(file_exists("texte.log")){
	echo "Le fichier de log existe";
}

// Vérifier si un répertoire existe
if(!is_dir('var')){
	mkdir('var');
}

// Modifier les permissions d'un fichier
chmod("texte.txt", 0777);

// Déplacer ou renommer un fichier
rename('texte.log', 'var/texte.log');

// Récupérer le nom du fichier courant
// Récupérer le chemin du fichier courant
echo __DIR__;
echo dirname(__FILE__); // Equivalent à echo __DIR__
echo __FILE__;

// Récupérer la date de dernière modification d'un fichier
echo date("Y-m-d H-i-s", filemtime("var/texte.log") + 7200 ) ;

// Copier un fichier
copy("var/texte.log", "var/texte.log.backup");
?>

