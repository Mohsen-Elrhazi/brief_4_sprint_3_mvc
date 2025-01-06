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
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Prix</th>
                <th scope="col">Quantity</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody class="text text-center">
            <?php 
    foreach ($products as $product) {
       echo $productManager->rendreRow($product);
    } 
    ?>
        </tbody>
    </table>
</div>