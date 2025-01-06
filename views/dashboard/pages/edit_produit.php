<?php
//      require_once '../../controllers/ProductController.php';
//      require_once '../../models/Product.php';
     
// if(isset($_GET['edit'])){
//     $id=$_GET['edit'];

//     $conn=Database::getConnection();
//     $productManager=new ProductManager();
    
//     $stmt=$conn->prepare("select name, prix, quantity from produits where id=:id");
//     $stmt->bindParam(':id',$id);
//     $stmt->execute();

//     $product = $stmt->fetch(PDO::FETCH_ASSOC);
    
//  // Mettre à jour le produit après soumission du formulaire
//  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $name = $_POST['name'];
//     $price = $_POST['prix'];
//     $quantity = $_POST['quantity'];

//     // Gérer l'image (optionnelle)
//     $image = null;
//     if (isset($_FILES['image']) && $_FILES['image']['tmp_name']) {
//         $image = file_get_contents($_FILES['image']['tmp_name']);
//     }

//     // Créer l'objet produit
//     $updatedProduct = new Product($name, $image, $price, $quantity, $id);

//     // Mettre à jour dans la base de données
//     try {
//         $productManager->edit($updatedProduct);
//         echo "Produit modifié avec succès.";
//     } catch (PDOException $e) {
//         echo "Erreur lors de la modification : " . $e->getMessage();
//     }
// }

    
// }


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
                <form action="" method="post">
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

                    <button type=" submit" name="ajouter">Modifier</button>
                </form>
            </div>
        </div>

    </body>

    </html>

</div>