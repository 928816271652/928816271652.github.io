<?php
$css = array(
    'home',
);
include_once('./partials/header.php');
?>
<main class="container">
    <section class="banner">
        <div class="arrow arrow--left">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
            </svg>
        </div>
        <div class="arrow arrow--right">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
            </svg>
        </div>
        <div class="banner-wrapper">
            <?php for ($i = 0; $i < 5; $i++) : ?>
                <div style="height: 580px;" class="banner-item  <?php echo $i == 0 ? 'active' : ''; ?>">
                    <img src="./assets/img/inicio<?php echo $i + 1; ?>.png" />
                </div>
            <?php endfor ?>

        </div>
    </section>
    <style>
        body {

            background-image: url("./assets/img/fondomedi.jpg");

        }
    </style>
    <section class="categories">
        <div class="categories-wrapper">

        </div>


</main>
<?php
$scripts = array(
    'banner',
);
include_once('./partials/footer.php');
?>