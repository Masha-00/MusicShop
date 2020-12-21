<?php
    $login = $_POST['login'];  //получаем логин из формы
    $pas = $_POST['password']; //получаем пароль из формы
    if ($login == 'Admin' && $pas == Admin) //проверяем правильные ли они
      {
      session_start();
      $_SESSION['admin'] = true;    //записываем в сессию, что это администратор
      $script = 'adminpanel.php';   //страница, на которую нужно перейти - adminpanel.php
      }
    else  //если логин или пароль неправильные
    $script = '../avtadministrator.html';  //то нужно вернуться на страницу авторизации
    header("Location: $script");  //переход на нужную страницу
?>