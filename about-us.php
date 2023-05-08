<?php
    include "includes/templates/header.php";
?>

    <main class="about_us container">
        <picture>
            <source srcset="build/img/nosotros.avif" type="image/avif">
            <source srcset="build/img/nosotros.webp" type="image/webp">
            <img loading="lazy"  width="200" height="300" src="build/img/nosotros.jpg" alt="about us image">
        </picture>
        <div>
            <h4>25 Years of Experience</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam laboriosam ex ullam voluptas in, soluta aliquam quod ab distinctio harum perspiciatis sequi doloribus amet recusandae velit itaque repellendus aspernatur modi.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam laboriosam ex ullam voluptas in, soluta aliquam quod ab distinctio harum perspiciatis sequi doloribus amet recusandae velit itaque repellendus aspernatur modi.</p>
        </div>
    </main> <!-- .about_us -->

    <section class="container details section">
        <h2>More about us</h2>
        <section class="details_icons">
            <div class="details_icon">
                <img src="build/img/icono1.svg" alt="security icon">
                <h3>Security</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam laboriosam ex ullam voluptas in, soluta aliquam quod ab distinctio harum perspiciatis sequi doloribus amet recusandae velit itaque repellendus aspernatur modi.</p>
            </div>
            <div class="details_icon">
                <img src="build/img/icono2.svg" alt="money icon">
                <h3>Price</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam laboriosam ex ullam voluptas in, soluta aliquam quod ab distinctio harum perspiciatis sequi doloribus amet recusandae velit itaque repellendus aspernatur modi.</p>
            </div>
            <div class="details_icon">
                <img src="build/img/icono3.svg" alt="clock icon">
                <h3>On time</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam laboriosam ex ullam voluptas in, soluta aliquam quod ab distinctio harum perspiciatis sequi doloribus amet recusandae velit itaque repellendus aspernatur modi.</p>
            </div>
        </section>
    </section> <!-- .details -->

<?php 
include "includes/templates/footer.php";
?>