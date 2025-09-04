 <footer class="footer">
        <div class="footer-content">
            <div class="footer-logo-contact">
                <img src="<?php echo media() ?>img/Logo_tipo.png" alt="Tierra de Sabores Logo" class="footer-logo">
                <div class="contact-info">
                    <h4>Información de contacto</h4>
                    <p><?php echo tel_cel() ?></p>
                    <p><?php echo email() ?></p>
                    <p><?php echo lugar() ?></p>
                </div>
            </div>
            <div class="footer-links">
                <h4>Enlaces rápidos</h4>
                <ul>
                    <li><a href="https://tierra-de-sabores-bolivia.blogspot.com/">Blog</a></li>
                    <li><a href="<?php echo base_url() ?>PolicitasPrivacidad.php">Política de privacidad</a></li>
                </ul>
            </div>
            <div class="footer-social">
                <h4>Síguenos</h4>
                <div class="social-icons">
                    <a href="#"><img src="<?php echo media() ?>img/face.png" alt="Facebook"></a>
                    <a href="#"><img src="<?php echo media() ?>img/icon-instagram.png" alt="Instagram"></a>
                    <a href="#"><img src="<?php echo media() ?>img/icon-twitter.png" alt="Twitter"></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2025 TIERRA DE SABORES. TODOS LOS DERECHOS RESERVADOS.</p>
        </div>
    </footer>

    <script src="<?php echo media() ?>js/funcion.js"></script>
    <script> src="https://code.jquery.com/jquery-3.6.1.min.js"</script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>