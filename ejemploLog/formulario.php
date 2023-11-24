<?php
    include __DIR__ ."/vendor/autoload.php";

    use Dawes\Instituto\Model\Alumno;
    use Dawes\Instituto\Util\Navegacion;
?>

<form action=" <?php echo $_SERVER['PHP_SELF'];?>" method="POST" >
        <label for="<?= Alumno::NOMBRE ?>"><?= Alumno::NOMBRE ?></label>
        <input type="text" name="<?= Alumno::NOMBRE ?>"/>

        <label for="<?= Alumno::APELLIDOS ?>"><?= Alumno::APELLIDOS ?></label>
        <input type="text" name="<?= Alumno::APELLIDOS ?>"/>

        <label for="<?= Alumno::MAIL ?>"><?= Alumno::MAIL ?></label>
        <input type="text" name="<?= Alumno::MAIL ?>"/>

        <input type="submit" value="<?= Navegacion::AGREGAR ?>" name="<?= Navegacion::AGREGAR ?>"/>
        <input type="submit" value="<?= Navegacion::LISTAR ?>" name="<?= Navegacion::LISTAR ?>"/>
    </form>
</body>
</html>