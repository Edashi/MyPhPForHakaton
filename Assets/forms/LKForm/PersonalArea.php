<?php 
session_start();

?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <title>TulaHack2022</title>
</head>
<body>
    <div  class="LoginFormTabAuth"><div class="CloseIt1"></div>
    <div class="LoginForm">
       <form class="" action="Assets/Auth.php" method="post">
      <h1>Вход</h1>
      <div class="FormInputMailBox">
         <h3 for="MailBox">Email</h3>
          <input  class="InputSize"type="text" name="email" id="" placeholder=" " autocomplete="off" class="MailBoxInput"/>
        </div>
     
      
      <div class="FormForPassword">
        <h3 for="password">Пароль</h3>
        <input class="InputSize" type="password" name="password" id="" placeholder=" " autocomplete="off" class="UserPassword"  />
       
      </div>
      
        <div class="ButtonPosition">
          <button type="submit" class="ButtonSubmit">Авторизоваться</button>
       </div>
       </form>
    </div>
</div>
    <div class="LoginFormTab"><div class="CloseIt"></div>
        <div class="LoginForm">
           <form class="" action="Assets/PhPFormCheck.php" method="post">
          <h1>Регистрация</h1>
          <div class="FormInputMailBox">
             <h3 for="MailBox">Email</h3>
              <input  class="InputSize"type="text" name="email" id="" placeholder=" " autocomplete="off" class="MailBoxInput"/>
            </div>
          <div class="FormInputUserName"> 
            <h3 for="username">Имя</h3>
            <input class="InputSize" type="text" name="name" id="" placeholder=" " autocomplete="off" class="UserNameinput" />
           
          </div>
          <div class="FormInputUserNameLast"> 
            <h3 for="username">Фамилия</h3>
            <input class="InputSize" type="text" name="lastname" id="" placeholder=" " autocomplete="off" class="UserNameinput" />
           
          </div>
          
          <div class="FormForPassword">
            <h3 for="password">Пароль</h3>
            <input class="InputSize" type="password" name="password" id="" placeholder=" " autocomplete="off" class="UserPassword"  />
           
          </div>
          <div class="FormForPasswordСonfirmation">
            <h3 for="password">Подтверждение пароля</h3>
              <input class="InputSize" type="password" name="Cpassword" id="" placeholder=" " autocomplete="off" class="UserPasswordConfirmation"  />
            </div><br>
            <div class="ButtonPosition">
              <button type="submit" class="ButtonSubmit">Зарегестрироваться</button>
           </div>
           </form>
        </div>
    </div>
    
    <header>
        <div class="title">
            <div class="logo">
                <img src="img\Phone_Icon.png" alt="" id="logotype">
                <div class="input">
                    <input type="text" placeholder="Поиск резюме">
                </div>
            </div>
            <div class="RegAuth">
            <a href="editReg.php"><div class="buttonforreg" id="button">Редактировать</div></a>
                <a href="logout.php"><button  class="AuthFor" id="button">Выход</button></a>
            </div>
        </div>

        <div class="about">
            <div class="samnazovi">
                <h1 id="FIO"><?=$_SESSION['New']['Name'],' ',$_SESSION['New']['Las_name']?></h1>
                <h2 id="path"></h2>
            </div>

            <div class="LogoLang">
                <img src="" alt="" id="">
                <img src="" alt="" id="">
                <img src="" alt="" id="">
            </div>
        </div>

        <div class="nav">
            <div class="NavButtons">
                <a href=""><h3 id="Navigation">Портфель</h3></a>
                <a href=""><h3 id="Navigation">Обо мне</h3></a>
                <a href=""><h3 id="Navigation">Опыт работы</h3></a>
                <a href=""><h3 id="Navigation">Навыки</h3></a>
                <a href=""><h3 id="Navigation">Контакты</h3></a>
            </div>
        </div>
    </header>

    <main>
  
        
    </main>
   <script src="script/scripts.js"></script>
</body>
</html>