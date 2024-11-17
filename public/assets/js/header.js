
// Modal login
const loginIcon = document.querySelector(".user-icon i");
const loginPopup = document.querySelector(".login-popup");

loginIcon?.addEventListener("click", () => {
  loginPopup.classList.toggle("open");
});

const cartIcon = document.querySelector(".cart-icon");
const modalCart = document.querySelector(".modal-cart-block");
const modalCartMain = document.querySelector(
  ".modal-cart-block .modal-cart-main"
);
const closeCartIcon = document.querySelector(".modal-cart-main .close-btn");
const continueCartIcon = document.querySelector(".modal-cart-main .continue");
const addCartBtns = document.querySelectorAll(".add-cart-btn");

const openModalCart = () => {
  modalCartMain.classList.add("open");
};

const closeModalCart = () => {
  modalCartMain.classList.remove("open");
};

addCartBtns.forEach((item) => {
  item.addEventListener("click", () => {
    openModalCart();
  });
});

cartIcon.addEventListener("click", openModalCart);
modalCart.addEventListener("click", closeModalCart);
closeCartIcon.addEventListener("click", closeModalCart);
continueCartIcon.addEventListener("click", closeModalCart);

modalCartMain.addEventListener("click", (e) => {
  e.stopPropagation();
});

// Set cart length
const handleItemModalCart = () => {
    cartStore = localStorage.getItem("cartStore");
    cartStore = cartStore ? JSON.parse(cartStore) : [];

    if (cartStore) {
      cartIcon.querySelector("span").innerHTML = cartStore.length;
    }

    // Set cart item
    const listItemCart = document.querySelector(
      ".modal-cart-block .list-product"
    );

    listItemCart.innerHTML = "";

    if (cartStore.length === 0) {
      listItemCart.innerHTML = `<p class='mt-1'>No product in cart</p>`;
    } else {
      // Initial money to freeship in cart
      let moneyForFreeship = 150;
      let totalCart = 0;

      cartStore.forEach((item) => {
        totalCart = Number(totalCart) + Number(item.price)

        // Create prd
        const prdItem = document.createElement("div");
        prdItem.setAttribute("data-item", item.id);
        prdItem.classList.add(
          "item",
          "py-5",
          "flex",
          "items-center",
          "justify-between",
          "gap-3",
          "border-b",
          "border-line"
        );
        prdItem.innerHTML = `
                  <div class="infor flex items-center gap-3 w-full">
                      <div class="bg-img w-[100px] aspect-square flex-shrink-0 rounded-lg overflow-hidden">
                          <img src=${item.thumbImage[0]} alt='product'
                              class='w-full h-full' />
                      </div>
                      <div class='w-full'>
                          <div class="flex items-center justify-between w-full">
                              <div class="name text-button">${item.name}</div>
                              <div
                                  class="remove-cart-btn remove-btn caption1 font-semibold text-red underline cursor-pointer">
                                  Remove
                              </div>
                          </div>
                          <div class="flex items-center justify-between gap-2 mt-3 w-full">
                              <div class="flex items-center text-secondary2 capitalize">
                                  ${item.sizes[0]}/${item.variation[0].color}
                              </div>
                              <div class="product-price text-title">$${item.price}.00</div>
                          </div>
                      </div>
                  </div>
              `;

    listItemCart.appendChild(prdItem);
  });

  // Set money to freeship in cart
  modalCart.querySelector('.more-price').innerHTML = moneyForFreeship - totalCart
  modalCart.querySelector('.tow-bar-block .progress-line').style.width = (totalCart / moneyForFreeship * 100) + '%'
  modalCart.querySelector('.total-cart').innerHTML = '$' + totalCart + '.00'
  if (moneyForFreeship - totalCart <= 0) {
    modalCart.querySelector('.more-price').innerHTML = 0
    modalCart.querySelector('.tow-bar-block .progress-line').style.width = '100%'
  }
}

const prdItems = listItemCart.querySelectorAll(".item");
prdItems.forEach((prd) => {
  const removeCartBtn = prd.querySelector(".remove-cart-btn");
  removeCartBtn.addEventListener("click", () => {
    const prdId = removeCartBtn.closest(".item").getAttribute("data-item");
    // cartStore
    const newArray = cartStore.filter((item) => item.id !== prdId);
    localStorage.setItem("cartStore", JSON.stringify(newArray));
    handleItemModalCart();

    if (cartStore.length === 0) {
      modalCart.querySelector('.more-price').innerHTML = 0
      modalCart.querySelector('.tow-bar-block .progress-line').style.width = '0'
      modalCart.querySelector('.total-cart').innerHTML = '$0.00'
    }
  });
});
};

handleItemModalCart();

// initialize the variable(cart, wishlist, compare) in local storage
let cartStore = localStorage.getItem("cartStore");
if (cartStore === null) {
  localStorage.setItem("cartStore", JSON.stringify([]));
}

let wishlistStore = localStorage.getItem("wishlistStore");
if (wishlistStore === null) {
  localStorage.setItem("wishlistStore", JSON.stringify([]));
}

let compareStore = localStorage.getItem("compareStore");
if (compareStore === null) {
  localStorage.setItem("compareStore", JSON.stringify([]));
}

let quickViewStore = localStorage.getItem("quickViewStore");
if (quickViewStore === null) {
  localStorage.setItem("quickViewStore", JSON.stringify([]));
}
