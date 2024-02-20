<!DOCTYPE html>
<html lang="en">
<?php include_once 'header.php'; ?>

    <body>
        <?php include_once 'nav.php'; ?>      

        <!-- CAROUSEL STAR -->
        <div class="carousel-container">
            <div class="carousel-slide">
                <img src="../assets/images/lenguaje-programacion-1859691.webp" alt="Imagen 1">
                <div class="overlay"></div>
                <div class="carousel-caption">
                    <h2>Tecnología</h2>
                    <p></p>
                </div>
            </div>
            <div class="carousel-slide">
                <img src="../assets/images/carousel-2.jpg" alt="Imagen 2">
                <div class="overlay"></div>
                <div class="carousel-caption">
                    <h2>Hogar</h2>
                    <p></p>
                </div>
            </div>
            <div class="carousel-slide">
                <img src="../assets/images/carousel-3.jpg" alt="Imagen 3">
                <div class="overlay"></div>
                <div class="carousel-caption">
                    <h2>Mascotas</h2>
                    <p></p>
                </div>
            </div>
            <div class="carousel-slide">
                <img src="../assets/images/carousel-4.jpg" alt="Imagen 4">
                <div class="overlay"></div>
                <div class="carousel-caption">
                    <h2>Belleza</h2>
                    <p></p>
                </div>
            </div>
        </div>

        <!-- Flechas de control del carousel -->
        <div class="carousel-controls">
            <span class="prev">&lt;</span>
            <span class="next">&gt;</span>
        </div>
        <!-- Carousel end -->


        <div class="logo1"><img src="../assets/images/logo.png" alt="logo" /></div>

        <?php include_once 'cards.php'; ?>

        <?php include_once 'footer.php'; ?>


        <script src="../assets/script/main.js"></script>
    </body>

</html>