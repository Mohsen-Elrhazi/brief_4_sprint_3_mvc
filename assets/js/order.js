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
