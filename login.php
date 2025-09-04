<?php require_once 'Helpers/Helpers.php';
headerAdmin();
?>
<link href="<?php echo media() ?>Css/Form.css" rel="stylesheet">
<section class="hero-section">
    <img src="<?php echo media() ?>img/portada.jpg" alt="Comida boliviana" class="hero-background">
    <div class="hero-content">
        <h1>Explora Bolivia <br> en cada sabor</h1>
        <p>Conoce la esencia de nuestra cocina, donde tradición y creatividad se encuentran en cada plato.</p>
        <img src="<?php echo media() ?>img/Logo_tipo.png" alt="Tierra de Sabores Logo" class="hero-logo-bottom">
    </div>
</section>

<!-- Menu de navegacion -->
<div class="container">
    <form action="action_page.php" id="formul">
        <div class="row">
            <div class="col-25">
                <label for="Usuario">Usuario</label>
            </div>
            <div class="col-75">
                <input type="text" id="Usuario" name="Usuario" >
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="pass">Contraseña</label>
            </div>
            <div class="col-75">
                <input type="password" id="pass" name="pass" >
            </div>
        <div>
            
        </div>
        
        <div class="row">
            <button class="btn btn-secondary" type="button" id="btn" onclick="entrar(event);">ENTRAR</button>
            <button class="btn btn-primary" type="button" id="bt" onclick="salir(event);">SALIR</button>
        </div>
    </form>
</div>



<?php footerAdmin() ?>