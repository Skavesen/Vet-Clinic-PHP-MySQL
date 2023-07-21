<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/header.css" />
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="../css/footer.css" />
    <link rel="icon" href="../img/logo-paw.png" />
    <link rel="stylesheet" href="../fontawesome\css\all.css" />
    <title>Ming One</title>
  </head>
  <body>
    <header class="header">
      
      <a href="#" class="logo">
        <i class="fas fa-paw" style="color: #fd7e07"></i>
        Ming One
        <p style="font-size: 7px; margin-left: 42px">
        ВЕТЕРИНАРНАЯ КЛИНИКА И ЗООМАГАЗИН
        </p>
      </a><input type="checkbox" class="menu-btn" id="menu-btn" />
      <label for="menu-btn" class="menu-icon">
        <span class="nav-icon"></span>
      </label>
      <ul class="menu">
        <li>
          <a href="./home.php"><i class="fa fa-home"></i>Домой</a>
        </li>
        <li class="active">
          <a href="./products.php"
            ><i class="fab fa-product-hunt"></i>Продукты</a
          >
        </li>
        <li>
          <a href="./pets.php"><i class="fas fa-cat"></i>Домашние животные</a>
        </li>
        <li>
          <a href="./clinic.php"
            ><i class="fas fa-clinic-medical"></i>Клиника</a
          >
        </li>
        <li>
          <a href="./cart.php"><i class="fa fa-cart-plus"></i>Корзина</a>
        </li>
        <li>
          <a href="./shop.php"><i class="fab fa-shopify"></i>Как совершать покупки</a>
        </li>
        <li style="text-transform: capitalize;">
          <a href="../conn/logout.php" title="Click, Auto Signout">
            <i class="fa fa-user-circle"></i><?php echo $_SESSION['uname']; ?>
          </a>
        </li>
      </ul>
    </header>
    <main>
      <h2>ПОПУЛЯРНЫЕ <font color="orange">КАТЕГОРИИ</font></h2>
      <br />
      <div class="pet-main">
        <section class="shop-cat">
          <img src="../img/prod-0.jpg" alt="" class="coverX">
          <button>Для кошки</button>
        </section>
        <br />
        <section class="shop-dog">
          <img src="../img/prod-1.jpg" alt="" class="coverX">
          <button>Для собаки</button>
        </section>
        </section>
        <br />
        <section class="shop-fish">
          <img src="../img/prod-3.jpg" alt="" class="coverX">
          <button>Для рыб</button>
        </section>
      </div>
    </main>
    <footer>
      <section class="footer-content">
        <ul class="footer-page">
          <li>All Rights Reserved &copy2023 Veterinary Clinic and Pet Shop</li>
        </ul>
      </section>
    </footer>
  </body>
</html>
