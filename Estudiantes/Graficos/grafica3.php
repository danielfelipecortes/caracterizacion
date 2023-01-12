<?php $Ingresar = "SELECT name,rating FROM grafica3 ORDER BY rating DESC";
                    $result = mysqli_query($cn,$Ingresar);?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

var options = {
    title: 'Inscritos por semestre',
    height: 400,
    width: 1000,
    pieHole: 0.5,
    backgroundColor: { fill:'transparent' },
};

var data = google.visualization.arrayToDataTable([
  ['Language', 'Rating'],
  <?php
  if($result->num_rows > 0){
      while($row = $result->fetch_assoc()){
        echo "['".$row['name']."', ".$row['rating']."],";
      }
  }
  ?>
]);
var chart = new google.visualization.PieChart(document.getElementById('grafica3'));
chart.draw(data, options);

}
</script>
<style>
.grafica3{
    text-align: center;
    margin: auto;
    width: 50%;
}
</style>
<div class="grafica3" id="grafica3"></div>