<?php
require "includes/config/database.php";
$database = connect_database();

$query = "SELECT * FROM properties LIMIT 3";
$query_result = mysqli_query($database, $query);

require "includes/functions.php";
include_template("header", true);
?>
<section class="container details">
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

<main class="container property-listing">
    <h2>Houses and apartments for sale.</h2>
    <div class="ads">
        <?php while ($actual_property = mysqli_fetch_assoc($query_result)) : ?>
            <div class="ad no_select">
                <img loading="lazy" width="200" height="300" src="images/<?php echo $actual_property["image"]; ?>" alt="Property image">
                <div class="ad_content">
                    <h3><?php echo $actual_property["title"]; ?></h3>
                    <p class="text_justified">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam laboriosam ex ullam voluptas in</p>
                    <p class="price"><?php echo "$" . number_format($actual_property["price"], 2, ".", ","); ?></p>
                    <div class="icons">
                        <div class="icon">
                            <img src="build/img/icono_wc.svg" alt="WC icon">
                            <p><?php echo $actual_property["wc"]; ?></p>
                        </div>
                        <div class="icon">
                            <img src="build/img/icono_estacionamiento.svg" alt="Parking icon">
                            <p><?php echo $actual_property["parking"] ?></p>
                        </div>
                        <div class="icon">
                            <img src="build/img/icono_dormitorio.svg" alt="Bed icon">
                            <p><?php echo $actual_property["rooms"] ?></p>
                        </div>
                    </div>
                    <a href="property.php?id=<?php echo $actual_property["property_id"]; ?>" class="button-yellow-block">Ver propiedad</a>
                </div><!-- .ad_content -->
            </div> <!-- .ad -->
        <?php endwhile; ?>
    </div> <!-- .ads -->
    <div class="align_right">
        <a href="advertisements.php" class="button-green-inline">Ver todas</a>
    </div>
</main> <!-- .property-listing -->

<section class="contact-image">
    <h2>Find the house of your dreams.</h2>
    <p>Fill out the contact form and an advisor will contact you shortly.</p>
    <div class="align_center">
        <a href="contact.php" class="button-yellow-inline">Contact us</a>
    </div>
</section> <!-- .contact-image -->

<section class="container lower-section">
    <div>
        <h2>Blog</h2>
        <ul class="blog">
            <li class="post">
                <picture>
                    <source srcset="build/img/blog1.avif" type="image/avif">
                    <source srcset="build/img/blog1.webp" type="image/webp">
                    <img loading="lazy" width="200" height="300" src="build/img/blog1.jpg" alt="blog ">
                </picture>
                <a href="post.php" class="post_information">
                    <h4>Terrace on the roof of your house.</h4>
                    <p>Written on: <span>20/04/2023</span> by: <span>Admin</span></p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam laboriosam ex ullam voluptas in</p>
                </a>
            </li> <!-- .post -->
            <li class="post">
                <picture>
                    <source srcset="build/img/blog2.avif" type="image/avif">
                    <source srcset="build/img/blog2.webp" type="image/webp">
                    <img loading="lazy" width="200" height="300" src="build/img/blog2.jpg" alt="blog ">
                </picture>
                <a href="post.php" class="post_information">
                    <h4>Guide to Home Decoration.</h4>
                    <p>Written on: <span>20/04/2023</span> by: <span>Admin</span></p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam laboriosam ex ullam voluptas in</p>
                </a>
            </li> <!-- .post -->
        </ul> <!-- .blog -->
    </div>
    <div>
        <h2>Testimonial</h2>
        <div class="testimonial">
            <blockquote>
                The staff behaved in an excellent way, provided great attention, and the house they offered me meets all my expectations.
            </blockquote>
            <div class="align_right">
                <p>- Víctor Flores Juárez</p>
            </div>
        </div> <!-- .testimonial -->
    </div>
</section> <!-- .lower-section -->

<?php
include_template("footer");
?>