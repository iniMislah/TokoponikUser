// Cart Class Implementation
class Cart {
    constructor() {
        this.items = [];
        this.cartQuantityElement = document.querySelector('.cart-quantity');
        this.cartIcon = document.querySelector('.cart-icon');
        this.modalCart = document.querySelector('.modal-cart-block');
        this.modalCartMain = document.querySelector('.modal-cart-main');
        this.closeCartBtn = document.querySelector('.modal-cart-main .close-btn');
        this.continueShoppingBtn = document.querySelector('.modal-cart-main .continue');
        this.listProductElement = document.querySelector('.modal-cart-block .list-product');
        this.totalCartElement = document.querySelector('.modal-cart-block .total-cart');

        this.init();
    }

    init() {
        // Load cart from localStorage
        const savedCart = localStorage.getItem('tokoponik_cart');
        if (savedCart) {
            this.items = JSON.parse(savedCart);
            this.updateCartQuantity();
        }

        // Add event listeners
        this.cartIcon?.addEventListener('click', () => this.openCart());
        this.closeCartBtn?.addEventListener('click', () => this.closeCart());
        this.continueShoppingBtn?.addEventListener('click', () => this.closeCart());
        this.modalCart?.addEventListener('click', () => this.closeCart());
        this.modalCartMain?.addEventListener('click', (e) => e.stopPropagation());

        // Add event listener for Add to Cart buttons
        document.addEventListener('click', (e) => {
            const addToCartBtn = e.target.closest('.add-cart-btn');
            if (addToCartBtn) {
                const productData = {
                    id: addToCartBtn.dataset.productId,
                    name: addToCartBtn.dataset.productName,
                    price: parseFloat(addToCartBtn.dataset.productPrice),
                    image: addToCartBtn.dataset.productImage,
                    category: addToCartBtn.dataset.productCategory,
                    quantity: 1
                };
                this.addItem(productData);
            }
        });
    }

    openCart() {
        this.modalCartMain.classList.add('open');
        this.updateCartUI();
    }

    closeCart() {
        this.modalCartMain.classList.remove('open');
    }

    addItem(product) {
        const existingItem = this.items.find(item => item.id === product.id);

        if (existingItem) {
            existingItem.quantity += 1;
            existingItem.subtotal = existingItem.quantity * existingItem.price;
        } else {
            this.items.push({
                ...product,
                subtotal: product.price
            });
        }

        this.updateCartQuantity();
        this.saveCart();
        this.updateCartUI();
        this.showNotification('Product added to cart successfully');
    }

    removeItem(productId) {
        this.items = this.items.filter(item => item.id !== productId);
        this.updateCartQuantity();
        this.saveCart();
        this.updateCartUI();
    }

    updateQuantity(productId, newQuantity) {
        const item = this.items.find(item => item.id === productId);
        if (item) {
            item.quantity = parseInt(newQuantity);
            item.subtotal = item.quantity * item.price;
            this.updateCartQuantity();
            this.saveCart();
            this.updateCartUI();
        }
    }

    updateCartQuantity() {
        const totalQuantity = this.items.reduce((total, item) => total + item.quantity, 0);
        if (this.cartQuantityElement) {
            this.cartQuantityElement.textContent = totalQuantity;
        }
    }

    getTotal() {
        return this.items.reduce((total, item) => total + item.subtotal, 0);
    }

    saveCart() {
        localStorage.setItem('tokoponik_cart', JSON.stringify(this.items));
    }

    updateCartUI() {
        if (!this.listProductElement) return;

        this.listProductElement.innerHTML = this.items.map(item => `
            <div class="item py-5 flex items-center justify-between gap-3 border-b border-line" data-product-id="${item.id}">
                <div class="infor flex items-center gap-5">
                    <div class="bg-img">
                        <img src="${item.image}" alt="${item.name}" class="w-20 h-20 object-cover rounded-lg">
                    </div>
                    <div>
                        <div class="name text-button">${item.name}</div>
                        <div class="flex items-center gap-2 mt-2">
                            <div class="product-price text-title">$${item.price.toFixed(2)}</div>
                            <div class="quantity-block flex items-center gap-4">
                                <div class="quantity-edit h-[32px] flex items-center justify-between rounded-lg border border-line">
                                    <button class="decrease-quantity w-8 h-full flex items-center justify-center">-</button>
                                    <input type="number" class="w-12 text-center" value="${item.quantity}" min="1">
                                    <button class="increase-quantity w-8 h-full flex items-center justify-center">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right flex flex-col items-end gap-4">
                    <div class="remove-btn cursor-pointer">
                        <i class="ph-bold ph-x text-lg"></i>
                    </div>
                    <div class="subtotal text-title">$${item.subtotal.toFixed(2)}</div>
                </div>
            </div>
        `).join('');

        // Update total
        if (this.totalCartElement) {
            this.totalCartElement.textContent = `$${this.getTotal().toFixed(2)}`;
        }

        // Add event listeners for quantity controls
        this.addQuantityControlListeners();
    }

    addQuantityControlListeners() {
        this.listProductElement.querySelectorAll('.item').forEach(item => {
            const productId = item.dataset.productId;
            const decreaseBtn = item.querySelector('.decrease-quantity');
            const increaseBtn = item.querySelector('.increase-quantity');
            const quantityInput = item.querySelector('input');
            const removeBtn = item.querySelector('.remove-btn');

            decreaseBtn?.addEventListener('click', () => {
                const newQty = Math.max(1, parseInt(quantityInput.value) - 1);
                this.updateQuantity(productId, newQty);
            });

            increaseBtn?.addEventListener('click', () => {
                const newQty = parseInt(quantityInput.value) + 1;
                this.updateQuantity(productId, newQty);
            });

            quantityInput?.addEventListener('change', (e) => {
                const newQty = Math.max(1, parseInt(e.target.value));
                this.updateQuantity(productId, newQty);
            });

            removeBtn?.addEventListener('click', () => {
                this.removeItem(productId);
            });
        });
    }

    showNotification(message) {
        const notification = document.createElement('div');
        notification.className = 'fixed bottom-4 right-4 bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg z-50';
        notification.textContent = message;
        document.body.appendChild(notification);

        setTimeout(() => {
            notification.remove();
        }, 3000);
    }
}

// Initialize cart
const cart = new Cart();
