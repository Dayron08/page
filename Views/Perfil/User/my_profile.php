<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/538d9daa14.js" crossorigin="anonymous"></script>

    <!-- Google-Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;700&family=Rubik:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet" />

    <!-- Flaticons - used for property category icons -->
    <link rel="stylesheet" type="text/css" href="../assets/fonts/flaticon/flaticon.css" />

    <!-- Photoswipe CSS - used only if your using photoswupe -->
    <link rel="stylesheet" href="../assets/vendor/photoswipe/photoswipe.css" />
    <link rel="stylesheet" href="../assets/vendor/photoswipe/default-skin/default-skin.css" />

    <!-- Leaflet-CSS - required for map -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />

    <!-- Swiper-CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7.0.6/swiper-bundle.min.css" />

    <!-- Discoverize CSS bundled with Bootstrap-CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/discoverize-default.css" />

    <title>Listing Detail 5</title>
</head>

<body>
    <header class="header is-sticky-inverse" data-spy="scroll" data-scroll="sticky" data-sticky-hide="true"
        data-switch-class="shadow-none|shadow">
        <nav class="navbar navbar-light navbar-default">
            <div class="container-xl justify-content-start">
                <a class="navbar-brand d-flex position-relative mb-1" href="http://html.coolorize.com/discoverize/"><img
                        src="../assets/img/logo-light.png" class="navbar-brand-img-dark" alt="Discoverize" /><img
                        src="../assets/img/logo-dark.png" class="navbar-brand-img-light" alt="Discoverize" /></a>

                <div class="position-absolute start-0 position-md-relative d-flex flex-grow-1 align-items-center w-100 w-md-auto px-4 px-md-0"
                    id="navbarSearch">
                    <div id="searchBox"
                        class="searchbox searchbox-navbar d-none d-md-block position-relative position-md-absolute w-100 w-md-auto mt-2 mt-md-0">
                        <a class="form-options-backdrop modal-backdrop collapsed" data-bs-toggle="collapse"
                            href="#FormOptionsCollapse" role="button" aria-expanded="false"
                            aria-controls="FormOptionsCollapse"></a>

                        <form action="http://html.coolorize.com/discoverize/default/listing-search-top-1.html"
                            class="searchbox-form position-relative bg-transparent false">
                            <div class="bg position-absolute bg-white rounded-top form-is-focus"></div>

                            <div class="input-group position-relative px-3">
                                <label for="searchboxKeyword"
                                    class="input-group-text bg-transparent px-0 border-0 text-secondary"><i
                                        class="fas fa-map-marker-alt"></i></label>
                                <input id="searchboxKeyword" name="searchboxKeyword" type="text"
                                    class="form-control pe-5 border-0 shadow-none position-relative bg-transparent"
                                    placeholder="Address, Country, City or Postal Code"
                                    data-show-bs-collapse-id="#FormOptionsCollapse" />
                            </div>
                            <!-- /.input-group -->

                            <div
                                class="form-options form-is-focus position-absolute top-100 w-100 bg-white rounded-bottom pb-1false">
                                <div class="collapse form-options-collapse position-relative border-top"
                                    id="FormOptionsCollapse">
                                    <div class="row my-3 gx-3 px-3">
                                        <div class="col-12 col-sm-6 col-md col-lg mb-3 mb-md-0 d-flex flex-column">
                                            <div class="btn-group" role="group">
                                                <input type="radio" class="btn-check" name="searchCategory"
                                                    id="searchCategory_sell" checked />
                                                <label class="btn btn-outline-primary btn-default shadow-none fw-bold"
                                                    for="searchCategory_sell"><i
                                                        class="fas fa-check"></i>For&nbsp;Sale</label>
                                                <input type="radio" class="btn-check" name="searchCategory"
                                                    id="searchCategory_rent" />
                                                <label class="btn btn-outline-primary btn-default shadow-none fw-bold"
                                                    for="searchCategory_rent"><i
                                                        class="fas fa-check"></i>For&nbsp;Rent</label>
                                            </div>
                                            <!-- /.btn-group -->
                                        </div>
                                        <!-- /.col-12 -->

                                        <div class="col-12 col-sm-6 col-md col-lg mb-3 mb-md-0 d-flex flex-column">
                                            <div class="btn-group btn-select-dropdown">
                                                <button type="button"
                                                    class="btn btn-outline-primary btn-default dropdown-toggle d-flex align-items-center justify-content-between shadow-none fw-bold active"
                                                    data-bs-toggle="dropdown" aria-expanded="false">All Type</button>

                                                <ul class="dropdown-menu w-100">
                                                    <li><a class="dropdown-item small" href="#" data-value="1">All
                                                            Type</a></li>

                                                    <li><a class="dropdown-item small" href="#"
                                                            data-value="2">Apartments</a></li>

                                                    <li><a class="dropdown-item small" href="#"
                                                            data-value="3">Bungalow</a></li>

                                                    <li><a class="dropdown-item small" href="#"
                                                            data-value="4">Condominiums</a></li>

                                                    <li><a class="dropdown-item small" href="#" data-value="5">Co-op
                                                            Properties</a></li>

                                                    <li><a class="dropdown-item small" href="#" data-value="6">Farm and
                                                            Ranch</a></li>

                                                    <li><a class="dropdown-item small" href="#" data-value="7">Land</a>
                                                    </li>

                                                    <li><a class="dropdown-item small" href="#" data-value="8">Multi
                                                            Family Home</a></li>

                                                    <li><a class="dropdown-item small" href="#" data-value="9">Single
                                                            Family Home</a></li>

                                                    <li><a class="dropdown-item small" href="#"
                                                            data-value="10">Townhome</a></li>
                                                </ul>
                                                <!-- /.dropdown-menu w-100 -->

                                                <select id="searchType" class="d-none">
                                                    <option value="0" selected>All Type</option>

                                                    <option value="1">All Type</option>

                                                    <option value="2">Apartments</option>

                                                    <option value="3">Bungalow</option>

                                                    <option value="4">Condominiums</option>

                                                    <option value="5">Co-op Properties</option>

                                                    <option value="6">Farm and Ranch</option>

                                                    <option value="7">Land</option>

                                                    <option value="8">Multi Family Home</option>

                                                    <option value="9">Single Family Home</option>

                                                    <option value="10">Townhome</option>
                                                </select>
                                                <!-- /.d-none -->
                                            </div>
                                            <!-- /.btn-group btn-select-dropdown -->
                                        </div>
                                        <!-- /.col-12 -->

                                        <div class="col col-md col-lg">
                                            <div class="row">
                                                <div class="col d-flex flex-column pe-0">
                                                    <button class="btn btn-primary d-block fw-bold" type="submit"><i
                                                            class="fas fa-search me-2"></i>Search</button>
                                                </div>
                                                <div class="col-auto">
                                                    <a class="btn btn-outline-primary btn-default collapsed shadow-none"
                                                        data-bs-toggle="collapse" href="#SearchboxFilterCollapse"
                                                        role="button" aria-expanded="false"
                                                        aria-controls="SearchboxFilterCollapse"><i
                                                            class="d-inline-block fas fa-sliders-h"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.col col-md col-lg -->
                                    </div>

                                    <div class="collapse searchbox-filter-collapse border-top px-3 pt-3"
                                        id="SearchboxFilterCollapse">
                                        <div class="row g-4 mb-4">
                                            <div class="col-12 col-md-8">
                                                <label class="form-label fw-bold fs-sm my-1">Price</label>
                                                <div class="row g-3 position-relative">
                                                    <div class="col">
                                                        <div class="btn-group btn-range w-100 dropdown">
                                                            <button type="button"
                                                                class="btn btn-outline-primary btn-default dropdown-toggle d-flex align-items-center justify-content-between shadow-none allow-hover active"
                                                                data-bs-toggle="dropdown"
                                                                aria-expanded="false">250000</button>
                                                            <div class="dropdown-menu w-100 px-3 pt-2 pb-1false"
                                                                data-bs-popper="none">
                                                                <input type="range" name="Price[min]" min="250000"
                                                                    max="3000000" step="250000" class="form-range"
                                                                    data-range-max="#PriceMax" value="0"
                                                                    id="PriceMin" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /.col -->

                                                    <div class="col-auto pt-2 text-secondary px-0">-</div>

                                                    <div class="col-6">
                                                        <div class="btn-group btn-range w-100 dropdown">
                                                            <button type="button"
                                                                class="btn btn-outline-primary btn-default dropdown-toggle d-flex align-items-center justify-content-between shadow-none allow-hover active"
                                                                data-bs-toggle="dropdown"
                                                                aria-expanded="false">2000000</button>

                                                            <div class="dropdown-menu dropdown-menu-end w-100 px-3 pt-2 pb-1false"
                                                                data-bs-popper="none">
                                                                <input type="range" name="Price[max]" min="1000000"
                                                                    max="4000000" step="250000" class="form-range"
                                                                    value="2000000" data-range-min="#PriceMin"
                                                                    id="PriceMax" />
                                                            </div>
                                                            <!-- /.dropdown-menu dropdown-menu-end -->
                                                        </div>
                                                        <!-- /.btn-group btn-range w-100 position-initial -->
                                                    </div>
                                                    <!-- /.col -->

                                                    <!--<div class="col-5"></div>-->
                                                </div>
                                                <!-- /.row -->
                                            </div>
                                            <!-- /.col-12 col-md-8 -->

                                            <div class="col-12 col-sm-6 col-md-4">
                                                <label for="BedroomsAny"
                                                    class="form-label fw-bold fs-sm mt-1 mb-0">Bedrooms</label>
                                                <div class="row position-relative g-0" data-check-range>
                                                    <div class="col pt-2">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="BedroomsAny" name="BedroomsAny" value="true"
                                                                checked="checked" />
                                                            <label class="form-check-label"
                                                                for="BedroomsAny">Any</label>
                                                        </div>
                                                    </div>
                                                    <!-- /.col pt-2 -->

                                                    <div class="col-auto pt-2 text-secondary px-2">or</div>

                                                    <div class="col">
                                                        <div class="btn-group btn-range w-100 dropdown">
                                                            <button type="button"
                                                                class="btn btn-outline-primary btn-default dropdown-toggle d-flex align-items-center justify-content-between shadow-none allow-hover"
                                                                data-bs-toggle="dropdown"
                                                                aria-expanded="false">0</button>
                                                            <div class="dropdown-menu dropdown-menu-end w-75 px-3 pt-2 pb-1false"
                                                                data-bs-popper="none">
                                                                <input type="range" min="0" max="10" step="1"
                                                                    class="form-range" name="Bedrooms" value="0"
                                                                    data-suffix="+" id="Bedrooms" />
                                                            </div>
                                                        </div>
                                                        <!-- /.btn-group btn-range w-100 position-initial -->
                                                    </div>
                                                    <!-- /.col -->

                                                    <!--<div class="col-5"></div>-->
                                                </div>
                                                <!-- /.row -->
                                            </div>
                                            <!-- /.col-12 col-sm-6 col-md-4 -->

                                            <div class="col-12 col-sm-6 col-md-4">
                                                <label for="BathroomsAny"
                                                    class="form-label fw-bold fs-sm mt-1 mb-0">Bathrooms</label>
                                                <div class="row position-relative g-0" data-check-range>
                                                    <div class="col pt-2">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="BathroomsAny" name="BathroomsAny" value="true"
                                                                checked="checked" />
                                                            <label class="form-check-label"
                                                                for="BathroomsAny">Any</label>
                                                        </div>
                                                    </div>
                                                    <!-- /.col pt-2 -->

                                                    <div class="col-auto pt-2 text-secondary px-2">or</div>

                                                    <div class="col">
                                                        <div class="btn-group btn-range w-100 dropdown">
                                                            <button type="button"
                                                                class="btn btn-outline-primary btn-default dropdown-toggle d-flex align-items-center justify-content-between shadow-none allow-hover"
                                                                data-bs-toggle="dropdown"
                                                                aria-expanded="false">0</button>
                                                            <div class="dropdown-menu dropdown-menu-end w-75 px-3 pt-2 pb-1false"
                                                                data-bs-popper="none">
                                                                <input type="range" min="0" max="10" step="1"
                                                                    class="form-range" name="Bathrooms" value="0"
                                                                    data-suffix="+" id="Bathrooms" />
                                                            </div>
                                                        </div>
                                                        <!-- /.btn-group btn-range w-100 position-initial -->
                                                    </div>
                                                    <!-- /.col -->

                                                    <!--<div class="col-5"></div>-->
                                                </div>
                                                <!-- /.row -->
                                            </div>
                                            <!-- /.col-12 col-sm-6 col-md-4 -->

                                            <div class="col-12 col-sm-6 col-md-4">
                                                <label for="GarageAny"
                                                    class="form-label fw-bold fs-sm mt-1 mb-0">Garage</label>
                                                <div class="row position-relative g-0" data-check-range>
                                                    <div class="col pt-2">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="GarageAny" name="GarageAny" value="true"
                                                                checked="checked" />
                                                            <label class="form-check-label" for="GarageAny">Any</label>
                                                        </div>
                                                    </div>
                                                    <!-- /.col pt-2 -->

                                                    <div class="col-auto pt-2 text-secondary px-2">or</div>

                                                    <div class="col">
                                                        <div class="btn-group btn-range w-100 dropdown">
                                                            <button type="button"
                                                                class="btn btn-outline-primary btn-default dropdown-toggle d-flex align-items-center justify-content-between shadow-none allow-hover"
                                                                data-bs-toggle="dropdown"
                                                                aria-expanded="false">0</button>
                                                            <div class="dropdown-menu dropdown-menu-end w-75 px-3 pt-2 pb-1false"
                                                                data-bs-popper="none">
                                                                <input type="range" min="0" max="10" step="1"
                                                                    class="form-range" name="Garage" value="0"
                                                                    data-suffix="+" id="Garage" />
                                                            </div>
                                                        </div>
                                                        <!-- /.btn-group btn-range w-100 position-initial -->
                                                    </div>
                                                    <!-- /.col -->

                                                    <!--<div class="col-5"></div>-->
                                                </div>
                                                <!-- /.row -->
                                            </div>
                                            <!-- /.col-12 col-sm-6 col-md-4 -->

                                            <div class="col-12 col-sm-6 col-md-4">
                                                <label for="StoriesAny"
                                                    class="form-label fw-bold fs-sm mt-1 mb-0">Stories</label>
                                                <div class="row position-relative g-0" data-check-range>
                                                    <div class="col pt-2">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="StoriesAny" name="StoriesAny" value="true"
                                                                checked="checked" />
                                                            <label class="form-check-label" for="StoriesAny">Any</label>
                                                        </div>
                                                    </div>
                                                    <!-- /.col pt-2 -->

                                                    <div class="col-auto pt-2 text-secondary px-2">or</div>

                                                    <div class="col">
                                                        <div class="btn-group btn-range w-100 dropdown">
                                                            <button type="button"
                                                                class="btn btn-outline-primary btn-default dropdown-toggle d-flex align-items-center justify-content-between shadow-none allow-hover"
                                                                data-bs-toggle="dropdown"
                                                                aria-expanded="false">0</button>
                                                            <div class="dropdown-menu dropdown-menu-end w-75 px-3 pt-2 pb-1false"
                                                                data-bs-popper="none">
                                                                <input type="range" min="0" max="10" step="1"
                                                                    class="form-range" name="Stories" value="0"
                                                                    data-suffix="+" id="Stories" />
                                                            </div>
                                                        </div>
                                                        <!-- /.btn-group btn-range w-100 position-initial -->
                                                    </div>
                                                    <!-- /.col -->

                                                    <!--<div class="col-5"></div>-->
                                                </div>
                                                <!-- /.row -->
                                            </div>
                                            <!-- /.col-12 col-sm-6 col-md-4 -->
                                        </div>
                                        <!-- .row -->

                                        <div>
                                            <label class="form-label fw-bold fs-sm mt-1 mb-2">Amenities</label>

                                            <div class="row gx-4 gy-1 mb-4">
                                                <div class="col-12 col-sm-6 col-md-4">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input"
                                                            name="Amenities[AirConditioning]" type="checkbox"
                                                            id="AmenityAirConditioning" />
                                                        <label class="form-check-label" for="AmenityAirConditioning">Air
                                                            Conditioning</label>
                                                    </div>
                                                    <!-- /.form-check form-switch -->
                                                </div>
                                                <!-- /.col-12 col-sm-6 col-md-4 -->

                                                <div class="col-12 col-sm-6 col-md-4">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" name="Amenities[Basement]"
                                                            type="checkbox" id="AmenityBasement" />
                                                        <label class="form-check-label"
                                                            for="AmenityBasement">Basement</label>
                                                    </div>
                                                    <!-- /.form-check form-switch -->
                                                </div>
                                                <!-- /.col-12 col-sm-6 col-md-4 -->

                                                <div class="col-12 col-sm-6 col-md-4">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input"
                                                            name="Amenities[DisabilityFeatures]" type="checkbox"
                                                            id="AmenityDisabilityFeatures" />
                                                        <label class="form-check-label"
                                                            for="AmenityDisabilityFeatures">Disability Features</label>
                                                    </div>
                                                    <!-- /.form-check form-switch -->
                                                </div>
                                                <!-- /.col-12 col-sm-6 col-md-4 -->

                                                <div class="col-12 col-sm-6 col-md-4">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" name="Amenities[Fireplace]"
                                                            type="checkbox" id="AmenityFireplace" />
                                                        <label class="form-check-label"
                                                            for="AmenityFireplace">Fireplace</label>
                                                    </div>
                                                    <!-- /.form-check form-switch -->
                                                </div>
                                                <!-- /.col-12 col-sm-6 col-md-4 -->

                                                <div class="col-12 col-sm-6 col-md-4">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" name="Amenities[Carport]"
                                                            type="checkbox" id="AmenityCarport" />
                                                        <label class="form-check-label"
                                                            for="AmenityCarport">Carport</label>
                                                    </div>
                                                    <!-- /.form-check form-switch -->
                                                </div>
                                                <!-- /.col-12 col-sm-6 col-md-4 -->

                                                <div class="col-12 col-sm-6 col-md-4">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" name="Amenities[Pool]"
                                                            type="checkbox" id="AmenityPool" />
                                                        <label class="form-check-label" for="AmenityPool">Pool</label>
                                                    </div>
                                                    <!-- /.form-check form-switch -->
                                                </div>
                                                <!-- /.col-12 col-sm-6 col-md-4 -->

                                                <div class="col-12 col-sm-6 col-md-4">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input"
                                                            name="Amenities[Built-InGasRange]" type="checkbox"
                                                            id="AmenityBuilt-InGasRange" />
                                                        <label class="form-check-label"
                                                            for="AmenityBuilt-InGasRange">Built-In Gas Range</label>
                                                    </div>
                                                    <!-- /.form-check form-switch -->
                                                </div>
                                                <!-- /.col-12 col-sm-6 col-md-4 -->

                                                <div class="col-12 col-sm-6 col-md-4">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" name="Amenities[Dishwasher]"
                                                            type="checkbox" id="AmenityDishwasher" />
                                                        <label class="form-check-label"
                                                            for="AmenityDishwasher">Dishwasher</label>
                                                    </div>
                                                    <!-- /.form-check form-switch -->
                                                </div>
                                                <!-- /.col-12 col-sm-6 col-md-4 -->

                                                <div class="col-12 col-sm-6 col-md-4">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" name="Amenities[Pond]"
                                                            type="checkbox" id="AmenityPond" />
                                                        <label class="form-check-label" for="AmenityPond">Pond</label>
                                                    </div>
                                                    <!-- /.form-check form-switch -->
                                                </div>
                                                <!-- /.col-12 col-sm-6 col-md-4 -->

                                                <div class="col-12 col-sm-6 col-md-4">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" name="Amenities[Spa/HotTube]"
                                                            type="checkbox" id="AmenitySpa/HotTube" />
                                                        <label class="form-check-label" for="AmenitySpa/HotTube">Spa /
                                                            Hot Tube</label>
                                                    </div>
                                                    <!-- /.form-check form-switch -->
                                                </div>
                                                <!-- /.col-12 col-sm-6 col-md-4 -->
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                    </div>
                                    <!-- /.collapse searchbox-filter-collapse -->
                                </div>
                                <!-- /.collapse -->
                            </div>
                            <!-- /.form-options -->

                            <a class="searchbox-btn-close btn-close form-is-focus position-absolute top-0 start-100 translate-middle"
                                data-bs-toggle="collapse" href="#FormOptionsCollapse" role="button"
                                aria-expanded="false" aria-controls="FormOptionsCollapse"><span
                                    class="btn-close-icon"></span></a>
                        </form>
                        <!-- /.searchbox-form position-relative bg-transparent false -->
                    </div>
                    <!-- /.searchbox -->
                </div>
                <!-- /. -->

                <div class="ms-auto ps-3 navbar-end d-flex flex-row justify-content-end">
                    <button class="btn-close btn-close-search d-md-none collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#formOptionsCollapse"
                        aria-controls="formOptionsCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="btn-close-icon"></span>
                    </button>

                    <button class="btn btn-link p-0 ms-3 shadow-none" data-bs-toggle="modal"
                        data-bs-target="#userSignInModal"><i class="fas fa-user"></i></button>

                    <button class="btn-close btn-close-menu collapsed ms-3" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="btn-close-icon"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="navbarMenu">
                    <div class="mt-4 d-lg-none"></div>

                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item nav-dropdown dropdown dropdown-hover">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarHome" role="button"
                                data-bs-toggle="dropdown">Home</a>
                            <ul class="nav-dropdown-menu dropdown-menu shadow">
                                <li class="nav-dropdown dropdown dropdown-hover">
                                    <a class="dropdown-item dropdown-toggle" href="#" role="button"
                                        data-bs-toggle="dropdown">Listing Home 1</a>
                                    <ul class="nav-dropdown-menu dropdown-menu shadow">
                                        <li><a class="dropdown-item" href="home-1.html">Listing Home 1</a></li>

                                        <li><a class="dropdown-item" href="home-1-fullwindow-hero.html">Listing Home 1 -
                                                Hero 2</a></li>

                                        <li><a class="dropdown-item" href="home-1-fullwindow-hero-2.html">Listing Home 1
                                                - Hero 2</a></li>
                                    </ul>
                                </li>

                                <li><a class="dropdown-item" href="home-2.html">Listing Home 2</a></li>

                                <li><a class="dropdown-item" href="home-3.html">Listing Home 3</a></li>

                                <li><a class="dropdown-item" href="home-4.html">Listing Home 4</a></li>

                                <li><a class="dropdown-item" href="home-5.html">Listing Home 5</a></li>

                                <li><a class="dropdown-item" href="home-6.html">Listing Home 6</a></li>
                            </ul>
                        </li>

                        <li class="nav-item nav-dropdown dropdown dropdown-hover">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarListing" role="button"
                                data-bs-toggle="dropdown">Listing</a>
                            <ul class="nav-dropdown-menu dropdown-menu shadow">
                                <li><span class="dropdown-header text-uppercase fw-bold">Listing</span></li>

                                <li><a class="dropdown-item" href="listing-1.html">Grid - Search Modal</a></li>

                                <li><a class="dropdown-item" href="listing-2.html">Grid - Search Modal 2</a></li>

                                <li><a class="dropdown-item" href="listing-search-header.html">Grid - Header Search</a>
                                </li>

                                <li><a class="dropdown-item" href="listing-search-top-1.html">Grid - Top Search</a></li>

                                <li><a class="dropdown-item" href="listing-search-top-2.html">Grid - Top Search 2</a>
                                </li>

                                <li><a class="dropdown-item" href="listing-search-sidebar.html">Grid - Sidebar
                                        Search</a></li>

                                <li>
                                    <hr class="dropdown-divider" />
                                </li>

                                <li><span class="dropdown-header text-uppercase fw-bold">Listing with Map</span></li>

                                <li><a class="dropdown-item" href="listing-map-top-1.html">Grid - Top Map 1</a></li>

                                <li><a class="dropdown-item" href="listing-map-top-2.html">Grid - Top Map 2</a></li>

                                <li><a class="dropdown-item" href="listing-map-left-1.html">Grid - Left Map</a></li>

                                <li><a class="dropdown-item" href="listing-map-right-1.html">Grid - Right Map</a></li>
                            </ul>
                        </li>

                        <li class="nav-item nav-dropdown dropdown dropdown-hover dropdown__mega">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown">Templates</a>

                            <div class="nav-dropdown-menu dropdown-menu shadow" data-bs-popper="none">
                                <div class="container-xl position-relative px-0">
                                    <div class="row">
                                        <div class="col-12 col-lg-9 py-lg-5">
                                            <div class="row">
                                                <div class="col-12 col-lg-3">
                                                    <ul class="list-unstyled mb-3">
                                                        <li class="d-lg-none">
                                                            <hr class="dropdown-divider" />
                                                        </li>

                                                        <li><span class="dropdown-header text-uppercase fw-bold">Listing
                                                                Home</span></li>
                                                        <li><a href="../default/home-1.html"
                                                                class="dropdown-item">Listing Home 1</a></li>
                                                        <li><a href="../default/home-1-fullwindow-hero.html"
                                                                class="dropdown-item">Listing Home 1 - Hero 2</a></li>
                                                        <li><a href="../default/home-1-fullwindow-hero-2.html"
                                                                class="dropdown-item">Listing Home 1 - Hero 2</a></li>
                                                        <li><a href="../default/home-2.html"
                                                                class="dropdown-item">Listing Home 2</a></li>
                                                        <li><a href="../default/home-3.html"
                                                                class="dropdown-item">Listing Home 3</a></li>
                                                        <li><a href="../default/home-4.html"
                                                                class="dropdown-item">Listing Home 4</a></li>
                                                        <li><a href="../default/home-5.html"
                                                                class="dropdown-item">Listing Home 5</a></li>
                                                        <li><a href="../default/home-6.html"
                                                                class="dropdown-item">Listing Home 6</a></li>
                                                    </ul>

                                                    <ul class="list-unstyled mb-3">
                                                        <li class="d-lg-none">
                                                            <hr class="dropdown-divider" />
                                                        </li>

                                                        <li><span
                                                                class="dropdown-header text-uppercase fw-bold">Services
                                                                Page</span></li>
                                                        <li><a href="../default/page-sell-1.html"
                                                                class="dropdown-item">Sell Page 1</a></li>
                                                        <li><a href="../default/page-sell-to-us-1.html"
                                                                class="dropdown-item">Sell to Us Page 1</a></li>
                                                        <li><a href="../default/page-list-with-us-1.html"
                                                                class="dropdown-item">List with Us Page 1</a></li>
                                                    </ul>
                                                </div>
                                                <!-- /.col-12 col-lg-3 -->

                                                <div class="col-12 col-lg-3">
                                                    <ul class="list-unstyled mb-3">
                                                        <li class="d-lg-none">
                                                            <hr class="dropdown-divider" />
                                                        </li>

                                                        <li><span
                                                                class="dropdown-header text-uppercase fw-bold">Listing</span>
                                                        </li>
                                                        <li><a href="../default/listing-1.html"
                                                                class="dropdown-item">Grid - Search Modal</a></li>
                                                        <li><a href="../default/listing-2.html"
                                                                class="dropdown-item">Grid - Search Modal 2</a></li>
                                                        <li><a href="../default/listing-search-header.html"
                                                                class="dropdown-item">Grid - Header Search</a></li>
                                                        <li><a href="../default/listing-search-top-1.html"
                                                                class="dropdown-item">Grid - Top Search</a></li>
                                                        <li><a href="../default/listing-search-top-2.html"
                                                                class="dropdown-item">Grid - Top Search 2</a></li>
                                                        <li><a href="../default/listing-search-sidebar.html"
                                                                class="dropdown-item">Grid - Sidebar Search</a></li>
                                                    </ul>

                                                    <ul class="list-unstyled mb-3">
                                                        <li class="d-lg-none">
                                                            <hr class="dropdown-divider" />
                                                        </li>

                                                        <li><span class="dropdown-header text-uppercase fw-bold">Listing
                                                                with Map</span></li>
                                                        <li><a href="../default/listing-map-top-1.html"
                                                                class="dropdown-item">Grid - Top Map 1</a></li>
                                                        <li><a href="../default/listing-map-top-2.html"
                                                                class="dropdown-item">Grid - Top Map 2</a></li>
                                                        <li><a href="../default/listing-map-left-1.html"
                                                                class="dropdown-item">Grid - Left Map</a></li>
                                                        <li><a href="../default/listing-map-right-1.html"
                                                                class="dropdown-item">Grid - Right Map</a></li>
                                                    </ul>
                                                </div>
                                                <!-- /.col-12 col-lg-3 -->

                                                <div class="col-12 col-lg-3">
                                                    <ul class="list-unstyled mb-3">
                                                        <li class="d-lg-none">
                                                            <hr class="dropdown-divider" />
                                                        </li>

                                                        <li><span class="dropdown-header text-uppercase fw-bold">Listing
                                                                Detail</span></li>
                                                        <li><a href="../default/listing-detail-1.html"
                                                                class="dropdown-item">Listing Detail 1</a></li>
                                                        <li><a href="../default/listing-detail-2.html"
                                                                class="dropdown-item">Listing Detail 2</a></li>
                                                        <li><a href="../default/listing-detail-3.html"
                                                                class="dropdown-item">Listing Detail 3</a></li>
                                                        <li><a href="../default/listing-detail-4.html"
                                                                class="dropdown-item">Listing Detail 4</a></li>
                                                        <li><a href="../default/listing-detail-5.html"
                                                                class="dropdown-item active">Listing Detail 5</a></li>
                                                    </ul>

                                                    <ul class="list-unstyled mb-3">
                                                        <li class="d-lg-none">
                                                            <hr class="dropdown-divider" />
                                                        </li>

                                                        <li><span class="dropdown-header text-uppercase fw-bold">Misc
                                                                Pages</span></li>
                                                        <li><a href="../default/page-subscribe-1.html"
                                                                class="dropdown-item">Subscribe 1</a></li>
                                                        <li><a href="../default/page-subscribe-2.html"
                                                                class="dropdown-item">Subscribe 2</a></li>
                                                        <li><a href="../default/page-plans-and-pricing-1.html"
                                                                class="dropdown-item">Plans And Pricing 1</a></li>
                                                        <li><a href="../default/page-plans-and-pricing-2.html"
                                                                class="dropdown-item">Plans And Pricing 2</a></li>
                                                    </ul>
                                                </div>
                                                <!-- /.col-12 col-lg-3 -->

                                                <div class="col-12 col-lg-3">
                                                    <ul class="list-unstyled mb-3">
                                                        <li class="d-lg-none">
                                                            <hr class="dropdown-divider" />
                                                        </li>

                                                        <li><span
                                                                class="dropdown-header text-uppercase fw-bold">Collection</span>
                                                        </li>
                                                        <li><a href="../default/blog-1.html" class="dropdown-item">Blog
                                                                / News 1</a></li>
                                                        <li><a href="../default/blog-2.html" class="dropdown-item">Blog
                                                                / News 2</a></li>
                                                        <li><a href="../default/blog-post-1.html"
                                                                class="dropdown-item">Post Detail 1</a></li>
                                                        <li><a href="../default/cities-1.html"
                                                                class="dropdown-item">Cities 1</a></li>
                                                        <li><a href="../default/cities-2.html"
                                                                class="dropdown-item">Cities 2</a></li>
                                                        <li><a href="../default/testimonials-1.html"
                                                                class="dropdown-item">Testimonial 1</a></li>
                                                        <li><a href="../default/testimonials-2.html"
                                                                class="dropdown-item">Testimonial 2</a></li>
                                                    </ul>

                                                    <ul class="list-unstyled mb-3">
                                                        <li><span
                                                                class="dropdown-header text-uppercase fw-bold">Colorschemes</span>
                                                        </li>
                                                        <li><a href="../default/listing-detail-5.html"
                                                                class="dropdown-item active">Default</a></li>
                                                        <li><a href="../classic/listing-detail-5.html"
                                                                class="dropdown-item">Classic</a></li>
                                                        <li><a href="../minimal/listing-detail-5.html"
                                                                class="dropdown-item">Minimal</a></li>
                                                    </ul>
                                                </div>
                                                <!-- /.col-12 col-lg-3 -->
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.col-12 col-lg-9 -->

                                        <div class="col-12 col-lg-3 my-lg-n2">
                                            <div class="expand-w h-100 bg-dark position-relative">
                                                <div class="bg bg-img position-absolute" data-bg-img=".img">
                                                    <img src="http://assets.coolorize.com/homes/5-3/xl/pexels-ketut-subiyanto-4246220.jpg"
                                                        class="img" alt="Image" />
                                                    <div class="overlay bg-dark position-absolute o-25"></div>
                                                </div>
                                                <!-- /.bg bg-img position-absolute -->
                                            </div>
                                        </div>
                                        <!-- /.d-none-d-lg-block col-lg-3 -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                            </div>
                        </li>

                        <li class="nav-item nav-dropdown dropdown dropdown-hover">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDocs" role="button"
                                data-bs-toggle="dropdown">Docs</a>
                            <ul class="nav-dropdown-menu dropdown-menu dropdown-menu-end shadow" data-bs-popper>
                                <li>
                                    <span class="dropdown-header text-uppercase fw-bold">Documentations</span>
                                </li>

                                <li><a class="dropdown-item" href="../docs/index.html">Introduction</a></li>

                                <li><a class="dropdown-item" href="../docs/tooling-setup.html">Tooling Setup</a></li>

                                <li>
                                    <hr class="dropdown-divider" />
                                </li>

                                <li>
                                    <span class="dropdown-header text-uppercase fw-bold">SCSS / CSS</span>
                                </li>

                                <li><a class="dropdown-item" href="../docs/scss-file-structure.html">SCSS File
                                        Structure</a></li>

                                <li><a class="dropdown-item" href="../docs/scss-customizing.html">Customizing</a></li>

                                <li>
                                    <hr class="dropdown-divider" />
                                </li>

                                <li>
                                    <span class="dropdown-header text-uppercase fw-bold">HTML</span>
                                </li>

                                <li><a class="dropdown-item" href="../docs/html.html">Base / Starter HTML</a></li>

                                <li><a class="dropdown-item" href="../docs/html-header.html">Header HTML</a></li>

                                <li><a class="dropdown-item" href="../docs/html-nav.html">Nav HTML</a></li>

                                <li><a class="dropdown-item" href="../docs/html-section.html">Section HTML</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-warning"
                                href="http://html.coolorize.com/discoverize/default/page-sell-1.html">Sell With Us</a>
                        </li>
                    </ul>
                    <!-- /.navbar-nav -->
                </div>
                <!-- /.collapse navbar-collapse -->
            </div>
            <!-- /.container-xl -->
        </nav>

        <div class="bg header-bg position-absolute trans-base"></div>
    </header>

    <section id="listing-detail-hero-2" class="section py-0">
        <div class="bg bg-img position-absolute h-90 bg-dark" data-bg-img=".img"></div>
        <!-- /.bg bg-img position-absolute h-90 bg-dark -->

        <header class="section-header mb-5 visually-hidden">
            <h2 class="fs-3 text-center section-title mb-3">Property Detail</h2>
        </header>
        <!-- /.section-header mb-5 visually-hidden -->

        <div class="container-xl pt-1 position-relative h-480px">
            <div class="swiper-container h-100">
                <div id="listing-detail-hero-2-swiper" class="swiper gallery h-100 p-0 m-0 expand-w rounded-start"
                    data-js-swiper="auto">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide w-640px">
                            <a href="http://assets.coolorize.com/interior/teal/full/xl/pexels-graphicgumcom-1115804.jpg"
                                class="bg bg-img d-block h-100" data-bg-img=".img"
                                data-gallery="gallery-listing-detail-hero-2" data-size="640x640"> <img
                                    src="http://assets.coolorize.com/interior/teal/full/lg/pexels-graphicgumcom-1115804.jpg"
                                    class="img" alt="Image" /></a>
                        </div>
                        <!-- /.swiper-slide -->

                        <div class="swiper-slide w-640px">
                            <div class="row h-100 g-0">
                                <div class="col-6 h-100 border-transparent border-2 border-start">
                                    <a href="http://assets.coolorize.com/interior/teal/full/xl/pexels-jonathan-borba-5563472.jpg"
                                        class="bg bg-img d-block h-100" data-bg-img=".img"
                                        data-gallery="gallery-listing-detail-hero-2" data-size="640x960"> <img
                                            src="http://assets.coolorize.com/interior/teal/full/lg/pexels-jonathan-borba-5563472.jpg"
                                            class="img" alt="Image" /></a>
                                </div>
                                <!-- /.col-6 -->
                                <div class="col-6 h-100">
                                    <div class="row h-100 g-0">
                                        <div class="col-12 h-50 border-transparent border-2 border-start">
                                            <a href="http://assets.coolorize.com/interior/teal/full/xl/pexels-max-vakhtbovych-6438762.jpg"
                                                class="bg bg-img d-block h-100" data-bg-img=".img"
                                                data-gallery="gallery-listing-detail-hero-2" data-size="640x427"> <img
                                                    src="http://assets.coolorize.com/interior/teal/full/lg/pexels-max-vakhtbovych-6438762.jpg"
                                                    class="img" alt="Image" /></a>
                                        </div>
                                        <div class="col-12 h-50 border-transparent border-2 border-start border-top">
                                            <a href="http://assets.coolorize.com/interior/teal/full/xl/pexels-max-vakhtbovych-6934271.jpg"
                                                class="bg bg-img d-block h-100" data-bg-img=".img"
                                                data-gallery="gallery-listing-detail-hero-2" data-size="640x427"> <img
                                                    src="http://assets.coolorize.com/interior/teal/full/lg/pexels-max-vakhtbovych-6934271.jpg"
                                                    class="img" alt="Image" /></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.col-6 -->
                            </div>
                        </div>
                        <!-- /.swiper-slide -->

                        <div class="swiper-slide w-640px">
                            <div class="row h-100 g-0">
                                <div class="col-6 h-100">
                                    <div class="row h-100 g-0">
                                        <div class="col-12 h-50 border-transparent border-2 border-start">
                                            <a href="http://assets.coolorize.com/interior/teal/full/xl/pexels-max-vakhtbovych-7005299.jpg"
                                                class="bg bg-img d-block h-100" data-bg-img=".img"
                                                data-gallery="gallery-listing-detail-hero-2" data-size="640x681"> <img
                                                    src="http://assets.coolorize.com/interior/teal/full/lg/pexels-max-vakhtbovych-7005299.jpg"
                                                    class="img" alt="Image" /></a>
                                        </div>
                                        <div class="col-12 h-50 border-transparent border-2 border-start border-top">
                                            <a href="http://assets.coolorize.com/interior/teal/full/xl/pexels-max-vakhtbovych-7045365.jpg"
                                                class="bg bg-img d-block h-100" data-bg-img=".img"
                                                data-gallery="gallery-listing-detail-hero-2" data-size="640x427"> <img
                                                    src="http://assets.coolorize.com/interior/teal/full/lg/pexels-max-vakhtbovych-7045365.jpg"
                                                    class="img" alt="Image" /></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.col-6 -->
                                <div class="col-6 h-100 border-transparent border-2 border-start">
                                    <a href="http://assets.coolorize.com/interior/teal/full/xl/pexels-max-vakhtbovych-6958135.jpg"
                                        class="bg bg-img d-block h-100" data-bg-img=".img"
                                        data-gallery="gallery-listing-detail-hero-2" data-size="640x800"> <img
                                            src="http://assets.coolorize.com/interior/teal/full/lg/pexels-max-vakhtbovych-6958135.jpg"
                                            class="img" alt="Image" /></a>
                                </div>
                                <!-- /.col-6 -->
                            </div>
                        </div>
                        <!-- /.swiper-slide -->

                        <div class="swiper-slide w-640px">
                            <div class="row h-100 g-0">
                                <div class="col-6 h-50 border-transparent border-2 border-start">
                                    <a href="http://assets.coolorize.com/interior/teal/full/xl/pexels-max-vakhtbovych-6980659.jpg"
                                        class="bg bg-img d-block h-100" data-bg-img=".img"
                                        data-gallery="gallery-listing-detail-hero-2" data-size="640x427"> <img
                                            src="http://assets.coolorize.com/interior/teal/full/lg/pexels-max-vakhtbovych-6980659.jpg"
                                            class="img" alt="Image" /></a>
                                </div>
                                <div class="col-6 h-50 border-transparent border-2 border-start">
                                    <a href="http://assets.coolorize.com/interior/teal/full/xl/pexels-rachel-claire-4846089.jpg"
                                        class="bg bg-img d-block h-100" data-bg-img=".img"
                                        data-gallery="gallery-listing-detail-hero-2" data-size="640x973"> <img
                                            src="http://assets.coolorize.com/interior/teal/full/lg/pexels-rachel-claire-4846089.jpg"
                                            class="img" alt="Image" /></a>
                                </div>
                                <div class="col-12 h-50 border-transparent border-2 border-start border-top">
                                    <a href="http://assets.coolorize.com/interior/teal/full/xl/pexels-max-vakhtbovych-6186519.jpg"
                                        class="bg bg-img d-block h-100" data-bg-img=".img"
                                        data-gallery="gallery-listing-detail-hero-2" data-size="640x528"> <img
                                            src="http://assets.coolorize.com/interior/teal/full/lg/pexels-max-vakhtbovych-6186519.jpg"
                                            class="img" alt="Image" /></a>
                                </div>
                                <!-- /.col-6 -->
                            </div>
                            <!-- .row h-100 g-0 -->
                        </div>
                        <!-- /.swiper-slide -->
                    </div>
                    <!-- /.swiper-wrapper -->
                </div>
                <!-- /#listing-detail-hero-2-swiper.swiper -->

                <div class="swiper-pagination-container container-xl mb-2 pb-2">
                    <div class="d-flex flex-row justify-content-center">
                        <div data-swiper-id="#listing-detail-hero-2-swiper" class="swiper-pagination w-auto bottom-0"
                            data-swiper-pagination-limit="2"></div>
                    </div>
                </div>

                <div class="swiper-navigation-container">
                    <a href="#listing-detail-hero-2-swiper"
                        class="swiper-button-next btn btn-primary btn-default shadow-none o-50 o-100-hover"><i
                            class="d-inline-block fas fa-angle-right"></i></a>
                    <a href="#listing-detail-hero-2-swiper"
                        class="swiper-button-prev btn btn-primary btn-default shadow-none o-50 o-100-hover"><i
                            class="d-inline-block fas fa-angle-left"></i></a>
                </div>
                <!-- /.swiper-navigation -->
            </div>
            <!-- /.swiper-container  -->
        </div>
        <!-- /.container-xl -->
    </section>
    <!-- #listing-detail-hero-2.section py-0 -->

    <section id="listing-detail-1" class="section pb-5 pb-lg-6">
        <div class="bg bg-img position-absolute" data-bg-img=".img"></div>
        <!-- /.bg bg-img position-absolute -->

        <div class="container-xl position-relative pt-4 pt-lg-5">
            <header class="section-header mb-5 visually-hidden">
                <h2 class="fs-3 text-center section-title mb-3">Property Detail</h2>
            </header>
            <!-- /.section-header mb-5 visually-hidden -->

            <div class="row">
                <div class="col-12 col-lg-9">
                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <nav aria-label="breadcrumb" class="mb-4">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="#"
                                            class="o-50 o-100-hover trans-base fs-sm fw-bold">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#"
                                            class="o-50 o-100-hover trans-base fs-sm fw-bold">Listing</a></li>
                                    <li class="breadcrumb-item"><a href="#"
                                            class="o-50 o-100-hover trans-base fs-sm fw-bold">Multi Family Home</a></li>
                                </ol>
                            </nav>

                            <div class="row gy-2">
                                <div
                                    class="col-12 col-md order-md-2 text-md-end d-flex flex-column justify-content-center">
                                    <p class="card-text fs-3 fw-bold">$600,000</p>
                                </div>
                                <!-- /.col-12 -->

                                <div class="col-12 col-md-auto order-md-1 d-flex flex-column justify-content-center">
                                    <p class="card-text mb-0 text-truncate"><strong>70 Sagamoga Hill Road</strong>, San
                                        Jose, NY 110000</p>

                                    <p class="card-text row gx-0 gx-md-0 mt-1 text-truncate d-block">
                                        <span class="col-auto">Beds: 2</span>
                                        <span class="col-auto px-0 o-50">&bullet;</span>
                                        <span class="col-auto">Baths: 2</span>
                                        <span class="col-auto px-0 o-50">&bullet;</span>
                                        <span class="col-auto">Sqft: 5434</span>
                                    </p>
                                </div>
                                <!-- /.col-12 -->

                                <div
                                    class="col-12 col-md-auto order-md-3 text-md-end d-flex flex-row align-items-center">
                                    <a href="#"
                                        class="btn btn-outline-primary btn-default fw-bold shadow-none o-hover-all me-2"><i
                                            class="fas fa-bookmark o-50 o-100-hover"></i><span
                                            class="d-none d-xl-inline-block ms-2">Bookmark</span></a>
                                    <a href="#"
                                        class="btn btn-outline-primary btn-default fw-bold shadow-none o-hover-all"><i
                                            class="fas fa-share-alt o-50 o-100-hover"></i><span
                                            class="d-none d-xl-inline-block ms-2">Share</span></a>
                                </div>
                                <!-- /.col-12 -->
                            </div>
                            <!-- /.col-12 -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card  shadow-sm mb-4 -->

                    <div class="accordion mb-4" id="accordionOverview">
                        <div class="accordion-item rounded shadow-sm">
                            <h2 class="accordion-header" id="accordionOverviewHeading">
                                <button class="accordion-button fs-5" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordionOverviewCollapse" aria-expanded="true"
                                    aria-controls="accordionOverviewCollapse">Overview</button>
                            </h2>

                            <div id="accordionOverviewCollapse" class="accordion-collapse collapse show"
                                aria-labelledby="accordionOverviewHeading" data-bs-parent="#accordionOverview">
                                <div class="accordion-body">
                                    <p>This beautiful house in the lorem ipsum, dolor sit amet consectetur adipisicing,
                                        elit. Vero facilis praesentium repellendus impedit nam molestias sequi nobis ea,
                                        quis, eaque illum doloribus beatae vel. Accusantium eius vero adipisci sit,
                                        eveniet amet consectetur adipisicing elit. Distinctio libero sunt suscipit enim
                                        quod esse ipsam nisi atque et, aut aliquam maxime nam adipisci impedit ipsum
                                        beatae, culpa error iusto.</p>
                                </div>
                            </div>
                            <!-- /#accordionOverviewCollapse.accordion-collapse collapse  show -->
                        </div>
                        <!-- /.accordion-item  rounded shadow-sm -->
                    </div>
                    <!-- /.accordion  mb-4" id="accordionOverview -->

                    <div class="accordion mb-4" id="accordionPropertyDetails">
                        <div class="accordion-item rounded shadow-sm">
                            <h2 class="accordion-header" id="accordionPropertyDetailsHeading">
                                <button class="accordion-button fs-5" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordionPropertyDetailsCollapse" aria-expanded="true"
                                    aria-controls="accordionPropertyDetailsCollapse">Property Details</button>
                            </h2>

                            <div id="accordionPropertyDetailsCollapse" class="accordion-collapse collapse show"
                                aria-labelledby="accordionPropertyDetailsHeading"
                                data-bs-parent="#accordionPropertyDetails">
                                <div class="accordion-body">
                                    <div class="row g-2 mb-3">
                                        <dl class="col-6 col-lg-4 my-0">
                                            <dt class="fw-normal fs-sm text-uppercase text-secondary">Status</dt>
                                            <dd class="fw-bold">For Sale</dd>
                                        </dl>
                                        <!-- /.col-6 -->

                                        <dl class="col-6 col-lg-4 my-0">
                                            <dt class="fw-normal fs-sm text-uppercase text-secondary">Type</dt>
                                            <dd class="fw-bold">Apartments</dd>
                                        </dl>
                                        <!-- /.col-6 -->

                                        <dl class="col-6 col-lg-4 my-0">
                                            <dt class="fw-normal fs-sm text-uppercase text-secondary">Year Build</dt>
                                            <dd class="fw-bold">2005</dd>
                                        </dl>
                                        <!-- /.col-6 -->

                                        <dl class="col-6 col-lg-4 my-0">
                                            <dt class="fw-normal fs-sm text-uppercase text-secondary">Size</dt>
                                            <dd class="fw-bold">2,804 sqft</dd>
                                        </dl>
                                        <!-- /.col-6 -->

                                        <dl class="col-6 col-lg-4 my-0">
                                            <dt class="fw-normal fs-sm text-uppercase text-secondary">Lot Size</dt>
                                            <dd class="fw-bold">2,804 sqft</dd>
                                        </dl>
                                        <!-- /.col-6 -->

                                        <dl class="col-6 col-lg-4 my-0">
                                            <dt class="fw-normal fs-sm text-uppercase text-secondary">$ per square foot
                                            </dt>
                                            <dd class="fw-bold">$125/sqft</dd>
                                        </dl>
                                        <!-- /.col-6 -->

                                        <dl class="col-6 col-lg-4 my-0">
                                            <dt class="fw-normal fs-sm text-uppercase text-secondary">Construction</dt>
                                            <dd class="fw-bold">Frame</dd>
                                        </dl>
                                        <!-- /.col-6 -->

                                        <dl class="col-6 col-lg-4 my-0">
                                            <dt class="fw-normal fs-sm text-uppercase text-secondary">Roof</dt>
                                            <dd class="fw-bold">Asphalt/Composite Shingles</dd>
                                        </dl>
                                        <!-- /.col-6 -->

                                        <dl class="col-6 col-lg-4 my-0">
                                            <dt class="fw-normal fs-sm text-uppercase text-secondary">Exterior</dt>
                                            <dd class="fw-bold">FinishBrick</dd>
                                        </dl>
                                        <!-- /.col-6 -->

                                        <dl class="col-6 col-lg-4 my-0">
                                            <dt class="fw-normal fs-sm text-uppercase text-secondary">Stories</dt>
                                            <dd class="fw-bold">1</dd>
                                        </dl>
                                        <!-- /.col-6 -->

                                        <dl class="col-6 col-lg-4 my-0">
                                            <dt class="fw-normal fs-sm text-uppercase text-secondary">Bedrooms</dt>
                                            <dd class="fw-bold">4</dd>
                                        </dl>
                                        <!-- /.col-6 -->

                                        <dl class="col-6 col-lg-4 my-0">
                                            <dt class="fw-normal fs-sm text-uppercase text-secondary">Bathrooms</dt>
                                            <dd class="fw-bold">2</dd>
                                        </dl>
                                        <!-- /.col-6 -->

                                        <dl class="col-6 col-lg-4 my-0">
                                            <dt class="fw-normal fs-sm text-uppercase text-secondary">Dining Room</dt>
                                            <dd class="fw-bold">Dining / Family Combo</dd>
                                        </dl>
                                        <!-- /.col-6 -->

                                        <dl class="col-6 col-lg-4 my-0">
                                            <dt class="fw-normal fs-sm text-uppercase text-secondary">Family Room</dt>
                                            <dd class="fw-bold">Dining / Family Combo</dd>
                                        </dl>
                                        <!-- /.col-6 -->

                                        <dl class="col-6 col-lg-4 my-0">
                                            <dt class="fw-normal fs-sm text-uppercase text-secondary">Garage</dt>
                                            <dd class="fw-bold">1</dd>
                                        </dl>
                                        <!-- /.col-6 -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                            </div>
                            <!-- /#accordionPropertyDetailsCollapse.accordion-collapse collapse  show -->
                        </div>
                        <!-- /.accordion-item  rounded shadow-sm -->
                    </div>
                    <!-- /.accordion  mb-4" id="accordionPropertyDetails -->

                    <div class="accordion mb-4" id="accordionAmenities">
                        <div class="accordion-item rounded shadow-sm">
                            <h2 class="accordion-header" id="accordionAmenitiesHeading">
                                <button class="accordion-button fs-5" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordionAmenitiesCollapse" aria-expanded="true"
                                    aria-controls="accordionAmenitiesCollapse">Amenities</button>
                            </h2>

                            <div id="accordionAmenitiesCollapse" class="accordion-collapse collapse show"
                                aria-labelledby="accordionAmenitiesHeading" data-bs-parent="#accordionAmenities">
                                <div class="accordion-body">
                                    <div class="row g-2 mb-3">
                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3"><i
                                                class="fas fa-check text-warning"></i> Air Conditioning</div>

                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3"><i
                                                class="fas fa-check text-warning"></i> Basement</div>

                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3"><i
                                                class="fas fa-check text-warning"></i> Disability Features</div>

                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3"><i
                                                class="fas fa-check text-warning"></i> Fireplace</div>

                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3"><i
                                                class="fas fa-check text-warning"></i> Carport</div>

                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3"><i
                                                class="fas fa-check text-warning"></i> Pool</div>

                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3"><i
                                                class="fas fa-check text-warning"></i> Built-In Gas Range</div>

                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3"><i
                                                class="fas fa-check text-warning"></i> Dishwasher</div>

                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3"><i
                                                class="fas fa-check text-warning"></i> Pond</div>

                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3"><i
                                                class="fas fa-check text-warning"></i> Spa / Hot Tube</div>
                                    </div>
                                </div>
                            </div>
                            <!-- /#accordionAmenitiesCollapse.accordion-collapse collapse  show -->
                        </div>
                        <!-- /.accordion-item  rounded shadow-sm -->
                    </div>
                    <!-- /.accordion  mb-4" id="accordionAmenities -->

                    <div class="accordion mb-4" id="accordionWhatsNearby">
                        <div class="accordion-item rounded shadow-sm">
                            <h2 class="accordion-header" id="accordionWhatsNearbyHeading">
                                <button class="accordion-button fs-5" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordionWhatsNearbyCollapse" aria-expanded="true"
                                    aria-controls="accordionWhatsNearbyCollapse">What's Nearby</button>
                            </h2>

                            <div id="accordionWhatsNearbyCollapse" class="accordion-collapse collapse show"
                                aria-labelledby="accordionWhatsNearbyHeading" data-bs-parent="#accordionWhatsNearby">
                                <div class="accordion-body">
                                    <h6 class="mb-3">Schools</h6>

                                    <p class="fs-sm">This home is within the New York Unified School District. New
                                        York's enrollment policy is not based solely on geography. Please check the
                                        school district website to see all schools serving this home.</p>

                                    <div class="counter mb-3">
                                        <div class="mb-2 pb-1 d-flex flex-row">
                                            <div class="counter-number"></div>

                                            <div class="row w-100">
                                                <dl class="col-12 col-md mb-1 mb-md-0">
                                                    <dt class="text-truncate"><a href="#">Pertamini Bright Elementary
                                                            School</a></dt>
                                                    <dd class="text-secondary fs-sm mb-0 text-truncate">Public - K to 5
                                                    </dd>
                                                </dl>

                                                <dl class="col-4 col-md-2 mb-0">
                                                    <dt class="fw-normal text-truncate">571</dt>
                                                    <dd class="text-secondary fs-sm mb-0 text-truncate">Students</dd>
                                                </dl>

                                                <dl class="col-4 col-md-2 mb-0">
                                                    <dt class="fw-normal text-truncate">0.3 mi</dt>
                                                    <dd class="text-secondary fs-sm mb-0 text-truncate">Distance</dd>
                                                </dl>

                                                <dl class="col-4 col-md-auto mb-0">
                                                    <dt class="fw-normal text-truncate text-warning"><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i
                                                            class="fas fa-star-half-alt"></i><i class="far fa-star"></i>
                                                    </dt>
                                                    <dd class="text-secondary fs-sm mb-0 text-truncate">10 Reviews</dd>
                                                </dl>
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.mb-2 pb-1 d-flex flex-row -->

                                        <div class="mb-2 pb-1 d-flex flex-row">
                                            <div class="counter-number"></div>

                                            <div class="row w-100">
                                                <dl class="col-12 col-md mb-1 mb-md-0">
                                                    <dt class="text-truncate"><a href="#">Eliphant Learning Center</a>
                                                    </dt>
                                                    <dd class="text-secondary fs-sm mb-0 text-truncate">Public - K to 5
                                                    </dd>
                                                </dl>

                                                <dl class="col-4 col-md-2 mb-0">
                                                    <dt class="fw-normal text-truncate">271</dt>
                                                    <dd class="text-secondary fs-sm mb-0 text-truncate">Students</dd>
                                                </dl>

                                                <dl class="col-4 col-md-2 mb-0">
                                                    <dt class="fw-normal text-truncate">0.25 mi</dt>
                                                    <dd class="text-secondary fs-sm mb-0 text-truncate">Distance</dd>
                                                </dl>

                                                <dl class="col-4 col-md-auto mb-0">
                                                    <dt class="fw-normal text-truncate text-warning"><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i
                                                            class="fas fa-star-half-alt"></i><i class="far fa-star"></i>
                                                    </dt>
                                                    <dd class="text-secondary fs-sm mb-0 text-truncate">48 Reviews</dd>
                                                </dl>
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.mb-2 pb-1 d-flex flex-row -->

                                        <div class="mb-2 pb-1 d-flex flex-row">
                                            <div class="counter-number"></div>

                                            <div class="row w-100">
                                                <dl class="col-12 col-md mb-1 mb-md-0">
                                                    <dt class="text-truncate"><a href="#">Merapi Value</a></dt>
                                                    <dd class="text-secondary fs-sm mb-0 text-truncate">Charter - K to 8
                                                    </dd>
                                                </dl>

                                                <dl class="col-4 col-md-2 mb-0">
                                                    <dt class="fw-normal text-truncate">246</dt>
                                                    <dd class="text-secondary fs-sm mb-0 text-truncate">Students</dd>
                                                </dl>

                                                <dl class="col-4 col-md-2 mb-0">
                                                    <dt class="fw-normal text-truncate">0.35 mi</dt>
                                                    <dd class="text-secondary fs-sm mb-0 text-truncate">Distance</dd>
                                                </dl>

                                                <dl class="col-4 col-md-auto mb-0">
                                                    <dt class="fw-normal text-truncate text-warning"><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i
                                                            class="fas fa-star-half-alt"></i><i class="far fa-star"></i>
                                                    </dt>
                                                    <dd class="text-secondary fs-sm mb-0 text-truncate">58 Reviews</dd>
                                                </dl>
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.mb-2 pb-1 d-flex flex-row -->

                                        <div class="mb-2 pb-1 d-flex flex-row">
                                            <div class="counter-number"></div>

                                            <div class="row w-100">
                                                <dl class="col-12 col-md mb-1 mb-md-0">
                                                    <dt class="text-truncate"><a href="#">Manual Atlantic Academy</a>
                                                    </dt>
                                                    <dd class="text-secondary fs-sm mb-0 text-truncate">Charter - 6 to
                                                        12</dd>
                                                </dl>

                                                <dl class="col-4 col-md-2 mb-0">
                                                    <dt class="fw-normal text-truncate">528</dt>
                                                    <dd class="text-secondary fs-sm mb-0 text-truncate">Students</dd>
                                                </dl>

                                                <dl class="col-4 col-md-2 mb-0">
                                                    <dt class="fw-normal text-truncate">0.45 mi</dt>
                                                    <dd class="text-secondary fs-sm mb-0 text-truncate">Distance</dd>
                                                </dl>

                                                <dl class="col-4 col-md-auto mb-0">
                                                    <dt class="fw-normal text-truncate text-warning"><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i
                                                            class="fas fa-star-half-alt"></i><i class="far fa-star"></i>
                                                    </dt>
                                                    <dd class="text-secondary fs-sm mb-0 text-truncate">63 Reviews</dd>
                                                </dl>
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.mb-2 pb-1 d-flex flex-row -->

                                        <div class="mb-2 pb-1 d-flex flex-row">
                                            <div class="counter-number"></div>

                                            <div class="row w-100">
                                                <dl class="col-12 col-md mb-1 mb-md-0">
                                                    <dt class="text-truncate"><a href="#">Aspire Arts Senior High
                                                            School</a></dt>
                                                    <dd class="text-secondary fs-sm mb-0 text-truncate">Charter - 6 to
                                                        12</dd>
                                                </dl>

                                                <dl class="col-4 col-md-2 mb-0">
                                                    <dt class="fw-normal text-truncate">528</dt>
                                                    <dd class="text-secondary fs-sm mb-0 text-truncate">Students</dd>
                                                </dl>

                                                <dl class="col-4 col-md-2 mb-0">
                                                    <dt class="fw-normal text-truncate">0.45 mi</dt>
                                                    <dd class="text-secondary fs-sm mb-0 text-truncate">Distance</dd>
                                                </dl>

                                                <dl class="col-4 col-md-auto mb-0">
                                                    <dt class="fw-normal text-truncate text-warning"><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i
                                                            class="fas fa-star-half-alt"></i><i class="far fa-star"></i>
                                                    </dt>
                                                    <dd class="text-secondary fs-sm mb-0 text-truncate">63 Reviews</dd>
                                                </dl>
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.mb-2 pb-1 d-flex flex-row -->
                                    </div>
                                    <!-- /.counter -->

                                    <h6 class="mt-4 mb-3">Health &amp; Medical</h6>

                                    <div class="counter mb-3">
                                        <div class="mb-2 pb-1 d-flex flex-row">
                                            <div class="counter-number"></div>

                                            <div class="row w-100">
                                                <dl class="col-12 col-md mb-1 mb-md-0">
                                                    <dt class="text-truncate"><a href="#">O'Donor Hospital</a></dt>
                                                    <dd class="text-secondary fs-sm mb-0 text-truncate">Hospital</dd>
                                                </dl>

                                                <dl class="col-8 col-md-2 mb-0">
                                                    <dt class="fw-normal text-truncate">0.3 mi</dt>
                                                    <dd class="text-secondary fs-sm mb-0 text-truncate">Distance</dd>
                                                </dl>

                                                <dl class="col-4 col-md-auto mb-0">
                                                    <dt class="fw-normal text-truncate text-warning"><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i
                                                            class="fas fa-star-half-alt"></i><i class="far fa-star"></i>
                                                    </dt>
                                                    <dd class="text-secondary fs-sm mb-0 text-truncate">60 Reviews</dd>
                                                </dl>
                                            </div>
                                            <!-- /.row -->
                                        </div>

                                        <div class="mb-2 pb-1 d-flex flex-row">
                                            <div class="counter-number"></div>

                                            <div class="row w-100">
                                                <dl class="col-12 col-md mb-1 mb-md-0">
                                                    <dt class="text-truncate"><a href="#">Children's Hospital of New
                                                            York</a></dt>
                                                    <dd class="text-secondary fs-sm mb-0 text-truncate">Hospital</dd>
                                                </dl>

                                                <dl class="col-8 col-md-2 mb-0">
                                                    <dt class="fw-normal text-truncate">0.1 mi</dt>
                                                    <dd class="text-secondary fs-sm mb-0 text-truncate">Distance</dd>
                                                </dl>

                                                <dl class="col-4 col-md-auto mb-0">
                                                    <dt class="fw-normal text-truncate text-warning"><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i
                                                            class="fas fa-star-half-alt"></i><i class="far fa-star"></i>
                                                    </dt>
                                                    <dd class="text-secondary fs-sm mb-0 text-truncate">40 Reviews</dd>
                                                </dl>
                                            </div>
                                            <!-- /.row -->
                                        </div>

                                        <div class="mb-2 pb-1 d-flex flex-row">
                                            <div class="counter-number"></div>

                                            <div class="row w-100">
                                                <dl class="col-12 col-md mb-1 mb-md-0">
                                                    <dt class="text-truncate"><a href="#">West Blue General Hospital</a>
                                                    </dt>
                                                    <dd class="text-secondary fs-sm mb-0 text-truncate">Hospital</dd>
                                                </dl>

                                                <dl class="col-8 col-md-2 mb-0">
                                                    <dt class="fw-normal text-truncate">0.3 mi</dt>
                                                    <dd class="text-secondary fs-sm mb-0 text-truncate">Distance</dd>
                                                </dl>

                                                <dl class="col-4 col-md-auto mb-0">
                                                    <dt class="fw-normal text-truncate text-warning"><i
                                                            class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                            class="fas fa-star"></i><i
                                                            class="fas fa-star-half-alt"></i><i class="far fa-star"></i>
                                                    </dt>
                                                    <dd class="text-secondary fs-sm mb-0 text-truncate">90 Reviews</dd>
                                                </dl>
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                    </div>
                                    <!-- /.counter -->
                                </div>
                            </div>
                            <!-- /#accordionWhatsNearbyCollapse.accordion-collapse collapse  show -->
                        </div>
                        <!-- /.accordion-item  rounded shadow-sm -->
                    </div>
                    <!-- /.accordion  mb-4" id="accordionWhatsNearby -->
                </div>
                <!-- /.col-12 col-lg-9 -->

                <div class="col-12 col-lg-3">
                    <div class="sticky-top pt-6 mt-n6 mb-4 zi-1">
                        <ul class="nav nav-tabs" id="contactTab" role="tablist">
                            <li class="nav-item w-50" role="presentation">
                                <button class="nav-link w-100 active shadow-sm border-0 py-3" id="schedulleTab"
                                    data-bs-toggle="tab" data-bs-target="#schedulle" type="button" role="tab"
                                    aria-controls="schedulle" aria-selected="true">Schedulle a tour</button>
                            </li>
                            <li class="nav-item w-50" role="presentation">
                                <button class="nav-link w-100 shadow-sm border-0 py-3" id="requestInfoTab"
                                    data-bs-toggle="tab" data-bs-target="#requestInfo" type="button" role="tab"
                                    aria-controls="requestInfo" aria-selected="false">Request Info</button>
                            </li>
                        </ul>
                        <!-- /.nav nav-tabs -->

                        <div class="tab-content bg-white position-relative shadow-sm zi-20" id="contactTabContent">
                            <div class="tab-pane fade p-3 show active" id="schedulle" role="tabpanel"
                                aria-labelledby="schedulleTab">
                                <form action="#" class="">
                                    <div class="btn-group w-100 mb-3" role="group">
                                        <input type="radio" class="btn-check" name="schedulleVia"
                                            id="schedulleViaInPerson" checked />
                                        <label class="btn btn-outline-primary btn-default shadow-none fw-bold w-50"
                                            for="schedulleViaInPerson"><i
                                                class="fas fa-check"></i>In&nbsp;Person</label>
                                        <input type="radio" class="btn-check" name="schedulleVia"
                                            id="schedulleViavideoChat" />
                                        <label class="btn btn-outline-primary btn-default shadow-none fw-bold w-50"
                                            for="schedulleViavideoChat"><i
                                                class="fas fa-check"></i>Video&nbsp;Chat</label>
                                    </div>
                                    <!-- /.btn-group -->

                                    <div class="mb-3">
                                        <label for="schedulleName" class="form-label fw-bold fs-sm">Full Name</label>
                                        <input type="text" class="form-control shadow-none" id="schedulleName"
                                            placeholder="Your Full Name" />
                                    </div>

                                    <div class="mb-3">
                                        <label for="schedulleEmail" class="form-label fw-bold fs-sm">Email</label>
                                        <input type="email" class="form-control shadow-none" id="schedulleEmail"
                                            placeholder="Your Email" />
                                    </div>

                                    <div class="mb-3">
                                        <label for="schedullePhone" class="form-label fw-bold fs-sm">Phone</label>
                                        <input type="text" class="form-control shadow-none" id="schedullePhone"
                                            placeholder="Your Phone" />
                                    </div>

                                    <div class="mb-3">
                                        <label for="schedulleMessage" class="form-label fw-bold fs-sm">Message</label>
                                        <textarea class="form-control shadow-none" id="schedulleMessage"
                                            rows="3">I'm Interested in buying home at 70 Sagamoga Hill Road, San Jose, NY 110000</textarea>
                                    </div>

                                    <div>
                                        <button type="submit" class="btn btn-primary w-100 mb-2 fw-bold"><i
                                                class="fas fa-calendar-alt me-2"></i>Schedulle a Tour</button>
                                        <p class="fs-sm text-secondary">Its free, with no obligation &mdash; cancel
                                            anytime.</p>
                                    </div>
                                </form>
                            </div>
                            <!-- /.tab-pane -->

                            <div class="tab-pane fade p-3" id="requestInfo" role="tabpanel"
                                aria-labelledby="requestInfoTab">
                                <form action="#">
                                    <div class="mb-3">
                                        <label for="requestName" class="form-label fw-bold fs-sm">Full Name</label>
                                        <input type="text" class="form-control shadow-none" id="requestName"
                                            placeholder="Your Full Name" />
                                    </div>

                                    <div class="mb-3">
                                        <label for="requestEmail" class="form-label fw-bold fs-sm">Email</label>
                                        <input type="email" class="form-control shadow-none" id="requestEmail"
                                            placeholder="Your Email" />
                                    </div>

                                    <div class="mb-3">
                                        <label for="requestPhone" class="form-label fw-bold fs-sm">Phone</label>
                                        <input type="text" class="form-control shadow-none" id="requestPhone"
                                            placeholder="Your Phone" />
                                    </div>

                                    <div class="mb-3">
                                        <label for="requestMessage" class="form-label fw-bold fs-sm">Message</label>
                                        <textarea class="form-control shadow-none" id="requestMessage"
                                            rows="3">I'm Interested in buying home at 70 Sagamoga Hill Road, San Jose, NY 110000</textarea>
                                    </div>

                                    <div>
                                        <button type="submit" class="btn btn-primary w-100 fw-bold"><i
                                                class="fas fa-info-circle me-2"></i>Request Info</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div>
                </div>
                <!-- /.col-12 col-lg-3 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-xl position-relative -->
    </section>
    <!-- #listing-detail-1.section pb-5 pb-lg-6 -->

    <section id="similar-homes" class="section pt-5 pb-4">
        <div class="bg bg-img position-absolute bg-secondary o-10" data-bg-img=".img"></div>
        <!-- /.bg bg-img position-absolute bg-secondary o-10 -->

        <div class="container-xl position-relative">
            <header class="section-header mb-5">
                <h2 class="fs-3 text-start section-title mb-3">Similar Homes</h2>
            </header>
            <!-- /.section-header mb-5 -->
        </div>
        <!-- /.container-xl position-relative -->

        <div class="swiper-container with-pagination">
            <div id="similar-homes-swiper" class="swiper" data-js-swiper="auto">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="container-xl position-relative">
                            <div class="row properties g-4">
                                <div class="col-6 col-md-2 d-flex align-items-stretch">
                                    <div class="card shadow-sm shadow-hover trans-base o-hover-all h-100">
                                        <div class="card-img-top overflow-hidden position-relative">
                                            <img src="http://assets.coolorize.com/homes/5-3/md/aubrey-odom-ITzfgP77DTg-unsplash.jpg"
                                                class="w-100" alt="Image" />

                                            <div class="overlay position-absolute bg-dark o-25"></div>

                                            <div class="overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column">
                                                <div class="overlay-top d-flex flex-row">
                                                    <a href="http://html.coolorize.com/discoverize/default/listing-search-header.html"
                                                        class="position-relative zi-20 badge text-dark bg-white o-50 o-100-hover trans-base">Apartments</a>
                                                </div>
                                                <!-- /.overlay-top d-flex flex-row -->
                                            </div>
                                            <!-- /.overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column -->
                                        </div>
                                        <!-- /.card-img-top overflow-hidden position-relative -->

                                        <div class="card-body pt-2">
                                            <p class="card-text mb-1 d-flex flex-row align-items-center w-100">
                                                <a href="http://html.coolorize.com/discoverize/default/listing-detail-5.html"
                                                    class="stretched-link fs-5 fw-bold trans-base">$255,000</a>
                                            </p>

                                            <p class="card-text text-secondary mb-1 text-truncate">70 Sagamoga Hill
                                                Road, San Jose, NY 110000</p>

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
                                <!-- /.col-6 col-md-3 d-flex align-items-stretch -->

                                <div class="col-6 col-md-2 d-flex align-items-stretch">
                                    <div class="card shadow-sm shadow-hover trans-base o-hover-all h-100">
                                        <div class="card-img-top overflow-hidden position-relative">
                                            <img src="http://assets.coolorize.com/homes/5-3/md/chi-m-R1uiDu8vBh0-unsplash.jpg"
                                                class="w-100" alt="Image" />

                                            <div class="overlay position-absolute bg-dark o-25"></div>

                                            <div class="overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column">
                                                <div class="overlay-top d-flex flex-row">
                                                    <a href="http://html.coolorize.com/discoverize/default/listing-search-header.html"
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
                                                <a href="http://html.coolorize.com/discoverize/default/listing-detail-5.html"
                                                    class="stretched-link fs-5 fw-bold trans-base">$225,000</a>
                                            </p>

                                            <p class="card-text text-secondary mb-1 text-truncate">878 Auburn City, Port
                                                Washington, CA 110000</p>

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
                                <!-- /.col-6 col-md-3 d-flex align-items-stretch -->

                                <div class="col-6 col-md-2 d-flex align-items-stretch">
                                    <div class="card shadow-sm shadow-hover trans-base o-hover-all h-100">
                                        <div class="card-img-top overflow-hidden position-relative">
                                            <img src="http://assets.coolorize.com/homes/5-3/md/florian-schmidinger-b_79nOqf95I-unsplash.jpg"
                                                class="w-100" alt="Image" />

                                            <div class="overlay position-absolute bg-dark o-25"></div>

                                            <div class="overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column">
                                                <div class="overlay-top d-flex flex-row">
                                                    <a href="http://html.coolorize.com/discoverize/default/listing-search-header.html"
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
                                                <a href="http://html.coolorize.com/discoverize/default/listing-detail-5.html"
                                                    class="stretched-link fs-5 fw-bold trans-base">$275,000</a>
                                            </p>

                                            <p class="card-text text-secondary mb-1 text-truncate">456 Park Avenue,
                                                256A, Westlake, NY 110000</p>

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
                                <!-- /.col-6 col-md-3 d-flex align-items-stretch -->

                                <div class="col-6 col-md-2 d-flex align-items-stretch">
                                    <div class="card shadow-sm shadow-hover trans-base o-hover-all h-100">
                                        <div class="card-img-top overflow-hidden position-relative">
                                            <img src="http://assets.coolorize.com/homes/5-3/md/gabriel-WVT8Eck_3AQ-unsplash.jpg"
                                                class="w-100" alt="Image" />

                                            <div class="overlay position-absolute bg-dark o-25"></div>

                                            <div class="overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column">
                                                <div class="overlay-top d-flex flex-row">
                                                    <a href="http://html.coolorize.com/discoverize/default/listing-search-header.html"
                                                        class="position-relative zi-20 badge text-dark bg-white o-50 o-100-hover trans-base">Bungalow</a>
                                                </div>
                                                <!-- /.overlay-top d-flex flex-row -->
                                            </div>
                                            <!-- /.overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column -->
                                        </div>
                                        <!-- /.card-img-top overflow-hidden position-relative -->

                                        <div class="card-body pt-2">
                                            <p class="card-text mb-1 d-flex flex-row align-items-center w-100">
                                                <a href="http://html.coolorize.com/discoverize/default/listing-detail-5.html"
                                                    class="stretched-link fs-5 fw-bold trans-base">$254,000</a>
                                            </p>

                                            <p class="card-text text-secondary mb-1 text-truncate">283 Travus High, San
                                                Jose, TX 110000</p>

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
                                <!-- /.col-6 col-md-3 d-flex align-items-stretch -->

                                <div class="col-6 col-md-2 d-flex align-items-stretch">
                                    <div class="card shadow-sm shadow-hover trans-base o-hover-all h-100">
                                        <div class="card-img-top overflow-hidden position-relative">
                                            <img src="http://assets.coolorize.com/homes/5-3/md/jacques-bopp-wtzOhxEX4WU-unsplash.jpg"
                                                class="w-100" alt="Image" />

                                            <div class="overlay position-absolute bg-dark o-25"></div>

                                            <div class="overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column">
                                                <div class="overlay-top d-flex flex-row">
                                                    <a href="http://html.coolorize.com/discoverize/default/listing-search-header.html"
                                                        class="position-relative zi-20 badge text-dark bg-white o-50 o-100-hover trans-base">Bungalow</a>
                                                </div>
                                                <!-- /.overlay-top d-flex flex-row -->
                                            </div>
                                            <!-- /.overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column -->
                                        </div>
                                        <!-- /.card-img-top overflow-hidden position-relative -->

                                        <div class="card-body pt-2">
                                            <p class="card-text mb-1 d-flex flex-row align-items-center w-100">
                                                <a href="http://html.coolorize.com/discoverize/default/listing-detail-5.html"
                                                    class="stretched-link fs-5 fw-bold trans-base">$650,000</a>
                                            </p>

                                            <p class="card-text text-secondary mb-1 text-truncate">30 Beach Road, Port
                                                Washington, NY 110000</p>

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
                                <!-- /.col-6 col-md-3 d-flex align-items-stretch -->

                                <div class="col-6 col-md-2 d-flex align-items-stretch">
                                    <div class="card shadow-sm shadow-hover trans-base o-hover-all h-100">
                                        <div class="card-img-top overflow-hidden position-relative">
                                            <img src="http://assets.coolorize.com/homes/5-3/md/kevin-angelso-Vfq3hU_LyKc-unsplash.jpg"
                                                class="w-100" alt="Image" />

                                            <div class="overlay position-absolute bg-dark o-25"></div>

                                            <div class="overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column">
                                                <div class="overlay-top d-flex flex-row">
                                                    <a href="http://html.coolorize.com/discoverize/default/listing-search-header.html"
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
                                                <a href="http://html.coolorize.com/discoverize/default/listing-detail-5.html"
                                                    class="stretched-link fs-5 fw-bold trans-base">$150,000</a>
                                            </p>

                                            <p class="card-text text-secondary mb-1 text-truncate">70 Lambok Hill Road,
                                                Port Washington, NY 110000</p>

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
                                <!-- /.col-6 col-md-3 d-flex align-items-stretch -->
                            </div>
                            <!-- /.row properties -->
                        </div>
                        <!-- /.container-xl position-relative -->
                    </div>
                    <!-- /.swiper-slide -->

                    <div class="swiper-slide">
                        <div class="container-xl position-relative">
                            <div class="row properties g-4">
                                <div class="col-6 col-md-2 d-flex align-items-stretch">
                                    <div class="card shadow-sm shadow-hover trans-base o-hover-all h-100">
                                        <div class="card-img-top overflow-hidden position-relative">
                                            <img src="http://assets.coolorize.com/homes/5-3/md/pexels-binyamin-mellish-186077.jpg"
                                                class="w-100" alt="Image" />

                                            <div class="overlay position-absolute bg-dark o-25"></div>

                                            <div class="overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column">
                                                <div class="overlay-top d-flex flex-row">
                                                    <a href="http://html.coolorize.com/discoverize/default/listing-search-header.html"
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
                                                <a href="http://html.coolorize.com/discoverize/default/listing-detail-5.html"
                                                    class="stretched-link fs-5 fw-bold trans-base">$386,000</a>
                                            </p>

                                            <p class="card-text text-secondary mb-1 text-truncate">70 Mogajaya Hill
                                                Road, Port Washington, NY 110000</p>

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
                                <!-- /.col-6 col-md-3 d-flex align-items-stretch -->

                                <div class="col-6 col-md-2 d-flex align-items-stretch">
                                    <div class="card shadow-sm shadow-hover trans-base o-hover-all h-100">
                                        <div class="card-img-top overflow-hidden position-relative">
                                            <img src="http://assets.coolorize.com/homes/5-3/md/pexels-trygve-finkelsen-2893177.jpg"
                                                class="w-100" alt="Image" />

                                            <div class="overlay position-absolute bg-dark o-25"></div>

                                            <div class="overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column">
                                                <div class="overlay-top d-flex flex-row">
                                                    <a href="http://html.coolorize.com/discoverize/default/listing-search-header.html"
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
                                                <a href="http://html.coolorize.com/discoverize/default/listing-detail-5.html"
                                                    class="stretched-link fs-5 fw-bold trans-base">$390,000</a>
                                            </p>

                                            <p class="card-text text-secondary mb-1 text-truncate">40 Sunburn Hill Road,
                                                Port Washington, NY 110000</p>

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
                                <!-- /.col-6 col-md-3 d-flex align-items-stretch -->

                                <div class="col-6 col-md-2 d-flex align-items-stretch">
                                    <div class="card shadow-sm shadow-hover trans-base o-hover-all h-100">
                                        <div class="card-img-top overflow-hidden position-relative">
                                            <img src="http://assets.coolorize.com/homes/5-3/md/phil-hearing-IYfp2Ixe9nM-unsplash.jpg"
                                                class="w-100" alt="Image" />

                                            <div class="overlay position-absolute bg-dark o-25"></div>

                                            <div class="overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column">
                                                <div class="overlay-top d-flex flex-row">
                                                    <a href="http://html.coolorize.com/discoverize/default/listing-search-header.html"
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
                                                <a href="http://html.coolorize.com/discoverize/default/listing-detail-5.html"
                                                    class="stretched-link fs-5 fw-bold trans-base">$385,000</a>
                                            </p>

                                            <p class="card-text text-secondary mb-1 text-truncate">50 Ground Hound Road,
                                                Port Washington, NY 110000</p>

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
                                <!-- /.col-6 col-md-3 d-flex align-items-stretch -->

                                <div class="col-6 col-md-2 d-flex align-items-stretch">
                                    <div class="card shadow-sm shadow-hover trans-base o-hover-all h-100">
                                        <div class="card-img-top overflow-hidden position-relative">
                                            <img src="http://assets.coolorize.com/homes/5-3/md/pexels-binyamin-mellish-1396132.jpg"
                                                class="w-100" alt="Image" />

                                            <div class="overlay position-absolute bg-dark o-25"></div>

                                            <div class="overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column">
                                                <div class="overlay-top d-flex flex-row">
                                                    <a href="http://html.coolorize.com/discoverize/default/listing-search-header.html"
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
                                                <a href="http://html.coolorize.com/discoverize/default/listing-detail-5.html"
                                                    class="stretched-link fs-5 fw-bold trans-base">$275,000</a>
                                            </p>

                                            <p class="card-text text-secondary mb-1 text-truncate">456 Park Avenue,
                                                256A, Westlake, NY 110000</p>

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
                                <!-- /.col-6 col-md-3 d-flex align-items-stretch -->

                                <div class="col-6 col-md-2 d-flex align-items-stretch">
                                    <div class="card shadow-sm shadow-hover trans-base o-hover-all h-100">
                                        <div class="card-img-top overflow-hidden position-relative">
                                            <img src="http://assets.coolorize.com/homes/5-3/md/pexels-pixabay-221540.jpg"
                                                class="w-100" alt="Image" />

                                            <div class="overlay position-absolute bg-dark o-25"></div>

                                            <div class="overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column">
                                                <div class="overlay-top d-flex flex-row">
                                                    <a href="http://html.coolorize.com/discoverize/default/listing-search-header.html"
                                                        class="position-relative zi-20 badge text-dark bg-white o-50 o-100-hover trans-base">Bungalow</a>
                                                </div>
                                                <!-- /.overlay-top d-flex flex-row -->
                                            </div>
                                            <!-- /.overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column -->
                                        </div>
                                        <!-- /.card-img-top overflow-hidden position-relative -->

                                        <div class="card-body pt-2">
                                            <p class="card-text mb-1 d-flex flex-row align-items-center w-100">
                                                <a href="http://html.coolorize.com/discoverize/default/listing-detail-5.html"
                                                    class="stretched-link fs-5 fw-bold trans-base">$254,000</a>
                                            </p>

                                            <p class="card-text text-secondary mb-1 text-truncate">283 Travus High, San
                                                Jose, TX 110000</p>

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
                                <!-- /.col-6 col-md-3 d-flex align-items-stretch -->

                                <div class="col-6 col-md-2 d-flex align-items-stretch">
                                    <div class="card shadow-sm shadow-hover trans-base o-hover-all h-100">
                                        <div class="card-img-top overflow-hidden position-relative">
                                            <img src="http://assets.coolorize.com/homes/5-3/md/jacques-bopp-Hh18POSx5qk-unsplash.jpg"
                                                class="w-100" alt="Image" />

                                            <div class="overlay position-absolute bg-dark o-25"></div>

                                            <div class="overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column">
                                                <div class="overlay-top d-flex flex-row">
                                                    <a href="http://html.coolorize.com/discoverize/default/listing-search-header.html"
                                                        class="position-relative zi-20 badge text-dark bg-white o-50 o-100-hover trans-base">Condominiums</a>
                                                </div>
                                                <!-- /.overlay-top d-flex flex-row -->
                                            </div>
                                            <!-- /.overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column -->
                                        </div>
                                        <!-- /.card-img-top overflow-hidden position-relative -->

                                        <div class="card-body pt-2">
                                            <p class="card-text mb-1 d-flex flex-row align-items-center w-100">
                                                <a href="http://html.coolorize.com/discoverize/default/listing-detail-5.html"
                                                    class="stretched-link fs-5 fw-bold trans-base">$350,000</a>
                                            </p>

                                            <p class="card-text text-secondary mb-1 text-truncate">123 Brick Kiln Road,
                                                Brigeshington, CA 110000</p>

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
                                <!-- /.col-6 col-md-3 d-flex align-items-stretch -->
                            </div>
                            <!-- /.row properties -->
                        </div>
                        <!-- /.container-xl position-relative -->
                    </div>
                    <!-- /.swiper-slide -->

                    <div class="swiper-slide">
                        <div class="container-xl position-relative">
                            <div class="row properties g-4">
                                <div class="col-6 col-md-2 d-flex align-items-stretch">
                                    <div class="card shadow-sm shadow-hover trans-base o-hover-all h-100">
                                        <div class="card-img-top overflow-hidden position-relative">
                                            <img src="http://assets.coolorize.com/homes/5-3/md/pexels-scott-webb-1029599.jpg"
                                                class="w-100" alt="Image" />

                                            <div class="overlay position-absolute bg-dark o-25"></div>

                                            <div class="overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column">
                                                <div class="overlay-top d-flex flex-row">
                                                    <a href="http://html.coolorize.com/discoverize/default/listing-search-header.html"
                                                        class="position-relative zi-20 badge text-dark bg-white o-50 o-100-hover trans-base">Condominiums</a>
                                                </div>
                                                <!-- /.overlay-top d-flex flex-row -->
                                            </div>
                                            <!-- /.overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column -->
                                        </div>
                                        <!-- /.card-img-top overflow-hidden position-relative -->

                                        <div class="card-body pt-2">
                                            <p class="card-text mb-1 d-flex flex-row align-items-center w-100">
                                                <a href="http://html.coolorize.com/discoverize/default/listing-detail-5.html"
                                                    class="stretched-link fs-5 fw-bold trans-base">$350,000</a>
                                            </p>

                                            <p class="card-text text-secondary mb-1 text-truncate">123 Brick Kiln Road,
                                                Brigeshington, CA 110000</p>

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
                                <!-- /.col-6 col-md-3 d-flex align-items-stretch -->

                                <div class="col-6 col-md-2 d-flex align-items-stretch">
                                    <div class="card shadow-sm shadow-hover trans-base o-hover-all h-100">
                                        <div class="card-img-top overflow-hidden position-relative">
                                            <img src="http://assets.coolorize.com/homes/5-3/md/milan-seitler-2WvijgM7uTo-unsplash.jpg"
                                                class="w-100" alt="Image" />

                                            <div class="overlay position-absolute bg-dark o-25"></div>

                                            <div class="overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column">
                                                <div class="overlay-top d-flex flex-row">
                                                    <a href="http://html.coolorize.com/discoverize/default/listing-search-header.html"
                                                        class="position-relative zi-20 badge text-dark bg-white o-50 o-100-hover trans-base">Condominiums</a>
                                                </div>
                                                <!-- /.overlay-top d-flex flex-row -->
                                            </div>
                                            <!-- /.overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column -->
                                        </div>
                                        <!-- /.card-img-top overflow-hidden position-relative -->

                                        <div class="card-body pt-2">
                                            <p class="card-text mb-1 d-flex flex-row align-items-center w-100">
                                                <a href="http://html.coolorize.com/discoverize/default/listing-detail-5.html"
                                                    class="stretched-link fs-5 fw-bold trans-base">$210,000</a>
                                            </p>

                                            <p class="card-text text-secondary mb-1 text-truncate">70 Great Hill Road,
                                                Port Washington, NY 110000</p>

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
                                <!-- /.col-6 col-md-3 d-flex align-items-stretch -->

                                <div class="col-6 col-md-2 d-flex align-items-stretch">
                                    <div class="card shadow-sm shadow-hover trans-base o-hover-all h-100">
                                        <div class="card-img-top overflow-hidden position-relative">
                                            <img src="http://assets.coolorize.com/homes/5-3/md/mr-autthaporn-pradidpong-EFV7e9r7Dfg-unsplash.jpg"
                                                class="w-100" alt="Image" />

                                            <div class="overlay position-absolute bg-dark o-25"></div>

                                            <div class="overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column">
                                                <div class="overlay-top d-flex flex-row">
                                                    <a href="http://html.coolorize.com/discoverize/default/listing-search-header.html"
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
                                                <a href="http://html.coolorize.com/discoverize/default/listing-detail-5.html"
                                                    class="stretched-link fs-5 fw-bold trans-base">$190,000</a>
                                            </p>

                                            <p class="card-text text-secondary mb-1 text-truncate">70 Sagamoga Hill
                                                Road, Port Washington, NY 110000</p>

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
                                <!-- /.col-6 col-md-3 d-flex align-items-stretch -->
                            </div>
                            <!-- /.row properties -->
                        </div>
                        <!-- /.container-xl position-relative -->
                    </div>
                    <!-- /.swiper-slide -->
                </div>
                <!-- /.swiper-wrapper -->
            </div>
            <!-- /#similar-homes-swiper.swiper -->

            <div class="swiper-pagination-container container-xl">
                <div class="d-flex flex-row justify-content-center">
                    <div data-swiper-id="#similar-homes-swiper" class="swiper-pagination w-auto bottom-0"
                        data-swiper-pagination-limit="2"></div>

                    <a href="http://html.coolorize.com/discoverize/default/listing-search-header.html"
                        class="btn btn-link btn-sm btn-more text-uppercase fw-bold shadow-none o-50 o-100-hover ms-3 trans-base px-0">All
                        Similar Homes<i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
            </div>

            <div class="swiper-navigation-container container-xl">
                <a href="#similar-homes-swiper"
                    class="swiper-button-next btn btn-primary btn-default shadow-none o-50 o-100-hover"><i
                        class="d-inline-block fas fa-angle-right"></i></a>
                <a href="#similar-homes-swiper"
                    class="swiper-button-prev btn btn-primary btn-default shadow-none o-50 o-100-hover"><i
                        class="d-inline-block fas fa-angle-left"></i></a>
            </div>
            <!-- /.swiper-navigation container-xl -->
        </div>
        <!-- /.swiper-container with-pagination -->
    </section>
    <!-- #similar-homes.section pt-5 pb-4 -->

    <section id="homes-around-600000" class="section pt-5 pb-4">
        <div class="bg bg-img position-absolute bg-light" data-bg-img=".img"></div>
        <!-- /.bg bg-img position-absolute bg-light -->

        <div class="container-xl position-relative">
            <header class="section-header mb-5">
                <h2 class="fs-3 text-start section-title mb-3">Homes Around $600,000</h2>
            </header>
            <!-- /.section-header mb-5 -->
        </div>
        <!-- /.container-xl position-relative -->

        <div class="swiper-container with-pagination">
            <div id="homes-around-600000-swiper" class="swiper" data-js-swiper="auto">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="container-xl position-relative">
                            <div class="row properties g-4">
                                <div class="col-6 col-md-2 d-flex align-items-stretch">
                                    <div class="card shadow-sm shadow-hover trans-base o-hover-all h-100">
                                        <div class="card-img-top overflow-hidden position-relative">
                                            <img src="http://assets.coolorize.com/homes/5-3/md/aubrey-odom-ITzfgP77DTg-unsplash.jpg"
                                                class="w-100" alt="Image" />

                                            <div class="overlay position-absolute bg-dark o-25"></div>

                                            <div class="overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column">
                                                <div class="overlay-top d-flex flex-row">
                                                    <a href="http://html.coolorize.com/discoverize/default/listing-search-header.html"
                                                        class="position-relative zi-20 badge text-dark bg-white o-50 o-100-hover trans-base">Apartments</a>
                                                </div>
                                                <!-- /.overlay-top d-flex flex-row -->
                                            </div>
                                            <!-- /.overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column -->
                                        </div>
                                        <!-- /.card-img-top overflow-hidden position-relative -->

                                        <div class="card-body pt-2">
                                            <p class="card-text mb-1 d-flex flex-row align-items-center w-100">
                                                <a href="http://html.coolorize.com/discoverize/default/listing-detail-5.html"
                                                    class="stretched-link fs-5 fw-bold trans-base">$255,000</a>
                                            </p>

                                            <p class="card-text text-secondary mb-1 text-truncate">70 Sagamoga Hill
                                                Road, San Jose, NY 110000</p>

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
                                <!-- /.col-6 col-md-3 d-flex align-items-stretch -->

                                <div class="col-6 col-md-2 d-flex align-items-stretch">
                                    <div class="card shadow-sm shadow-hover trans-base o-hover-all h-100">
                                        <div class="card-img-top overflow-hidden position-relative">
                                            <img src="http://assets.coolorize.com/homes/5-3/md/chi-m-R1uiDu8vBh0-unsplash.jpg"
                                                class="w-100" alt="Image" />

                                            <div class="overlay position-absolute bg-dark o-25"></div>

                                            <div class="overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column">
                                                <div class="overlay-top d-flex flex-row">
                                                    <a href="http://html.coolorize.com/discoverize/default/listing-search-header.html"
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
                                                <a href="http://html.coolorize.com/discoverize/default/listing-detail-5.html"
                                                    class="stretched-link fs-5 fw-bold trans-base">$225,000</a>
                                            </p>

                                            <p class="card-text text-secondary mb-1 text-truncate">878 Auburn City, Port
                                                Washington, CA 110000</p>

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
                                <!-- /.col-6 col-md-3 d-flex align-items-stretch -->

                                <div class="col-6 col-md-2 d-flex align-items-stretch">
                                    <div class="card shadow-sm shadow-hover trans-base o-hover-all h-100">
                                        <div class="card-img-top overflow-hidden position-relative">
                                            <img src="http://assets.coolorize.com/homes/5-3/md/florian-schmidinger-b_79nOqf95I-unsplash.jpg"
                                                class="w-100" alt="Image" />

                                            <div class="overlay position-absolute bg-dark o-25"></div>

                                            <div class="overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column">
                                                <div class="overlay-top d-flex flex-row">
                                                    <a href="http://html.coolorize.com/discoverize/default/listing-search-header.html"
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
                                                <a href="http://html.coolorize.com/discoverize/default/listing-detail-5.html"
                                                    class="stretched-link fs-5 fw-bold trans-base">$275,000</a>
                                            </p>

                                            <p class="card-text text-secondary mb-1 text-truncate">456 Park Avenue,
                                                256A, Westlake, NY 110000</p>

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
                                <!-- /.col-6 col-md-3 d-flex align-items-stretch -->

                                <div class="col-6 col-md-2 d-flex align-items-stretch">
                                    <div class="card shadow-sm shadow-hover trans-base o-hover-all h-100">
                                        <div class="card-img-top overflow-hidden position-relative">
                                            <img src="http://assets.coolorize.com/homes/5-3/md/gabriel-WVT8Eck_3AQ-unsplash.jpg"
                                                class="w-100" alt="Image" />

                                            <div class="overlay position-absolute bg-dark o-25"></div>

                                            <div class="overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column">
                                                <div class="overlay-top d-flex flex-row">
                                                    <a href="http://html.coolorize.com/discoverize/default/listing-search-header.html"
                                                        class="position-relative zi-20 badge text-dark bg-white o-50 o-100-hover trans-base">Bungalow</a>
                                                </div>
                                                <!-- /.overlay-top d-flex flex-row -->
                                            </div>
                                            <!-- /.overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column -->
                                        </div>
                                        <!-- /.card-img-top overflow-hidden position-relative -->

                                        <div class="card-body pt-2">
                                            <p class="card-text mb-1 d-flex flex-row align-items-center w-100">
                                                <a href="http://html.coolorize.com/discoverize/default/listing-detail-5.html"
                                                    class="stretched-link fs-5 fw-bold trans-base">$254,000</a>
                                            </p>

                                            <p class="card-text text-secondary mb-1 text-truncate">283 Travus High, San
                                                Jose, TX 110000</p>

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
                                <!-- /.col-6 col-md-3 d-flex align-items-stretch -->

                                <div class="col-6 col-md-2 d-flex align-items-stretch">
                                    <div class="card shadow-sm shadow-hover trans-base o-hover-all h-100">
                                        <div class="card-img-top overflow-hidden position-relative">
                                            <img src="http://assets.coolorize.com/homes/5-3/md/jacques-bopp-wtzOhxEX4WU-unsplash.jpg"
                                                class="w-100" alt="Image" />

                                            <div class="overlay position-absolute bg-dark o-25"></div>

                                            <div class="overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column">
                                                <div class="overlay-top d-flex flex-row">
                                                    <a href="http://html.coolorize.com/discoverize/default/listing-search-header.html"
                                                        class="position-relative zi-20 badge text-dark bg-white o-50 o-100-hover trans-base">Bungalow</a>
                                                </div>
                                                <!-- /.overlay-top d-flex flex-row -->
                                            </div>
                                            <!-- /.overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column -->
                                        </div>
                                        <!-- /.card-img-top overflow-hidden position-relative -->

                                        <div class="card-body pt-2">
                                            <p class="card-text mb-1 d-flex flex-row align-items-center w-100">
                                                <a href="http://html.coolorize.com/discoverize/default/listing-detail-5.html"
                                                    class="stretched-link fs-5 fw-bold trans-base">$650,000</a>
                                            </p>

                                            <p class="card-text text-secondary mb-1 text-truncate">30 Beach Road, Port
                                                Washington, NY 110000</p>

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
                                <!-- /.col-6 col-md-3 d-flex align-items-stretch -->

                                <div class="col-6 col-md-2 d-flex align-items-stretch">
                                    <div class="card shadow-sm shadow-hover trans-base o-hover-all h-100">
                                        <div class="card-img-top overflow-hidden position-relative">
                                            <img src="http://assets.coolorize.com/homes/5-3/md/kevin-angelso-Vfq3hU_LyKc-unsplash.jpg"
                                                class="w-100" alt="Image" />

                                            <div class="overlay position-absolute bg-dark o-25"></div>

                                            <div class="overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column">
                                                <div class="overlay-top d-flex flex-row">
                                                    <a href="http://html.coolorize.com/discoverize/default/listing-search-header.html"
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
                                                <a href="http://html.coolorize.com/discoverize/default/listing-detail-5.html"
                                                    class="stretched-link fs-5 fw-bold trans-base">$150,000</a>
                                            </p>

                                            <p class="card-text text-secondary mb-1 text-truncate">70 Lambok Hill Road,
                                                Port Washington, NY 110000</p>

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
                                <!-- /.col-6 col-md-3 d-flex align-items-stretch -->
                            </div>
                            <!-- /.row properties -->
                        </div>
                        <!-- /.container-xl position-relative -->
                    </div>
                    <!-- /.swiper-slide -->

                    <div class="swiper-slide">
                        <div class="container-xl position-relative">
                            <div class="row properties g-4">
                                <div class="col-6 col-md-2 d-flex align-items-stretch">
                                    <div class="card shadow-sm shadow-hover trans-base o-hover-all h-100">
                                        <div class="card-img-top overflow-hidden position-relative">
                                            <img src="http://assets.coolorize.com/homes/5-3/md/pexels-binyamin-mellish-186077.jpg"
                                                class="w-100" alt="Image" />

                                            <div class="overlay position-absolute bg-dark o-25"></div>

                                            <div class="overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column">
                                                <div class="overlay-top d-flex flex-row">
                                                    <a href="http://html.coolorize.com/discoverize/default/listing-search-header.html"
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
                                                <a href="http://html.coolorize.com/discoverize/default/listing-detail-5.html"
                                                    class="stretched-link fs-5 fw-bold trans-base">$386,000</a>
                                            </p>

                                            <p class="card-text text-secondary mb-1 text-truncate">70 Mogajaya Hill
                                                Road, Port Washington, NY 110000</p>

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
                                <!-- /.col-6 col-md-3 d-flex align-items-stretch -->

                                <div class="col-6 col-md-2 d-flex align-items-stretch">
                                    <div class="card shadow-sm shadow-hover trans-base o-hover-all h-100">
                                        <div class="card-img-top overflow-hidden position-relative">
                                            <img src="http://assets.coolorize.com/homes/5-3/md/pexels-trygve-finkelsen-2893177.jpg"
                                                class="w-100" alt="Image" />

                                            <div class="overlay position-absolute bg-dark o-25"></div>

                                            <div class="overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column">
                                                <div class="overlay-top d-flex flex-row">
                                                    <a href="http://html.coolorize.com/discoverize/default/listing-search-header.html"
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
                                                <a href="http://html.coolorize.com/discoverize/default/listing-detail-5.html"
                                                    class="stretched-link fs-5 fw-bold trans-base">$390,000</a>
                                            </p>

                                            <p class="card-text text-secondary mb-1 text-truncate">40 Sunburn Hill Road,
                                                Port Washington, NY 110000</p>

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
                                <!-- /.col-6 col-md-3 d-flex align-items-stretch -->

                                <div class="col-6 col-md-2 d-flex align-items-stretch">
                                    <div class="card shadow-sm shadow-hover trans-base o-hover-all h-100">
                                        <div class="card-img-top overflow-hidden position-relative">
                                            <img src="http://assets.coolorize.com/homes/5-3/md/phil-hearing-IYfp2Ixe9nM-unsplash.jpg"
                                                class="w-100" alt="Image" />

                                            <div class="overlay position-absolute bg-dark o-25"></div>

                                            <div class="overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column">
                                                <div class="overlay-top d-flex flex-row">
                                                    <a href="http://html.coolorize.com/discoverize/default/listing-search-header.html"
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
                                                <a href="http://html.coolorize.com/discoverize/default/listing-detail-5.html"
                                                    class="stretched-link fs-5 fw-bold trans-base">$385,000</a>
                                            </p>

                                            <p class="card-text text-secondary mb-1 text-truncate">50 Ground Hound Road,
                                                Port Washington, NY 110000</p>

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
                                <!-- /.col-6 col-md-3 d-flex align-items-stretch -->

                                <div class="col-6 col-md-2 d-flex align-items-stretch">
                                    <div class="card shadow-sm shadow-hover trans-base o-hover-all h-100">
                                        <div class="card-img-top overflow-hidden position-relative">
                                            <img src="http://assets.coolorize.com/homes/5-3/md/pexels-binyamin-mellish-1396132.jpg"
                                                class="w-100" alt="Image" />

                                            <div class="overlay position-absolute bg-dark o-25"></div>

                                            <div class="overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column">
                                                <div class="overlay-top d-flex flex-row">
                                                    <a href="http://html.coolorize.com/discoverize/default/listing-search-header.html"
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
                                                <a href="http://html.coolorize.com/discoverize/default/listing-detail-5.html"
                                                    class="stretched-link fs-5 fw-bold trans-base">$275,000</a>
                                            </p>

                                            <p class="card-text text-secondary mb-1 text-truncate">456 Park Avenue,
                                                256A, Westlake, NY 110000</p>

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
                                <!-- /.col-6 col-md-3 d-flex align-items-stretch -->

                                <div class="col-6 col-md-2 d-flex align-items-stretch">
                                    <div class="card shadow-sm shadow-hover trans-base o-hover-all h-100">
                                        <div class="card-img-top overflow-hidden position-relative">
                                            <img src="http://assets.coolorize.com/homes/5-3/md/pexels-pixabay-221540.jpg"
                                                class="w-100" alt="Image" />

                                            <div class="overlay position-absolute bg-dark o-25"></div>

                                            <div class="overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column">
                                                <div class="overlay-top d-flex flex-row">
                                                    <a href="http://html.coolorize.com/discoverize/default/listing-search-header.html"
                                                        class="position-relative zi-20 badge text-dark bg-white o-50 o-100-hover trans-base">Bungalow</a>
                                                </div>
                                                <!-- /.overlay-top d-flex flex-row -->
                                            </div>
                                            <!-- /.overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column -->
                                        </div>
                                        <!-- /.card-img-top overflow-hidden position-relative -->

                                        <div class="card-body pt-2">
                                            <p class="card-text mb-1 d-flex flex-row align-items-center w-100">
                                                <a href="http://html.coolorize.com/discoverize/default/listing-detail-5.html"
                                                    class="stretched-link fs-5 fw-bold trans-base">$254,000</a>
                                            </p>

                                            <p class="card-text text-secondary mb-1 text-truncate">283 Travus High, San
                                                Jose, TX 110000</p>

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
                                <!-- /.col-6 col-md-3 d-flex align-items-stretch -->

                                <div class="col-6 col-md-2 d-flex align-items-stretch">
                                    <div class="card shadow-sm shadow-hover trans-base o-hover-all h-100">
                                        <div class="card-img-top overflow-hidden position-relative">
                                            <img src="http://assets.coolorize.com/homes/5-3/md/jacques-bopp-Hh18POSx5qk-unsplash.jpg"
                                                class="w-100" alt="Image" />

                                            <div class="overlay position-absolute bg-dark o-25"></div>

                                            <div class="overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column">
                                                <div class="overlay-top d-flex flex-row">
                                                    <a href="http://html.coolorize.com/discoverize/default/listing-search-header.html"
                                                        class="position-relative zi-20 badge text-dark bg-white o-50 o-100-hover trans-base">Condominiums</a>
                                                </div>
                                                <!-- /.overlay-top d-flex flex-row -->
                                            </div>
                                            <!-- /.overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column -->
                                        </div>
                                        <!-- /.card-img-top overflow-hidden position-relative -->

                                        <div class="card-body pt-2">
                                            <p class="card-text mb-1 d-flex flex-row align-items-center w-100">
                                                <a href="http://html.coolorize.com/discoverize/default/listing-detail-5.html"
                                                    class="stretched-link fs-5 fw-bold trans-base">$350,000</a>
                                            </p>

                                            <p class="card-text text-secondary mb-1 text-truncate">123 Brick Kiln Road,
                                                Brigeshington, CA 110000</p>

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
                                <!-- /.col-6 col-md-3 d-flex align-items-stretch -->
                            </div>
                            <!-- /.row properties -->
                        </div>
                        <!-- /.container-xl position-relative -->
                    </div>
                    <!-- /.swiper-slide -->

                    <div class="swiper-slide">
                        <div class="container-xl position-relative">
                            <div class="row properties g-4">
                                <div class="col-6 col-md-2 d-flex align-items-stretch">
                                    <div class="card shadow-sm shadow-hover trans-base o-hover-all h-100">
                                        <div class="card-img-top overflow-hidden position-relative">
                                            <img src="http://assets.coolorize.com/homes/5-3/md/pexels-scott-webb-1029599.jpg"
                                                class="w-100" alt="Image" />

                                            <div class="overlay position-absolute bg-dark o-25"></div>

                                            <div class="overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column">
                                                <div class="overlay-top d-flex flex-row">
                                                    <a href="http://html.coolorize.com/discoverize/default/listing-search-header.html"
                                                        class="position-relative zi-20 badge text-dark bg-white o-50 o-100-hover trans-base">Condominiums</a>
                                                </div>
                                                <!-- /.overlay-top d-flex flex-row -->
                                            </div>
                                            <!-- /.overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column -->
                                        </div>
                                        <!-- /.card-img-top overflow-hidden position-relative -->

                                        <div class="card-body pt-2">
                                            <p class="card-text mb-1 d-flex flex-row align-items-center w-100">
                                                <a href="http://html.coolorize.com/discoverize/default/listing-detail-5.html"
                                                    class="stretched-link fs-5 fw-bold trans-base">$350,000</a>
                                            </p>

                                            <p class="card-text text-secondary mb-1 text-truncate">123 Brick Kiln Road,
                                                Brigeshington, CA 110000</p>

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
                                <!-- /.col-6 col-md-3 d-flex align-items-stretch -->

                                <div class="col-6 col-md-2 d-flex align-items-stretch">
                                    <div class="card shadow-sm shadow-hover trans-base o-hover-all h-100">
                                        <div class="card-img-top overflow-hidden position-relative">
                                            <img src="http://assets.coolorize.com/homes/5-3/md/milan-seitler-2WvijgM7uTo-unsplash.jpg"
                                                class="w-100" alt="Image" />

                                            <div class="overlay position-absolute bg-dark o-25"></div>

                                            <div class="overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column">
                                                <div class="overlay-top d-flex flex-row">
                                                    <a href="http://html.coolorize.com/discoverize/default/listing-search-header.html"
                                                        class="position-relative zi-20 badge text-dark bg-white o-50 o-100-hover trans-base">Condominiums</a>
                                                </div>
                                                <!-- /.overlay-top d-flex flex-row -->
                                            </div>
                                            <!-- /.overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column -->
                                        </div>
                                        <!-- /.card-img-top overflow-hidden position-relative -->

                                        <div class="card-body pt-2">
                                            <p class="card-text mb-1 d-flex flex-row align-items-center w-100">
                                                <a href="http://html.coolorize.com/discoverize/default/listing-detail-5.html"
                                                    class="stretched-link fs-5 fw-bold trans-base">$210,000</a>
                                            </p>

                                            <p class="card-text text-secondary mb-1 text-truncate">70 Great Hill Road,
                                                Port Washington, NY 110000</p>

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
                                <!-- /.col-6 col-md-3 d-flex align-items-stretch -->

                                <div class="col-6 col-md-2 d-flex align-items-stretch">
                                    <div class="card shadow-sm shadow-hover trans-base o-hover-all h-100">
                                        <div class="card-img-top overflow-hidden position-relative">
                                            <img src="http://assets.coolorize.com/homes/5-3/md/mr-autthaporn-pradidpong-EFV7e9r7Dfg-unsplash.jpg"
                                                class="w-100" alt="Image" />

                                            <div class="overlay position-absolute bg-dark o-25"></div>

                                            <div class="overlay position-absolute px-3 pt-3 pb-2 d-flex flex-column">
                                                <div class="overlay-top d-flex flex-row">
                                                    <a href="http://html.coolorize.com/discoverize/default/listing-search-header.html"
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
                                                <a href="http://html.coolorize.com/discoverize/default/listing-detail-5.html"
                                                    class="stretched-link fs-5 fw-bold trans-base">$190,000</a>
                                            </p>

                                            <p class="card-text text-secondary mb-1 text-truncate">70 Sagamoga Hill
                                                Road, Port Washington, NY 110000</p>

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
                                <!-- /.col-6 col-md-3 d-flex align-items-stretch -->
                            </div>
                            <!-- /.row properties -->
                        </div>
                        <!-- /.container-xl position-relative -->
                    </div>
                    <!-- /.swiper-slide -->
                </div>
                <!-- /.swiper-wrapper -->
            </div>
            <!-- /#homes-around-600000-swiper.swiper -->

            <div class="swiper-pagination-container container-xl">
                <div class="d-flex flex-row justify-content-center">
                    <div data-swiper-id="#homes-around-600000-swiper" class="swiper-pagination w-auto bottom-0"
                        data-swiper-pagination-limit="2"></div>

                    <a href="http://html.coolorize.com/discoverize/default/listing-search-header.html"
                        class="btn btn-link btn-sm btn-more text-uppercase fw-bold shadow-none o-50 o-100-hover ms-3 trans-base px-0">All
                        Homes Around $600,000<i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
            </div>

            <div class="swiper-navigation-container container-xl">
                <a href="#homes-around-600000-swiper"
                    class="swiper-button-next btn btn-primary btn-default shadow-none o-50 o-100-hover"><i
                        class="d-inline-block fas fa-angle-right"></i></a>
                <a href="#homes-around-600000-swiper"
                    class="swiper-button-prev btn btn-primary btn-default shadow-none o-50 o-100-hover"><i
                        class="d-inline-block fas fa-angle-left"></i></a>
            </div>
            <!-- /.swiper-navigation container-xl -->
        </div>
        <!-- /.swiper-container with-pagination -->
    </section>
    <!-- #homes-around-600000.section pt-5 pb-4 -->

    <!-- Photoswipe-JS - used only if your using photoswupe -->
    <script src="../assets/vendor/photoswipe/photoswipe.min.js"></script>
    <script src="../assets/vendor/photoswipe/photoswipe-ui-default.min.js"></script>
    <script src="../assets/js/discoverize.photoswipe.js"></script>

    <!-- Swiper-JS -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- Leaflet-JS - required for map -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

    <!-- Discoverize JS -->
    <script src="../assets/js/discoverize.js"></script>
</body>

</html>