 <?php
     require_once '../../controllers/ProductController.php';
     require_once '../../models/Product.php';
     
if(isset($_GET['edit'])){
    $id=$_GET['edit'];

    $conn=Database::getConnection();
    $productManager=new ProductManager();
    
    $stmt=$conn->prepare("select * from produits where id=:id");
    $stmt->execute([
        ':id'=>$id
    ]);

    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    if(!$product){
    die ("<div class='text text-center alert alert-danger ms-auto me-auto'>Erreur lors de recupération les données de base de données</div>");
        // exit;
    }else{
    
 // recuperer les valeurs de form
 if (isset($_POST['modifier'])) {
    $name = $_POST['name'];
    $prix = $_POST['prix'];
    $quantity = $_POST['quantity'];
    
   if(empty($name) || empty($prix) || empty($quantity)){
    echo "<div class='text text-center alert alert-danger ms-auto me-auto'>remplir tous les champs</div>";
   }else{
    
    if ($_FILES['image']['tmp_name']) {
        $image = file_get_contents($_FILES['image']['tmp_name']);
    }else{
        $image=$product['image'];
    }
    
    // creer new produit avec nouveaux valeurs
    $updatedProduct = new Product($name, $image, $prix, $quantity,$id);
    // Mettre a jour dans la base de donnees
        $productManager->edit($updatedProduct);
        
   // Recharger les nouvelles valeurs depuis la base de donnees
   $stmt = $conn->prepare("SELECT * FROM produits WHERE id = :id");
   $stmt->execute([':id' => $id]);
   $product = $stmt->fetch(PDO::FETCH_ASSOC);
        echo "<div class=' text text-center alert alert-success '>le produit a ete modifier</div>";
}
}
}
}

?>

 <div class="content">
     <!DOCTYPE html>
     <html lang="fr">

     <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="../../assets/css/dashboard/formroduit.css">

         <title>Formulaire de Produit</title>

     <body>

         <div class="produit-container">
             <h1>Modifier le produit</h1>

             <div class="form-container">
                 <form action="" method="post" encType="multipart/Form-data">
                     <div class="form-group">
                         <label for="name">Nom du produit :</label>
                         <input type="text" id="name" name="name" value="<?php echo $product['name']; ?>">
                     </div>

                     <div class="form-group">
                         <label for="image">Image du produit :</label>
                         <input type="file" id="image" name="image">
                     </div>

                     <div class="form-group">
                         <label for="price">Prix :</label>
                         <input type="number" id="price" name="prix" value="<?php echo $product['prix'];?>">
                     </div>

                     <div class="form-group">
                         <label for="quantity">Quantité :</label>
                         <input type="number" id="quantity" name="quantity" min="1"
                             value="<?php echo $product['quantity']; ?>">
                     </div>

                     <button type=" submit" name="modifier">Modifier</button>
                 </form>
             </div>
         </div>

     </body>

     </html>

 </div>