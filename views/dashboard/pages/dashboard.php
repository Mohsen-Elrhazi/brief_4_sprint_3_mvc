    <?php 
        require_once '../../controllers/ProductController.php';
        require_once '../../models/Product.php';


     $productManager = new ProductManager();

     if (isset($_POST['ajouter'])) {
        if(empty($_POST['name']) || empty($_POST['image'])|| empty($_POST['prix']) || empty($_POST['quantity'])){
            echo "remplir tous les champs";
        }else{
            
            $product = new Product($_POST['name'], $_POST['image'], $_POST['prix'],$_POST['quantity']);
            $productManager->save($product);
        }
        echo "button clicked";

     }else{
        echo "butto nnon clicked";
        
     }
    ?>
    <div class="content">

        <?php
    include './formProduit/form.php';
    ?>

    </div>