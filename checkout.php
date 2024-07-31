<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="EasyNet: In Business Communications provides IT solutions with various IT services and products." />
  <title>EasyNet IBC | Checkout</title>
  <link rel="shortcut icon" type="image/png" href="_images/_logos/easynet_icon.png">
  <link href="_styles/style.css" rel="stylesheet" />
  <link href="_styles/font-awesome.css" rel="stylesheet" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <script src="_javascript/products.js" async></script>
</head>

<body>

  <!--Start of Header --------------------------->
  <header>
    <div id="left">
      <a href="index.php"><img src="_images/_logos/easynet.png" id="logo" width="120px" title="EasyNet Homepage" /></a>
    </div>
    <input type="checkbox" id="check">
    <div id="middle">
      <nav>
        <ul id="nav_content">
          <li id="nav_link">
            <a href="index.php" id="nav_text">Home</a>
          </li>
          <li id="nav_link">
            <a href="about.php" id="nav_text">About Us</a>
          </li>
          <li id="nav_link">
            <a href="products.php" id="nav_text">Products</a>
            <div class="dropdown">
              <div class="dropdown-content">
                <div class="row">
                  <h4><a href="products2.php">Hardware</a></h4>
                  <ul class="mega-link">
                    <li>Servers</li>
                    <li>Desktops</li>
                    <li>Monitors</li>
                    <li>Fax Machines</li>
                    <li>Computer Components</li>
                    <li>Projectors</li>
                  </ul>
                </div>
                <div class="row">
                  <h4><a href="products2.php">Software</a></h4>
                  <ul class="mega-link">
                    <li>Microsoft</li>
                    <li>Symantec</li>
                    <li>CorelDraw</li>
                    <li>Adobe</li>
                  </ul>
                </div>
                <div class="row">
                  <h4><a href="products2.php">Accessories</a></h4>
                  <ul class="mega-link">
                    <li>Item 1</li>
                    <li>Item 2</li>
                    <li>Item 3</li>
                  </ul>
                </div>
                <div class="row">
                  <h4><a href="products2.php">Combos</a></h4>
                  <ul class="mega-link">
                    <li>Item 1</li>
                    <li>Item 2</li>
                    <li>Item 3</li>
                  </ul>
                </div>
                <div class="row">
                  <h4><a href="products2.php">All</a></h4>
                  <ul class="mega-link">
                    <li>Asus</li>
                    <li>Acer</li>
                    <li>Apple</li>
                    <li>Dell</li>
                    <li>Hisense</li>
                    <li>Hp</li>
                    <li>Lenovo</li>
                    <li>Microsoft</li>
                    <li>Samsung</li>
                  </ul>
                </div>
              </div>
          </li>
          <li id="nav_link">
            <a href="client.php" id="nav_text">Partners and Clients</a>
          </li>
          <li id="nav_link">
            <a href="contact.php" id="nav_text">Contact Us</a>
          </li>
        </ul>
      </nav>
    </div>

    <div id="right">
      <p>
        <a href="register.php" id="loginlinks">Sign Up</a> /
        <a href="login.php" id="loginlinks">Log In</a>
      </p>
      <div id="right-item">
        <a href="favourites.php"><img id="icons_heart" src="_images/_icons/heart.png" width="30px" /></a>
        <a href="checkout.php"><img id="icons_bag" class="active" src="_images/_icons/bag.png" width="30px"></a>
      </div>

      <label for="check" class="menu">
        <i class='bx bx-menu' id="menu_icon"></i>
        <i class='bx bx-x' id="close_icon"></i>
      </label>
    </div>
  </header>

  <!--End of Header --------------------------->

  <main>

    <div class="checkout">

      <div class="checkout_heading">
        <h1>Checkout</h1>
      </div>
      <hr id="checkout_lines">

      <h2>CART</h2>
    </div>

    <div class="checkout_boxes">

      <div class="checkbox1">
        <a href="prodinfo.php"><img src="_images/_products/hardprod.jpg" width="200px" /></a>
        <a href="prodinfo.php">
          <p>
            HP Pavilion 15 Intel® Core™ i7-1255U 16GB RAM 512GB SSD
            Storage Laptop
          </p>
        </a>
        <p class="prod_prices"><b>R19999.99</b></p>
        <div id="check_quantity">
          <input class="cart_quantity" type="number" value="1">
          <button class="btn_danger" id="rem_button">Remove from Cart</button>
        </div>
      </div>

      <div class="checkbox1">
        <a href="prodinfo.php"><img src="_images/_products/hardprod.jpg" width="200px" /></a>
        <a href="prodinfo.php">
          <p>
            HP PavilioN 15 Intel® Core™ i7-1255U 16GB RAM 512GB SSD
            Storage Laptop
          </p>
        </a>
        <p class="prod_prices"><b>R19999.99</b></p>
        <div id="check_quantity">
          <input class="cart_quantity" type="number" value="1">
          <button class="btn_danger" id="rem_button">Remove from Cart</button>
        </div>
      </div>
    </div>
    <div id="total_price">
      <h1>Total Price:</h1>
      <h1 class="cart_total_price">R19999.00</h1>
    </div>
    <div class="checkout_button">
      <button id="rem_button">Checkout</button>
    </div>


  </main>

  <!--Start  of Footer --------------------------->
  <footer id="contact_footer">
    <div class="social-media-icons">
      <a href="https://www.facccebook.com/" target="_blank"> <i class='bx bxl-facebook-circle'>
          <p>Facebook</p>
        </i>
      </a>
      <a href="https://www.innnstagram.com/" target="_blank"> <i class='bx bxl-instagram'>
          <p>Instagram</p>
        </i>
      </a>
      <a href="https://www.linkkkedin.com/feed/?trk=guest_homepage-basic_google-one-tap-submit" target="_blank"><i class='bx bxl-linkedin-square'>
          <p>LinkedIn</p>
        </i>
      </a>
    </div>
    <hr id="foot_line" />
    <p id="footer_text">
      Copyright &copy; 2024 EasyNet In Business Communications
    </p>
  </footer>
  <!--End of Footer --------------------------->
</body>

</html>