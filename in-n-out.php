<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Food2U | In-N-Out</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="css/default.css" />
  </head>
<body>

  <div id="page">

    <?php include("common/mainmenu.html");?>

    <div class="container">
      <div id="main">
        <img id="logo" width=95% src="assets/img/in-n-out.png">
      </br></br>
      <div class="grid-container outline">
        <div class="row">
          <span class="col-5"><p>Double-Double</p></span>
          <span class="col-6"><p>$3.45
        <select name="quantity">
          <option value="0">qty</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
      </p></span>
    </div>

        <div class="row">
          <span class="col-5"><p>Cheeseburger</p></span>
          <span class="col-6"><p>$2.35
        <select name="quantity">
          <option value="0">qty</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
      </p></span>
      </div>

      <div class="row">
        <span class="col-5"><p>Hamburger</p></span>
          <span class="col-6"><p>$2.05
        <select name="quantity">
          <option value="0">qty</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
      </p></span>
      </div>

      <div class="row">
        <span class="col-5"><p>French Fries</p></span>
        <span class="col-6"><p>$1.60
        <select name="quantity">
          <option value="0">qty</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
      </p></span>
      </div>

      <div class="row">
        <span class="col-5"><p>Sodas/Drinks:<br>Coke ,Root Beer, Dr. Pepper,<br>Seven-Up, Lemonade, IcedTea</p></span>
        <span class="col-6">
          <p>SM $1.45 MED $1.55</br>LG $1.75 X-LG $1.95</p>
        <select name="drink">
          <option value="0">--choose drink--</option>
          <option value="coke">Coke</option>
          <option value="root-beer">Root Beer</option>
          <option value="dr-pepper">Dr. Pepper</option>
          <option value="seven-up">Seven-Up</option>
          <option value="lemonade">Lemonade</option>
          <option value="tea">Iced Tea</option>
        </select>
      </br>
        <select name="size">
          <option value="0">size</option>
          <option value="small">SM $1.45</option>
          <option value="medium">MED $1.55</option>
          <option value="large">LG $1.75</option>
          <option value="xlarge">X-LG $1.95</option>
        </select>
        <select name="quantity">
          <option value="0">qty</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
      </span>
    </div>
      <div class="row">
        <span class="col-5"><p>Shakes:<br>Chocolate, Strawberry, Vanilla</p></span>
        <span class="col-6"><p>$2.10
        </br>
        <select name="shake">
          <option value="0">--choose shake--</option>
          <option value="chocolate">Chocolate</option>
          <option value="strawberry">Strawberry</option>
          <option value="vanilla">Vanilla</option>
        </select>
        <select name="quantity">
          <option value="0">qty</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>
      </p></span>
    </div>
      </div>
    </div>

    <?php include("common/sidebar.html");?>

    </div>

  </div>
</body>
</html>
