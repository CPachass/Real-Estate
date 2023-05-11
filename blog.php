<?php
    include "includes/templates/header.php";
?>

    <main class="content_centered">
        <h2>Blog</h2>
            <ul class="blog">
                <li class="post">
                    <picture>
                        <source srcset="build/img/blog1.avif" type="image/avif">
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <img loading="lazy"  width="200" height="300" src="build/img/blog1.jpg" alt="blog ">
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
                        <img loading="lazy"  width="200" height="300" src="build/img/blog2.jpg" alt="blog ">
                    </picture>
                    <a href="post.php" class="post_information">
                        <h4>Build a pool in your home.</h4>
                        <p>Written on: <span>20/04/2023</span> by: <span>Admin</span></p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam laboriosam ex ullam voluptas in</p>
                    </a>
                </li> <!-- .post -->
                <li class="post">
                    <picture>
                        <source srcset="build/img/blog3.avif" type="image/avif">
                        <source srcset="build/img/blog3.webp" type="image/webp">
                        <img loading="lazy"  width="200" height="300" src="build/img/blog3.jpg" alt="blog ">
                    </picture>
                    <a href="post.php" class="post_information">
                        <h4>Guide to Home Decoration.</h4>
                        <p>Written on: <span>20/04/2023</span> by: <span>Admin</span></p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam laboriosam ex ullam voluptas in</p>
                    </a>
                </li> <!-- .post -->
                <li class="post">
                    <picture>
                        <source srcset="build/img/blog4.avif" type="image/avif">
                        <source srcset="build/img/blog4.webp" type="image/webp">
                        <img loading="lazy"  width="200" height="300" src="build/img/blog4.jpg" alt="blog ">
                    </picture>
                    <a href="post.php" class="post_information">
                        <h4>Guide to Room Decoration.</h4>
                        <p>Written on: <span>20/04/2023</span> by: <span>Admin</span></p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam laboriosam ex ullam voluptas in</p>
                    </a>
                </li> <!-- .post -->
            </ul> <!-- .blog -->
    </main>

<?php 
include "includes/templates/footer.php";
?>