<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>グラフ</title> 
</head>
<body>
  <h1>円グラフ</h1>
  <canvas id="myPieChart"></canvas>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
  
  <script>
  var ctx = document.getElementById("myPieChart");
  var myPieChart = new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ["醤油", "味噌", "塩", "合わせ","カレー"],
      datasets: [{
          backgroundColor: [
              "#BB5179",
              "#FAFF67",
              "#58A27C",
              "#3C00FF",
              "#000000"
          ],
          data: [29, 26, 21, 13, 11,]
      }]
    },
    options: {
      title: {
        display: true,
        text: '味売上 割合'
      }
    }
  });
  </script>
</body>
</html>