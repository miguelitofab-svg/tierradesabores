<?php require_once 'Helpers/Helpers.php';
//headerAdmin();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tierra de Sabores - Explora Bolivia en cada sabor</title>
    <link rel="stylesheet" href="<?php echo media() ?>Css/styles.css">
    <link href="<?php echo media() ?>Css/fonts.css" rel="stylesheet">

</head>

<body>
    <header class="navbar">
        <div class="navbar-left">
            <a href="<?php echo base_url() ?>index.php"><img src="<?php echo media() ?>img/Logo_tipo.png" alt="Tierra de Sabores Logo" class="logo"></a>
        </div>
        <div class="navbar-right">
            <a href="<?php echo base_url() ?>Registro.php" class="nav-link">Registrate</a>
            <a href="<?php echo base_url() ?>login.php" id="entr" class="nav-link">Ingresar</a>
        </div>
    </header>
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
    <div class="container" >
        <form action="action_page.php" id="formul">
            <div class="row">
                <div class="col-25">
                    <label for="NombreComplero">Nombre Completo</label>
                </div>
                <div class="col-75">
                    <input type="text" id="NombreComplero" name="NombreComplero">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="Apellidos">Apellidos</label>
                </div>
                <div class="col-75">
                    <input type="text" id="Apellidos" name="Apellidos">
                </div>

            </div>
            
            <div class="row">
                <div class="col-25">
                    <label for="Usuario">Usuario</label>
                </div>
                <div class="col-75">
                    <input type="text" id="Usuario" name="Usuario">
                </div>

            </div>
            <div class="row">
                <div class="col-25">
                    <label for="Pass">Contraseña</label>
                </div>
                <div class="col-75">
                    <input type="password" id="Pass" name="Pass">
                </div>
                
         
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="comprobante">Conprobante de pago</label>
                </div>
                <div class="col-75">
                    <input type="file" id="comprobante" name="comprobante">
                </div>
           
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="country">Pais</label>
                </div>
                <div class="col-75">
                    <select id="country" name="country">
                        <option value="australia">Australia</option>
                        <option value="canada">Canada</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="usa">USA</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <button class="btn btn-primary" type="button" id="btn" onclick="Reg(event);">REGISTRAR</button>
            </div>
        </form>
    </div>



    <?php footerAdmin() ?>