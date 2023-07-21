<?php
  session_start();
?><!DOCTYPE html>
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
        <li style="text-transform: capitalize;">
          <a href="../conn/logout.php" title="Click, Auto Signout">
            <i class="fa fa-user-circle"></i><?php echo $_SESSION['uname']; ?>
          </a>
        </li>
      </ul>
      </ul>
    </header>
    <main>
      <h2>СОВЕТЫ И<font color="orange"> РЕКОМЕНДАЦИИ</font></h2>
      <br />
      <section>
        <form action="./clinic-tip.php" method="POST" class="admin-product-form">
          <label for="tips">РАЗМЕСТИТЬ РЕКОМЕНДАЦИЮ </label><br />
          <textarea placeholder="Add comment here..." rows="7" cols="50" wrap="hard" name="tip"> </textarea>
          <br />

          <input type="submit" name="tips" value="ДОБАВИТЬ" />
          <input type="reset" value="ОЧИСТИТЬ" />
        </form>
      </section>
      <div>
        <br />
        <h3>ЗАПИСЬ</h3>
        <iframe
          src="./clinic-record.php"
          frameborder="0" rows="4" cols="50"
          style="background: #fff; width: 70%; height: 100vh;"
        ></iframe>
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
