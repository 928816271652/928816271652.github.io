<footer>
    <div class="container container--footer">
        <div class="links">
            <div class="footer-title">Enlaces rápidos</div>
            <div class="footer-content">
                <ul>
                    <li><a class="active" href="">INICIO</a></li>
                    <li><a href="./about.html">ACERCA DE</a></li>
                    <li><a href="./login.html">LOGIN</a></li>
                </ul>
            </div>
        </div>
        <div class="location">
            <div class="footer-title">Ubicación</div>
            <div class="footer-content">
                <p>Av. Universitaria 543</p>
            </div>
        </div>
        <div class="contact">
            <div class="footer-title">Contacto</div>
            <div class="footer-content">
                <div class="data">
                    <label>Phone :</label>
                    <span>098 8907 9987</span>
                </div>
                <div class="data">
                    <label>Email :</label>
                    <span>admin@mediclinic.com</span>
                </div>
            </div>
        </div>
        <div class="copy">
            © 2022 MEDICLINIC. All Rights Reserved | Autors:F&A
        </div>
    </div>
</footer>
    
 <!-- JS -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 <?php foreach ($scripts as $script) : ?>
        <script src="./assets/js/<?php echo $script;?>.js?<?php echo strtotime("now");?>"></script>
    <?php endforeach ?>
    
</body>
</html>