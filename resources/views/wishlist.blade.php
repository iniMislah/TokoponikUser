@extends('layouts.base')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-6">My Wishlist</h1>

    <div class="wishlist-items grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-6">
        <!-- Items will be populated by JavaScript -->
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const wishlistItems = document.querySelector('.wishlist-items');
    const wishlist = JSON.parse(localStorage.getItem("wishlistStore")) || [];

    if (wishlist.length === 0) {
        wishlistItems.innerHTML = '<p class="col-span-full text-center">Your wishlist is empty</p>';
    } else {
        wishlistItems.innerHTML = wishlist.map(item => `
            <div class="product-item" data-item="${item.id}">
                <div class="product-main bg-white rounded-lg shadow p-4">
                    <img src="${item.picture}" alt="${item.name}" class="w-full h-48 object-cover rounded-lg mb-4">
                    <h3 class="product-name text-lg font-semibold mb-2">${item.name}</h3>
                    <div class="flex justify-between items-center">
                        <div class="product-price">$${item.price}</div>
                        <button onclick="removeFromWishlist('${item.id}')"
                                class="text-red-500 hover:text-red-700">
                            Remove
                        </button>
                    </div>
                </div>
            </div>
        `).join('');
    }
});

function removeFromWishlist(productId) {
    let wishlist = JSON.parse(localStorage.getItem("wishlistStore")) || [];
    wishlist = wishlist.filter(item => item.id !== productId);
    localStorage.setItem("wishlistStore", JSON.stringify(wishlist));
    location.reload();
}
</script>
@endsection





