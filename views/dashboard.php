<?php
session_start();
require_once '../helpers/auth_helper.php';
requireAuth();

$user = $_SESSION['user'];

if (isset($_POST['logout'])) {
    require_once '../controllers/AuthController.php';
    $authController = new AuthController();
    $authController->logout();
}

include 'partials/header.php';
?>

<nav class="navbar bg-body-tertiary">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <a class="navbar-brand" href="#">
            <img src="../asset/animation_logo_NFAI-removebg-preview.png" alt="Logo"  height="48"
                class="d-inline-block">
            Nk Film Animasion Indonesia™
        </a>

        <!-- <form method="POST">
            <button type="submit" name="logout" class="btn btn-danger">logout</button>
        </form> -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  logout
</button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">you sure you want Logout?!!</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">logout</button>
      </div>
    </div>
  </div>
</div>
    </div>
</nav>

<main class="row m-0">
    <div id="carouselExampleAutoplaying" class="carousel slide col-12 col-lg-8 p-0" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../asset/WhatsApp Image 2024-01-31 at 13.57.04.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../asset/WhatsApp Image 2024-01-31 at 13.57.20.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../asset/WhatsApp Image 2024-01-31 at 13.57.30.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../asset/WhatsApp Image 2024-01-31 at 13.57.41.jpeg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="row row-cols-2 row-cols-lg-1 col-12 col-lg-4 p-0 m-0">
        <div class="col bg-primary d-flex flex-column align-items-start jutify-content-end p-4">
            <h2>Welcome <?= $user['name'] ?></h2>
            <button class="btn btn-navy fs-5">Go to Profile</button>
        </div>
        <div class="col bg-danger p-4 d-flex flex-column align-items-center justify-content-end">
            <h2>Welcome <?= $user['name'] ?></h2>
            <button class="btn btn-navy fs-5">Explore</button>
        </div>
    </div>
</main>


<?php include 'partials/footer.php'; ?>