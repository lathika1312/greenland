<!-- =========================
     FOOTER
========================= -->

<footer class="footer">

    <div class="container">

        <div class="row">

    <div class="col-lg-3 col-md-6 mb-4">

    <h4>Thennattu Nilam</h4>

    <p>
        Buy Land. Build Future.
        Tamil Nadu's trusted land platform.
    </p>

    <div class="footer-social">

        <a href="#" class="facebook">
            <i class="fab fa-facebook-f"></i>
        </a>

        <a href="#" class="instagram">
            <i class="fab fa-instagram"></i>
        </a>

        <a href="#" class="youtube">
            <i class="fab fa-youtube"></i>
        </a>

    </div>

</div>

    <div class="col-lg-3 col-md-6 mb-4">
        <h4>Quick Links</h4>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="buyland.php">Buy Land</a></li>
            <li><a href="sell-land.php">Sell Land</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
        <h4>Legal</h4>
        <ul>
            <li><a href="privacy-policy.php">Privacy Policy</a></li>
            <li><a href="Conditions.php">Terms & Conditions</a></li>
        </ul>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
        <h4>Contact</h4>
        <p>📞 +91 98765 43210</p>
        <p>✉ support@greenland.com</p>
        <p>📍 Chennai, Tamil Nadu</p>
    </div>

</div>

        <hr>

        <div class="text-center">
            © 2026 GreenLand. All Rights Reserved.
        </div>

    </div>

<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>

<script>
(function() {
    emailjs.init({
        publicKey: "-98ciwiGd5IX8L3Se",
    });
})();
</script>

    <!-- Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
const propertyForm = document.getElementById("propertyForm");

if(propertyForm){

    propertyForm.addEventListener("submit", function(e){

        e.preventDefault();

        let templateParams = {
            owner_name: document.getElementById("owner_name").value,
            mobile: document.getElementById("mobile").value,
            email: document.getElementById("email").value,
            property_type: document.getElementById("property_type").value,
            district: document.getElementById("district").value,
            area: document.getElementById("area").value,
            price: document.getElementById("price").value,
            location: document.getElementById("location").value,
            details: document.getElementById("details").value
        };

        emailjs.send(
            "service_r80ljeq",
            "template_p5zkpub",
            templateParams
        )
       .then(function() {

    propertyForm.reset();

    let modal = bootstrap.Modal.getInstance(
        document.getElementById('postPropertyModal')
    );

    modal.hide();

    let toast = new bootstrap.Toast(
        document.getElementById('successToast')
    );

    toast.show();

})
        .catch(function(error){

            alert("Failed to send enquiry");

            console.log(error);

        });

    });

}
</script>

</footer>


<!-- Success Toast -->
<div class="toast-container position-fixed top-50 start-50 translate-middle">

    <div id="successToast"
         class="toast border-0 shadow-lg"
         role="alert"
         data-bs-delay="3000"
         data-bs-autohide="true"
         style="
            min-width:500px;
            background:#198754;
            color:#fff;
            border-radius:15px;
         ">

        <div class="toast-body text-center py-4">

            <h4 class="fw-bold mb-2">
                🎉 Thank You!
            </h4>

            <p class="mb-0 fs-5">
                Property Enquiry Submitted Successfully
            </p>

        </div>

    </div>

</div>