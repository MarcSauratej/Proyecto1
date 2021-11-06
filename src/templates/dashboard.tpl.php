<?php

include 'header.tpl.php';
?>

    <main>
        <div>
            
            <p> Bienvenido a Mordor, <?= $_SESSION['username']??'null';?></p>
        </div>
        <form action="?url=task_action" method="post">
        <input type="text" name="name" placeholder="Nombre Usuario">
            <input type="text" name="task" placeholder="tarea">
            <input type="date" name="date">
            <button type="submit">Enviar</button>

        </form> 

        <button><a href="?url=logout">Expulsado de Mordor</a></button>
    </main>
</body>
</html>