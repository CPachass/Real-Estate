<?php
require "../includes/functions.php";
if(!is_auth()) {
    header("Location: /index.php");
}

require "../../includes/config/database.php";
$database = connect_database();

$query = "SELECT * FROM sellers";
$result_query = mysqli_query($database, $query);

$errors = [];

$title = "";
$price = "";
$description = "";
$rooms = "";
$wc = "";
$parking = "";
$seller = "";
$created = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = mysqli_real_escape_string($database, $_POST["title"]); 
    $price = mysqli_real_escape_string($database, $_POST["price"]);
    $description = mysqli_real_escape_string($database, $_POST["description"]);
    $rooms = mysqli_real_escape_string($database, $_POST["rooms"]);
    $wc = mysqli_real_escape_string($database, $_POST["wc"]);
    $parking = mysqli_real_escape_string($database, $_POST["parking"]);
    $seller = mysqli_real_escape_string($database, $_POST["seller"]);
    $created = date("Y/m/d");
    $image = $_FILES["image"];

    if (!$title) { $errors[] = "You must add a title.";}
    if (!$price) { $errors[] = "You must add a price.";}
    if (!$image["name"]) { $errors[] = "You must add an image.";}
    if ($image["size"] > 4 * 1024 * 1024) { $errors[] = "Image size must be less than 4BM.";}
    if (!$description) { $errors[] = "You must add a description.";}
    if (!$rooms) { $errors[] = "You must add how many rooms.";}
    if (!$wc) { $errors[] = "You must add how many wc.";}
    if (!$parking) { $errors[] = "You must add how many parking places.";}
    if (!$seller) { $errors[] = "You must select a seller.";}
    
    if(empty($errors)) {
        $images_folder = "../../images/";
        is_dir($images_folder) ? null : mkdir($images_folder);
        $image_name = md5(uniqid(rand())) . ".jpg";
        move_uploaded_file($image["tmp_name"], $images_folder . $image_name);

        $query = "INSERT INTO properties (title, price, description, image, rooms, wc, parking, created, sellers_seller_id) 
        VALUES ('$title', '$price', '$description', '$image_name', '$rooms', '$wc', '$parking', '$created', '$seller')";
        $result_query = mysqli_query($database, $query);        
        if ($result_query) {
            header("Location: /admin/index.php?action=1");
        }
    }
}

include_template("header");
?>

<main class="create_seccion container section">
    <h1>Create.</h1>
    <div class="align_right section"><a href="../index.php" class="button-green-inline">Back</a></div>

    <?php foreach($errors as $error) :?>
        <div class="message error"><?php echo $error?></div>
    <?php endforeach;?>

    <form method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>General information.</legend>
            <div class="form_field">
                <label for="title">Title:</label>
                <input type="text" placeholder="Property title" id="title" name="title" value="<?php echo $title; ?>">
            </div>
            <div class="form_field">
                <label for="price">Price:</label>
                <input type="number" placeholder="Property price" id="price" name="price" value="<?php echo $price; ?>">
            </div>
            <div class="form_field">
                <label for="property_image">Property image:</label>
                <input type="file" id="property_image" accept="image/jpeg, image/png" name="image">
            </div>
            <div class="form_field">
                <label for="description">Property description:</label>
                <textarea id="description" name="description"><?php echo $description; ?></textarea>
            </div>
        </fieldset> <!-- general information form section -->
        <fieldset>
            <legend>Property details.</legend>
            <div class="form_field">
                <label for="rooms">Number of rooms:</label>
                <input type="number" placeholder="Ej: 3" id="rooms" min="1" max="9" name="rooms" value="<?php echo $rooms; ?>">
            </div>
            <div class="form_field">
                <label for="wc">Number of wc:</label>
                <input type="number" placeholder="Ej: 2" id="wc" min="1" max="9" name="wc" value="<?php echo $wc; ?>">
            </div>
            <div class="form_field">
                <label for="parking">Number of parking places:</label>
                <input type="number" placeholder="Ej: 2" id="parking" min="1" max="9" name="parking" value="<?php echo $parking; ?>">
            </div>
        </fieldset> <!-- property details form section -->
        <fieldset>
            <legend>Seller</legend>
            <div class="form_field">
                <select id="select" name="seller">
                    <option disabled selected>-- Select --</option>
                    <?php while($actual_seller = mysqli_fetch_assoc($result_query)) : ?>
                        <option <?php echo $seller === $actual_seller["seller_id"] ? "selected": "";?> value="<?php echo $actual_seller["seller_id"]?>">
                            <?php echo $actual_seller["name"] . " " . $actual_seller["last_name"]; ?>
                        </option>
                    <?php endwhile; ?>
                </select>
            </div>
        </fieldset> <!-- Seller form section -->
        <div class="align_left">
            <button type="submit" class="button-green-inline">Create property</button>
        </div>
    </form> <!-- form -->
</main>

<?php
include_template("footer");
?>