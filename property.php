<?php
$id = $_GET["id"];

require "includes/config/database.php";
$database = connect_database();

$query = "SELECT * FROM properties WHERE property_id = $id";
$query_result = mysqli_query($database, $query);
$property = mysqli_fetch_assoc($query_result);

require "includes/functions.php";
include_template("header");
?>

    <main class="property container section">
        <h2><?php echo $property["title"]; ?></h2>
        <img class="property_image" loading="lazy"  width="200" height="300" src="<?php echo "images/" . $property["image"]; ?>" alt="property image">
        <p class="price"><?php echo "$" . number_format($property["price"], 2, ".", ","); ?></p>
        <div class="icons">
            <div class="icon">
                <img src="build/img/icono_wc.svg" alt="WC icon">
                <p><?php echo $property["wc"]; ?></p>
            </div>
            <div class="icon">
                <img src="build/img/icono_estacionamiento.svg" alt="Parking icon">
                <p><?php echo $property["parking"]; ?></p>
            </div>
            <div class="icon">
                <img src="build/img/icono_dormitorio.svg" alt="Bed icon">
                <p><?php echo $property["rooms"]; ?></p>
            </div>
        </div>
        <p>
            <?php echo $property["description"]; ?>
        </p>
    </main> <!-- .property -->

<?php 
include_template("footer");
?>