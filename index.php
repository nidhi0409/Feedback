<?php
//header('refresh:5');
$servername="localhost";
$username="root";
$dbpassword="";
$dbname="feedback";
$conn= mysqli_connect($servername,$username,$dbpassword,$dbname);
if (!$conn) {
	echo "connection failure";
}
//echo "connection established"."<br>";
$temp = "SELECT `Excellent` FROM `feedback`";
$result= mysqli_query($conn,$temp);
$row= mysqli_fetch_assoc($result);
//echo $row['Excellent'] ."<br>";

$temp = "SELECT `Good` FROM `feedback`";
$result= mysqli_query($conn,$temp);
$row= mysqli_fetch_assoc($result);
//echo $row['Good'] ."<br>";

$temp = "SELECT `Poor` FROM `feedback`";
$result= mysqli_query($conn,$temp);
$row= mysqli_fetch_assoc($result);
//echo $row['Poor'] ."<br>";

//$a= $row['Excellent'];
//$b= $row['Good'];
//$c= $row['Poor'];

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Feedback', 'Votes'],
          ['Excellent',    70],
          ['Good',      20],
          ['Poor',  10]
        ]);

        var options = {
          title: 'MRIIC Feedback',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));

        chart.draw(data, options);
      }
    </script>
</head>
<body>
	 <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
</body>
</html>