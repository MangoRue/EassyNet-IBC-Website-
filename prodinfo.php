<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EasyNet IBC | Products</title>
  <link rel="shortcut icon" type="image/png" href="_images/_logos/easynet_icon.png">
  <link href="_styles/style.css" rel="stylesheet" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <script src="_javascript/products.js" async></script>
</head>

<body>
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
            <a href="products.php" id="nav_text" class="active">Products</a>
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
                    <li>Printer Cartridge</li>
                    <li>Headsets</li>
                    <li>Controllers</li>
                  </ul>
                </div>
                <div class="row">
                  <h4><a href="products2.php">Combos</a></h4>
                  <ul class="mega-link">
                    <li>Gaming</li>
                    <li>Keyboard and Mouse</li>
                    <li>Sound System</li>
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
        <a href="checkout.php"><img id="icons_bag" src="_images/_icons/bag.png" width="30px" /></a>
      </div>
      <label for="check" class="menu">
        <i class="bx bx-menu" id="menu_icon"></i>
        <i class="bx bx-x" id="close_icon"></i>
      </label>
    </div>
  </header>
  <main>
    <p id="prod_back_main">
      <a href="products.php" id="prod_back">Products</a> &#9664; <a href="products2.php" id="prod_back">All Products</a>
      &#9664; HP Pavilion 15 Intel® Core™ i7-1255U 16GB RAM 512GB SSD Storage Laptop
    </p>
    <hr id="prod_line">

    <div id="prod_info_section">
      <div id="prod_img">
        <img src="_images/_products/hardprod.jpg" width="300px">
      </div>
      <div id="prod_info_bottom">
        <div id="prod_info">
          <div id="info_top">
            <h3 id="prod_name">HP Pavilion 15 Intel® Core™ i7-1255U 16GB RAM 512GB SSD Storage Laptop</h3>
            <p>HP</p>
            <p id="prod_code">Product Code:000000000010294688</p><br>
            <ul>
              <li>Windows 11 Home</li>
              <li>15.6-inch HD display</li>
              <li>16GB RAM and 512GB SSD storage</li>
              <li>Intel® Core™ i7-1255U processor</li>
              <li>Intel® Iris® Xe graphics</li>
              <li>Battery life up to 10 hours</li>
            </ul>
          </div>
        </div>

        <div id="prod_price">
          <h1>R 19,999</h1>
          <button id="addfavourite">Add to Favourites</button>
          <button id="boxbutton">Add to Cart</button>
        </div>
      </div>

    </div>

    <div id="add_more">
      <h1>Add More to your Order</h1>
      <div id="prod_display2">
        <div id="prodbox3">
          <a href="prodinfo.php"><img id="hard_img" src="_images/_products/hardprod.jpg" /></a>
          <a href="prodinfo.php">
            <p>
              HP Pavilion 15 Intel® Core™ i7-1255U 16GB RAM 512GB SSD
              Storage Laptop
            </p>
          </a>
          <p><b>R 19,999</b></p>
          <a href="products2.php"><button id="boxbutton">Add to Cart</button></a>
        </div>
        <div id="prodbox3">
          <a href="prodinfo.php"><img id="hard_img" src="_images/_products/hardprod.jpg" width="150px" /></a>
          <a href="prodinfo.php">
            <p>
              HP Pavilion 15 Intel® Core™ i7-1255U 16GB RAM 512GB SSD
              Storage Laptop
            </p>
          </a>
          <p><b>R 19,999</b></p>
          <a href="products2.php"><button id="boxbutton">Add to Cart</button></a>
        </div>
        <div id="prodbox3">
          <a href="prodinfo.php"><img id="hard_img" src="_images/_products/hardprod.jpg" /></a>
          <a href="prodinfo.php">
            <p>
              HP Pavilion 15 Intel® Core™ i7-1255U 16GB RAM 512GB SSD
              Storage Laptop
            </p>
          </a>
          <p><b>R 19,999</b></p>
          <a href="products2.php"><button id="boxbutton">Add to Cart</button></a>
        </div>
      </div>
    </div>

    <div id="add_more">
      <h1>More products by HP</h1>
      <div id="prod_display2">
        <div id="prodbox3">
          <a href="prodinfo.php"><img src="_images/_products/hardprod.jpg" width="150px" /></a>
          <a href="prodinfo.php">
            <p>
              HP Pavilion 15 Intel® Core™ i7-1255U 16GB RAM 512GB SSD
              Storage Laptop
            </p>
          </a>
          <p><b>R 19,999</b></p>
          <a href="products2.php"><button id="boxbutton">Add to Cart</button></a>
        </div>
        <div id="prodbox3">
          <a href="prodinfo.php"><img src="_images/_products/hardprod.jpg" width="150px" /></a>
          <a href="prodinfo.php">
            <p>
              HP Pavilion 15 Intel® Core™ i7-1255U 16GB RAM 512GB SSD
              Storage Laptop
            </p>
          </a>
          <p><b>R 19,999</b></p>
          <a href="products2.php"><button id="boxbutton">Add to Cart</button></a>
        </div>
        <div id="prodbox3">
          <a href="prodinfo.php"><img src="_images/_products/hardprod.jpg" width="150px" /></a>
          <a href="prodinfo.php">
            <p>
              HP Pavilion 15 Intel® Core™ i7-1255U 16GB RAM 512GB SSD
              Storage Laptop
            </p>
          </a>
          <p><b>R 19,999</b></p>
          <a href="products2.php"><button id="boxbutton">Add to Cart</button></a>
        </div>
      </div>
    </div>
  </main>
  <footer>
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
</body>

</html>