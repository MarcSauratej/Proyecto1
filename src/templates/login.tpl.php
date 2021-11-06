<?php

include 'header.tpl.php';
$correo = filter_input(INPUT_COOKIE, 'ID');
?>

<main>
    <form action="?url=login_action" method="post">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="passwd" placeholder="Password">
        <input type="checkbox" name="caja">QUIERES GUARDAR kenkro ?
        <button type="submit">Login</button>
    </form>

</main>

</body>
</html>