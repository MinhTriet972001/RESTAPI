  <!-- Mainly scripts -->
  <script src="js/jquery-3.1.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
  <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
  <script src="backend/library/library.js"></script>
  @if (isset($config['js']) && is_array($config['js']))
  @foreach ($config['js'] as $val)
      <script src="{{ $val }}"></script>
  @endforeach
@endif





  <script>
      $(document).ready(function() {

          var lineData = {
              labels: ["January", "February", "March", "April", "May", "June", "July"],
              datasets: [
                  {
                      label: "Example dataset",
                      backgroundColor: "rgba(26,179,148,0.5)",
                      borderColor: "rgba(26,179,148,0.7)",
                      pointBackgroundColor: "rgba(26,179,148,1)",
                      pointBorderColor: "#fff",
                      data: [28, 48, 40, 19, 86, 27, 90]
                  },
                  {
                      label: "Example dataset",
                      backgroundColor: "rgba(220,220,220,0.5)",
                      borderColor: "rgba(220,220,220,1)",
                      pointBackgroundColor: "rgba(220,220,220,1)",
                      pointBorderColor: "#fff",
                      data: [65, 59, 80, 81, 56, 55, 40]
                  }
              ]
          };

          var lineOptions = {
              responsive: true
          };


          var ctx = document.getElementById("lineChart").getContext("2d");
          new Chart(ctx, {type: 'line', data: lineData, options:lineOptions});

      });
  </script>
