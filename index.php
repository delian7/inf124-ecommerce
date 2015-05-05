<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Food2U</title>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="css/default.css" />
</head>

<body>

  <div id="page">

    <?php include( "common/mainmenu.html");?>

    <div class="container">
      <div id="main">
        <p>Delicious UCI Restaurants that we offer</p>

        <div class="grid-container outline">

          <div class="row">
            <a href="chipotle.php">
              <span class="col-1 coming-soon">
                <img id="logo" height="75" src="assets/img/chipotle.png">

              </span>
            </a>
            <a href="starbucks.php">
              <span class="col-1">
                <img id="logo" height="75" src="assets/img/starbucks.png">
              </span>
            </a>
          </div>
          <div class="row">
            <a href="in-n-out.php">
              <span class="col-1">
                <img id="logo" height="75" src="assets/img/in-n-out.png">
              </span>
            </a>
            <a href="#">
              <span class="col-1">
                <img id="logo" height="75" src="assets/img/chick-fil-a.png">
              </span>
            </a>
          </div>

        </div>


      </div>

      <?php include( "common/sidebar.html");?>

    </div>

  </div>
</body>

</html>
