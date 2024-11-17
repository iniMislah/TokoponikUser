document.addEventListener('DOMContentLoaded', function() {
    // Modal Wishlist Elements
    const wishlistIcon = document.querySelector(".wishlist-icon");
    const modalWishlist = document.querySelector(".modal-wishlist-block");
    const modalWishlistMain = document.querySelector(".modal-wishlist-block .modal-wishlist-main");
    const closeWishlistIcon = document.querySelector(".modal-wishlist-main .close-btn");
    const continueWishlistIcon = document.querySelector(".modal-wishlist-main .continue");

    // Wishlist Functions
    const openModalWishlist = () => {
        handleItemModalWishlist();
        modalWishlistMain?.classList.add("open");
    };

    const closeModalWishlist = () => {
        modalWishlistMain?.classList.remove("open");
    };

    // Save to Wishlist
    const saveToWishlist = (product) => {
        let wishlist = JSON.parse(localStorage.getItem("wishlistStore")) || [];
        const isAlreadyInWishlist = wishlist.some((item) => item.id == product.id);
        alert('ada',product.id);

        if (!isAlreadyInWishlist) {
            wishlist.push({
                id: product.id || Date.now(), // Fallback to timestamp if no ID
                name: product.name || 'Product Name',
                price: product.price || '0.00',
                // Add other product details as needed
            });
            localStorage.setItem("wishlistStore", JSON.stringify(wishlist));
        }
    };

    // Toggle Wishlist
    const toggleWishlist = (button) => {
        button.classList.toggle("active");

        // Get product data from button's parent product item
        const productItem = button.closest('.product-item');
        if (!productItem) return;



            let data = JSON.parse(button.getAttribute("data-product"));

        const product = {
            id: data.id,
            name: data.name,
            price: data.price,
            // Add other product details as needed
        };

        if (button.classList.contains("active")) {
            const heartIcon = button.querySelector("i");
            if (heartIcon) {
                heartIcon.classList.remove("ph");
                heartIcon.classList.add("ph-fill");
            }
            saveToWishlist(product);
            openModalWishlist();
        } else {
            const heartIcon = button.querySelector("i");
            if (heartIcon) {
                heartIcon.classList.add("ph");
                heartIcon.classList.remove("ph-fill");
            }
            removeFromWishlist(product);
        }
    };

    const removeFromWishlist = (product) => {
        let wishlist = JSON.parse(localStorage.getItem("wishlistStore")) || [];

        // Filter out the item that matches the product ID
        wishlist = wishlist.filter((item) => item.id !== product.id);

        // Update the wishlist in local storage
        localStorage.setItem("wishlistStore", JSON.stringify(wishlist));

        alert('Produk dihapus dari wishlist');
    };

    // Event Listeners for Wishlist Buttons
    document.addEventListener("click", (e) => {
        const wishlistBtn = e.target.closest('.add-wishlist-btn');
        if (wishlistBtn) {
            e.preventDefault();
            e.stopPropagation();
            toggleWishlist(wishlistBtn);
        }
    });

    // Modal Event Listeners
    if (wishlistIcon) wishlistIcon.addEventListener("click", openModalWishlist);
    if (modalWishlist) modalWishlist.addEventListener("click", closeModalWishlist);
    if (closeWishlistIcon) closeWishlistIcon.addEventListener("click", closeModalWishlist);
    if (continueWishlistIcon) continueWishlistIcon.addEventListener("click", closeModalWishlist);
    if (modalWishlistMain) {
        modalWishlistMain.addEventListener("click", (e) => {
            e.stopPropagation();
        });
    }

    // Handle Wishlist Items Display
    const handleItemModalWishlist = () => {
        const wishlistStore = localStorage.getItem("wishlistStore");
        const wishlistCount = document.querySelector('.wishlist-quantity');
        const listItemWishlist = document.querySelector(".modal-wishlist-block .list-product");

        if (!wishlistStore || !listItemWishlist) return;

        const wishlistItems = JSON.parse(wishlistStore);

        // Update wishlist count
        if (wishlistCount) {
            wishlistCount.textContent = wishlistItems.length;
        }

        // Clear and update wishlist items
        listItemWishlist.innerHTML = wishlistItems.length === 0
            ? `<p class='mt-1'>No product in wishlist</p>`
            : wishlistItems.map(item => `
                <div class="item py-5 flex items-center justify-between gap-3 border-b border-line" data-item="${item.id}">
                    <div class="infor flex items-center gap-5">
                        <div class="">
                            <div class="name text-button">${item.name}</div>
                            <div class="flex items-center gap-2 mt-2">
                                <div class="product-price text-title">$${item.price}</div>
                            </div>
                        </div>
                    </div>
                    <div class="remove-wishlist-btn remove-btn caption1 font-semibold text-red underline cursor-pointer">
                        Remove
                    </div>
                </div>
            `).join('');

        // Add remove button listeners
        document.querySelectorAll('.remove-wishlist-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const itemId = this.closest('.item').dataset.item;
                const newWishlist = wishlistItems.filter(item => item.id != itemId);
                localStorage.setItem("wishlistStore", JSON.stringify(newWishlist));
                handleItemModalWishlist();
            });
        });
    };

    // Initial setup
    handleItemModalWishlist();
});

const swiperSlider = new Swiper('.swiper-slider', {
    // Enable loop mode
    loop: true,

    // Auto play settings
    autoplay: {
        delay: 5000,  // Delay between transitions (in ms)
        disableOnInteraction: false,  // Continue autoplay after user interaction
    },

    // Effect settings
    effect: 'fade',  // Fade effect between slides
    fadeEffect: {
        crossFade: true
    },

    // Speed of transition
    speed: 1000,

    // Pagination
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // Responsive breakpoints
    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 1,
            spaceBetween: 20
        },
        // when window width is >= 768px
        768: {
            slidesPerView: 1,
            spaceBetween: 30
        },
        // when window width is >= 1024px
        1024: {
            slidesPerView: 1,
            spaceBetween: 40
        }
    }
});


//Blog Js

// DOM Elements
const listBlog = document.querySelector(".list-blog");

// Function to fetch blogs and render them in the DOM
async function fetchBlogs() {
    try {
        const token = localStorage.getItem("token"); // Ambil token dari localStorage (atau sesuaikan)

        const response = await fetch("https://restapi-tokoponik-aqfsagdnfph3cgd8.australiaeast-01.azurewebsites.net/api/auth/blogs", {
            method: "GET",
            headers: {
                "Authorization": `Bearer ${token}`, // Pastikan token benar
                "Content-Type": "application/json"
            }
        });

        // Cek jika ada masalah dengan respons server
        if (!response.ok) throw new Error("Failed to fetch blogs");

        const data = await response.json();
        renderBlogs(data.data); // Asumsi data blog ada di data.data
    } catch (error) {
        console.error("Error fetching blogs:", error);
        listBlog.innerHTML = `<p class="error-message">Gagal memuat blog. Silakan coba lagi nanti.</p>`;
    }
}

// Function to render blogs in the HTML grid
function renderBlogs(blogs) {
    listBlog.innerHTML = ""; // Bersihkan blog yang ada

    // Periksa apakah ada blog untuk dirender
    if (blogs.length === 0) {
        listBlog.innerHTML = `<p class="no-blogs-message">Tidak ada blog yang tersedia.</p>`;
        return;
    }

    blogs.forEach((blog) => {
        const blogItem = document.createElement("div");
        blogItem.classList.add("blog-item");

        blogItem.innerHTML = `
            <div class="blog-thumb">
                <img src="${blog.blog_pics && blog.blog_pics.length ? blog.blog_pics[0].url : 'default-image.jpg'}"
                     alt="${blog.title}" class="w-full h-auto rounded-lg">
            </div>
            <div class="blog-content mt-4">
                <h2 class="text-title">${blog.title}</h2>
                <p class="text-description">${blog.description}</p>
                <span class="text-date">${new Date(blog.created_at).toLocaleDateString()}</span>
            </div>
        `;

        listBlog.appendChild(blogItem);
    });
}

// Panggil fungsi fetchBlogs ketika halaman dimuat
document.addEventListener("DOMContentLoaded", fetchBlogs);









