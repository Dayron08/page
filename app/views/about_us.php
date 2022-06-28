<?php require_once("../Includes/header.php");?>
<section id="page-hero" class="section section__inverse justify-content-center pt-6 pb-4 pb-lg-5 pb-xl-6">
    <div class="bg bg-img position-absolute" data-bg-img=".img"></div>
    <!-- /.bg bg-img position-absolute -->

    <div class="container-xl position-relative section-content text-center py-4">
        <h2 class="display-5 text-white mt-3 mt-lg-4">Sobre Nosotros</h2>

        <p class="lead mb-4 mb-lg-5">Discover Your Dream House</p>
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

<section id="listing-1" class="section py-5 py-lg-6">
    <div class="bg bg-img position-absolute" data-bg-img=".img"></div>
    <!-- /.bg bg-img position-absolute -->

    <div class="container-xl position-relative">
        <header class="section-header mb-5 visually-hidden">
            <h2 class="fs-3 section-title mb-3">Featured Properties</h2>

            <p class="leadmb-0 o-75">Best properties handpicked professionally by our expert</p>
        </header>
        <!-- /.section-header mb-5 visually-hidden -->

        <div class="section-filter mb-4 mb-lg-5">
            <div class="row g-3">
                <div class="col-12 col-md section-content text-center text-md-start">
                    <p class="mb-0"><strong>80</strong>&nbsp;Results&nbsp;Found</p>
                </div>
                <!-- /.col-12 col-md -->

                <div class="col col-md-auto text-md-end ms-md-auto">
                    <div class="btn-group btn-select-dropdown w-100">
                        <span class="input-group-text fs-sm rounded-0 rounded-start py-0">Sort by</span>

                        <button type="button"
                            class="btn btn-sm btn-outline-primary btn-default dropdown-toggle d-flex align-items-center justify-content-between shadow-none fw-bold"
                            data-bs-toggle="dropdown" aria-expanded="false">Newest</button>

                        <ul class="dropdown-menu dropdown-menu-end w-100">
                            <li><a class="dropdown-item fs-sm active" href="#" data-value="1">Newest</a></li>

                            <li><a class="dropdown-item fs-sm" href="#" data-value="2">By Title</a></li>
                        </ul>
                        <!-- /.dropdown-menu w-100 -->

                        <select class="d-none">
                            <option value="0" selected>All Type</option>

                            <option value="1">Newest</option>

                            <option value="2">By Title</option>
                        </select>
                        <!-- /.d-none -->
                    </div>
                    <!-- /.btn-group w-100 btn-select-dropdown -->
                </div>
                <!-- /.col col-md-auto text-md-end ms-md-auto -->
                <div class="col col-md-auto text-md-end ms-md-auto">
                    <div class="btn-group btn-select-dropdown w-100">
                        <span class="input-group-text fs-sm rounded-0 rounded-start py-0">Result per page</span>

                        <button type="button"
                            class="btn btn-sm btn-outline-primary btn-default dropdown-toggle d-flex align-items-center justify-content-between shadow-none fw-bold"
                            data-bs-toggle="dropdown" aria-expanded="false">10</button>

                        <ul class="dropdown-menu dropdown-menu-end w-100">
                            <li><a class="dropdown-item fs-sm active" href="#" data-value="1">10</a></li>

                            <li><a class="dropdown-item fs-sm" href="#" data-value="2">30</a></li>

                            <li><a class="dropdown-item fs-sm" href="#" data-value="3">50</a></li>

                            <li><a class="dropdown-item fs-sm" href="#" data-value="4">80</a></li>

                            <li><a class="dropdown-item fs-sm" href="#" data-value="5">100</a></li>
                        </ul>
                        <!-- /.dropdown-menu w-100 -->

                        <select class="d-none">
                            <option value="0" selected>10</option>

                            <option value="1">10</option>

                            <option value="2">30</option>

                            <option value="3">50</option>

                            <option value="4">80</option>

                            <option value="5">100</option>
                        </select>
                        <!-- /.d-none -->
                    </div>
                    <!-- /.btn-group w-100 btn-select-dropdown -->
                </div>
                <!-- /.col col-md-auto text-md-end ms-md-auto -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.section-filter -->

        <div class="row properties g-4 mb-5">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex align-items-stretch">
                <div class="card shadow-sm shadow-hover trans-base w-100 o-hover-all h-100">
                    <div class="card-img-top overflow-hidden position-relative">
                        <img src="http://assets.coolorize.com/homes/5-3/md/aubrey-odom-ITzfgP77DTg-unsplash.jpg"
                            class="w-100" alt="Image" />

                        <div class="overlay position-absolute bg-dark o-25"></div>

                        <div class="overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column">
                            <div class="overlay-top d-flex flex-row">
                                <a href="http://html.coolorize.com/discoverize/default/listing-map-top-1.html"
                                    class="position-relative zi-20 badge text-dark bg-white o-50 o-100-hover trans-base">Apartments</a>
                            </div>
                            <!-- /.overlay-top d-flex flex-row -->
                        </div>
                        <!-- /.overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column -->
                    </div>
                    <!-- /.card-img-top overflow-hidden position-relative -->

                    <div class="card-body pt-2">
                        <p class="card-text mb-1 d-flex flex-row align-items-center w-100">
                            <a href="http://html.coolorize.com/discoverize/default/listing-detail-2.html"
                                class="stretched-link fs-5 fw-bold trans-base">$255,000</a>
                        </p>

                        <p class="card-text text-secondary mb-1 text-truncate">70 Sagamoga Hill Road, San Jose, NY
                            110000</p>

                        <p class="row gx-0 gx-md-1 text-secondary mb-0 text-truncate d-block">
                            <span class="col-auto">Beds: <strong>2</strong></span>
                            <span class="col-auto px-0 o-50">&bullet;</span>
                            <span class="col-auto">Baths: <strong>2</strong></span>
                            <span class="col-auto px-0 o-50">&bullet; </span>
                            <span class="col-auto">Sqft: <strong>5434</strong></span>
                        </p>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col-12 col-md-3 d-flex align-items-stretch -->

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex align-items-stretch">
                <div class="card shadow-sm shadow-hover trans-base w-100 o-hover-all h-100">
                    <div class="card-img-top overflow-hidden position-relative">
                        <img src="http://assets.coolorize.com/homes/5-3/md/chi-m-R1uiDu8vBh0-unsplash.jpg" class="w-100"
                            alt="Image" />

                        <div class="overlay position-absolute bg-dark o-25"></div>

                        <div class="overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column">
                            <div class="overlay-top d-flex flex-row">
                                <a href="http://html.coolorize.com/discoverize/default/listing-map-top-1.html"
                                    class="position-relative zi-20 badge text-dark bg-white o-50 o-100-hover trans-base">Multi-Family
                                    Home</a>
                            </div>
                            <!-- /.overlay-top d-flex flex-row -->
                        </div>
                        <!-- /.overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column -->
                    </div>
                    <!-- /.card-img-top overflow-hidden position-relative -->

                    <div class="card-body pt-2">
                        <p class="card-text mb-1 d-flex flex-row align-items-center w-100">
                            <a href="http://html.coolorize.com/discoverize/default/listing-detail-2.html"
                                class="stretched-link fs-5 fw-bold trans-base">$225,000</a>
                        </p>

                        <p class="card-text text-secondary mb-1 text-truncate">878 Auburn City, Port Washington, CA
                            110000</p>

                        <p class="row gx-0 gx-md-1 text-secondary mb-0 text-truncate d-block">
                            <span class="col-auto">Beds: <strong>2</strong></span>
                            <span class="col-auto px-0 o-50">&bullet;</span>
                            <span class="col-auto">Baths: <strong>2</strong></span>
                            <span class="col-auto px-0 o-50">&bullet; </span>
                            <span class="col-auto">Sqft: <strong>5434</strong></span>
                        </p>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col-12 col-md-3 d-flex align-items-stretch -->

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex align-items-stretch">
                <div class="card shadow-sm shadow-hover trans-base w-100 o-hover-all h-100">
                    <div class="card-img-top overflow-hidden position-relative">
                        <img src="http://assets.coolorize.com/homes/5-3/md/florian-schmidinger-b_79nOqf95I-unsplash.jpg"
                            class="w-100" alt="Image" />

                        <div class="overlay position-absolute bg-dark o-25"></div>

                        <div class="overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column">
                            <div class="overlay-top d-flex flex-row">
                                <a href="http://html.coolorize.com/discoverize/default/listing-map-top-1.html"
                                    class="position-relative zi-20 badge text-dark bg-white o-50 o-100-hover trans-base">Single-Family
                                    Home</a>
                            </div>
                            <!-- /.overlay-top d-flex flex-row -->
                        </div>
                        <!-- /.overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column -->
                    </div>
                    <!-- /.card-img-top overflow-hidden position-relative -->

                    <div class="card-body pt-2">
                        <p class="card-text mb-1 d-flex flex-row align-items-center w-100">
                            <a href="http://html.coolorize.com/discoverize/default/listing-detail-2.html"
                                class="stretched-link fs-5 fw-bold trans-base">$275,000</a>
                        </p>

                        <p class="card-text text-secondary mb-1 text-truncate">456 Park Avenue, 256A, Westlake, NY
                            110000</p>

                        <p class="row gx-0 gx-md-1 text-secondary mb-0 text-truncate d-block">
                            <span class="col-auto">Beds: <strong>2</strong></span>
                            <span class="col-auto px-0 o-50">&bullet;</span>
                            <span class="col-auto">Baths: <strong>2</strong></span>
                            <span class="col-auto px-0 o-50">&bullet; </span>
                            <span class="col-auto">Sqft: <strong>5434</strong></span>
                        </p>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col-12 col-md-3 d-flex align-items-stretch -->

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex align-items-stretch">
                <div class="card shadow-sm shadow-hover trans-base w-100 o-hover-all h-100">
                    <div class="card-img-top overflow-hidden position-relative">
                        <img src="http://assets.coolorize.com/homes/5-3/md/gabriel-WVT8Eck_3AQ-unsplash.jpg"
                            class="w-100" alt="Image" />

                        <div class="overlay position-absolute bg-dark o-25"></div>

                        <div class="overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column">
                            <div class="overlay-top d-flex flex-row">
                                <a href="http://html.coolorize.com/discoverize/default/listing-map-top-1.html"
                                    class="position-relative zi-20 badge text-dark bg-white o-50 o-100-hover trans-base">Bungalow</a>
                            </div>
                            <!-- /.overlay-top d-flex flex-row -->
                        </div>
                        <!-- /.overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column -->
                    </div>
                    <!-- /.card-img-top overflow-hidden position-relative -->

                    <div class="card-body pt-2">
                        <p class="card-text mb-1 d-flex flex-row align-items-center w-100">
                            <a href="http://html.coolorize.com/discoverize/default/listing-detail-2.html"
                                class="stretched-link fs-5 fw-bold trans-base">$254,000</a>
                        </p>

                        <p class="card-text text-secondary mb-1 text-truncate">283 Travus High, San Jose, TX 110000</p>

                        <p class="row gx-0 gx-md-1 text-secondary mb-0 text-truncate d-block">
                            <span class="col-auto">Beds: <strong>2</strong></span>
                            <span class="col-auto px-0 o-50">&bullet;</span>
                            <span class="col-auto">Baths: <strong>2</strong></span>
                            <span class="col-auto px-0 o-50">&bullet; </span>
                            <span class="col-auto">Sqft: <strong>5434</strong></span>
                        </p>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col-12 col-md-3 d-flex align-items-stretch -->

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex align-items-stretch">
                <div class="card shadow-sm shadow-hover trans-base w-100 o-hover-all h-100">
                    <div class="card-img-top overflow-hidden position-relative">
                        <img src="http://assets.coolorize.com/homes/5-3/md/jacques-bopp-wtzOhxEX4WU-unsplash.jpg"
                            class="w-100" alt="Image" />

                        <div class="overlay position-absolute bg-dark o-25"></div>

                        <div class="overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column">
                            <div class="overlay-top d-flex flex-row">
                                <a href="http://html.coolorize.com/discoverize/default/listing-map-top-1.html"
                                    class="position-relative zi-20 badge text-dark bg-white o-50 o-100-hover trans-base">Bungalow</a>
                            </div>
                            <!-- /.overlay-top d-flex flex-row -->
                        </div>
                        <!-- /.overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column -->
                    </div>
                    <!-- /.card-img-top overflow-hidden position-relative -->

                    <div class="card-body pt-2">
                        <p class="card-text mb-1 d-flex flex-row align-items-center w-100">
                            <a href="http://html.coolorize.com/discoverize/default/listing-detail-2.html"
                                class="stretched-link fs-5 fw-bold trans-base">$650,000</a>
                        </p>

                        <p class="card-text text-secondary mb-1 text-truncate">30 Beach Road, Port Washington, NY 110000
                        </p>

                        <p class="row gx-0 gx-md-1 text-secondary mb-0 text-truncate d-block">
                            <span class="col-auto">Beds: <strong>2</strong></span>
                            <span class="col-auto px-0 o-50">&bullet;</span>
                            <span class="col-auto">Baths: <strong>2</strong></span>
                            <span class="col-auto px-0 o-50">&bullet; </span>
                            <span class="col-auto">Sqft: <strong>5434</strong></span>
                        </p>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col-12 col-md-3 d-flex align-items-stretch -->

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex align-items-stretch">
                <div class="card shadow-sm shadow-hover trans-base w-100 o-hover-all h-100">
                    <div class="card-img-top overflow-hidden position-relative">
                        <img src="http://assets.coolorize.com/homes/5-3/md/kevin-angelso-Vfq3hU_LyKc-unsplash.jpg"
                            class="w-100" alt="Image" />

                        <div class="overlay position-absolute bg-dark o-25"></div>

                        <div class="overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column">
                            <div class="overlay-top d-flex flex-row">
                                <a href="http://html.coolorize.com/discoverize/default/listing-map-top-1.html"
                                    class="position-relative zi-20 badge text-dark bg-white o-50 o-100-hover trans-base">Single-Family
                                    Home</a>
                            </div>
                            <!-- /.overlay-top d-flex flex-row -->
                        </div>
                        <!-- /.overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column -->
                    </div>
                    <!-- /.card-img-top overflow-hidden position-relative -->

                    <div class="card-body pt-2">
                        <p class="card-text mb-1 d-flex flex-row align-items-center w-100">
                            <a href="http://html.coolorize.com/discoverize/default/listing-detail-2.html"
                                class="stretched-link fs-5 fw-bold trans-base">$150,000</a>
                        </p>

                        <p class="card-text text-secondary mb-1 text-truncate">70 Lambok Hill Road, Port Washington, NY
                            110000</p>

                        <p class="row gx-0 gx-md-1 text-secondary mb-0 text-truncate d-block">
                            <span class="col-auto">Beds: <strong>2</strong></span>
                            <span class="col-auto px-0 o-50">&bullet;</span>
                            <span class="col-auto">Baths: <strong>2</strong></span>
                            <span class="col-auto px-0 o-50">&bullet; </span>
                            <span class="col-auto">Sqft: <strong>5434</strong></span>
                        </p>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col-12 col-md-3 d-flex align-items-stretch -->

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex align-items-stretch">
                <div class="card shadow-sm shadow-hover trans-base w-100 o-hover-all h-100">
                    <div class="card-img-top overflow-hidden position-relative">
                        <img src="http://assets.coolorize.com/homes/5-3/md/pexels-binyamin-mellish-186077.jpg"
                            class="w-100" alt="Image" />

                        <div class="overlay position-absolute bg-dark o-25"></div>

                        <div class="overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column">
                            <div class="overlay-top d-flex flex-row">
                                <a href="http://html.coolorize.com/discoverize/default/listing-map-top-1.html"
                                    class="position-relative zi-20 badge text-dark bg-white o-50 o-100-hover trans-base">Multi-Family
                                    Home</a>
                            </div>
                            <!-- /.overlay-top d-flex flex-row -->
                        </div>
                        <!-- /.overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column -->
                    </div>
                    <!-- /.card-img-top overflow-hidden position-relative -->

                    <div class="card-body pt-2">
                        <p class="card-text mb-1 d-flex flex-row align-items-center w-100">
                            <a href="http://html.coolorize.com/discoverize/default/listing-detail-2.html"
                                class="stretched-link fs-5 fw-bold trans-base">$386,000</a>
                        </p>

                        <p class="card-text text-secondary mb-1 text-truncate">70 Mogajaya Hill Road, Port Washington,
                            NY 110000</p>

                        <p class="row gx-0 gx-md-1 text-secondary mb-0 text-truncate d-block">
                            <span class="col-auto">Beds: <strong>2</strong></span>
                            <span class="col-auto px-0 o-50">&bullet;</span>
                            <span class="col-auto">Baths: <strong>2</strong></span>
                            <span class="col-auto px-0 o-50">&bullet; </span>
                            <span class="col-auto">Sqft: <strong>5434</strong></span>
                        </p>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col-12 col-md-3 d-flex align-items-stretch -->

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex align-items-stretch">
                <div class="card shadow-sm shadow-hover trans-base w-100 o-hover-all h-100">
                    <div class="card-img-top overflow-hidden position-relative">
                        <img src="http://assets.coolorize.com/homes/5-3/md/pexels-trygve-finkelsen-2893177.jpg"
                            class="w-100" alt="Image" />

                        <div class="overlay position-absolute bg-dark o-25"></div>

                        <div class="overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column">
                            <div class="overlay-top d-flex flex-row">
                                <a href="http://html.coolorize.com/discoverize/default/listing-map-top-1.html"
                                    class="position-relative zi-20 badge text-dark bg-white o-50 o-100-hover trans-base">Multi-Family
                                    Home</a>
                            </div>
                            <!-- /.overlay-top d-flex flex-row -->
                        </div>
                        <!-- /.overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column -->
                    </div>
                    <!-- /.card-img-top overflow-hidden position-relative -->

                    <div class="card-body pt-2">
                        <p class="card-text mb-1 d-flex flex-row align-items-center w-100">
                            <a href="http://html.coolorize.com/discoverize/default/listing-detail-2.html"
                                class="stretched-link fs-5 fw-bold trans-base">$390,000</a>
                        </p>

                        <p class="card-text text-secondary mb-1 text-truncate">40 Sunburn Hill Road, Port Washington, NY
                            110000</p>

                        <p class="row gx-0 gx-md-1 text-secondary mb-0 text-truncate d-block">
                            <span class="col-auto">Beds: <strong>2</strong></span>
                            <span class="col-auto px-0 o-50">&bullet;</span>
                            <span class="col-auto">Baths: <strong>2</strong></span>
                            <span class="col-auto px-0 o-50">&bullet; </span>
                            <span class="col-auto">Sqft: <strong>5434</strong></span>
                        </p>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col-12 col-md-3 d-flex align-items-stretch -->

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex align-items-stretch">
                <div class="card shadow-sm shadow-hover trans-base w-100 o-hover-all h-100">
                    <div class="card-img-top overflow-hidden position-relative">
                        <img src="http://assets.coolorize.com/homes/5-3/md/phil-hearing-IYfp2Ixe9nM-unsplash.jpg"
                            class="w-100" alt="Image" />

                        <div class="overlay position-absolute bg-dark o-25"></div>

                        <div class="overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column">
                            <div class="overlay-top d-flex flex-row">
                                <a href="http://html.coolorize.com/discoverize/default/listing-map-top-1.html"
                                    class="position-relative zi-20 badge text-dark bg-white o-50 o-100-hover trans-base">Multi-Family
                                    Home</a>
                            </div>
                            <!-- /.overlay-top d-flex flex-row -->
                        </div>
                        <!-- /.overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column -->
                    </div>
                    <!-- /.card-img-top overflow-hidden position-relative -->

                    <div class="card-body pt-2">
                        <p class="card-text mb-1 d-flex flex-row align-items-center w-100">
                            <a href="http://html.coolorize.com/discoverize/default/listing-detail-2.html"
                                class="stretched-link fs-5 fw-bold trans-base">$385,000</a>
                        </p>

                        <p class="card-text text-secondary mb-1 text-truncate">50 Ground Hound Road, Port Washington, NY
                            110000</p>

                        <p class="row gx-0 gx-md-1 text-secondary mb-0 text-truncate d-block">
                            <span class="col-auto">Beds: <strong>2</strong></span>
                            <span class="col-auto px-0 o-50">&bullet;</span>
                            <span class="col-auto">Baths: <strong>2</strong></span>
                            <span class="col-auto px-0 o-50">&bullet; </span>
                            <span class="col-auto">Sqft: <strong>5434</strong></span>
                        </p>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col-12 col-md-3 d-flex align-items-stretch -->

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex align-items-stretch">
                <div class="card shadow-sm shadow-hover trans-base w-100 o-hover-all h-100">
                    <div class="card-img-top overflow-hidden position-relative">
                        <img src="http://assets.coolorize.com/homes/5-3/md/pexels-binyamin-mellish-1396132.jpg"
                            class="w-100" alt="Image" />

                        <div class="overlay position-absolute bg-dark o-25"></div>

                        <div class="overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column">
                            <div class="overlay-top d-flex flex-row">
                                <a href="http://html.coolorize.com/discoverize/default/listing-map-top-1.html"
                                    class="position-relative zi-20 badge text-dark bg-white o-50 o-100-hover trans-base">Single-Family
                                    Home</a>
                            </div>
                            <!-- /.overlay-top d-flex flex-row -->
                        </div>
                        <!-- /.overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column -->
                    </div>
                    <!-- /.card-img-top overflow-hidden position-relative -->

                    <div class="card-body pt-2">
                        <p class="card-text mb-1 d-flex flex-row align-items-center w-100">
                            <a href="http://html.coolorize.com/discoverize/default/listing-detail-2.html"
                                class="stretched-link fs-5 fw-bold trans-base">$275,000</a>
                        </p>

                        <p class="card-text text-secondary mb-1 text-truncate">456 Park Avenue, 256A, Westlake, NY
                            110000</p>

                        <p class="row gx-0 gx-md-1 text-secondary mb-0 text-truncate d-block">
                            <span class="col-auto">Beds: <strong>2</strong></span>
                            <span class="col-auto px-0 o-50">&bullet;</span>
                            <span class="col-auto">Baths: <strong>2</strong></span>
                            <span class="col-auto px-0 o-50">&bullet; </span>
                            <span class="col-auto">Sqft: <strong>5434</strong></span>
                        </p>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col-12 col-md-3 d-flex align-items-stretch -->

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex align-items-stretch">
                <div class="card shadow-sm shadow-hover trans-base w-100 o-hover-all h-100">
                    <div class="card-img-top overflow-hidden position-relative">
                        <img src="http://assets.coolorize.com/homes/5-3/md/pexels-pixabay-221540.jpg" class="w-100"
                            alt="Image" />

                        <div class="overlay position-absolute bg-dark o-25"></div>

                        <div class="overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column">
                            <div class="overlay-top d-flex flex-row">
                                <a href="http://html.coolorize.com/discoverize/default/listing-map-top-1.html"
                                    class="position-relative zi-20 badge text-dark bg-white o-50 o-100-hover trans-base">Bungalow</a>
                            </div>
                            <!-- /.overlay-top d-flex flex-row -->
                        </div>
                        <!-- /.overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column -->
                    </div>
                    <!-- /.card-img-top overflow-hidden position-relative -->

                    <div class="card-body pt-2">
                        <p class="card-text mb-1 d-flex flex-row align-items-center w-100">
                            <a href="http://html.coolorize.com/discoverize/default/listing-detail-2.html"
                                class="stretched-link fs-5 fw-bold trans-base">$254,000</a>
                        </p>

                        <p class="card-text text-secondary mb-1 text-truncate">283 Travus High, San Jose, TX 110000</p>

                        <p class="row gx-0 gx-md-1 text-secondary mb-0 text-truncate d-block">
                            <span class="col-auto">Beds: <strong>2</strong></span>
                            <span class="col-auto px-0 o-50">&bullet;</span>
                            <span class="col-auto">Baths: <strong>2</strong></span>
                            <span class="col-auto px-0 o-50">&bullet; </span>
                            <span class="col-auto">Sqft: <strong>5434</strong></span>
                        </p>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col-12 col-md-3 d-flex align-items-stretch -->

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex align-items-stretch">
                <div class="card shadow-sm shadow-hover trans-base w-100 o-hover-all h-100">
                    <div class="card-img-top overflow-hidden position-relative">
                        <img src="http://assets.coolorize.com/homes/5-3/md/jacques-bopp-Hh18POSx5qk-unsplash.jpg"
                            class="w-100" alt="Image" />

                        <div class="overlay position-absolute bg-dark o-25"></div>

                        <div class="overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column">
                            <div class="overlay-top d-flex flex-row">
                                <a href="http://html.coolorize.com/discoverize/default/listing-map-top-1.html"
                                    class="position-relative zi-20 badge text-dark bg-white o-50 o-100-hover trans-base">Condominiums</a>
                            </div>
                            <!-- /.overlay-top d-flex flex-row -->
                        </div>
                        <!-- /.overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column -->
                    </div>
                    <!-- /.card-img-top overflow-hidden position-relative -->

                    <div class="card-body pt-2">
                        <p class="card-text mb-1 d-flex flex-row align-items-center w-100">
                            <a href="http://html.coolorize.com/discoverize/default/listing-detail-2.html"
                                class="stretched-link fs-5 fw-bold trans-base">$350,000</a>
                        </p>

                        <p class="card-text text-secondary mb-1 text-truncate">123 Brick Kiln Road, Brigeshington, CA
                            110000</p>

                        <p class="row gx-0 gx-md-1 text-secondary mb-0 text-truncate d-block">
                            <span class="col-auto">Beds: <strong>2</strong></span>
                            <span class="col-auto px-0 o-50">&bullet;</span>
                            <span class="col-auto">Baths: <strong>2</strong></span>
                            <span class="col-auto px-0 o-50">&bullet; </span>
                            <span class="col-auto">Sqft: <strong>5434</strong></span>
                        </p>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col-12 col-md-3 d-flex align-items-stretch -->
        </div>
        <!-- /.row properties -->

        <footer class="section-footer d-flex justify-content-center">
            <div class="btn-toolbar mb-0 me-3" role="toolbar">
                <div class="btn-group me-2" role="group">
                    <a href="#" class="btn btn-outline-primary btn-default btn-sm px-3">Previous</a>
                    <a href="#" class="btn btn-outline-primary btn-default btn-sm active px-3">1</a>
                    <a href="#" class="btn btn-outline-primary btn-default btn-sm px-3">2</a>
                    <a href="#" class="btn btn-outline-primary btn-default btn-sm px-3">3</a>
                    <a href="#" class="btn btn-outline-primary btn-default btn-sm px-3">4</a>
                    <a href="#" class="btn btn-outline-primary btn-default btn-sm px-3">5</a>
                    <a href="#" class="btn btn-outline-primary btn-default btn-sm px-3">Next</a>
                </div>
            </div>
        </footer>
        <!-- /.section-footer d-flex justify-content-center -->
    </div>
    <!-- /.container-xl -->
</section>
<!-- #listing-1.section py-5 py-lg-6 -->
<?php require_once("../Includes/footer.php");?>