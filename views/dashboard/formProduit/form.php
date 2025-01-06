<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/dashboard/formroduit.css">

    <title>Formulaire de Produit</title>

<body>

    <div class="produit-container">
        <h1>Ajouter un produit</h1>

        <div class="form-container">
            <form action="" method="post">
                <div class="form-group">
                    <label for="name">Nom du produit :</label>
                    <input type="text" id="name" name="name">
                </div>

                <div class="form-group">
                    <label for="image">Image du produit :</label>
                    <input type="file" id="image" name="image">
                </div>

                <div class="form-group">
                    <label for="price">Prix :</label>
                    <input type="number" id="price" name="prix">
                </div>

                <div class="form-group">
                    <label for="quantity">Quantité :</label>
                    <input type="number" id="quantity" name="quantity" min="1">
                </div>

                <button type="submit" name="ajouter">Ajouter</button>
            </form>
        </div>
    </div>

</body>

</html>