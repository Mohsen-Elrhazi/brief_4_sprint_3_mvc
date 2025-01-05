let iconePanier = document.querySelector(".fa-cart-shopping");
let listPanier = document.querySelector(".slide-panier");

listPanier.style.display = "none";
iconePanier.addEventListener("click", function () {
  if (listPanier.style.display === "none") {
    listPanier.style.display = "block";
  } else {
    listPanier.style.display = "none";
  }
});

// let iconePanier=document.querySelector(".fa-cart-shopping");
// let listPanier=document.querySelector(".slide-panier");

// listPanier.style.display="0px"
// iconePanier.addEventListener("click", function(){

// if(listPanier.style.width==="0px"){
//     // listPanier.style.display="block"
//     listPanier.style.width="400px"
// }else{
//     // listPanier.style.display="none"
//     listPanier.style.width="0px"

// }

// })

document.addEventListener("DOMContentLoaded", () => {
  const cartItems = document.getElementById("cart-items");
  const totalPriceEl = document.getElementById("total-price");
  const cartCounter = document.querySelector(".panier span");

  let cart = [];
  let totalPrice = 0;

  // Fonction pour ajouter un produit au panier
  function addToCart(productName, productPrice, productImage) {
    const existingItem = cart.find((item) => item.name === productName);

    if (existingItem) {
      existingItem.quantity++;
    } else {
      cart.push({
        name: productName,
        price: productPrice,
        image: productImage,
        quantity: 1,
      });
    }

    updateCart();
  }

  // Fonction pour supprimer un produit du panier
  function removeFromCart(productName) {
    cart = cart.filter((item) => item.name !== productName);
    updateCart();
  }

  // Met à jour l'affichage du panier
  function updateCart() {
    cartItems.innerHTML = "";
    totalPrice = 0;

    cart.forEach((item) => {
      const itemTotal = item.price * item.quantity;
      totalPrice += itemTotal;

      const itemDiv = document.createElement("div");
      itemDiv.className = "cart-item";
      itemDiv.innerHTML = `
              <img src="${item.image}" alt="${item.name}" />
              <div class="cart-item-details">
                  <p class="cart-item-name">${item.name}</p>
                  <p class="cart-item-price">Prix: ${item.price} DH</p>
                  <p class="cart-item-quantity">Quantité: ${item.quantity}</p>
              </div>
              <button class="cart-item-remove" data-name="${item.name}">Supprimer</button>
          `;

      cartItems.appendChild(itemDiv);
    });

    // Met à jour le total global
    totalPriceEl.textContent = totalPrice;
    cartCounter.textContent = cart.reduce(
      (total, item) => total + item.quantity,
      0
    );

    // Ajouter les événements aux boutons "Supprimer"
    const removeButtons = document.querySelectorAll(".cart-item-remove");
    removeButtons.forEach((button) => {
      button.addEventListener("click", (e) => {
        const itemName = e.target.dataset.name;
        removeFromCart(itemName);
      });
    });
  }

  // Ajouter les événements aux boutons "Acheter"
  document.querySelectorAll(".card button").forEach((button) => {
    button.addEventListener("click", (e) => {
      const card = e.target.closest(".card");
      const productName = card.querySelector("h3").textContent;
      const productPrice = parseInt(
        card.querySelector(".prix h4").textContent.replace(" DH", "")
      );
      const productImage = card.querySelector("img").src;

      addToCart(productName, productPrice, productImage);
    });
  });
});
