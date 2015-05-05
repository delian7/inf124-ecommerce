<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Food2U | In-N-Out</title>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="css/default.css" />
  <script language="javascript" type="text/javascript" src="assets/javascript/in-n-out.js"></script>
  <script language="javascript" type="text/javascript" src="assets/javascript/receipt.js"></script>
</head>

<body>

  <div id="page">

    <?php include( "common/mainmenu.html");?>

    <div class="container">
      <div id="main">
        <img id="logo" width=95% src="assets/img/in-n-out.png">
        </br>
        <form id="INOform" action="" onsubmit="validateINOform()">
          <table id=INOmenu summary="in-n-out order form">
            <th width="50%">Burgers & Fries</th>
            <th width="50%">Price</th>

            <tr valign="top">
              <td>
                </br>
              </td>
            </tr>
            <tr valign="top">
              <td align="center" width="33%">
                <label class="itemName" for="1">Double-Double</label>
              </td>
              <td class="price" width="33%" align="center">$3.45</td>
              <td width="33%" align="center">
                <select>
                  <option>--qty--</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </td>
            </tr>
            <tr valign="top">
              <td width="33%" align="center">
                <label class="itemName" for="2">Cheeseburger</label>
              </td>
              <td class="price" width="33%" align="center">$2.35</td>
              <td width="33%" align="center">
                <select>
                  <option>--qty--</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </td>
            </tr>
            <tr valign="top">
              <td width="33%" align="center">
                <label class="itemName" for="3">Hamburger</label>
              </td>
              <td class="price" width="33%" align="center">$2.05</td>
              <td width="33%" align="center">
                <select>
                  <option>--qty--</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </td>
            </tr>
            <tr valign="top">
              <td width="33%" align="center">
                <label class="itemName" for="4">French Fries</label>
              </td>
              <td class="price" width="33%" align="center">$1.60</td>
              <td width="33%" align="center">
                <select>
                  <option>--qty--</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </td>
            </tr>
            <tr valign="top">
              <td>
                </br>
              </td>
            </tr>
            <th width="100%">
              Drinks
            </th>
            <tr valign="top">
              <td align="center" width="33%">
                <label class="itemName" for="1">Small</label>
              </td>
              <td class="price" width="33%" align="center">$1.45</td>
              <td width="33%" align="center">
                <select name="drink">
                  <option>--choose drink--</option>
                  <option value="coke">Coke</option>
                  <option value="root-beer">Root Beer</option>
                  <option value="dr-pepper">Dr. Pepper</option>
                  <option value="seven-up">Seven-Up</option>
                  <option value="lemonade">Lemonade</option>
                  <option value="tea">Iced Tea</option>
                </select>
                <select>
                  <option>--qty--</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </td>
            </tr>
            <tr>

              <td align="center" width="33%">
                <label class="itemName" for="1">Medium</label>
              </td>
              <td class="price" width="33%" align="center">$1.55</td>
              <td width="33%" align="center">
                <select name="drink">
                  <option>--choose drink--</option>
                  <option value="coke">Coke</option>
                  <option value="root-beer">Root Beer</option>
                  <option value="dr-pepper">Dr. Pepper</option>
                  <option value="seven-up">Seven-Up</option>
                  <option value="lemonade">Lemonade</option>
                  <option value="tea">Iced Tea</option>
                </select>
                <select>
                  <option>--qty--</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </td>
            </tr>
            <tr>

              <td align="center" width="33%">
                <label class="itemName" for="1">Large</label>
              </td>
              <td class="price" width="33%" align="center">$1.75</td>
              <td width="33%" align="center">

                <select name="drink">
                  <option>--choose drink--</option>
                  <option value="coke">Coke</option>
                  <option value="root-beer">Root Beer</option>
                  <option value="dr-pepper">Dr. Pepper</option>
                  <option value="seven-up">Seven-Up</option>
                  <option value="lemonade">Lemonade</option>
                  <option value="tea">Iced Tea</option>
                </select>
                <select>
                  <option>--qty--</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </td>
            </tr>
            <tr>

              <td align="center" width="33%">
                <label class="itemName" for="1">X-Large</label>
              </td>
              <td class="price" width="33%" align="center">$1.95</td>
              <td width="33%" align="center">
                <select name="drink">
                  <option>--choose drink--</option>
                  <option value="coke">Coke</option>
                  <option value="root-beer">Root Beer</option>
                  <option value="dr-pepper">Dr. Pepper</option>
                  <option value="seven-up">Seven-Up</option>
                  <option value="lemonade">Lemonade</option>
                  <option value="tea">Iced Tea</option>
                </select>
                <select>
                  <option>--qty--</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </td>
            </tr>
            <tr>

              <td align="center" width="33%">
                <label class="itemName" for="1">Shakes</label>
              </td>
              <td class="price" width="33%" align="center">$2.10</td>
              <td width="33%" align="center">

                <select name="shake">
                  <option>--choose shake--</option>
                  <option value="chocolate">Chocolate</option>
                  <option value="strawberry">Strawberry</option>
                  <option value="vanilla">Vanilla</option>
                  <option value="neapolitan">Neapolitan</option>
                </select>
                <select>
                  <option>--qty--</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>


            </td>
            </tr>
            <tr>
              <td>
                <input type="button" onClick="validateINOform()" value="Order" />
              </td>

            </tr>

          </table>
        </form>
      </div>

      <?php include( "common/sidebar.html");?>
    </div>

  </div>
</body>

</html>
