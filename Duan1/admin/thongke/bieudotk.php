<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div id="piechart"></div>

     


      <style>
        body {
          background-color: #f8f9fa;
        }

        .page-wrapper {
          margin: 20px auto;
        }

        .container-fluid {
          padding: 20px;
          background-color: #ffffff;
          border: 1px solid #dee2e6;
          border-radius: 5px;
        }

        #piechart {
          width: 100%;
        }

        .col-md-12 {
          margin-bottom: 20px;
        }
      </style>
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

      <script type="text/javascript">
        // Load google charts
        google.charts.load('current', {
          'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        // Draw the chart and set the chart values
        function drawChart() {
          var data = google.visualization.arrayToDataTable([
            ['Danh mục', 'Số lượng sản phẩm'],
            <?php
            $tongdm = count($listthongke);
            $i = 1;
            foreach ($listthongke as $thongke) {
              extract($thongke);
              if ($i == $tongdm) $dauphay = "";
              else $dauphay = ",";
              echo "['" . $thongke['tendm'] . "', " . $thongke['countsp'] . "]" . $dauphay;
              $i += 1;
            }
            ?>


          ]);

          // Optional; add a title and set the width and height of the chart
          var options = {
            'title': 'Thống kê sản phẩm theo danh mục',
            'width': 1100,
            'height': 800
          };

          // Display the chart inside the <div> element with id="piechart"
          var chart = new google.visualization.PieChart(document.getElementById('piechart'));
          chart.draw(data, options);
        }
      </script>
    </div>
  </div>
</div>
