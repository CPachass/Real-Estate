<?php
require "includes/config/database.php";
$database = connect_database();

$query = "SELECT * FROM properties";
$query_result = mysqli_query($database, $query);

require "includes/functions.php";
include_template("header");
?>

    <main class="container property-listing section">
        <h2>Advertisements.</h2>
        <div class="ads">
            <?php while($actual_property = mysqli_fetch_assoc($query_result)) : ?>
                <div class="ad no_select">
                <img loading="lazy"  width="200" height="300" src="images/<?php echo $actual_property["image"]; ?>" alt="Property image">
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
                            <p><?php echo $actual_property["parking"]?></p>
                        </div>
                        <div class="icon">
                            <img src="build/img/icono_dormitorio.svg" alt="Bed icon">
                            <p><?php echo $actual_property["rooms"]?></p>
                        </div>
                    </div>
                    <a href="property.php?id=<?php echo $actual_property["property_id"]; ?>" class="button-yellow-block">Ver propiedad</a>
                </div><!-- .ad_content -->
            </div> <!-- .ad -->
            <?php endwhile; ?>
        </div> <!-- .ads -->
    </main> <!-- .property-listing -->

<?php 
include_template("footer");
?>