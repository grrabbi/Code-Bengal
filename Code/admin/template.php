<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Create Template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            background-color: #f8f9fa;
        }
       
        .main-content {
            margin-left: 250px;
            margin-top: 80px;
            padding: 20px;
        }
        
        .container {
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            font-weight: bold;
            margin-bottom: 10px;
            display: block;
        }
        
        input[type="text"],
        input[type="url"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            font-size: 16px;
        }
        
        textarea {
            resize: vertical;
            min-height: 150px;
        }
        
        .btn-primary {
            background-color: #1abc9c;
            border: none;
            padding: 10px 20px;
            font-size: 18px;
            border-radius: 5px;
            font-weight: bold;
        }
        
        .btn-primary:hover {
            background-color: #16a085;
            transition: 0.3s;
        }
        
        .preview-box {
            margin-top: 20px;
            padding: 15px;
            background: #f9f9f9;
            border: 1px dashed #ddd;
            border-radius: 5px;
        }
        
        .preview-box h4 {
            margin-bottom: 10px;
        }
        /* catagory */
        
        .dropdown-menu {
            max-height: 300px;
            overflow-y: auto;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            animation: slideIn 0.3s ease-in-out;
            transform-origin: left center;
        }
        
        .dropdown-item {
            font-size: 16px;
            padding: 10px 20px;
            transition: background-color 0.3s, color 0.3s;
        }
        
        .dropdown-item:hover {
            background-color: #007bff;
            color: #fff;
        }
        
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: scaleX(0);
            }
            to {
                opacity: 1;
                transform: scaleX(1);
            }
        }
        /* catagory */
    
        
        @media (max-width: 992px) {
       
            .main-content {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>
<?php include 'header.php'?>
    <!-- Main Content -->
    <div class="main-content">
        <div class="container">
            <h2 class="text-center mb-4">🎨 Create Template Post</h2>

            <!-- Title Input -->
            <div class="form-group">
                <label for="post-title">Title</label>
                <input type="text" id="post-title" placeholder="Enter title here...">
            </div>

            <!-- Image Upload -->
            <div class="form-group">
                <label for="template-image">Feture Image</label>
                <input type="file" id="template-image" accept="image/*">
            </div>
            <!-- Image Upload -->
            <div class="form-group">
                <label for="template-image">2nd Image</label>
                <input type="file" id="template-image" accept="image/*">
            </div>
            <!-- Catagory Item -->
            <div class="container">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle w-40 text-start" type="button" id="categoryDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <span id="selectedCategory">Choose a Category</span>
                  </button>
                    <ul class="dropdown-menu dropdown-menu-start" aria-labelledby="categoryDropdown">
                        <li><a class="dropdown-item" href="#" onclick="selectCategory('Personal Blog')">Personal Blog</a></li>
                        <li><a class="dropdown-item" href="#" onclick="selectCategory('>Fashion Blog')">Fashion Blog</a></li>
                        <li><a class="dropdown-item" href="#" onclick="selectCategory('Tech Blog')">Tech Blog</a></li>
                        <li><a class="dropdown-item" href="#" onclick="selectCategory('Online Newspaper')">Online Newspaper</a></li>
                        <li><a class="dropdown-item" href="#" onclick="selectCategory('Online Store')">Online Store</a></li>
                        <li><a class="dropdown-item" href="#" onclick="selectCategory('E-Commarce')">E-Commarce</a></li>
                        <li><a class="dropdown-item" href="#" onclick="selectCategory('School/College')">School/College</a></li>
                        <li><a class="dropdown-item" href="#" onclick="selectCategory('Personal Portfolio')">Personal Portfolio</a></li>
                        <li><a class="dropdown-item" href="#" onclick="selectCategory('Gaming Websites')">Gaming Websites</a></li>
                        <li><a class="dropdown-item" href="#" onclick="selectCategory('Company Websites')">Company Websites</a></li>
                        <li><a class="dropdown-item" href="#" onclick="selectCategory('Product Launch Pages')">Product Launch Pages</a></li>
                        <li><a class="dropdown-item" href="#" onclick="selectCategory('Food Delivery Websites')">Food Delivery Websites</a></li>
                        <li><a class="dropdown-item" href="#" onclick="selectCategory('Portfolio for Photographers')">Portfolio for Photographers</a></li>
                        <li><a class="dropdown-item" href="#" onclick="selectCategory('Movie')">Movie</a></li>
                        <li><a class="dropdown-item" href="#" onclick="selectCategory('Travel Agencies')">Travel Agencies</a></li>
                        <li><a class="dropdown-item" href="#" onclick="selectCategory('Web Hosting Providers')">Web Hosting Providers</a></li>
                        <li><a class="dropdown-item" href="#" onclick="selectCategory('App published Websites')">App published Websites</a></li>
                        <li><a class="dropdown-item" href="#" onclick="selectCategory('Hero Section')">Hero Section</a></li>
                        <li><a class="dropdown-item" href="#" onclick="selectCategory('About Section')">About Section</a></li>
                        <li><a class="dropdown-item" href="#" onclick="selectCategory('Services Section')">Services Section</a></li>
                        <li><a class="dropdown-item" href="#" onclick="selectCategory('Features Section')">Features Section</a></li>
                        <li><a class="dropdown-item" href="#" onclick="selectCategory('Portfolio Section')">Portfolio Section</a></li>
                        <li><a class="dropdown-item" href="#" onclick="selectCategory('Pricing Section')">Pricing Section</a></li>
                        <li><a class="dropdown-item" href="#" onclick="selectCategory('FAQ Section')">FAQ Section</a></li>
                        <li><a class="dropdown-item" href="#" onclick="selectCategory('Blog Section')">Blog Section</a></li>
                        <li><a class="dropdown-item" href="#" onclick="selectCategory('Contact Section')">Contact Section</a></li>
                        <li><a class="dropdown-item" href="#" onclick="selectCategory('Team Section')">Team Section</a></li>
                        <li><a class="dropdown-item" href="#" onclick="selectCategory('Footer Section')">Footer Section</a></li>
                        <li><a class="dropdown-item" href="#" onclick="selectCategory('Gallery Section')">Gallery Section</a></li>
                        <li><a class="dropdown-item" href="#" onclick="selectCategory('Header Section')">Header Section</a></li>
                        <li><a class="dropdown-item" href="#" onclick="selectCategory('Partners Section')">Partners Section</a></li>
                        <li><a class="dropdown-item" href="#" onclick="selectCategory('Clients Section')">Clients Section</a></li>
                        <li><a class="dropdown-item" href="#" onclick="selectCategory('Countdown Section')">Countdown Section</a></li>
                        <li><a class="dropdown-item" href="#" onclick="selectCategory('Subscription Section')">Subscription Section</a></li>
                        <li><a class="dropdown-item" href="#" onclick="selectCategory('Privacy Policy Section')">Privacy Policy Section</a></li>
                        <li><a class="dropdown-item" href="#" onclick="selectCategory('Terms & Conditions Section')">Terms & Conditions Section</a></li>
                        <li><a class="dropdown-item" href="#" onclick="selectCategory('Support Section')">Support Section</a></li>
                        <li><a class="dropdown-item" href="#" onclick="selectCategory('Pricing Table Section')">Pricing Table Section</a></li>
                        <li><a class="dropdown-item" href="#" onclick="selectCategory('Booking Section')">Booking Section</a></li>
                    </ul>
                </div>
            </div>


            <!-- Description Box -->
            <div class="form-group">
                <label for="post-description">Description (HTML Supported)</label>
                <textarea id="post-description" placeholder="Write your post here using HTML..."></textarea>
            </div>

            <!-- URL Input -->
            <div class="form-group">
                <label for="post-url">URL</label>
                <input type="url" id="post-url" placeholder="Enter related URL...">
            </div>

            <!-- Preview Box -->
            <div class="preview-box">
                <h4>Live Preview:</h4>
                <div id="preview-content">
                    <!-- Preview will be shown here -->
                </div>
            </div>

            <!-- Post Button -->
            <button class="btn btn-primary mt-3" onclick="postContent()">Post</button>
        </div>
    </div>
    <script>
        function selectCategory(category) {
            document.getElementById('selectedCategory').textContent = category;
        }
    </script>
    <script>
        // Live Preview Update Function
        const descriptionInput = document.getElementById('post-description');
        const previewContent = document.getElementById('preview-content');

        descriptionInput.addEventListener('input', () => {
            previewContent.innerHTML = descriptionInput.value;
        });

        function postContent() {
            const title = document.getElementById('post-title').value;
            const description = document.getElementById('post-description').value;
            const url = document.getElementById('post-url').value;

            if (title && description && url) {
                alert(`Post Submitted!\n\nTitle: ${title}\nURL: ${url}`);
                console.log("Description:", description);
            } else {
                alert("Please fill in all fields before submitting.");
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>