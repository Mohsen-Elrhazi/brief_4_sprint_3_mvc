<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- cdn font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />

    <title>Mon Site Web</title>
    <link rel="stylesheet" href="../../assets/css/order.css" />


</head>

<body>

    <!-- Hero Section -->
    <section class="hero">
        <nav>
            <div> </div>
            <ul>
                <li><a href="#hero">Accueil</a></li>
                <li><a href="#services">Produits</a></li>
                <li><a href="#about">À propos</a></li>
                <li><a href="#contact">Contactez-nous</a></li>
            </ul>
            <div class="panier">
                <i class="fa-solid fa-cart-shopping"> <span>0</span></i>

            </div>

        </nav>
        <div class="hero-content">
            <h1>Bienvenue sur Notre Site</h1>
            <p>Nous fournissons les meilleurs services pour vous.</p>
            <a href="#services" class="hero-btn">Découvrir nos Produits</a>
        </div>
    </section>

    <!-- Main Section - Services -->
    <section id="services">
        <h2>Nos Produits</h2>
        <div class="services-container">
            <div class="card">
                <img src="../../assets/images/IPHONE-12-MINI-removebg-preview.png" alt="Service 2">
                <h3>IPHONE 12 PRO MAX</h3>
                <div class="prix">
                    <h4>1000 DH</h4>
                    <button>Acheter</button>
                </div>
            </div>
            <div class="card">
                <img src="../../assets/images/IPHONE-12-PRO-MAX-removebg-preview.png" alt="Service 1">
                <h3>IPHONE 12 MINI</h3>
                <div class="prix">
                    <h4>12 000 DH</h4>
                    <button>Acheter</button>
                </div>
            </div>
            <div class="card">
                <img src="../../assets/images/IPHONE-13-PRO-removebg-preview.png" alt=" Service 3">
                <h3>IPHONE 13 PRO</h3>
                <div class="prix">
                    <h4>14 000 DH</h4>
                    <button>Acheter</button>
                </div>
            </div>
            <div class="card">
                <img src="../../assets/images/IPHONE-13-PRO-MAX-removebg-preview.png" alt="Service 4">
                <h3>IPHONE 13 PRO MAX</h3>
                <div class="prix">
                    <h4>14 500 DH</h4>
                    <button>Acheter</button>
                </div>
            </div>

            <div class="card">
                <img src="../../assets/images/IPHONE-14_-removebg-preview.png" alt="Service 1">
                <h3>IPHONE 14</h3>
                <div class="prix">
                    <h4>15 000 DH</h4>
                    <button>Acheter</button>
                </div>
            </div>
            <div class="card">
                <img src="../../assets/images/IPHONE-14-PRO-removebg-preview.png" alt="Service 2">
                <h3>IPHONE 14 PRO</h3>
                <div class="prix">
                    <h4>16 000 DH</h4>
                    <button>Acheter</button>
                </div>
            </div>
            <div class="card">
                <img src="../../assets/images/iPhone-15-256go-removebg-preview.png" alt="Service 3">
                <h3>iPhone 15</h3>
                <div class="prix">
                    <h4>18000 DH</h4>
                    <button>Acheter</button>
                </div>
            </div>
            <div class="card">
                <img src="../../assets/images/Iphone-15-Pro-128GB-removebg-preview.png" alt="Service 4">
                <h3>Iphone 15 Pro</h3>
                <div class="prix">
                    <h4>18 600 DH</h4>
                    <button>Acheter</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <h2>Contactez-nous</h2>
        <form>
            <input type="text" name="name" placeholder="Votre nom" required>
            <input type="email" name="email" placeholder="Votre email" required>
            <textarea name="message" rows="5" placeholder="Votre message" required></textarea>
            <button type="submit">Envoyer</button>
        </form>
    </section>

    <!-- Footer Section -->
    <footer>
        <div class="footer-container">
            <div class="footer-about">
                <h3>À propos</h3>
                <p>Nous sommes une entreprise spécialisée dans la prestation de services web innovants et de qualité.
                </p>
            </div>
            <div class="footer-links">
                <h3>Liens Rapides</h3>
                <ul>
                    <li><a href="#hero">Accueil</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#about">À propos</a></li>
                    <li><a href="#contact">Contactez-nous</a></li>
                </ul>
            </div>
            <div class="footer-contact">
                <h3>Contact</h3>
                <p>Email: info@entreprise.com</p>
                <p>Téléphone: +212 123 456 789</p>
                <p>Adresse: 123, Rue Exemple, Youssoufia, Maroc</p>
            </div>
            <div class="footer-social">
                <h3>Suivez-nous</h3>
                <a href="#">Facebook</a> | <a href="#">Twitter</a> | <a href="#">LinkedIn</a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Youcode. Tous droits réservés.</p>
        </div>
    </footer>

    <div class="slide-panier">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam dolores minima alias doloribus, maxime
            quam eligendi perspiciatis? Deleniti ullam iste ipsum, a modi libero inventore perspiciatis voluptatem?
            Iusto, omnis deserunt?</p>
        <!-- <i class="fa-solid fa-xmark"></i> -->
    </div>

    <!-- script js -->
    <script src="../../assets/js/order.js"> </script>

</body>

</html>