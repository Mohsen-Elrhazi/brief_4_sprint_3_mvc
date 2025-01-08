<?php
    $titre="dashboard";
 
  
    
include './layouts/header.php';
include './layouts/sidebar.php';
include './layouts/section.php';
include './layouts/navbar.php';
include './layouts/homeContent.php';

// Recuperer la page depuis l'URL
$page = $_GET['page'] ?? 'ajouter_produit';

switch ($page) {
 case 'edit_produit':
include './pages/edit_produit.php';
break;
case 'produit':
include './pages/produit.php';
break;
case 'commande':
include './pages/commande.php';
break;
case 'client':
include './pages/client.php';
break;
case 'analyses':
    $titre="analyses";
include './pages/analyses.php';
break;
case 'stock':
include './pages/stock.php';
break;
case 'utilisateur':
include './pages/utilisateur.php';
break;
case 'messages':
include './pages/messages.php';
break;
case 'configuration':
include './pages/configuration.php';
break;
case 'logout':
echo "<div class='content'>
    <h2>Déconnexion</h2>
    <p>Vous avez été déconnecté.</p>
</div>";
break;
case 'ajouter_produit':
default:
include './pages/ajouter_produit.php';
break;
}

include './layouts/endHomeContent.php';
include './layouts/endSection.php';

include './layouts/footer.php';


?>