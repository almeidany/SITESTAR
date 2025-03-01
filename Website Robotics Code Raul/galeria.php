<!DOCTYPE html>
<html lang="pt-PT">

<?php
include 'layouts/Gallery/head.php'
?>

<body>
    <?php
    include 'layouts/UniversalLayouts/nav.php'
    ?>

    <!-- Hero Start -->
    <div class="container-fluid pt-5 bg-primary hero-header mb-5">
        <div class="container pt-5">
            <div class="row justify-content-center" id="yearButtons">
                <!-- Year buttons will be injected here by JavaScript -->
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Main Content Start -->
    <div class="container my-5" id="mainContent">
        <!-- Subtitles and images will be injected here by JavaScript -->
    </div>
    <!-- Main Content End -->

    <!-- Album Modal Start -->
    <div id="albumModal" class="modal fade" tabindex="-1" aria-labelledby="albumModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="albumModalLabel">Album</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" id="carouselInner">
                            <!-- Carousel items will be injected here by JavaScript -->
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Album Modal End -->

    <!-- Footer Start -->
    <!-- Footer Start -->
    <?php
    include 'layouts/UniversalLayouts/footer.php'
    ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>

    <?php
    include 'layouts/Gallery/scripts.php'
    ?>
</body>

</html>