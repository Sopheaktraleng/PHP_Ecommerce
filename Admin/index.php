<?php
    $page = "dashboard.php";
    if(isset($_GET['p'])){
        $p = $_GET['p'];
        switch($p){
            case "slideshow":
                $page = "slideshow.php";
                break;
            case "product":
                $page = "product.php";
                break;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<?php include "includes/head.php"?>
<body>
    <div class="container-fluid position-relative d-flex p-0">
        <?php include "includes/sidebar.php"?>
        <?php include "includes/nav.php"?>
        <?php include $page ?>
        <?php include "includes/footer.php"?>
        </div>
        <!-- Content End -->
        <!-- Back to Top -->
        <!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div> -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>