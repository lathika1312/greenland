<!DOCTYPE html>
<html lang="en">
    
<?php include 'head.php'; ?>

<body>

<?php include 'header.php'; ?>


<!-- =========================
     HERO SECTION
========================= -->

<section class="buy-land-page">
    <div class="container">

      <h1 class="property-title">
           Buy Land
        </h1>

        <div class="row">

            <!-- LEFT FILTER -->

            <div class="col-lg-3">

                <div class="filter-card">

                    <h3>Filter Results</h3>

                    <div class="mb-4">
                        <label>Location</label>
                        <select class="form-control">
                            <option>Select Location</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label>Land Type</label>
                        <select class="form-control">
                            <option>All Types</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label>Budget</label>
                        <input type="range" class="form-range">
                    </div>

                    <div class="mb-4">
                        <label>Land Area (sq.ft)</label>

                        <div class="d-flex gap-2">
                            <input type="text" class="form-control" placeholder="Min Area">

                            <input type="text" class="form-control" placeholder="Max Area">
                        </div>
                    </div>

                    <h5>More Filters</h5>

                    <div class="filter-checkbox">
                        <label><input type="checkbox"> DTCP Approved</label>
                    </div>

                    <div class="filter-checkbox">
                        <label><input type="checkbox"> RERA Approved</label>
                    </div>

                    <div class="filter-checkbox">
                        <label><input type="checkbox"> Corner Plot</label>
                    </div>

                    <div class="filter-checkbox">
                        <label><input type="checkbox"> Gated Community</label>
                    </div>

                    <div class="filter-checkbox">
                        <label><input type="checkbox"> 30ft Road</label>
                    </div>

                    <div class="filter-buttons">
                        <button class="reset-btn">Reset</button>
                        <button class="apply-btn">Apply Filter</button>
                    </div>

                </div>

            </div>

            <!-- RIGHT LIST -->

            <div class="col-lg-9">

                <div class="listing-wrapper">

                    <div class="listing-top">
                        <h3>120+ Lands Found</h3>

                        <select class="sort-select">
                            <option>Latest</option>
                        </select>
                    </div>

                    <!-- LAND CARD 1 -->

                    <div class="land-list-card">

                        <div class="land-image">
                            <span class="badge-green">
                                DTCP Approved
                            </span>

                            <img src="assets/farrmland2.png">
                        </div>

                        <div class="land-details">

                            <h2>1200 Sq.ft Plot</h2>

                            <p class="location">
                                <i class="fa-solid fa-location-dot"></i>
                                Oragadam, Chennai
                            </p>

                            <div class="features">

                                <span>
                                    <i class="fa-regular fa-circle-check"></i>
                                    DTCP Approved
                                </span>

                                <span>
                                    <i class="fa-solid fa-road"></i>
                                    30ft Road
                                </span>

                                <span>
                                    <i class="fa-regular fa-eye"></i>
                                    East Facing
                                </span>

                            </div>

                        </div>

                        <div class="price-section">

                            <h2>₹ 18,00,000</h2>

                            <a href="land-details.php" class="view-btn">
                                View Details
                            </a>

                        </div>

                    </div>

                    <!-- COPY SAME CARD 4 TIMES -->

                    <div class="pagination-box">

                        <button>‹</button>

                        <button class="active">1</button>

                        <button>2</button>

                        <button>3</button>

                        <span>...</span>

                        <button>10</button>

                        <button>›</button>

                    </div>

                </div>

            </div>

        </div>

    </div>
</section>



<!-- =========================
     WHATSAPP BUTTON
========================= -->

<a href="https://wa.me/919942620101?text=Hello%20Thennattu%20Nilam,%20I%20am%20interested%20in%20buying%20land.%20Please%20share%20more%20details."
   class="whatsapp-btn"
   target="_blank">

   <i class="fab fa-whatsapp"></i>

</a>


<!-- Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


<?php include 'footer.php'; ?>

</body>
</html>


