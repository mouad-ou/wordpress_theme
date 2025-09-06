let qty = 0;

function getQty() {
  return qty;
}

document.addEventListener("DOMContentLoaded", function () {
  const popup = document.getElementById("popupAbo");

  if (!popup) {
    console.error("Le modal #popupAbo est introuvable");
    return;
  }

  popup.addEventListener("shown.bs.modal", function () {

    const input = document.getElementById("QntyInput");
    const btnPlus = document.getElementById("plusBtn");
    const btnMoins = document.getElementById("moinsBtn");
    const totalDisplay = document.getElementById("totalPrix");
    const connexionsText = document.getElementById("connexionsText");
    const connexionsPrix = document.getElementById("connexionsPrix");
    const proxyToggle = document.getElementById("proxyToggle");
    const proxyLigne = document.getElementById("ligneProxy");
    const ligneMessage = document.getElementById("ligneMessage");

    if (!input || !btnPlus || !btnMoins || !totalDisplay || !connexionsText || !connexionsPrix || !proxyToggle || !proxyLigne) {
      console.error("Un ou plusieurs éléments sont introuvables");
      return;
    }

    input.value = qty;
    updateDisplay();

    btnPlus.onclick = function () {
      if (qty < 2) qty++;
      input.value = qty;
      updateDisplay();
    };

    btnMoins.onclick = function () {
      if (qty > 0) qty--;
      input.value = qty;
      updateDisplay();
    };

    proxyToggle.onchange = function () {
      updateDisplay();
    };

    function updateDisplay() {
      const prixBase = 39;
      const prixSupp = 19;
      const prixProxy = 12;

      let total = prixBase;

      if (qty > 0) {
        ligneMessage.style.display = "flex";
        connexionsText.innerText = `${qty} Connexion${qty > 1 ? 's' : ''} Supplémentaire${qty > 1 ? 's' : ''}`;
        connexionsPrix.innerText = `${qty * prixSupp} €`;
        total += qty * prixSupp;
      } else {
        ligneMessage.style.display = "none";
      }

      if (proxyToggle.checked) {
        proxyLigne.style.display = "flex";
        total += prixProxy;
      } else {
        proxyLigne.style.display = "none";
      }

      totalDisplay.innerText = `${total} €`;
    }
  });
});

// Redirection bouton principal
function redirigerShopify() {
  const proxyToggle = document.getElementById("proxyToggle");
  const liensShopify = {
    "1-noproxy": "https://tiviser.online/cart/55539398508868:1",
    "2-noproxy": "https://tiviser.online/cart/55539398508868:2",
    "3-noproxy": "https://tiviser.online/cart/55539398508868:3",
    "1-proxy":   "https://tiviser.online/cart/55136290373956:1,55539398508868:1",
    "2-proxy":   "https://tiviser.online/cart/55136290373956:1,55539398508868:2",
    "3-proxy":   "https://tiviser.online/cart/55136290373956:1,55539398508868:3"
  };

  const key = `${qty + 1}-${proxyToggle.checked ? "proxy" : "noproxy"}`;
  const lien = liensShopify[key];
  if (lien) {
    window.location.href = lien;
  } else {
    alert("Erreur lors de la redirection.");
  }
}
