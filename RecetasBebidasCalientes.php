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
        <h2>Bebidas Calientes</h2>
        <div class="recipes-grid">
            <div class="recipe-card">
                <img src="<?php echo media() ?>img/api.jpg" alt="Api" >
                <h3>Api (5 raciones)</h3>
                <ol>
                <li><p> 3 tazas de Maíz morado molido </p></li>
                <li><p> 5 tazas de Agua </p></li>
                <li><p> 1 Ramita de canela </p></li>
                <li><p> 2 Clavos de olor </p></li>
                <li><p>Gotas de jugo de limón</p></li>
                <li><p> 1 Trozo de cáscara de naranja o de limón </p></li>
                <li><p>Azúcar</p></li>
                </ol>
                <h2>Instrucciones</h2>
                <p>1. Para preparar esta receta, se debe comenzar colocando el maíz molido en un recipiente junto con una taza de agua, azúcar y un trozo de cáscara de naranja o limón.</p>
                <p>2. Se debe tapar el recipiente y dejar reposar la mezcla durante 3 días.</p>
                <p>3. Una vez transcurrido este tiempo y la mezcla haya fermentado, se traslada a una olla y se empieza a calentar con agua hasta que alcance una consistencia espesa.</p>
                <p>4. Posteriormente, se agrega canela y clavos de olor a la mezcla en la olla y se deja hervir, asegurándose de revolver constantemente para evitar que se queme.</p>
                <p>5. Se retiran las cáscaras de naranja o limón y se añaden unas gotas de jugo de limón</p>
                <p>6. Se continúa removiendo la mezcla durante aproximadamente 15 minutos más, y una vez lista, se sirve caliente.</p>
            </div>
            <div class="recipe-card">
                <img src="<?php echo media() ?>img/chicha-de-mani.jpg" alt="Chica de Mani" >
                <h3>Chica de Mani(5 raciones)</h3>
                <ol>
                <li><p> 2 tazas de Arroz </p></li>
                <li><p> 200 gramos de Maní tostado sin sal </p></li>
                <li><p> 1 Rama de canela </p></li>
                <li><p> 8 Clavos de olor </p></li>
                <li><p>Chancaca</p></li>
                <li><p>Agua</p></li>
                </ol>
                <h2>Instrucciones</h2>
                <p>1. En una sartén sin aceite, se tuesta el arroz.</p>
                <p>2. Se coloca el agua en una cacerola y se cocina el arroz junto con los clavos de olor y la rama de canela.</p>
                <p>3. Cuando el arroz comience a abrirse, se apaga el fuego y se deja enfriar.</p>
                <p>4. Luego, se coloca el arroz en un recipiente de barro y se le añaden dos litros de agua hervida.</p>
                <p>5. Se muele el maní hasta obtener una crema, guardando el aceite en un recipiente de vidrio para otro momento.</p>
                <p>6. Posteriormente, se agrega el maní al recipiente de barro junto con la chancaca.</p>
                <p>7. Se mezcla bien hasta alcanzar la consistencia líquida adecuada para la bebida.</p>
                <p>8. Finalmente, se cuela y se sirve.</p>
            </div>
            <div class="recipe-card">
                <img src="<?php echo media() ?>img/sucumbe.jpg" alt="Sucumbé paceño" >
                <h3>Sucumbé paceño (5 raciones)</h3>
                <ol>
                <li><p> 1/2 Botella de singani </p></li>
                <li><p> 2 litros de Leche </p></li>
                <li><p> 6 cucharas de Azúcar </p></li>
                <li><p> 2 Huevos </p></li>
                <li><p> 1 Palito de canela </p></li>
                <li><p> 1 Clavo de olor </p></li>
                </ol>
                <h2>Instrucciones</h2>
                <p>1.  Para preparar el sucumbé, se debe comenzar haciendo hervir la leche en una olla, luego se agrega la canela y el azúcar. </p>
                <p>2.  En un tazón aparte, se baten las claras de huevo a punto de nieve y luego se incorporan las yemas. </p>
                <p>3.  Una vez que la leche ha hervido, se retira del fuego y se van agregando los huevos de forma lenta y constante, evitando que se cuezan en el proceso. </p>
                <p>4.  Después, se vierte el singani en la mezcla y se bate hasta que se forme espuma. </p>
                <p>5.  Finalmente, el sucumbé se sirve caliente en tazas individuales para disfrutarlo en su temperatura ideal. </p>
            </div>
        </div>
    </section>

<!--    <section class="most-searched-section">
        <div class="recipes-grid">
            <div class="recipe-card">
                <img src="<?php echo media() ?>img/" alt="Silpancho" >
                <h3>(5 raciones)</h3>
                <ol>
                <li><p></p></li>
                <li><p></p></li>
                <li><p></p></li>
                <li><p></p></li>
                <li><p></p></li>
                </ol>
                <h2>Instrucciones</h2>
                <p>1. </p>
                <p>2. </p>
                <p>3. </p>
                <p>4. </p>
                <p>5. </p>
            </div>
            <div class="recipe-card">
                <img src="<?php echo media() ?>img/" alt="Silpancho" >
                <h3>(5 raciones)</h3>
                <ol>
                <li><p></p></li>
                <li><p></p></li>
                <li><p></p></li>
                <li><p></p></li>
                <li><p></p></li>
                </ol>
                <h2>Instrucciones</h2>
                <p>1. </p>
                <p>2. </p>
                <p>3. </p>
                <p>4. </p>
                <p>5. </p>
            </div>
            <div class="recipe-card">
                <img src="<?php echo media() ?>img/" alt="Silpancho" >
                <h3>(5 raciones)</h3>
                <ol>
                <li><p></p></li>
                <li><p></p></li>
                <li><p></p></li>
                <li><p></p></li>
                <li><p></p></li>
                </ol>
                <h2>Instrucciones</h2>
                <p>1. </p>
                <p>2. </p>
                <p>3. </p>
                <p>4. </p>
                <p>5. </p>
            </div>
        </div>
    </section>

-->

    <?php footerAdmin() ?>