<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Analysis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        /* Sidebar Styling */
        
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
        }
        
      
        
        .main-content {
            margin-left: 250px;
            padding: 20px;
            transition: margin-left 0.3s ease;
        }
        
        .stats-card {
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        
        .stats-card h4 {
            font-weight: 600;
            color: #2c3e50;
        }
        
        .stats-card p {
            color: #7f8c8d;
            font-size: 1.2rem;
            font-weight: 500;
        }
        /* Responsive Design */
        
        @media (min-width: 992px) {
         
        }
        
        @media (max-width: 992px) {
         
            .main-content {
                margin-left: 0;
            }
            
            .sidebar {
                transform: translateX(-250px);
                /* Hide sidebar on smaller screens */
            }
            .sidebar.open {
                transform: translateX(0);
                /* Show sidebar when toggled */
            }
    
        }
        
        @media (max-width: 768px) {
            
            .main-content {
                margin-left: 0;
                /* Adjust for smaller screens */
            }
         
        }
        
        @media (max-width: 576px) {
          
            .stats-card h4 {
                font-size: 1.1rem;
            }
            .stats-card p {
                font-size: 1rem;
            }
          
        }


       
    </style>
</head>

<body>
    <!-- Sidebar -->
   <?php include 'header.php'?>

    <!-- Main Content -->
    <div class="main-content">
        <h2 class="mb-4 pt-5">📊 Site Analysis</h2>
        <div class="row">
            <!-- Card: Total Visitors -->
            <div class="col-md-4 mb-4">
                <div class="stats-card text-center">
                    <h4>Total Visitors</h4>
                    <p>15,432</p>
                </div>
            </div>

            <!-- Card: Total Posts -->
            <div class="col-md-4 mb-4">
                <div class="stats-card text-center">
                    <h4>Total Posts</h4>
                    <p>120</p>
                </div>
            </div>

            <!-- Card: Total Elements -->
            <div class="col-md-4 mb-4">
                <div class="stats-card text-center">
                    <h4>Total Elements</h4>
                    <p>58</p>
                </div>
            </div>
        </div>

        <!-- Line Chart for Visitors -->
        <div class="card p-4 mt-4">
            <h4 class="mb-3">Visitor Statistics (Last 7 Days)</h4>
            <canvas id="visitorChart"></canvas>
        </div>
    </div>
    
    <script>
        // Toggle Sidebar
       

        // Chart.js Code for Visitors
        const ctx = document.getElementById('visitorChart').getContext('2d');
        const visitorChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                datasets: [{
                    label: 'Visitors',
                    data: [1200, 1900, 3000, 5000, 2300, 3200, 4100],
                    borderColor: '#3498db',
                    tension: 0.3,
                    fill: true,
                    backgroundColor: 'rgba(52, 152, 219, 0.2)',
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false,
                    },
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

    <!-- Bootstrap JS (Required for Navbar Toggler) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Code injected by live-server -->
   
<!-- Code injected by live-server -->

</body>

</html>