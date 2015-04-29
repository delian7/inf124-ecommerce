
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Food2U</title>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="css/default.css" />
  <script language="javascript" type="text/javascript" src="assets/javascript/starbucks.js"></script>
</head>

<body>

  <div id="page">

    <!--#include virtual="common/mainmenu.html"-->

    <div class="container">
      <div id="main">
        <h3>Pick Your Starbucks Drink for Delivery</h3>
        <p>
          To order, please choose the quantity of your favorite drink
        </p>
        <form id="starbucksForm" action="" onsubmit="validateStarbucksForm()">
          <table summary="starbucks order form">
            <th>Drink</th>
            <th>Price</th>
            <th>Order Quantity</th>
            <tr valign='top'>
              <td><label id="name1" for="1">Iced Mocha Latte</label></td>
              <td id="price1">$3.95</td>
              <td>
                <select id="1">
                  <option>0</option>
                  <option value="s1q1">1</option>
                  <option value="s1q2">2</option>
                  <option value="s1q3">3</option>
                </select>
              </td>
            </tr>
            <tr valign='top'>
              <td><label id="name2" for="2">Caramel Frappuchino</label></td>
              <td id="price2">$4.95</td>
              <td>
                <select id="2">
                  <option>0</option>
                  <option value="s2q1">1</option>
                  <option value="s2q2">2</option>
                  <option value="s2q3">3</option>
                </select>
              </td>
            </tr>
            <tr valign='top'>
              <td><label id="name3" for="3">Soy Latte</label></td>
              <td id="price3">$2.95</td>
              <td>
                <select id="3">
                  <option>0</option>
                  <option value="s3q1">1</option>
                  <option value="s3q2">2</option>
                  <option value="s3q3">3</option>
                </select>
              </td>
            </tr>
            <tr valign='top'>
              <td><label id="name4" for="4">Iced Mocha Latte</label></td>
              <td id="price4">$3.95</td>
              <td>
                <select id="4">
                  <option>0</option>
                  <option value="s4q1">1</option>
                  <option value="s4q2">2</option>
                  <option value="s4q3">3</option>
                </select>
              </td>
            </tr>


            <tr>
              <td>
                <input type="submit" value="Checkout" />
              </td>
              <td align="right">
                <input type="reset" value="Reset Form" />
              </td>
            </tr>

          </table>
        </form>


      </div>

      <div id="receipt">
        <p>
          Chupa chups chocolate soufflé soufflé topping carrot cake bonbon. Cake chupa chups chupa chups cookie lemon drops lollipop marshmallow pudding lemon drops. Powder donut wafer jelly-o cotton candy marshmallow. Danish marzipan candy canes fruitcake lollipop
          chocolate bar Bacon ipsum dolor amet ham hock pork loin pork short ribs strip steak cow ball tip meatball corned beef flank pig landjaeger pastrami. Ball tip pork belly sausage flank andouille tenderloin salami ham hock landjaeger picanha ribeye
          sirloin venison prosciutto jowl. T-bone porchetta venison, biltong doner turducken bresaola leberkas. Bacon sirloin strip steak kielbasa pastrami, prosciutto tenderloin ground round ham short loin pork chop. Tenderloin porchetta prosciutto capicola
          cupim swine sirloin. Salami pork belly pork loin fatback picanha alcatra chuck filet mignon beef ribs boudin spare ribs.
        </p>
      </div>
    </div>

  </div>
</body>

</html>