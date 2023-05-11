<?php
require "includes/config/database.php";
$database = connect_database();

require "includes/functions.php";
include_template("header");    

$errors = [];

if($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = mysqli_real_escape_string($database, filter_var($_POST["email"], FILTER_VALIDATE_EMAIL));
    $password = mysqli_real_escape_string($database, $_POST["password"]);

    if(!$email) { $errors[] = "You must include an email (or your email is invalid)."; }
    if(!$password) { $errors[] = "You must include a password."; }

    if(empty($errors)) {
        $query = "SELECT * FROM users WHERE email = '$email'";
        $query_result = mysqli_query($database, $query);

        if($query_result->num_rows) {
            $user = mysqli_fetch_assoc($query_result);
            $auth = password_verify($password, $user["password"]);
            if ($auth) {
                session_start();
                $_SESSION["email"] = $email;
                $_SESSION["auth"] = true;

                header("Location: /index.php?");
            } else {
                echo "el usuario no está verificado";
            }
        }
    }    
}


?>

<main class="container contact content_centered">
        <h2>Login.</h2>
        <?php foreach($errors as $error) : ?>
            <div class="message error"><?php echo $error?></div>
        <?php endforeach;?>

        <section class="form">
            <form method="POST">
                <fieldset>
                    <div class="form_field">
                        <label for="email">E-mail:</label>
                        <input type="email" placeholder="Your email" id="email" name="email">
                    </div>
                    <div class="form_field">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password">
                    </div>
                </fieldset>
                <div class="align_left">
                    <button type="submit" class="button-green-inline">Submit</button>
                </div>
            </form> <!-- form -->
        </section> <!-- .form section-->
    </main>

<?php
include_template("footer");    
?>