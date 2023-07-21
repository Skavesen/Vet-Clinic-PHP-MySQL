<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/header.css" />
    <link rel="stylesheet" href="./css/main.css" />
    <link rel="stylesheet" href="./css/footer.css" />
    <link rel="stylesheet" href="./css/intro.css" />
    <link rel="icon" href="./img/logo-paw.png" />
    <link rel="stylesheet" href="./fontawesome\css\all.css" />
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
      </a>

      <input type="checkbox" class="menu-btn" id="menu-btn" />
      <label for="menu-btn" class="menu-icon">
        <span class="nav-icon"></span>
      </label>
      <ul class="menu">
        <li id="su" style="background: #fff">
          <a
            href="#"
            onclick="document.getElementById('signin').style.display='none';document.getElementById('signup').style.display='block';document.getElementById('su').style='background: #fff'; document.getElementById('si').style='background: rgb(228, 228, 228)';"
            ><i class="fas fa-user-plus"></i>Регистрация</a
          >
        </li>
        <li id="si">
          <a
            href="#"
            onclick="document.getElementById('signin').style.display='block';document.getElementById('signup').style.display='none';document.getElementById('si').style='background: #fff'; document.getElementById('su').style='background: rgb(228, 228, 228)';"
            ><i class="fas fa-sign-in-alt"></i>Вход в систему</a
          >
        </li>
      </ul>
    </header>
    <main style="height: 85vh">
      <div class="intro-page">
        <section class="intro-image">
          <center>
            <img id="img" src="./img/intro-img.png" alt="pets" />
          </center>
        </section>
        <section class="intro-form">
          <center>
            <div class="signup" id="signup">
              <h3>
                <i class="fas fa-user-plus" style="color: orange"></i
                ><br />Регистрация
              </h3>
              <form action="./conn/registration.php" method="POST">
                <div class="form">
                  <input
                    type="text"
                    name="firstname"
                    autocomplete="off"
                    required
                  />
                  <label for="firstname" class="label-name">
                    <span class="content-name">Имя</span>
                  </label>
                </div>
                <div class="form">
                  <input
                    type="text"
                    name="lastname"
                    autocomplete="off"
                    required
                  />
                  <label for="lastname" class="label-name">
                    <span class="content-name">Фамилия</span>
                  </label>
                </div>
                <div class="form">
                  <input
                    type="number"
                    name="contact"
                    autocomplete="off"
                    required
                  />
                  <label for="contact" class="label-name">
                    <span class="content-name">Контактный номер</span>
                  </label>
                </div>
                <div class="form">
                  <input type="text" name="email" autocomplete="off" required />
                  <label for="email" class="label-name">
                    <span class="content-name">Email</span>
                  </label>
                </div>
                <div class="form">
                  <input type="text" name="uname" autocomplete="off" required />
                  <label for="uname" class="label-name">
                    <span class="content-name">Имя пользователя</span>
                  </label>
                </div>
                <div class="form">
                  <input
                    type="password"
                    name="pw"
                    autocomplete="off"
                    required
                  />
                  <label for="pw" class="label-name">
                    <span class="content-name">Пароль</span>
                  </label>
                </div>
                <div class="btn">
                  <center>
                    <input
                      type="submit"
                      value="РЕГИСТРАЦИЯ"
                      name="cust"
                      class="btn-save"
                    />
                    <input type="reset" value="ОЧИСТИТЬ" class="btn-reset" />
                  </center>
                </div>
              </form>
            </div>
            <div class="signin" id="signin" style="display: none">
              <div class="userType">
                <div
                  onclick="document.getElementById('customer').style.display='block';document.getElementById('admin').style.display='none';document.getElementById('veterinarian').style.display='none';document.getElementById('user-0').style='color: #fd7e07';document.getElementById('user-1').style='color: #777';document.getElementById('user-2').style='color: #777';"
                >
                  <i id="user-0" class="fa fa-user" style="color: #fd7e07"></i>
                  <p>Покупатель</p>
                </div>
                <div
                  onclick="document.getElementById('customer').style.display='none';document.getElementById('admin').style.display='block';document.getElementById('veterinarian').style.display='none';document.getElementById('user-0').style='color: #777';document.getElementById('user-1').style='color: #fd7e07';document.getElementById('user-2').style='color: #777';"
                >
                  <i id="user-1" class="fa fa-user-cog"></i>
                  <p>Администратор</p>
                </div>
                <div
                  onclick="document.getElementById('customer').style.display='none';document.getElementById('admin').style.display='none';document.getElementById('veterinarian').style.display='block';document.getElementById('user-0').style='color: #777';document.getElementById('user-1').style='color: #777';document.getElementById('user-2').style='color: #fd7e07';"
                >
                  <i id="user-2" class="fa fa-user-md"></i>
                  <p>Ветеринар</p>
                </div>
              </div>
              <br />
              <div id="customer">
                <h3>
                  <i class="fas fa-user" id="cust" style="color: orange"></i
                  ><br />ПОКУПАТЕЛЬ
                </h3>
                <form action="./conn/signin.php" method="POST">
                  <div class="form">
                    <input
                      type="text"
                      name="uname"
                      autocomplete="off"
                      required
                    />
                    <label for="uname" class="label-name">
                      <span class="content-name">Имя пользователя</span>
                    </label>
                  </div>
                  <div class="form">
                    <input
                      type="password"
                      name="pw"
                      autocomplete="off"
                      required
                    />
                    <label for="pw" class="label-name">
                      <span class="content-name">Пароль</span>
                    </label>
                  </div>
                  <div class="btn">
                    <center>
                      <input
                        type="submit"
                        value="ВОЙТИ"
                        name="cs"
                        class="btn-save"
                      />
                      <input type="reset" value="ОЧИСТИТЬ" class="btn-reset" />
                    </center>
                  </div>
                </form>
              </div>

              <!--ADMIN-->
              <div id="admin" style="display: none">
                <h3>
                  <i class="fas fa-user-cog" id="ad" style="color: orange"></i
                  ><br />АДМИН
                </h3>
                <form action="./conn/signin.php" method="POST">
                  <div class="form">
                    <input
                      type="text"
                      name="uname"
                      autocomplete="off" placeholder=""
                      required
                    />
                    <label for="uname" class="label-name">
                      <span class="content-name">Имя пользователя</span>
                    </label>
                  </div>
                  <div class="form">
                    <input
                      type="password"
                      name="pw"
                      autocomplete="off"
                      required
                    />
                    <label for="pw" class="label-name">
                      <span class="content-name">Пароль</span>
                    </label>
                  </div>
                  <div class="btn">
                    <center>
                      <input
                        type="submit"
                        value="ВОЙТИ"
                        name="as"
                        class="btn-save"
                      />
                      <input type="reset" value="ОЧИСТИТЬ" class="btn-reset" />
                    </center>
                  </div>
                </form>
              </div>

              <!--VETERINARIAN-->
              <div id="veterinarian" style="display: none">
                <h3>
                  <i class="fas fa-user-md" id="vet" style="color: orange"></i
                  ><br />ВЕТЕРИНАР
                </h3>
                <form action="./conn/signin.php" method="POST">
                  <div class="form">
                    <input
                      type="text"
                      name="uname"
                      autocomplete="off"
                      required
                    />
                    <label for="uname" class="label-name">
                      <span class="content-name">Имя пользователя</span>
                    </label>
                  </div>
                  <div class="form">
                    <input
                      type="password"
                      name="pw"
                      autocomplete="off"
                      required
                    />
                    <label for="pw" class="label-name">
                      <span class="content-name">Пароль</span>
                    </label>
                  </div>
                  <div class="btn">
                    <center>
                      <input
                        type="submit"
                        value="ВОЙТИ"
                        name="vs"
                        class="btn-save"
                      />
                      <input type="reset" value="ОЧИСТИТЬ" class="btn-reset" />
                    </center>
                  </div>
                </form>
              </div>
            </div>
          </center>
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
