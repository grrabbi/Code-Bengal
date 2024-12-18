<style>
     @media (max-width: 992px) {
     
         
         .sidebar {
             transform: translateX(-250px);
             /* Hide sidebar on smaller screens */
         }
         .sidebar.open {
             transform: translateX(0);
             /* Show sidebar when toggled */
         }
         .header-bar {
             width: 100%;
             left: 0;
         }
         .header-bar{
             width: calc(100% - 0px) !important;
             left: 0px !important;
         }
     }
     
     @media (max-width: 768px) {
         
      
       
         .header-bar{
             width: calc(100% - 0px)!important;
             left: 0px !important;
         }
     }
     
     @media (max-width: 576px) {
       
    
         .header-bar .logo {
             font-size: 16px;
         }
         .header-bar img {
             width: 35px;
             height: 35px;
         }
         .header-bar{
             width: calc(100% - 0px) !important;
             left: 0px !important;
         }
     }


     /*  */
       
     .sidebar {
         width: 250px;
         height: 100vh;
         background: #34495e;
         position: fixed;
         top: 0;
         left: 0;
         overflow-y: auto;
         padding-top: 60px;
         transition: transform 0.3s ease-in-out;
         z-index: 1000;
     }
     
     .sidebar ul {
         list-style: none;
         padding: 0;
         margin: 0;
     }
     
     .sidebar ul li {
         padding: 15px 20px;
         border-bottom: 1px solid #2c3e50;
     }
     
     .sidebar ul li a {
         text-decoration: none;
         color: #ecf0f1;
         font-weight: 500;
     }
     
     .sidebar ul li:hover {
         background-color: #1abc9c;
         transition: background-color 0.3s ease;
     }
     
     .sidebar ul li a:hover {
         color: white;
     }
     /* Header Bar Styling */
     
     .header-bar {
         width: calc(100% - 250px);
         height: 60px;
         background: #2c3e50;
         position: fixed;
         top: 0;
         left: 250px;
         display: flex;
         align-items: center;
         justify-content: space-between;
         padding: 0 20px;
         color: #ecf0f1;
         box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
         z-index: 1000;
     }
     
     .header-bar .logo {
         font-size: 20px;
         font-weight: bold;
     }
     
     .header-bar .user-profile {
         display: flex;
         align-items: center;
         gap: 10px;
     }
     
     .header-bar img {
         width: 40px;
         height: 40px;
         border-radius: 50%;
         border: 2px solid #1abc9c;
     }
     
     .header-bar .dropdown-menu {
         right: 0;
         left: auto;
     }
</style>
    
 <!-- Sidebar -->
 <div class="sidebar" id="sidebar">
    <ul>
        <li><a class="navbar-brand fw-bold" href="./index.html">Admin Dashboard</a></li>
        <li><a href="./site-analysis.html">📊 Site Analysis</a></li>
        <li><a href="./post-management.html">📝 Post Management</a></li>
        <li><a href="./animation.html">🎨 Animation Editor</a></li>
        <li><a href="./contact-responses.html">📬 Contact Responses</a></li>
        <li><a href="./figma.html">🎟Figma</a></li>
        <li><a href="./template.html">🌍 Template</a></li>
        <li><a href="./users.html">👤 Users</a></li>
        <li><a href="./logout.html">🔓 Logout</a></li>
    </ul>
</div>

<!-- Header Bar -->
<div class="header-bar">
    <button class="btn btn-sm btn-secondary d-lg-none" onclick="toggleSidebar()">☰</button>
    <div class="logo">My Admin Panel</div>
    
</div>

<script>
        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('open');
        }
    </script>