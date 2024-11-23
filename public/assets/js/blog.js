

// //Blog Js

// // DOM Elements
// const listBlog = document.querySelector(".list-blog");

// // Function to fetch blogs and render them in the DOM
// async function fetchBlogs() {
//     try {
//         const token = localStorage.getItem("token"); // Ambil token dari localStorage (atau sesuaikan)

//         const response = await fetch("http://127.0.0.1:8000/api/auth/blogs", {
//             method: "GET",
//             headers: {
//                 "Authorization": `Bearer ${token}`, // Pastikan token benar
//                 "Content-Type": "application/json"
//             }
//         });

//         // Cek jika ada masalah dengan respons server
//         if (!response.ok) throw new Error("Failed to fetch blogs");

//         const data = await response.json();
//         renderBlogs(data.data); // Asumsi data blog ada di data.data
//     } catch (error) {
//         console.error("Error fetching blogs:", error);
//         listBlog.innerHTML = `<p class="error-message">Gagal memuat blog. Silakan coba lagi nanti.</p>`;
//     }
// }

// // Function to render blogs in the HTML grid
// function renderBlogs(blogs) {
//     listBlog.innerHTML = ""; // Bersihkan blog yang ada

//     // Periksa apakah ada blog untuk dirender
//     if (blogs.length === 0) {
//         listBlog.innerHTML = `<p class="no-blogs-message">Tidak ada blog yang tersedia.</p>`;
//         return;
//     }

//     blogs.forEach((blog) => {
//         const blogItem = document.createElement("div");
//         blogItem.classList.add("blog-item");

//         blogItem.innerHTML = `
//             <div class="blog-thumb">
//                 <img src="${blog.blog_pics && blog.blog_pics.length ? blog.blog_pics[0].url : 'default-image.jpg'}"
//                      alt="${blog.title}" class="w-full h-auto rounded-lg">
//             </div>
//             <div class="blog-content mt-4">
//                 <h2 class="text-title">${blog.title}</h2>
//                 <p class="text-description">${blog.description}</p>
//                 <span class="text-date">${new Date(blog.created_at).toLocaleDateString()}</span>
//             </div>
//         `;

//         listBlog.appendChild(blogItem);
//     });
// }

// // Panggil fungsi fetchBlogs ketika halaman dimuat
// document.addEventListener("DOMContentLoaded", fetchBlogs);







