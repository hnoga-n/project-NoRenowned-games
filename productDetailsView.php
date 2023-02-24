<!-- them cho check xem nguoi dung da dang nhap qua chua -->




<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Game name</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
  <link rel="icon" href="./assets/img/logo.png" />
  <link rel="stylesheet" href="./assets/css/product.css" />
  <link rel="stylesheet" href="./assets/css/header.css" />
  <link rel="stylesheet" href="./assets/css/style.css" />
  <link rel="stylesheet" href="./assets/css/footer.css" />
  <link rel="stylesheet" href="./assets/css/filterProducts.css" />
  <link rel="stylesheet" href="./assets/css/productDetails.css" />

</head>

<body>
  <?php
      include "testConnDB.php";
      // $id = mysqli_real_escape_string($conn,$_GET['user_id']);
      $id = $_GET['user_id'];
      $sql = mysqli_query($conn,"SELECT * FROM users where id = {$id}");

      $row = mysqli_fetch_assoc($sql);
  ?>
  <div class="header" id="myHeader">
    <a href="index.html">
      <div class="logo">
        <span class="text1">NoRENOWN</span>
        <br />
        <span class="text2">GAMING</span>
      </div>
    </a>
    <div class="container">
      <div class="menu">
        <a href="./index.html">
          <div>Home</div>
        </a>
        <a href="./search.html">
          <div>Games</div>
        </a>
        <a href="./contact.html">
          <div>Contact</div>
        </a>
        <a href="">
          <div>About</div>
        </a>
      </div>
      <div class="search">
        <input type="text" class="search-inp" id="header-search" />
      </div>
      <div class="close" id="close">&times;</div>
    </div>
    <div class="header-right">
      <div class="cart">
        <button>
          <i class="fa-solid fa-cart-shopping"></i>
        </button>
      </div>
      <div class="user">
        <button>
          <i class="fa-solid fa-user"></i>
        </button>
      </div>
    </div>
  </div>

  <div class="parallax">
    <img src="./assets/img/sky3.jpg">
  </div>

  <div class="main-content">
    <div class="product-app">
      <div class="header-content">
        <div class="video-game">
          <video controls muted src=""></video>
        </div>
        <div class="panel">
          <div class="name">
            <h2><?php echo $row['firstName'] ?></h2>
          </div>
          <div class="price">
            <small><s>40.00$</s></small>
            <div class="price-number">20.00</div>
            <div class="price-dollar">$</div>
          </div>
          <div>
            <a href="" >
              <div class="addToCartBtn">
                Add to cart
              <i class="fa-solid fa-cart-shopping"></i>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="seperator"></div>
      <div class="middle-content">
        <h2>Screenshots</h2>
        <div class="visuals-gameplay">
          <div class="main-img">
            <img src="./assets/img/sky3.jpg">
          </div>
          <div class="sub-img">
            <div class="sub-img-item">
              <img src="./assets/img/sky3.jpg">
            </div>
            <div class="sub-img-item">
              <img src="./assets/img/sky3.jpg">
            </div>
            <div class="sub-img-item">
              <img src="./assets/img/sky3.jpg">
            </div>
            <div class="sub-img-item">
              <img src="./assets/img/sky3.jpg">
            </div>
          </div>
        </div>
        <div class="seperator"></div>
        <div class="infomation">
          <div class="about-game">
            <h2>About this game</h2>
            <p><?php echo $row['lastName'] ?></p>
          </div>
          <div class="configuration">
            <h2>Configurations</h2>
            <ul id="configuration-list">
              <li id="os">
                <span>OS :</span>
                <span><?php echo $row['email'] ?></span>
              </li>
              <li id="processor">
                <span>Processor:</span>
                <span><?php echo $row['address'] ?></span>
              </li>
              <li id="graphics">
                <span>Graphics:</span>
                <span>NVIDIA GTX 950 or AMD Radeon RX 470</span>
              </li>
              <li id="storage">
                <span>Storage:</span>
                <span>75 GB available space</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="seperator"></div>
      <div class="footer-content">
        <h2>Reviews</h2>
      </div>
    </div>
  </div>

  <div class="footer">
    <div class="content">
      <div class="footer-link">
        <div class="footer-logo">
          <a href="index.html">
            <div class="logo">
              <span class="text1">NoRENOWN</span>
              <br />
              <span class="text2">GAMING</span>
            </div>
          </a>
        </div>
        <ul class="footer-lists">
          <li>
            <a href="#">Terms of Use</a>
          </li>
          <li>
            <a href="#">Privacy policy</a>
          </li>
          <li>
            <a href="#">Contact us</a>
          </li>
          <li>
            <a href="#">FAQ</a>
          </li>
        </ul>
        <div class="footer-social">
          <div class="footer-social-icons">
            <a href="">
              <i class="fa-brands fa-twitter"></i>
            </a>
            <a href="">
              <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="">
              <i class="fa-brands fa-youtube"></i>
            </a>
            <a href="">
              <i class="fa-brands fa-facebook"></i>
            </a>
          </div>
          <div class="footer-social-apps">
            <a href="https://www.apple.com/vn/app-store/" target="_blank">
              <img src="https://s3.gaming-cdn.com/themes/igv2/modules/footer/images/apple.svg" alt="" />
            </a>
            <a href="https://play.google.com/store/games" target="_blank">
              <img src="https://s2.gaming-cdn.com/themes/igv2/modules/footer/images/android.svg" alt="" />
            </a>
          </div>
        </div>
      </div>
      <div class="footer-information">
        Copyright © 2023 NoRenown Gaming - All rights reserved
      </div>
    </div>
  </div>
</body>
<script src="https://kit.fontawesome.com/f26ba754df.js" crossorigin="anonymous"></script>
<script src="./assets/js/header.js"></script>

</html>