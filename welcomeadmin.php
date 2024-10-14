<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Dashboard</title>
<!-- Link to Chart.js library -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
/* Your CSS styles for admin dashboard */
/* Define styles for chart container */
.chart-container {
  width: 80%;
  margin: auto;
}
</style>
</head>
<body>
<header>
  <!-- <h1>Admin Dashboard</h1> -->
</header>

<div class="container">
  <div class="content">
    <div class="chart-container">
      <canvas id="serviceRequestsChart"></canvas>
    </div>
  </div>
</div>

<!-- <footer>
  <p>&copy; 2024 Admin Panel. All rights reserved.</p>
</footer> -->

<script>
// PHP code to fetch data from the database and generate Chart.js chart
<?php
session_start();

// Database configuration
$servername = "localhost";
$username = "root";
$password = "1899";
$dbname = "crafhomedb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize arrays to hold data
$dataCounts = array();
$dataCosts = array();

// Define the ranges for each service category
$ranges = array(
    array(100, 105), // First service category
    array(105, 205), // Second service category
    array(205, 305), // Third service category
    array(305, 405), // Fourth service category
    array(405, 505), // Fifth service category
    array(505, 605)  // Sixth service category
);

// Fetch data for each service category
foreach ($ranges as $range) {
    $min = $range[0];
    $max = $range[1];

    $sql = "SELECT COUNT(*) as count, SUM(cost) as total_cost, s_name FROM bookings, service WHERE s_name=reqest AND s_id > $min AND s_id < $max GROUP BY s_name";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Add count and total cost for each service category to the data arrays
            $dataCounts[$row['s_name']] = $row['count'];
            $dataCosts[$row['s_name']] = $row['total_cost'];
        }
    }
}

// Close connection
$conn->close();

// Format data for Chart.js
$labels = json_encode(array_keys($dataCounts));
$countValues = json_encode(array_values($dataCounts));
$costValues = json_encode(array_values($dataCosts));
?>

// JavaScript code to create Chart.js chart using the fetched data
var ctx = document.getElementById('serviceRequestsChart').getContext('2d');
var serviceRequestsChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: <?php echo $labels; ?>,
    datasets: [{
      label: 'Service Requests',
      data: <?php echo $countValues; ?>,
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
      ],
      borderColor: [
        'rgba(255, 99, 132, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
      borderWidth: 1
    }, {
      label: 'Total Earning',
      data: <?php echo $costValues; ?>,
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
      ],
      borderColor: [
        'rgba(255, 99, 132, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    }
  }
});
</script>

</body>
</html>
