<?php
session_start();
require_once '../helpers/auth_helper.php';
requireGuest();

$errorMessage = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once '../controllers/AuthController.php';
    $authController = new AuthController();
    $errorMessage = $authController->register($_POST['name'], $_POST['phone'], $_POST['password'], $_POST['address']);
}

include 'partials/header.php';
?>
<main class="d-flex flex-column justify-content-center align-items-center vh-100">
    <div class="bg-body-secondary p-5 shadow-lg rounded-5">

        <h1 class="text-center fst-italic mb-5 fw-bold">Register</h1>
        <form method="POST">
            <?php

            if (!empty($errorMessage)) {
                ?>
                <p><?= $errorMessage ?></p>
                <?php
            }
            ?>
                <label for="name">Name:</label><br>
                <input type="text" name="name" placeholder="Name"><br>
            <label for="phone">phone:</label><br>
            <input type="text" name="phone" placeholder="Phone"><br>
            <label for="password">password:</label><br>
            <input type="password" name="password" placeholder="Password"><br>
            <label for="address">Address</label><br>
            <input type="text" name="address" placeholder="Address"><br>
            <div class="d-grid m-3">
                <button class="btn btn-danger" type="submit">Register</button>
            </div>
        </form>
        <p>Already have an account?<a href="login.php">Login</a></p>
    </div>
</main>

<?php include 'partials/footer.php'; ?>