<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thennadu Nilam - Buy Land Build Future</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'header.php'; ?>


<!-- PAGE HEADER -->

<section class="page-header">
    <div class="container">

        <h1>List Your Land for Sale</h1>

        <p>
            Get the best price for your property.
            Quick & easy listing process.
        </p>

    </div>
</section>

<!-- PROPERTY DETAILS -->

<section class="pb-5">

    <div class="container">

        <div class="form-card">

    <h3 class="mb-4">Property Details</h3>

    <div class="row g-3">

        <!-- Row 1 -->

        <div class="col-lg-4">
            <label class="form-label">Land Type</label>
            <select class="form-control">
                <option>Select Land Type</option>
                <option>Residential Plot</option>
                <option>Farm Land</option>
                <option>Commercial Land</option>
            </select>
        </div>

        <div class="col-lg-4">
            <label class="form-label">Location</label>
            <input type="text"
                   class="form-control"
                   placeholder="Enter Location">
        </div>

        <div class="col-lg-4">
            <label class="form-label">Land Area (sq.ft)</label>
            <input type="text"
                   class="form-control"
                   placeholder="Enter Area">
        </div>

        <!-- Row 2 -->

        <div class="col-lg-4">
            <label class="form-label">Road Width</label>
            <select class="form-control">
                <option>Select Road Width</option>
                <option>20 Feet</option>
                <option>30 Feet</option>
                <option>40 Feet</option>
            </select>
        </div>

        <div class="col-lg-4">
            <label class="form-label">Expected Price</label>
            <input type="text"
                   class="form-control"
                   placeholder="Enter Price">
        </div>

        <div class="col-lg-4">
            <label class="form-label">Upload Photos</label>

            <div class="upload-box">

                <i class="fa-solid fa-cloud-arrow-up fa-2x text-success mb-2"></i>

                <h6 class="mb-2">Drag & Drop Images Here</h6>

                <p class="mb-2">or</p>

                <input type="file"
                       id="propertyImages"
                       multiple
                       accept="image/*"
                       hidden>

                <button type="button"
                        class="btn btn-success"
                        onclick="document.getElementById('propertyImages').click();">
                    Choose Files
                </button>

                <small class="text-muted mt-2">
                    JPG, PNG up to 10MB
                </small>

                <div id="fileList" class="mt-2"></div>

            </div>
        </div>

        <!-- Row 3 -->

        <div class="col-lg-4">
            <label class="form-label">Facing</label>

            <select class="form-control">
                <option>Select Facing</option>
                <option>North</option>
                <option>South</option>
                <option>East</option>
                <option>West</option>
            </select>
        </div>

        <div class="col-lg-4">
            <label class="form-label">Dimension</label>

            <input type="text"
                   class="form-control"
                   placeholder="Enter Dimension (L x B)">
        </div>

    </div>

</div>
        <!-- YOUR DETAILS -->

        <div class="form-card">

            <h3 class="mb-4">Your Details</h3>

            <div class="row">

                <div class="col-lg-4 mb-4">

                    <label class="form-label">Name</label>

                    <input type="text"
                           class="form-control"
                           placeholder="Enter Your Name">

                </div>

                <div class="col-lg-4 mb-4">

                    <label class="form-label">
                        Mobile Number
                    </label>

                    <input type="text"
                           class="form-control"
                           placeholder="Enter Mobile Number">

                </div>

                <div class="col-lg-4 mb-4">

                    <label class="form-label">
                        Email Address
                    </label>

                    <input type="email"
                           class="form-control"
                           placeholder="Enter Email Address">

                </div>

            </div>

            <div class="form-check mb-4">

                <input class="form-check-input"
                       type="checkbox"
                       id="terms">

                <label class="form-check-label"
           for="terms">

        I agree to the

        <a href="Conditions.php"
           class="text-success fw-bold text-decoration-none">
            Terms & Conditions
        </a>

    </label>

            </div>

            <button class="submit-property">
                Submit Property
            </button>

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
<script>
document.getElementById('propertyImages').addEventListener('change', function(){

    let files = this.files;
    let output = '';

    for(let i=0; i<files.length; i++){
        output += '<div>' + files[i].name + '</div>';
    }

    document.getElementById('fileList').innerHTML = output;

});
</script>

<?php include 'footer.php'; ?>

</body>
</html>
