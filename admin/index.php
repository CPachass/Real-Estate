<?php
require "../includes/functions.php";
if(!is_auth()) {
    header("Location: /index.php");
}

require "../includes/config/database.php";
$database = connect_database();

$query = "SELECT * FROM properties";
$query_result = mysqli_query($database, $query);

include_template("header");


if($_SERVER["REQUEST_METHOD"] === "POST") {
    $property_id = $_POST["id"];
    $property_id = filter_var($property_id, FILTER_VALIDATE_INT);

    if($property_id) {
        $query = "SELECT image FROM properties WHERE property_id = ${property_id}";
        $query_result = mysqli_query($database, $query);
        $property_image = mysqli_fetch_assoc($query_result);
        unlink("../images/" . $property_image["image"]);

        $query = "DELETE FROM properties WHERE property_id = ${property_id}";
        $query_result = mysqli_query($database, $query);
        if ($query_result) {
            header("Location: /admin/index.php?action=3");
        }
    }

}

?>

<main class="admin_panel container section">
    <h1>Administration Panel.</h1>

    <?php if ($_GET["action"] === "1") : ?>
        <div class="message w_100 pass"><?php echo "Property created correctly." ?></div>
    <?php elseif ($_GET["action"] === "2") : ?>
        <div class="message w_100 pass"><?php echo "Property modified correctly." ?></div>
    <?php elseif ($_GET["action"] === "3") : ?>
        <div class="message w_100 pass"><?php echo "Property deleted correctly." ?></div>
    <?php endif; ?>

    <!--Create new property-->
    <div class="align_right section">
        <a href="properties/create.php" class="button-green-inline">Create new</a>
    </div>

    <!--List all properties-->
    <table class="properties_table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Price</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($actual_property = mysqli_fetch_assoc($query_result)) : ?>
                <tr>
                    <td><?php echo $actual_property["property_id"]; ?></td>
                    <td><?php echo $actual_property["title"]; ?></td>
                    <td><?php echo number_format($actual_property["price"], 2, '.', ','); ?></td>
                    <td>
                        <img src="../images/<?php echo $actual_property["image"]?>" alt="Property image.">
                    </td>
                    <td>
                        <a href="properties/update.php?id=<?php echo $actual_property["property_id"];?>" class="button-yellow-block section">Modify</a>
                        <form method="post" class="w_100">
                            <input type="hidden" name="id" value="<?php echo $actual_property["property_id"]; ?>">
                            <input type="submit" class="button-red-block section w_100" value="Delete">
                        </form>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</main>


<?php
include_template("footer");
mysqli_close($database);
?>