<?php  
require_once '../../config/config.php'; 
// if (!class_exists('Database')) {
//     echo('Class Database not found!');
// }else{
//     echo('Class Database found!');
// }

  require_once '../../models/Product.php'; 
//   if (!class_exists('Product')) {
//     echo('Class Product not found!');
// }else{
//     echo('Class Product found!');
// }




class ProductManager {
    

    public function displayAll() {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("SELECT id,  name,image, prix, quantity FROM produits where supprime=0");
        $stmt->execute(); 
        $data = [];
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($products as $product) {
            $data[] = new Product($product['name'],$product['image'],$product['prix'], $product['quantity'],$product['id']);
        }

        return $data;
    }

    public function save(Product $product) {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("INSERT INTO produits (name, image, prix, quantity) VALUES (:name, :image, :prix, :quantity)");
      try{
        $stmt->execute([
            ':name' => $product->getName(),
            ':image' => $product->getImage(), 
            ':prix' => $product->getPrice(),
            ':quantity' => $product->getQuantity()
        ]);

    }catch(PDOException $ex){
        echo("error".$ex->getMessage());
    }
    
    }

    public function edit(Product $product) {
        $conn = Database::getConnection();    
        $stmt = $conn->prepare("update produits set name=:name, image=:image,prix=:prix,quantity=:quantity where id=:id");
        $stmt->execute([
            ':name' => $product->getName(),
            ':image' => $product->getImage(), 
            ':prix' => $product->getPrice(),
            ':quantity' => $product->getQuantity(),
            ':id' => $product->getID(),
        ]);
    }
   
   
    

    public function softDelete($id) {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("update produits set supprime=1 WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }


    public function rendreRow(Product $product) {
        // Encoder l'image en base64
    $imageBase64 = base64_encode($product->getImage());
        return "<tr>
                    <td>".$product->getName()."</td>
                     <td><img src='data:image/jpeg;base64,{$imageBase64}' width='100'></td>
                    <td>" . $product->getPrice(). "</td>
                    <td>" .$product->getQuantity(). "</td>
                    <td>
                   <a class='btn btn-primary text text-light text-decoration-none'href='?page=edit_produit&edit=".$product->getId()."'>Edit</a>
                    <a class='btn btn-danger text text-light text-decoration-none' href='?page=produit&delete=".$product->getId()."'>delete</a>
                    </td>
               </tr>";
}

}