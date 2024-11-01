<?php
// URL de la recherche Facebook, encodée pour gérer les espaces
$url_recherche = 'https://www.facebook.com/search/top?q=Mont+Carmel+Academy';
 
// Rediriger l'utilisateur vers l'URL de recherche
header('Location: ' . $url_recherche);
exit;