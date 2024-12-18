<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* General Styling */
        
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
        }
       
        
        .main-content {
            margin-left: 250px;
            padding: 80px 20px 20px 20px;
        }
        /* Form Design */
        
        .form-container {
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-top: 20px;
        }
        
        .form-container h4 {
            color: #2c3e50;
            font-weight: bold;
            margin-bottom: 20px;
        }
        
        .form-control,
        .form-select {
            border-radius: 8px;
            border: 1px solid #bdc3c7;
        }
        
        .form-label {
            font-weight: 500;
            color: #2c3e50;
        }
        
        .btn-primary {
            background: #1abc9c;
            border: none;
            border-radius: 8px;
            padding: 10px 20px;
            font-weight: bold;
        }
        
        .btn-primary:hover {
            background: #16a085;
            transition: background-color 0.3s ease;
        }
        /* Responsive Design */
        
        @media (max-width: 992px) {
          
            .main-content {
                margin-left: 0;
            }
        }
        
        @media (max-width: 576px) {
            .form-container {
                padding: 20px;
            }
           
        }
    </style>
</head>

<body>
    <?php include 'header.php'?>

    <!-- Main Content -->
    <div class="main-content">
        <h2 class="mb-4">📝 Post Management</h2>
        <div class="form-container">
            <h4>Create New Post</h4>
            <form action="#" method="POST">
                <div class="mb-3">
                    <label for="postTitle" class="form-label">Post Title</label>
                    <input type="text" id="postTitle" class="form-control" placeholder="Enter post title" required>
                </div>
                <div class="mb-3">
                    <label for="postDescription" class="form-label">Post Description</label>
                    <textarea id="postDescription" class="form-control" rows="5" placeholder="Enter post description" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="postCategory" class="form-label">Category</label>
                    <select id="postCategory" class="form-select" required>
                        <option value="">Select Category</option>
                        <option value="html">HTML</option>
                        <option value="css">CSS</option>
                        <option value="javascript">JavaScript</option>
                        <option value="tricks">Tricks</option>
                        <option value="php">PHP</option>
                        <option value="tailwind">Tailwind CSS</option>
                        <option value="bootstrap">Bootstrap</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="featureImage" class="form-label">Feature Image</label>
                    <input type="file" id="featureImage" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Post</button>
            </form>
        </div>
    </div>

    <script>
        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('open');
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>