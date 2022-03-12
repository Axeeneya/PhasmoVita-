<?php

if ( ! isset($_SESSION)) {
    session_start();
}
if (array_key_exists('user', $_SESSION)) {
    require 'profile.php';
    require 'templates/footer.php';
    exit();
}
?>
<div class="avtor">
    <form action="authorization/handler_form/signin.php" method="post">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <button type="submit">Войти</button>
        <p>
            У вас нет аккаунта? - <a href="index.php?page=register">зарегистрируйтесь</a>!
        </p>
        <?php
        if (array_key_exists('message', $_SESSION)) {
            echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
        }
        unset($_SESSION['message']);
        ?>
    </form>
</div>
