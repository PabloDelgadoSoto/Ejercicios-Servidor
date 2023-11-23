<?php
    include_once "Cliente.php";
    include_once "Producto.php";
    include_once "Navegacion.php";
    include_once "Escritor.php";
    //sirve para que permanezcan los datos del formulario
    const SELECTED = "selected";
    const CHECKED = "checked";
?>
    <form action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8" );?>" method="POST" >
        <label for="<?= Cliente::NOMBRE ?>"><?= Cliente::NOMBRE ?></label>
        <input type="text" name="<?= Cliente::NOMBRE ?>" value="<?php echo isset($_POST[Cliente::NOMBRE]) ? $_POST[Cliente::NOMBRE] : '' ?>"><br/><br/>

        <label for="<?= Cliente::APELLIDOS ?>"><?= Cliente::APELLIDOS ?></label>
        <input type="text" name="<?= Cliente::APELLIDOS ?>" value="<?php echo isset($_POST[Cliente::APELLIDOS]) ? $_POST[Cliente::APELLIDOS] : '' ?>"><br/><br/>

        <label for="<?= Cliente::DIRECCION ?>"><?= Cliente::DIRECCION ?></label>
        <input type="text" name="<?= Cliente::DIRECCION ?>" value="<?php echo isset($_POST[Cliente::DIRECCION]) ? $_POST[Cliente::DIRECCION] : '' ?>"><br/><br/>

        <label for="<?= Cliente::MUNICIPIO ?>"><?= Cliente::MUNICIPIO ?></label>
        <input type="text" name="<?= Cliente::MUNICIPIO ?>" value="<?php echo isset($_POST[Cliente::MUNICIPIO]) ? $_POST[Cliente::MUNICIPIO] : '' ?>"><br/><br/>

        <label for="<?= Cliente::CODIGO_POSTAL ?>"><?= Cliente::CODIGO_POSTAL ?></label>
        <input type="number" name="<?= Cliente::CODIGO_POSTAL ?>" 
            value="<?php echo isset($_POST[Cliente::CODIGO_POSTAL]) ? $_POST[Cliente::CODIGO_POSTAL] : '' ?>"><br/><br/>

        <label for="<?= Producto::MUEBLE ?>"><?= Producto::MUEBLE ?></label>
        <select name="<?= Producto::MUEBLE ?>">
            <option value="<?= Producto::SOFA_3 ?>" 
                <?php if (isset($_POST[Producto::MUEBLE]) && $_POST[Producto::MUEBLE] == Producto::SOFA_3 ) echo SELECTED;?>><?= Producto::SOFA_3 ?></option>
            <option value="<?= Producto::SOFA_4 ?>" 
                <?php if (isset($_POST[Producto::MUEBLE]) && $_POST[Producto::MUEBLE] == Producto::SOFA_4 ) echo SELECTED;?>><?= Producto::SOFA_4 ?></option>
            <option value="<?= Producto::COCINAS ?>" 
                <?php if (isset($_POST[Producto::MUEBLE]) && $_POST[Producto::MUEBLE] == Producto::COCINAS ) echo SELECTED;?>><?= Producto::COCINAS ?></option>
            <option value="<?= Producto::CANAPE_90 ?>" 
                <?php if (isset($_POST[Producto::MUEBLE]) && $_POST[Producto::MUEBLE] == Producto::CANAPE_90 ) echo SELECTED;?>><?= Producto::CANAPE_90 ?></option>
            <option value="<?= Producto::CANAPE_120 ?>" 
                <?php if (isset($_POST[Producto::MUEBLE]) && $_POST[Producto::MUEBLE] == Producto::CANAPE_120 ) echo SELECTED;?>><?= Producto::CANAPE_120 ?></option>
            <option value="<?= Producto::CANAPE_150 ?>" 
                <?php if (isset($_POST[Producto::MUEBLE]) && $_POST[Producto::MUEBLE] == Producto::CANAPE_150 ) echo SELECTED;?>><?= Producto::CANAPE_150 ?></option>
            <option value="<?= Producto::LAVADORA ?>" 
                <?php if (isset($_POST[Producto::MUEBLE]) && $_POST[Producto::MUEBLE] == Producto::LAVADORA ) echo SELECTED;?>><?= Producto::LAVADORA ?></option>
        </select><br/><br/>

        <input type="radio" name="<?= Escritor::HTML ?>" value="<?= Escritor::HTML ?>" 
            <?php if (isset($_POST[Escritor::HTML]) && $_POST[Escritor::HTML]== Escritor::HTML ) echo CHECKED;?>><?= Escritor::HTML ?></button>
        <input type="radio" name="<?= Escritor::MD ?>" value="<?= Escritor::MD ?>" 
            <?php if (isset($_POST[Escritor::MD]) && $_POST[Escritor::MD]== Escritor::MD ) echo CHECKED;?>><?= Escritor::MD ?></button><br/><br/>

        <input type="submit" name="<?= Navegacion::COMPRAR ?>" value="<?= Navegacion::COMPRAR ?>">
    </form>
</body>
</html>