<?php
ob_start();
session_start();
$id = $_GET['id'];
$row = '';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>ARENA OF VALOR</title>
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    />
    <!-- Bootstrap core CSS -->
    <link
      href="./node_modules/mdbootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Material Design Bootstrap -->
    <link href="./node_modules/mdbootstrap/css/mdb.min.css" rel="stylesheet" />

    <link
      href="./node_modules/sweetalert2/dist/sweetalert2.min.css"
      rel="stylesheet"
    />
    <link
      href="./node_modules/smartwizard/dist/css/smart_wizard.min.css"
      rel="stylesheet"
    />
    <link
      href="./node_modules/smartwizard/dist/css/smart_wizard_theme_arrows.min.css"
      rel="stylesheet"
    />
    <link
      href="./node_modules/@fancyapps/fancybox/dist/jquery.fancybox.min.css"
      rel="stylesheet"
    />
    <!-- Your custom styles (optional) -->
    <link href="./css/css.css" rel="stylesheet" />
  </head>
<?php
$servername = "localhost";
$userserver = "aov_db";
$passserver = "Yh0abYrHYI2";
$dbname = "aov_db";

$conn = mysqli_connect($servername, $userserver, $passserver, $dbname);
if (!$conn) {
    die("Connection failed:" . $conn->connect_error);
}
?>
<body class="main-body-option2">
    <main class="main mt-5 pt-5">
      <div class="container">
        <!--Section: Post-->
        <section class="mt-4">
          <!--Grid row-->
          <div class="row">
            <!--Grid column-->
            <div class="col-md-12 mb-4">
              <!--Card-->
              <div class="card mb-4 wow fadeIn">
                <!--Card content-->
                <div class="card-body text-left">
                  <p class="h3 mt-4 mb-2 text-center">Profile Infomation</p>
                  <h3 class="text-center mt-3">Your number</h3>
                    <?php
                    mysqli_select_db($conn, "select_seatstd");
                    $sql = "SELECT * FROM users WHERE passport_id = '" . $id . "'";
                    mysqli_query($conn, "SET NAMES utf8");
                    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<h1 class="text-center" style="font-size: 150px;" id="num">' . $row['id'] . '</h1>';
                        echo '<p class="text-center">' . $row['firstname'] . '</p><hr />';
                        echo '<p class="">Flight Detail :</p>';
                        echo '<div class="table-responsive text-nowrap"><table class="table table-hover table-bordered table-striped"><theadstyle="background-image: url("./images/bg_head_table.png"); background-repeat: no-repeat; background-size: 100% 100%; color: #fff;"><tr><th class="text-center" scope="col">Date</th><th class="text-center" scope="col">From - To</th><th class="text-center" scope="col">Flight</th><th class="text-center" scope="col">Departure Time</th><th class="text-center" scope="col">Arrive Time</th><th class="text-center" scope="col">Airline</th><th class="text-center" scope="col">Remark</th></tr></thead><tbody>';
                        if ($row["flight_pdf"] == 1) {
                            echo '<tr><td class="text-center">6-Mar-19</td><td class="text-center">SHENZHEN - PHUKET </td><td class="text-center">CZ 6093</td><td class="text-center">14:40</td><td class="text-center">17:20</td><td class="text-center">China Southern Airline</td><td class="text-center">MEET at SHENZHEN Airport 11:40*</td></tr><tr><td class="text-center">9-Mar-19</td><td class="text-center">PHUKET - SHENZHEN</td><td class="text-center">CZ 6094</td><td class="text-center">18:20</td><td class="text-center">22:55</td><td class="text-center">China Southern Airline</td><td class="text-center">Departure From Hotel 15:20*</td></tr>';
                        }
                        if ($row["flight_pdf"] == 2) {
                            echo '<tr>
                            <td class="text-center">6-Mar-19</td>
                            <td class="text-center">SHENZHEN - PHUKET </td>
                            <td class="text-center">CZ 6093</td>
                            <td class="text-center">14:40</td>
                            <td class="text-center">17:20</td>
                            <td class="text-center">China Southern Airline</td>
                            <td class="text-center">MEET at SHENZHEN Airport 11:40*</td>
                          </tr>
                          <tr>
                            <td class="text-center">9-Mar-19</td>
                            <td class="text-center">PHUKET - SHENZHEN</td>
                            <td class="text-center">KA 213</td>
                            <td class="text-center">12:20</td>
                            <td class="text-center">16:50</td>
                            <td class="text-center">CHATHY DRAGON</td>
                            <td class="text-center">Departure From Hotel 9:20*</td>
                          </tr>';
                        }
                        if ($row["flight_pdf"] == 3) {
                            echo '<tr>
                            <td class="text-center">6-Mar-19</td>
                            <td class="text-center">HONGKONG - PHUKET </td>
                            <td class="text-center">WE 609</td>
                            <td class="text-center">10:25</td>
                            <td class="text-center">12:55</td>
                            <td class="text-center">THAI SMILE</td>
                            <td class="text-center">Bus Pickup @Tencent Shenzhen 5:00*</td>
                          </tr>
                          <tr>
                            <td class="text-center">9-Mar-19</td>
                            <td class="text-center">PHUKET - HONGKONG </td>
                            <td class="text-center">WE 608</td>
                            <td class="text-center">15:40</td>
                            <td class="text-center">20:05</td>
                            <td class="text-center">THAI SMILE</td>
                            <td class="text-center">Departure From Hotel 12:40*</td>
                          </tr>';
                        }
                        if ($row["flight_pdf"] == 4) {
                            echo '<tr>
                            <td class="text-center">6-Mar-19</td>
                            <td class="text-center">GUANGZHOU - PHUKET  </td>
                            <td class="text-center">CZ 6063</td>
                            <td class="text-center">15:45</td>
                            <td class="text-center">18:30</td>
                            <td class="text-center">China Southern Airline</td>
                            <td class="text-center">Bus Pickup @ Tencent Shenzhen 10:00*</td>
                          </tr>
                          <tr>
                            <td class="text-center">9-Mar-19</td>
                            <td class="text-center">PHUKET - HONGKONG </td>
                            <td class="text-center">KA 213</td>
                            <td class="text-center">12:20</td>
                            <td class="text-center">16:50</td>
                            <td class="text-center">CHATHY DRAGON</td>
                            <td class="text-center">Departure From Hotel  9:20* </td>
                          </tr>';
                        }
                        if ($row["flight_pdf"] == 5) {
                            echo '<tr>
                            <td class="text-center">6-Mar-19</td>
                            <td class="text-center">SHANGHAI - HONGKOKN - PHUKET</td>
                            <td class="text-center">KA 831, KA 214</td>
                            <td class="text-center">8:40</td>
                            <td class="text-center">14:45</td>
                            <td class="text-center">CHATHY DRAGON </td>
                            <td class="text-center"></td>
                          </tr>
                          <tr>
                            <td class="text-center">9-Mar-19</td>
                            <td class="text-center">PHUKET - BANGKOK - SHANGHAI</td>
                            <td class="text-center">PG 274, MU 9856</td>
                            <td class="text-center">14:50-16:20</td>
                            <td class="text-center">19:05-00:30</td>
                            <td class="text-center">Bangkok Airways, China Eastern Airlines</td>
                            <td class="text-center">Departure From Hotel  11:50* (9 Mar 19)</td>
                          </tr>';
                        }
                        if ($row["flight_pdf"] == 6) {
                            echo '<tr>
                            <td class="text-center">6-Mar-19</td>
                            <td class="text-center">TAIPEI - BANGKOK - PHUKET</td>
                            <td class="text-center">TG 633, TG 211</td>
                            <td class="text-center">13:55</td>
                            <td class="text-center">19:10</td>
                            <td class="text-center">Thai Airways</td>
                            <td class="text-center"></td>
                          </tr>
                          <tr>
                            <td class="text-center">9-Mar-19</td>
                            <td class="text-center">PHUKET - BANGKOK - TAIPEI</td>
                            <td class="text-center">TG 685, TG 636</td>
                            <td class="text-center">13:20</td>
                            <td class="text-center">17:40</td>
                            <td class="text-center">Thai Airways</td>
                            <td class="text-center">Departure From Hotel  10:20* (9 Mar 19)</td>
                          </tr>';
                        }
                        if ($row["flight_pdf"] == 7) {
                            echo '<tr>
                            <td class="text-center">6-Mar-19</td>
                            <td class="text-center">JAKARTA - KUALA LUMPUR - PHUKET</td>
                            <td class="text-center">MH 710, MH 794</td>
                            <td class="text-center">11:10</td>
                            <td class="text-center">15:45</td>
                            <td class="text-center">Malaysia Airlines</td>
                            <td class="text-center"></td>
                          </tr>
                          <tr>
                            <td class="text-center">9-Mar-19</td>
                            <td class="text-center">PHUKET - KUALA LUMPUR - JAKARTA</td>
                            <td class="text-center">MH 795, MH 727</td>
                            <td class="text-center">16:55</td>
                            <td class="text-center">23:20</td>
                            <td class="text-center">Malaysia Airlines</td>
                            <td class="text-center">Departure From Hotel 13:55* (9 Mar 19)</td>
                          </tr>';
                        }
                        if ($row["flight_pdf"] == 8) {
                            echo '<tr>
                            <td class="text-center">6-Mar-19</td>
                            <td class="text-center">SINGAPORE - PHUKET</td>
                            <td class="text-center">MI 754</td>
                            <td class="text-center">13:05</td>
                            <td class="text-center">13:40</td>
                            <td class="text-center">SILKAIR</td>
                            <td class="text-center"></td>
                          </tr>
                          <tr>
                            <td class="text-center">9-Mar-19</td>
                            <td class="text-center">PHUKET - SINGAPORE</td>
                            <td class="text-center">MI 753</td>
                            <td class="text-center">14:30</td>
                            <td class="text-center">17:40</td>
                            <td class="text-center">SILKAIR</td>
                            <td class="text-center">Departure From Hotel  11:30* (9 Mar 19)</td>
                          </tr>';
                        }
                        if ($row["flight_pdf"] == 9) {
                            echo '<tr>
                            <td class="text-center">6-Mar-19</td>
                            <td class="text-center">HANOI - BANGKOK - PHUKET</td>
                            <td class="text-center">TG 561 , TG 215</td>
                            <td class="text-center">10:35</td>
                            <td class="text-center">15:25</td>
                            <td class="text-center">Thai Airways</td>
                            <td class="text-center"></td>
                          </tr>
                          <tr>
                            <td class="text-center">9-Mar-19</td>
                            <td class="text-center">PHUKET - BANGKOK - HANOI</td>
                            <td class="text-center">TG 685 , TG 564 </td>
                            <td class="text-center">13:20</td>
                            <td class="text-center">19:20</td>
                            <td class="text-center">Thai Airways</td>
                            <td class="text-center">Departure From Hotel  10:20* (9 Mar 19)</td>
                          </tr>';
                        }
                        if ($row["flight_pdf"] == 10) {
                            echo '<tr>
                            <td class="text-center">6-Mar-19</td>
                            <td class="text-center">BANGKOK -PHUKET</td>
                            <td class="text-center">TG 215</td>
                            <td class="text-center">14:00</td>
                            <td class="text-center">15:25</td>
                            <td class="text-center">Thai Airways</td>
                            <td class="text-center"></td>
                          </tr>
                          <tr>
                            <td class="text-center">9-Mar-19</td>
                            <td class="text-center">PHUKET - BANGKOK</td>
                            <td class="text-center">TG 685</td>
                            <td class="text-center">13:20</td>
                            <td class="text-center">14:45</td>
                            <td class="text-center">Thai Airways</td>
                            <td class="text-center">Departure From Hotel  10:20* (9 Mar 19)</td>
                          </tr>';
                        }

                        echo '</tbody><table></div>';
                        echo '<p class="">Transportations @ Phuket:<a href="./images/transportation.pdf" target="_blank">Download Transportations here</a></p>';
                        echo '<p class="d-none">Tribe Color :'. $row['tribe_color'] .'</p>';
                        echo '<p class="">Activity Selected : ';
                        if ($row["activity_id"] == null){
                            echo 'No Activity Selected';
                        }
                        if ($row["activity_id"] == 5){
                            echo 'ZIPLINE ACTIVITY';
                        }
                        if ($row["activity_id"] == 6){
                            echo 'PHI PHI ISLAND AND SNORKELING';
                        }
                        if ($row["activity_id"] == 9){
                            echo 'THAI MASSAGE AND SPA';
                        }
                        if ($row["activity_id"] == 10){
                            echo 'SIGHTSEEING & SHOPPING CITY TOUR';
                        }
                        if ($row["activity_id"] == 13){
                            echo 'WAKE BOARD';
                        }
                        if ($row["activity_id"] == 14){
                            echo 'RAFTING ACTIVITY';
                        }
                        if ($row["activity_id"] == 17){
                            echo 'HYPE CRUISE';
                        }
                        if ($row["activity_id"] == 18){
                            echo 'FLOW HOUSE OR JET SKI';
                        }
                        echo '</p>';
                    }

                    mysqli_close($conn);
                    ?>

            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </section>
        <!--Section: Post-->
      </div>
    </main>
    <footer class="page-footer text-center font-small wow fadeIn">
      <!--Copyright-->
      <div class="footer-copyright py-3">
        © 2019 Copyright: <a href="home.html"> aov-trip.com </a>
      </div>
      <!--/.Copyright-->
    </footer>
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script
      type="text/javascript"
      src="./node_modules/mdbootstrap/js/jquery-3.3.1.min.js"
    ></script>
    <!-- Bootstrap tooltips -->
    <script
      type="text/javascript"
      src="./node_modules/mdbootstrap/js/popper.min.js"
    ></script>
    <!-- Bootstrap core JavaScript -->
    <script
      type="text/javascript"
      src="./node_modules/mdbootstrap/js/bootstrap.min.js"
    ></script>
    <!-- MDB core JavaScript -->
    <script
      type="text/javascript"
      src="./node_modules/mdbootstrap/js/mdb.min.js"
    ></script>
    <!-- Sweet Alert -->
    <script src="./node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script
      type="text/javascript"
      src="./node_modules/@fancyapps/fancybox/dist/jquery.fancybox.min.js"
    ></script>
    <!-- Initializations -->
    <script type="text/javascript">
      // Animations initialization
      new WOW().init();
    </script>
    </body>
</html>