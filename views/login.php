<?php session_start();
require_once '../helpers/auth_helper.php';
requireGuest();
$errorMessage = "";
if
($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once '../controllers/AuthController.php';
    $authController = new
        AuthController();
    $errorMessage = $authController->login($_POST['phone'], $_POST['password']);
}

include 'partials/header.php';
?>

<main class="d-flex flex-column justify-content-center align-items-center vh-100">
    <div class="bg-body-secondary p-5 shadow-lg rounded-5">
        <h1 class="text-center fst-italic mb-5 fw-bold">Login</h1>
        <form method="POST">
            <?php if (!empty($errorMessage)) {
                ?>

                <p><?= $errorMessage ?></p>
            <?php } ?>

            <div class="form-floating mb-3">
                <input type="tel" name="phone" class="form-control" id="floatingInput" placeholder="phone">
                <label for="floatingInput">Phone Number</label>
            </div>
            <div class="form-floating mb-4">
                <input type="password" name="password" class="form-control" id="floatingPassword"
                    placeholder="password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="d-grid gap-2">
                <button class="btn btn-danger" type="submit">Login</button>
            </div>
        </form>
        <p class="text-center text-secondary">
            Don't have an account? <a href="register.php">Register</a>
        </p>
    </div>
</main>


<?php include 'partials/footer.php'; ?>