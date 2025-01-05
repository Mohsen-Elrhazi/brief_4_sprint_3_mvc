<div class="content">
    <!-- <h1>Bienvenue sur le Dashboard</h1>
    <p>Contenu principal de la page produit.</p> -->

    <?php 
        require_once '../../controllers/ProductController.php';
    $ProductManager=new ProductManager();
    $products= $ProductManager->displayAll();
   
    
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
       echo $ProductManager->rendreRow($product);
    } 
    ?>
        </tbody>
    </table>
</div>