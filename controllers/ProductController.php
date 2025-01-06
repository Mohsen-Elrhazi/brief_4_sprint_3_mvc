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
        $stmt = $conn->prepare("SELECT id,  name,image, prix, quantity FROM produits");
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
    
        $stmt->execute([
            ':name' => $product->getName(),
            ':image' => $product->getImage(), 
            ':prix' => $product->getPrice(),
            ':quantity' => $product->getQuantity()
        ]);
    }
   
    
    public function delete($id) {
        $conn = Database::getConnection();
        $stmt = $conn->prepare("DELETE FROM products WHERE id = :id");
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
                   <a class='btn btn-primary text text-light text-decoration-none'href='/products/edit.php?id=".$product->getId()."'>Edit</a>
                    <a class='btn btn-danger text text-light text-decoration-none' href='/products/delete.php?id=".$product->getId()."'>delete</a>
                    </td>
               </tr>";
}


}



//     <td>" .$product->getImage()."</td>