 <html lang="en">

 <body>
   <!--<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Search Results</title>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
  <link rel="icon" href="./assets/img/logo.png" />
  <link rel="stylesheet" href="./assets/css/product.css" />
  <link rel="stylesheet" href="./assets/css/header.css" />
  <link rel="stylesheet" href="./assets/css/style.css" />
  <link rel="stylesheet" href="./assets/css/footer.css" />
  <link rel="stylesheet" href="./assets/css/filterProducts.css" />
</head>

<body>
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
        <input type="text" class="search-inp" id="header-search" onkeyup="search(this.value)" />
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
  </div> -->

   <div class="search">
     <input type="text" class="search-inp" id="header-search" oninput="search(this.value)" />
   </div>

   <div class="search-view">
     <div class="main-content">
       <div class="products-trending">
         <div class="products-filter">
           <div class="products-filter-selections">
             <div class="selection">
               <input class="glass-card" type="search" placeholder="Genres.." />
               <i class="fa-sharp fa-solid fa-caret-down"></i>
               <div class="dropdown-category">
                 <ul class="category-list">
                   <li>Fighting</li>
                   <li>Action</li>
                   <li>Adventure</li>
                 </ul>
               </div>
             </div>
             <div class="selection">
               <input class="glass-card" type="search" placeholder="Sort by :" />
               <i class="fa-sharp fa-solid fa-caret-down"></i>
               <div class="dropdown-category">
                 <ul class="category-list">
                   <li>Bestsellers</li>
                   <li>Trending</li>
                   <li>Price: Low to high</li>
                   <li>Price: High to low</li>
                 </ul>
               </div>
             </div>
           </div>
           <div class="products-filter-price">
             <label>Between</label>
             <input class="glass-card" type="text" min="0" value="0" />
             <label>and</label>
             <input class="glass-card" type="text" value="1000000" />
             <label>$</label>
             <i class="fa-solid fa-rotate-right"></i>
           </div>
         </div>

         <div class="products-list-filter"> </div>

         <script>
           const container = document.querySelector('.products-list-filter');
           //console.log(container);


           function search(str) {
             if (str.length == 0) {
               container.innerHTML = "<p> can not found product you need ! </p>";
             }

             let xmlhttp = new XMLHttpRequest();
             xmlhttp.onload = function() {
               if (this.responseText == "") {
                 container.innerHTML = "<div>NO GAME MATCH !</div>";
               }
               let data = JSON.parse(this.responseText)
               console.log(data);
             }

             xmlhttp.open("GET", "searchHandle.php?q=" + str, true);
             xmlhttp.send();
           }
         </script>
         <!-- <div class="item">
            <a href="./productDetails.html">
              <i class="fa-solid fa-cart-shopping"></i>
              <img src="/assets/img/sky3.jpg" alt="" />
              <div class="discount">
                <span>-<label>20</label>%</span>
              </div>
            </a>
            <div class="product-information">
              <div class="text-name">Elden ring</div>
              <div class="price">
                <label class="price-number">20.00</label>
                <label class="price-dollar">$</label>
              </div>
            </div>
          </div>
          <div class="item">
            <a href="./productDetails.html">
              <i class="fa-solid fa-cart-shopping"></i>
              <img src="/assets/img/sky3.jpg" alt="" />
              <div class="discount">
                <span>-<label>20</label>%</span>
              </div>
            </a>
            <div class="product-information">
              <div class="text-name">Elden ring</div>
              <div class="price">
                <label class="price-number">20.00</label>
                <label class="price-dollar">$</label>
              </div>
            </div>
          </div>
          <div class="item">
            <a href="./productDetails.html">
              <i class="fa-solid fa-cart-shopping"></i>
              <img src="/assets/img/sky3.jpg" alt="" />
              <div class="discount">
                <span>-<label>20</label>%</span>
              </div>
            </a>
            <div class="product-information">
              <div class="text-name">Elden ring</div>
              <div class="price">
                <label class="price-number">20.00</label>
                <label class="price-dollar">$</label>
              </div>
            </div>
          </div>
          <div class="item">
            <a href="./productDetails.html">
              <i class="fa-solid fa-cart-shopping"></i>
              <img src="/assets/img/sky3.jpg" alt="" />
              <div class="discount">
                <span>-<label>20</label>%</span>
              </div>
            </a>
            <div class="product-information">
              <div class="text-name">Elden ring</div>
              <div class="price">
                <label class="price-number">20.00</label>
                <label class="price-dollar">$</label>
              </div>
            </div>
          </div>
          <div class="item">
            <a href="./productDetails.html">
              <i class="fa-solid fa-cart-shopping"></i>
              <img src="/assets/img/sky3.jpg" alt="" />
              <div class="discount">
                <span>-<label>20</label>%</span>
              </div>
            </a>
            <div class="product-information">
              <div class="text-name">Elden ring</div>
              <div class="price">
                <label class="price-number">20.00</label>
                <label class="price-dollar">$</label>
              </div>
            </div>
          </div>
          <div class="item">
            <a href="./productDetails.html">
              <i class="fa-solid fa-cart-shopping"></i>
              <img src="/assets/img/sky3.jpg" alt="" />
              <div class="discount">
                <span>-<label>20</label>%</span>
              </div>
            </a>
            <div class="product-information">
              <div class="text-name">Elden ring</div>
              <div class="price">
                <label class="price-number">20.00</label>
                <label class="price-dollar">$</label>
              </div>
            </div>
          </div>
          <div class="item">
            <a href="./productDetails.html">
              <i class="fa-solid fa-cart-shopping"></i>
              <img src="/assets/img/sky3.jpg" alt="" />
              <div class="discount">
                <span>-<label>20</label>%</span>
              </div>
            </a>
            <div class="product-information">
              <div class="text-name">Elden ring</div>
              <div class="price">
                <label class="price-number">20.00</label>
                <label class="price-dollar">$</label>
              </div>
            </div>
          </div>
          <div class="item">
            <a href="./productDetails.html">
              <i class="fa-solid fa-cart-shopping"></i>
              <img src="/assets/img/sky3.jpg" alt="" />
              <div class="discount">
                <span>-<label>20</label>%</span>
              </div>
            </a>
            <div class="product-information">
              <div class="text-name">Elden ring</div>
              <div class="price">
                <label class="price-number">20.00</label>
                <label class="price-dollar">$</label>
              </div>
            </div>
          </div>
          <div class="item">
            <a href="./productDetails.html">
              <i class="fa-solid fa-cart-shopping"></i>
              <img src="/assets/img/sky3.jpg" alt="" />
              <div class="discount">
                <span>-<label>20</label>%</span>
              </div>
            </a>
            <div class="product-information">
              <div class="text-name">Elden ring</div>
              <div class="price">
                <label class="price-number">20.00</label>
                <label class="price-dollar">$</label>
              </div>
            </div>
          </div>
          <div class="item">
            <a href="./productDetails.html">
              <i class="fa-solid fa-cart-shopping"></i>
              <img src="/assets/img/sky3.jpg" alt="" />
              <div class="discount">
                <span>-<label>20</label>%</span>
              </div>
            </a>
            <div class="product-information">
              <div class="text-name">Elden ring</div>
              <div class="price">
                <label class="price-number">20.00</label>
                <label class="price-dollar">$</label>
              </div>
            </div>
          </div>
          <div class="item">
            <a href="./productDetails.html">
              <i class="fa-solid fa-cart-shopping"></i>
              <img src="/assets/img/sky3.jpg" alt="" />
              <div class="discount">
                <span>-<label>20</label>%</span>
              </div>
            </a>
            <div class="product-information">
              <div class="text-name">Elden ring</div>
              <div class="price">
                <label class="price-number">20.00</label>
                <label class="price-dollar">$</label>
              </div>
            </div>
          </div>
          <div class="item">
            <a href="./productDetails.html">
              <i class="fa-solid fa-cart-shopping"></i>
              <img src="/assets/img/sky3.jpg" alt="" />
              <div class="discount">
                <span>-<label>20</label>%</span>
              </div>
            </a>
            <div class="product-information">
              <div class="text-name">Elden ring</div>
              <div class="price">
                <label class="price-number">20.00</label>
                <label class="price-dollar">$</label>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="pagination">
        <a href="#">&laquo;</a>
        <a href="#" class="active">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">&raquo;</a>
      </div>
    </div>
  </div> -->

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
                   <a href="./productDetails.html">
                     <i class="fa-brands fa-twitter"></i>
                   </a>
                   <a href="./productDetails.html">
                     <i class="fa-brands fa-instagram"></i>
                   </a>
                   <a href="./productDetails.html">
                     <i class="fa-brands fa-youtube"></i>
                   </a>
                   <a href="./productDetails.html">
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
 <!-- <script src="./assets/js/search.js"></script> -->

 <script src="./assets/js/productsView.js"></script>
 <script src="https://kit.fontawesome.com/f26ba754df.js" crossorigin="anonymous"></script>
 <script src="./assets/js/header.js"></script>

 </html>