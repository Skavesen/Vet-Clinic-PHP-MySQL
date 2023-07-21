<?php
  session_start();

  $link = mysqli_connect("localhost", "root", "", "dbmingone");
	//view
	$sql = "SELECT * FROM `clinic`";
  $myData = mysqli_query($link,$sql);
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
        <i class="fas fa-paw" style="color: rgba(255, 123, 0, 0.952)"></i>
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
        <li>
          <a href="./products.php"><i class="fab fa-product-hunt"></i>Продукты</a>
        </li>
        <li>
          <a href="./pets.php"><i class="fas fa-cat"></i>Домашние животные</a>
        </li>
        <li class="active">
          <a href="./clinic.php"><i class="fas fa-clinic-medical"></i>Клиника</a>
        </li>
        <li>
          <a href="./cart.php"><i class="fa fa-cart-plus"></i>Корзина</a>
        </li>
        <li>
          <a href="./shop.php"><i class="fab fa-shopify"></i>Как совершать покупки</a>
        </li>
        <li style="text-transform: capitalize;">
          <a href="../conn/logout.php"  title="Click, Auto Signout">
            <i class="fa fa-user-circle"></i><?php echo $_SESSION['uname']; ?>
          </a>
        </li>
      </ul>
      </ul>
    </header>
    <main>
      <section>
        <h2>Как поживает твой питомец в клинике?</h2>
      </section>
      <br>
      <section>
        <?php
  
  while($record = mysqli_fetch_assoc($myData)){
        $tp = $record['tips_post'];
        
        echo "<p style='background: #ccc; color: #444; width:70%; margin:auto; padding: 30px; text-align: justify;'>
        $tp
      </p> <br>"; }
 
        
    mysqli_close($link);
    ?>
      </section>
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
