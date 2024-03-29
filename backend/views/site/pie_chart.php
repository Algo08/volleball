<?php

$data[0] = \common\models\Room::find()->count('section');
$data[1] = \common\models\Room::find()->count('id') - $data[0];
$labels = ['Maktab darsliklari', 'DTM test'];

$labels = json_encode($labels);
$data = json_encode($data);
?>

    <div class="chart-area">
        <canvas id="myPieChart"></canvas>
    </div>
    <div class="mt-4 text-center small">
        <span class="mr-2">
            <i class="fas fa-circle text-primary"></i> Darsliklar
        </span>
        <span class="mr-2">
            <i class="fas fa-circle text-success"></i> Dtm
        </span>
    </div>
<?php
$script = <<< JS

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ($labels),
    datasets: [{
      data: ($data),
      backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
      hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});
JS;
$this->registerJs( $script );
?>