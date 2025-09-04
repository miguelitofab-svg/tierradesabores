<?php require_once 'Helpers/Helpers.php';
    headerAdmin();
?>

    <section class="hero-section">
        <img src="<?php echo media() ?>img/portada.jpg" alt="Comida boliviana" class="hero-background">
        <div class="hero-content">
            <h1>Explora Bolivia <br> en cada sabor</h1>
            <p>Conoce la esencia de nuestra cocina, donde tradición y creatividad se encuentran en cada plato.</p>
            <button class="btn-primary">Ver recetas</button>
            <img src="Assets/img/Logo_tipo.png" alt="Tierra de Sabores Logo" class="hero-logo-bottom">
        </div>
    </section>

    <!-- Menu de navegacion -->
    <?php navAdmin() ?>
<section class="most-searched-section">
        <h2>Politicas de privacidad</h2>
        <div class="recipes-grid">
            <div class="recipe-card">
                <img src="api-bunuelos.jpg" alt="Api con buñuelos">
                <span class="recipe-page-tag">Página principal *</span>
                <h3>1. Información que Recopilamos</h3>
                <p>Recopilamos dos tipos de información para ofrecerte la mejor experiencia posible:

                    Información que nos das directamente: Cuando creas una cuenta, publicas una receta, comentas, te suscribes a nuestro boletín o nos contactas, puedes proporcionarnos datos como tu nombre, dirección de correo electrónico y cualquier otra información que decidas compartir.

                    Información que se recopila automáticamente: Usamos cookies y otras tecnologías para entender cómo interactúas con nuestro sitio. Esto incluye tu dirección IP, el tipo de navegador que usas, las páginas que visitas, las recetas que más te gustan y el tiempo que pasas en cada sección.
                </p>
                <h3>2. Uso de la Información</h3>
                <p>Usamos la información que recopilamos para:

                    Ofrecer nuestros servicios: Para que puedas guardar tus recetas favoritas, publicar las tuyas y comentar en la comunidad.

                    Mejorar la experiencia del usuario: Para personalizar el contenido que ves, como recomendarte recetas o artículos que coincidan con tus intereses.

                    Comunicarnos contigo: Para enviarte boletines, actualizaciones del sitio y responder a tus preguntas o comentarios.

                    Analizar y mejorar el sitio: Para entender qué contenido es más popular y cómo podemos hacer que nuestro sitio sea aún mejor.
                </p>
                <h3>3. Cookies</h3>
                <p>Nuestro sitio web utiliza cookies para funcionar correctamente y mejorar tu experiencia. Las cookies son pequeños archivos de datos que se guardan en tu dispositivo. Nos ayudan a recordar tus preferencias, mantener tu sesión iniciada y analizar el tráfico del sitio.

                    Puedes configurar tu navegador para que no acepte cookies, pero ten en cuenta que esto podría afectar algunas de las funciones de nuestro sitio.
                </p>
                <h3>4. Compartir tu Información</h3>
                <p>No vendemos ni alquilamos tu información personal a nadie. Sin embargo, podemos compartirla en las siguientes situaciones:

                    Con proveedores de servicios: Podemos compartir tus datos con empresas que nos ayudan a operar el sitio web, como servicios de alojamiento web o plataformas de marketing por correo electrónico. Estas empresas solo pueden usar tu información para los fines que les hemos autorizado.

                    Por obligación legal: Si la ley lo exige, podemos divulgar tu información para cumplir con una orden judicial o una solicitud de las autoridades.
                </p>
                <h3>5. Seguridad de la Información</h3>
                <p>Tomamos medidas de seguridad para proteger tu información personal contra el acceso no autorizado, la divulgación o la destrucción. Sin embargo, ten en cuenta que ninguna transmisión de datos por internet es 100% segura.</p>
                <h3>6. Tus Derechos</h3>
                <p>Tienes derecho a:

                Acceder a la información personal que tenemos sobre ti.

                Corregir cualquier dato que sea incorrecto.

                Solicitar la eliminación de tus datos personales.

                Oponerte al uso de tu información para ciertos fines.

                Para ejercer cualquiera de estos derechos, por favor, contáctanos a través de [dirección de correo electrónico de contacto].

                Si tienes alguna pregunta sobre esta política de privacidad, no dudes en contactarnos.</p>
                </p>
            </div>
            
        </div>
    </section>
    <?php footerAdmin() ?>