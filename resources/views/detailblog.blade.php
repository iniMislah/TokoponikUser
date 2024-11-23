@extends('layouts.base')

@section('head')

@endsection

@section('content')
<div class="blog-detail default">
    <div class="bg-img md:mt-[74px] mt-14">
        <img id="blog-img" alt="img" class="blog-img w-full min-[1600px]:h-[800px] xl:h-[640px] lg:h-[520px] sm:h-[380px] h-[260px] object-cover" />
    </div>
    <div id="blog-detail">

    </div>

</div>
<div class="container md:pt-20 pt-10">
    <div class="blog-content flex items-center justify-center">
        <div class="main md:w-5/6 w-full">
            <div class="heading3 blog-title mt-3"></div> <!-- Dynamically filled -->
            <div class="author flex items-center gap-4 mt-4">
                <div class="avatar w-10 h-10 rounded-full overflow-hidden flex-shrink-0">
                    <img src="{{ asset('assets/images/avatar/1.png') }}" alt="avatar" class="w-full h-full object-cover" />
                </div>
                <div class="flex items-center gap-2">
                    <div class="blog-author caption1 text-secondary"></div> <!-- Dynamically filled -->
                    <div class="line w-5 h-px bg-secondary"></div>
                    <div class="blog-date caption1 text-secondary"></div> <!-- Dynamically filled -->
                </div>
            </div>
            <div class="content md:mt-8 mt-5">
                <div class="blog-description body1"></div> <!-- Dynamically filled -->

                <div class="list-img grid sm:grid-cols-2 gap-[30px] md:mt-8 mt-5">
                    <!-- Blog images will be dynamically added here -->
                </div>

                <div class="body1 mt-4">

                </div>

            </div>

            <!-- Action Section -->
            <div class="action flex items-center justify-between flex-wrap gap-5 md:mt-8 mt-5">


                <!-- Social Share Section -->
                <div class="right flex items-center gap-3 flex-wrap">
                    <p>Share:</p>
                    <div class="list flex items-center gap-3 flex-wrap">
                        <a href="#" class="bg-surface w-10 h-10 flex items-center justify-center rounded-full duration-300 hover:bg-black hover:text-white">
                            <i class="ph ph-facebook-logo"></i>
                        </a>
                        <a href="#" class="bg-surface w-10 h-10 flex items-center justify-center rounded-full duration-300 hover:bg-black hover:text-white">
                            <i class="ph ph-instagram-logo"></i>
                        </a>
                        <a href="#" class="bg-surface w-10 h-10 flex items-center justify-center rounded-full duration-300 hover:bg-black hover:text-white">
                            <i class="ph ph-twitter-logo"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Navigation Section -->
            <div class="next-pre flex items-center justify-between md:mt-8 mt-5 py-6 border-y border-line">
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="{{ asset('assets/js/phosphor-icons.js') }}"></script>
<script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/blog.js') }}"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Fetch the blog data from the API
        var token = localStorage.getItem("token");


        fetch('https://restapi-tokoponik-aqfsagdnfph3cgd8.australiaeast-01.azurewebsites.net/api/auth/blogs/' + @json($id), {
                method: 'GET',
                headers: {
                    'Authorization': `Bearer ${token}`,
                    'Content-Type': 'application/json'
                }
            })  // Replace with your actual API endpoint
            .then(response => response.json())
            .then(data => {
                // Check if the response is successful
                if (data.status === 200) {
                    const blogData = data.data;



                    // Populate the blog title, description, and author
                    document.querySelector('#blog-img').src = blogData.blog_pics[0].pic_path;
                    document.querySelector('.blog-title').textContent = blogData.title;
                    document.querySelector('.blog-description').textContent = blogData.description;
                    document.querySelector('.blog-author').textContent = 'by ' + blogData.user.name;
                    document.querySelector('.blog-date').textContent = new Date(blogData.created_at).toLocaleDateString();

                    // Update the blog image
                    const blogImageContainer = document.querySelector('.bg-img img');
                    blogImageContainer.src = blogData.blog_pics[0]?.pic_path || 'default-image-url.jpg';

                    // Optionally, you can loop through the blog_pics array and display images if there are multiple
                    const imgContainer = document.querySelector('.list-img');
                    blogData.blog_pics.forEach(pic => {
                        const imgElement = document.createElement('img');
                        imgElement.src = pic.pic_path;
                        imgElement.classList.add('w-full', 'object-cover');
                        imgContainer.appendChild(imgElement);
                    });
                } else {
                    console.error('Failed to fetch blog data:', data.message);
                }
            })
            .catch(error => {
                console.error('Error fetching data:', error);
            });
    });
</script>
@endsection
