#!/bin/bash
# Indique au système que l'argument qui suit est le programme utilisé pour exécuter ce fichier
# En règle générale, les "#" servent à mettre en commentaire le texte qui suit comme ici
echo "Déplace les fichiers du git clone"
echo "--------------------------------------------"

cp -R ../../tpWordpress1/* ../../../html/
rm -R tpWordpress1/*
