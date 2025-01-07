<div class="content">
    <?php 
        require_once '../../controllers/ProductController.php';
        require_once '../../models/Product.php';
        
    $productManager=new ProductManager();
     
    //function delete
     if(isset($_GET['delete'])){
        $productManager->softDelete($_GET['delete']);
        echo "<div class=' text text-center alert alert-success '>le produit a ete supprimer</div>";

     }
     
    $products= $productManager->displayAll();
    
    ?>
    <table class="table">
        <thead class="text text-center">
            <tr>
                <th scope="col-2">Name</th>
                <th scope="col-2">Image</th>
                <th scope="col-2">Prix</th>
                <th scope="col-2">Quantity</th>
                <th scope="col-2">Actions</th>
            </tr>
        </thead>
        <tbody class="text text-center text align-middle">
            <?php 
         foreach ($products as $product) {
         echo $productManager->rendreRow($product);
         } 
    ?>
        </tbody>
    </table>
</div>