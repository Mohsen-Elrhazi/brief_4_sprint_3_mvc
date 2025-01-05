<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Produit</title>
    <style>
    /* * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Arial', sans-serif;
        background: #f3f4f6;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    } */

    .register-container {
        margin: auto auto;
        width: 100%;
        max-width: 500px;
        padding: 20px;
        background: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .form-container {
        width: 100%;
    }

    h1 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
        font-size: 24px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        font-size: 14px;
        color: #484444;
        margin-bottom: 5px;
    }

    .form-group input {
        width: 100%;
        padding: 12px 10px;
        font-size: 14px;
        border: 1px solid #ccc;
        border-radius: 5px;
        outline: none;
        transition: border-color 0.3s;
    }

    .form-group input:focus {
        border-color: #007BFF;
    }

    .btn {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        background: #007BFF;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background 0.3s;
    }

    .btn:hover {
        background: #0056b3;
    }

    .options {
        text-align: center;
        margin-top: 15px;
    }

    .options p {
        font-size: 14px;
        color: #666;
    }

    .options a {
        color: #007BFF;
        text-decoration: none;
        font-weight: bold;
        transition: color 0.3s;
    }

    .options a:hover {
        color: #0056b3;
    }
    </style>
</head>

<body>

    <div class="register-container">
        <h1>Ajouter un produit</h1>

        <div class="form-container">
            <form action="" method="post">
                <div class="form-group">
                    <label for="name">Nom du produit :</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="image">Image du produit :</label>
                    <input type="file" id="image" name="image" accept="image/*" required>
                </div>

                <div class="form-group">
                    <label for="price">Prix :</label>
                    <input type="number" id="price" name="price" step="0.01" required>
                </div>

                <div class="form-group">
                    <label for="quantity">Quantité :</label>
                    <input type="number" id="quantity" name="quantity" required>
                </div>

                <input type="submit" value="Ajouter le produit" class="btn">
            </form>
        </div>
    </div>

</body>

</html>