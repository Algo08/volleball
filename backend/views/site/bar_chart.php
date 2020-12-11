<?php
$rooms = new \yii\db\Query();
$rooms = $rooms
    ->select(['*','max(result) as max, avg(result) as avg'])
    ->from('room')
    ->where(['section'=>null])
    ->groupBy('user_id')
    ->limit(10)
    ->all();
$labels = [];
$data = [];
$data1 = [];
foreach ($rooms as $key=>$room){
    $labels[$key] = \common\models\User ::findIdentity($room['user_id'])->username;
    $data[$key] = $room['max'];
    $data1[$key] = $room['avg'];
}
$labels = json_encode($labels);
$data = json_encode($data);
$data1 = json_encode($data1);
?>

<div class="chart-area">
    <canvas id="myBarChart"></canvas>
</div>

<?php
$script = <<< JS

// Bar Chart Example
var ctx = document.getElementById("myBarChart");
var myBarChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: $labels,
    datasets: [
        {
      label: "Max",
      backgroundColor: "#4e73df",
      hoverBackgroundColor: "#2e59d9",
      borderColor: "#4e73df",
      data: $data,
    },
    {
      label: "O`rtacha",
      backgroundColor: "#f6c23e",
      hoverBackgroundColor: "#ffb907",
      borderColor: "#f6c23e",
      data: $data1,
    }
    ],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'test'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 6
        },
        maxBarThickness: 25,
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 100,
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return number_format(value) + '%';
          }
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: true,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: true
    },
    tooltips: {
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + ': ' + number_format(tooltipItem.yLabel) + '%';
        }
      }
    },
  }
});

JS;
$this->registerJs( $script );
?>