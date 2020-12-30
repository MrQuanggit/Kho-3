
<footer>
    <div class="container-fluid padding">
        <div class="row text-center">
            <div class="col-md-3">
                <img src="" style="width:15%; padding-top:1em;">
                <p>DANGQUANGWATCH</p>
                <hr class="light">
                <p>111-222-3333</p>
                <p>mymail@gmail.com</p>
                <p>28 Nguyen Tri Phuong, Hue, Vietnam</p>
            </div>
            <div class="col-md-3">
                <hr class="light">
                <h5>OPEN TIME</h5>
                <hr class="light">
                <p>Monday-Friday: 8am - 5pm</p>
                <p>Weekend: 8am - 12am</p>
            </div>
            <div class="col-md-3">
                <hr class="light">
                <h5>SERVICE</h5>
                <hr class="light">
                <p><i class="fas fa-plane"></i> Free shipping</p>
                <p><i class="fas fa-toolbox"></i> Free returns</p>
                <p><i class="fas fa-stopwatch"></i> Two year warranty</p>
            </div>
            <div class="col-md-3">
                <hr class="light">
                <h5>CONTACT WITH US</h5>
                <hr class="light">
                <p><i class="fas fa-globe"> Vietnam</i></p>
                <p style="float: left; padding: 15px"><i class="fab fa-facebook"></i></p>
                <p style="float: left; padding: 15px"><i class="fab fa-twitter"></i></p>
                <p style="float: left; padding: 15px"><i class="fab fa-google-plus-g"></i></p>
                <p style="float: left; padding: 15px"><i class="fab fa-instagram"></i></p>
                <p style="float: left; padding: 15px"><i class="fab fa-youtube"></i></p>
                </div>
            </div>
            <div class="col-12">
                <hr class="light-100">
                <h5 style="text-align: center">2020 &copy; DANGQUANGWATCH</h5>
            </div>
        </div>
    </div>
</footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        crossorigin="anonymous">
</script>
{{----}}
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
{{----}}
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
<script>
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "500",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
</script>
@if(\Illuminate\Support\Facades\Session::has('error'))
    <script>
        toastr["error"]("{!! Session::get('error') !!}", "Error")
    </script>
@endif
@if(\Illuminate\Support\Facades\Session::has('success'))
    <script>
        toastr["success"]("{!! Session::get('success') !!}", "Success")
    </script>
@endif
@if(\Illuminate\Support\Facades\Session::has('info'))
    <script>
        toastr["info"]("{!! Session::get('info') !!}", "Info")
    </script>
    @endif
</body>
</html>


