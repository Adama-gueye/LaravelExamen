@include('navbar.app')
<!DOCTYPE html>
<html>
<head>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<div class="row bg-info p-3 mt-5">
        <h3 style="box-shadow:2px 2px 20px blue,2px 2px 20px grey ; text-align:center;">GRAPHE PRESENTANT L'STATISTIQUE DES FORMATIONS</h3>
</div>
<body>
  <canvas id="trainingStatusChart"></canvas>
  <script>
    var ctx = document.getElementById('trainingStatusChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["Nombre de Formations en Cours", "Nombre de Formations en Attentes"],
            datasets: [{
                data: [<?php echo $inProgress ; echo ","; echo $pending; ?>],
                backgroundColor: [
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 99, 132, 0.2)'
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 99, 132, 1)'
                ],
                borderWidth: 1
            }]
        }
    });
  </script>
</body>
</html>

