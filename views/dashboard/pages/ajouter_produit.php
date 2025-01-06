    <?php 
        require_once '../../controllers/ProductController.php';
        require_once '../../models/Product.php';


     $productManager = new ProductManager();

    //  function ajouter
     if (isset($_POST['ajouter'])) {
        if(empty($_POST['name']) || empty($_FILES['image']['name'])|| empty($_POST['prix']) || empty($_POST['quantity'])){
            echo "<div class='text text-center alert alert-danger ms-auto me-auto'>remplir tous les champs</div>";
        }else{
            $image = file_get_contents($_FILES['image']['tmp_name']); // Lire l'image en binaire
            if(!$image){
            echo "<div class=' text text-center alert alert-success '>erreur lors de lecture image</div>";
                exit();
            }
            $product = new Product($_POST['name'], $image, $_POST['prix'],$_POST['quantity']);
            $productManager->save($product);
            // echo "<div class=' text text-center alert alert-success '>le produit a ete ajouté</div>";
        }
     }
    ?>
    <div class="content">

        <?php
    include './formProduit/form.php';
    ?>

    </div>