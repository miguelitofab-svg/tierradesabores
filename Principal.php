<?php require_once 'Helpers/Helpers.php';
    headerAdmin();
?>

    <section class="hero-section">
        <img src="<?php echo media() ?>img/portada.jpg" alt="Comida boliviana" class="hero-background">
        <div class="hero-content">
            <h1>Explora Bolivia <br> en cada sabor</h1>
            <p>Conoce la esencia de nuestra cocina, donde tradición y creatividad se encuentran en cada plato.</p>
            
            <img src="<?php echo media() ?>img/Logo_tipo.png" alt="Tierra de Sabores Logo" class="hero-logo-bottom">
        </div>
    </section>

    <!-- Menu de navegacion -->
    <?php navAdmin() ?>
    
    <section class="most-searched-section">
        <h2>Descubre lo más buscado</h2>
        <div class="recipes-grid">
            <div class="recipe-card">
                <img src="<?php echo media()?>img/api.jpg" alt="Api con buñuelos">
                <span class="recipe-page-tag">Página principal *</span>
                <h3>Api con buñuelos</h3>
                <p>El Api con Buñuelos es un desayuno tradicional de Bolivia que combina la suavidad de la masa de los buñuelos con la calidez de un delicioso Api. Este plato es muy popular, especialmente en las mañanas, y se caracteriza por su masa esponjosa y suave. La preparación de los buñuelos es sencilla y económica, ya que solo necesitas harina y otros ingredientes básicos.</p>
                
            </div>
            <div class="recipe-card">
                <img src="<?php echo media()?>img/pique.jpeg" alt="Pique macho">
                <h3>Pique macho</h3>
                <p>El pique macho es un plato típico boliviano abundante de la ciudad de Cochabamba, fácil y rápido de preparar. Las porciones más pequeñas simplemente se llaman piqué; El piqué macho suele ser una porción muy grande que difícilmente puede lograr una sola persona. El piqué macho es tradicionalmente picante..</p>
                
            </div>
            <div class="recipe-card">
                <img src="<?php echo media()?>img/canela.jpg" alt="Helado de canela artesanal">
                <h3>Helado de canela artesanal</h3>
                <p>El helado de canela casero es una delicia cremosa y fría con la calidez de la canela y la vainilla. Hecho con solo unos pocos ingredientes, te enamorarás de esta receta y de este delicioso sabor.</p>
                
            </div>
        </div>
    </section>

<?php footerAdmin() ?>