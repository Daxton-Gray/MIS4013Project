<h1 style="color:#91B6D4;">Instruments Available</h1>

<div>
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>



<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
    datasets: [{
        data: [
<?php
while ($inventory = $inventories->fetch_assoc()) {
  echo $inventory['num_instruments'] . ", ";
}
?>          
        ]
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
<?php
$inventories = selectInventories();
while ($inventory = $inventories->fetch_assoc()) {
  echo "'" . $inventory['brand_name'] . " - " . $inventory['instrument_name'] . "', ";
}
?>  
    ]
},
  });
</script>
