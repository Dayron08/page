<?php require_once("../Includes/header.php");?>
<section id="page-hero" class="section section__inverse justify-content-center pt-6 pb-4 pb-lg-5 pb-xl-6">
    <div class="bg bg-img position-absolute" data-bg-img=".img"></div>
    <!-- /.bg bg-img position-absolute -->

    <div class="container-xl position-relative section-content text-center py-4">
        <h2 class="display-5 text-white mt-3 mt-lg-4">Sobre Nosotros</h2>

        <p class="lead mb-4 mb-lg-5">¡Tenemos servicio todos los domingos a las 10:30 AM!</p>
    </div>
    <!-- /.container-xl position-relative -->
</section>
<!-- #page-hero.section section__inverse justify-content-center pt-6 pb-4 pb-lg-5 pb-xl-6 -->

<section id="map" class="section mt-n4 mt-lg-n5 mt-xl-n6 vh-75">
    <div class="bg bg-img position-absolute" data-bg-img=".img"></div>
    <!-- /.bg bg-img position-absolute -->

    <div class="container-xl position-relative px-0 zi-20 h-100 overflow-hidden rounded">
        <header class="section-header mb-5 visually-hidden">
            <h2 class="fs-3 section-title mb-3">Discover Properties</h2>
        </header>
        <!-- /.section-header mb-5 visually-hidden -->


        <div class="mapouter">
            <div class="gmap_canvas"><iframe width="2000" height="900" id="gmap_canvas"
                    src="https://maps.google.com/maps?q=V5JM+G7Q,%20Provincia%20de%20Cartago,%20Cervantes&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>

            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<!-- #map.section mt-n4 mt-lg-n5 mt-xl-n6 vh-75 -->


<!-- #listing-1.section py-5 py-lg-6 -->
<?php require_once("../Includes/footer.php");?>