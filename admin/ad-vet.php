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
          <a href="./ad-home.php"><i class="fa fa-home"></i>Домой</a>
        </li>
        <li>
          <a href="./ad-products.php"><i class="fab fa-product-hunt"></i>Продукты</a>
        </li>
        <li>
          <a href="./ad-pets.php"><i class="fas fa-cat"></i>Домашние животные</a>
        </li>
        <li class="active">
          <a href="./ad-vet.html"
            ><i class="fas fa-user-md"></i>Ветеринары</a
          >
        </li>
        <li>
          <a href="./ad-customer.php"><i class="fa fa-users"></i>Клиенты</a>
        </li>
        <li style="text-transform: capitalize;">
          <a href="../conn/logout.php" title="Click, Auto Signout">
            <i class="fa fa-user-cog"></i><?php echo $_SESSION['uname']; ?>
          </a>
        </li>
      </ul>
      </ul>
    </header>
    <main>
      <h2>ДАННЫЕ О <font color="orange">ВЕТЕРИНАРАХ</font></h2>
      <br />
      <section>
        <form action="../db/record-conn.php" method="POST" class="admin-product-form">
          <label for="vet_fname">Имя: </label><br />
          <input type="text" name="product_name" autocomplete="off" required />
          <br />
          <label for="vet_lname">Фамилия: </label><br />
          <input type="text" name="vet_lname" autocomplete="off" required />
          <br />
          <label for="vet_contact">Телефон: </label><br />
          <input type="number" style="font-size: 16px;" name="vet_contact" autocomplete="off" required />
          <br />
          <label for="vet_email">Email: </label><br />
          <input type="text" name="vet_email" autocomplete="off" required />
          <br />
          <label for="vet_uname">Имя пользователя: </label><br />
          <input type="text" name="vet_uname" autocomplete="off" required />
          <br />
          <label for="vet_pass">Пароль: </label><br />
          <input type="password" style="font-size: 16px;" name="vet_pass" autocomplete="off" required />
          <br />

          <input type="submit" name="add-vet" value="ДОБАВИТЬ ВЕТЕРИНАРА" />
          <input type="reset" value="ОЧИСТИТЬ" />
        </form>
      </section>
      <div>
        <br />
        <h3>ВЕТЕРИНАРЫ</h3>
        <iframe
          src="../admin-record/vet-record.php"
          frameborder="0" height="500"
          style="background: #fff; width: 70%"
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
