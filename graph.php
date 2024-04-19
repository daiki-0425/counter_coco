<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="description" content="ディスクリプションを入力">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="graph.css">
  <title>グラフ</title> 
</head>


<body>
  <h1>提供時間</h1>
  <div class="wrap-chart">
    <div class="chart-container" style="position: relative; width: 390px; height: 600px;">
      <canvas id="myLineChart"></canvas>
    </div>
  </div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
  

   <?php $param_json = json_encode($result); ?>
  <script>
  var ctx = document.getElementById("myLineChart");
  var param = JSON.parse('<?php echo $param_json; ?>');
  var myLineChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00','18:00', '19:00', '20:00', '21:00','22:00'],
      datasets: [
        {
          label: '1min_low',
          data: [param[0]["1min_low"],param[1]["1min_low"],param[2]["1min_low"],param[3]["1min_low"],param[4]["1min_low"],
          param[5]["1min_low"],param[6]["1min_low"],param[7]["1min_low"],param[8]["1min_low"],
          param[9]["1min_low"],param[10]["1min_low"],param[11]["1min_low"]],
          borderColor: "rgba(0,255,0,1)",
          backgroundColor: "rgba(0,0,0,0)"
        },
        {
          label: '2min',
          data: [param[0]["2min"],param[1]["2min"],param[2]["2min"],param[3]["2min"],param[4]["2min"],
          param[5]["2min"],param[6]["2min"],param[7]["2min"],param[8]["2min"],
          param[9]["2min"],param[10]["2min"],param[11]["2min"]],
          borderColor: "rgba(255,0,0,1)",
          backgroundColor: "rgba(0,0,0,0)"
        },
        {
          label: '3min',
          data: [param[0]["3min"],param[1]["3min"],param[2]["3min"],param[3]["3min"],param[4]["3min"],
          param[5]["3min"],param[6]["3min"],param[7]["3min"],param[8]["3min"],
          param[9]["3min"],param[10]["3min"],param[11]["3min"]],
          borderColor: "rgba(0,0,255,1)",
          backgroundColor: "rgba(0,0,0,0)"
        },
        {
          label: '4min',
          data: [param[0]["4min"],param[1]["4min"],param[2]["4min"],param[3]["4min"],param[4]["4min"],
          param[5]["4min"],param[6]["4min"],param[7]["4min"],param[8]["4min"],
          param[9]["4min"],param[10]["4min"],param[11]["4min"]],
          borderColor: "rgba(125,125,0,1)",
          backgroundColor: "rgba(0,0,0,0)"
        },
        {
          label: '5min',
          data: [param[0]["5min"],param[1]["5min"],param[2]["5min"],param[3]["5min"],param[4]["5min"],
          param[5]["5min"],param[6]["5min"],param[7]["5min"],param[8]["5min"],
          param[9]["5min"],param[10]["5min"],param[11]["5min"]],
          borderColor: "rgba(125,125,125,1)",
          backgroundColor: "rgba(0,0,0,0)"
        },
        {
          label: '6min',
          data: [param[0]["6min"],param[1]["6min"],param[2]["6min"],param[3]["6min"],param[4]["6min"],
          param[5]["6min"],param[6]["6min"],param[7]["6min"],param[8]["6min"],
          param[9]["6min"],param[10]["6min"],param[11]["6min"]],
          borderColor: "rgba(125,0,125,1)",
          backgroundColor: "rgba(0,0,0,0)"
        },
        {
          label: '7min',
          data: [param[0]["7min"],param[1]["7min"],param[2]["7min"],param[3]["7min"],param[4]["7min"],
          param[5]["7min"],param[6]["7min"],param[7]["7min"],param[8]["7min"],
          param[9]["7min"],param[10]["7min"],param[11]["7min"]],
          borderColor: "rgba(0,125,125,1)",
          backgroundColor: "rgba(0,0,0,0)"
        },
        {
          label: '8min',
          data: [param[0]["8min"],param[1]["8min"],param[2]["8min"],param[3]["8min"],param[4]["8min"],
          param[5]["8min"],param[6]["8min"],param[7]["8min"],param[8]["8min"],
          param[9]["8min"],param[10]["8min"],param[11]["8min"]],
          borderColor: "rgba(0,125,125,1)",
          backgroundColor: "rgba(0,0,0,0)"
        },
        {
          label: '9min',
          data: [param[0]["9min"],param[1]["9min"],param[2]["9min"],param[3]["9min"],param[4]["9min"],
          param[5]["9min"],param[6]["9min"],param[7]["9min"],param[8]["9min"],
          param[9]["9min"],param[10]["9min"],param[11]["9min"]],
          borderColor: "rgba(0,125,125,1)",
          backgroundColor: "rgba(0,0,0,0)"
        },
        {
          label: '10min_up',
          data: [param[0]["10min_up"],param[1]["10min_up"],param[2]["10min_up"],param[3]["10min_up"],param[4]["10min_up"],
          param[5]["10min_up"],param[6]["10min_up"],param[7]["10min_up"],param[8]["10min_up"],
          param[9]["10min_up"],param[10]["10min_up"],param[11]["10min_up"]],
          borderColor: "rgba(30,30,30,1)",
          backgroundColor: "rgba(0,0,0,0)"
        },
      ],
    },
    options: {
      title: {
        display: true,
        text: '時間帯（11:00~22:00）'
      },
      scales: {
        yAxes: [{
          ticks: {
            suggestedMax: 40,
            suggestedMin: 0,
            stepSize: 2,
            callback: function(value, index, values){
              return  value +  '回'
            }
          }
        }]
      },
      maintainAspectRatio: false
    }
  });
  </script>

  <div class="return">
    <form action="return.php" method="POST">
      <input type="submit" name="return_counter" value="カウンターに戻る"></button>
    </form>
  </div>
</body>

</html>


