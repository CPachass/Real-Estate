<?php
    include "includes/templates/header.php";
?>

    <main class="container contact">
        <h2>Contact</h2>
        <picture>
            <source srcset="build/img/destacada3.avif" type="image/avif">
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <img loading="lazy"  width="200" height="300" src="build/img/destacada3.jpg" alt="contact image">
        </picture>
        <section class="form">
            <h2>Fill out the contact form.</h2>
            <form>
                <fieldset>
                    <legend>Personal information.</legend>
                    <div class="form_field">
                        <label for="name">Name:</label>
                        <input type="text" placeholder="Your name" id="name">
                    </div>
                    <div class="form_field">
                        <label for="email">E-mail:</label>
                        <input type="email" placeholder="Your email" id="email">
                    </div>
                    <div class="form_field">
                        <label for="phonenumber">Phone number:</label>
                        <input type="number" placeholder="Your phone number" id="phonenumber">
                    </div>
                    <div class="form_field">
                        <label for="message">Message:</label>
                        <textarea id="message"></textarea>
                    </div>
                </fieldset> <!-- personal information form section -->
                <fieldset>
                    <legend>Information about the property.</legend>
                    <div class="form_field">
                        <label for="select">Vende o compra</label>
                        <select id="select">
                            <option disabled selected>-- Select --</option>
                            <option value="1">Sell</option>
                            <option value="2">Buy</option>
                        </select>
                    </div>
                    <div class="form_field">
                        <label for="quantity">Quantity</label>
                        <input type="number" id="quantity" min="1" max="20">
                    </div>
                </fieldset> <!-- property information form section -->
                <fieldset>
                    <legend>Contact</legend>
                    <div class="form_field">
                        <span>How would you like to be contacted?</span>
                        <label for="option_phone" class="inline">Phone</label>
                        <input type="radio" id="option_phone" name="option">
                        <label for="option_email" class="inline">E-mail</label>
                        <input type="radio" id="option_email" name="option">
                    </div>
                    <div class="form_field">
                        <span>If you choose phone, select day and hour:</span>
                        <div class="form_field">
                            <label for="date">Date:</label>
                            <input type="date" id="date">
                        </div>
                        <div class="form_field">
                            <label for="date_hour">Hour:</label>
                            <input type="time" id="date_hour" min="09:00" max="18:00">
                        </div>
                    </div>
                </fieldset> <!-- contact form section -->
                <div class="align_left">
                    <button type="submit" class="button-green-inline">Submit</button>
                </div>
            </form> <!-- form -->
        </section> <!-- .form section-->
    </main>

<?php 
include "includes/templates/footer.php";
?>