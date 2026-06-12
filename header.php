
<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!-- =========================
     TOP HEADER
========================= -->

<div class="top-header">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6">
                <div class="top-left">
                    <i class="fa-solid fa-location-dot"></i>
                    Tamil Nadu's Most Trusted Land Platform
                </div>
            </div>

            <div class="col-lg-6 text-end">
                <div class="top-right">
                    <span>
                        <i class="fa-solid fa-phone"></i>
                        +91 98765 43210
                    </span>

                    <span>
                        <i class="fa-solid fa-envelope"></i>
                        support@greenland.com
                    </span>

                    <i class="fab fa-facebook-f social-icon"></i>
                    <i class="fab fa-instagram social-icon"></i>
                    <i class="fab fa-youtube social-icon"></i>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- =========================
     NAVBAR
========================= -->

<nav class="navbar navbar-expand-lg bg-white shadow-sm">
    <div class="container">

        <a class="navbar-brand" href="index.php">
            <img src="assets\logo1.png"
                 class="main-logo1"
                 alt="Logo">
        </a>

        <button class="navbar-toggler"
                data-bs-toggle="collapse"
                data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse"
             id="menu">

            <ul class="navbar-nav mx-auto">

    <li class="nav-item">
    <a class="nav-link <?= ($currentPage == 'index.php') ? 'active' : ''; ?>" href="index.php">
        <i class="fa-solid fa-house"></i>
        Home
    </a>
</li>

<li class="nav-item">
    <a class="nav-link <?= ($currentPage == 'buyland.php') ? 'active' : ''; ?>" href="buyland.php">
        <i class="fa-solid fa-map-location-dot"></i>
        Buy Land
    </a>
</li>

<li class="nav-item">
    <a class="nav-link <?= ($currentPage == 'sell-land.php') ? 'active' : ''; ?>" href="sell-land.php">
        <i class="fa-solid fa-tags"></i>
        Sell Land
    </a>
</li>

<li class="nav-item">
    <a class="nav-link <?= ($currentPage == 'farm-lands.php') ? 'active' : ''; ?>" href="farm-lands.php">
        <i class="fa-solid fa-seedling"></i>
        Farm Lands
    </a>
</li>

<li class="nav-item">
    <a class="nav-link <?= ($currentPage == 'why-us.php') ? 'active' : ''; ?>" href="why-us.php">
        <i class="fa-solid fa-circle-check"></i>
        Why Us
    </a>
</li>

<li class="nav-item">
    <a class="nav-link <?= ($currentPage == 'about.php') ? 'active' : ''; ?>" href="about.php">
        <i class="fa-solid fa-building"></i>
        About Us
    </a>
</li>

<li class="nav-item">
    <a class="nav-link <?= ($currentPage == 'contact.php') ? 'active' : ''; ?>" href="contact.php">
        <i class="fa-solid fa-envelope"></i>
        Contact
    </a>
</li>

            </ul>

            <!-- POST PROPERTY BUTTON -->

<button class="post-btn"
        data-bs-toggle="modal"
        data-bs-target="#postPropertyModal">
    <i class="fa-solid fa-plus"></i>
    Post Property
</button>

        </div>

        </div>

    </div>
</nav>

<!-- =========================
     PROPERTY ENQUIRY MODAL
========================= -->

<div class="modal fade"
     id="postPropertyModal"
     tabindex="-1"
     aria-hidden="true">

    <div class="modal-dialog modal-lg modal-dialog-centered">

        <div class="modal-content border-0 shadow">

            <div class="modal-header bg-success text-white">

                <h4 class="fw-bold mb-0">
                    <i class="fa-solid fa-file-signature me-2"></i>
                    List Your Property
                </h4>

                <button type="button"
                        class="btn-close btn-close-white"
                        data-bs-dismiss="modal">
                </button>

            </div>

            <div class="modal-body p-4">

                <div class="alert alert-success">

                    <i class="fa-solid fa-circle-info me-2"></i>

                    Fill in your property details and our property expert will contact you shortly.

                </div>

                <form>

                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">
                                Owner Name
                            </label>

                            <input type="text"
                                   class="form-control"
                                   placeholder="Enter Owner Name">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">
                                Mobile Number
                            </label>

                            <input type="tel"
                                   class="form-control"
                                   placeholder="Enter Mobile Number">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">
                                Email Address
                            </label>

                            <input type="email"
                                   class="form-control"
                                   placeholder="Enter Email Address">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">
                                Property Type
                            </label>

                            <select class="form-select">
                                <option>Select Property Type</option>
                                <option>Residential Plot</option>
                                <option>Farm Land</option>
                                <option>Commercial Land</option>
                                <option>Industrial Land</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">
                                District
                            </label>

                            <input type="text"
                                   class="form-control"
                                   placeholder="Enter District">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">
                                Land Area
                            </label>

                            <input type="text"
                                   class="form-control"
                                   placeholder="Ex: 1200 Sq.ft / 2 Acres">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">
                                Expected Price
                            </label>

                            <input type="text"
                                   class="form-control"
                                   placeholder="Enter Expected Price">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">
                                Village / Area
                            </label>

                            <input type="text"
                                   class="form-control"
                                   placeholder="Enter Location">
                        </div>

                        <div class="col-12 mb-3">
                            <label class="form-label fw-semibold">
                                Property Details
                            </label>

                            <textarea class="form-control"
                                      rows="4"
                                      placeholder="Road Access, Water Facility, Legal Documents, Nearby Landmarks etc..."></textarea>
                        </div>

                    </div>

                </form>

            </div>

            <div class="modal-footer">

                <button type="button"
                        class="btn btn-outline-secondary"
                        data-bs-dismiss="modal">
                    Cancel
                </button>

                <button type="submit"
                        class="btn btn-success px-4">

                    <i class="fa-solid fa-paper-plane me-2"></i>

                    Submit Enquiry

                </button>

            </div>

        </div>

    </div>

</div>