<div class="container" style="width: 100%; padding: 0; overflow-x: hidden">
    <div class="container">
        <div class="social" style="padding-bottom: 50px; padding-top: 50px;">
            <div class="row">
                <div class="col-sm-3">
                    <span><a href="#"><img src="img/icon/f.png" alt=""></a></span>
                    <span><a href="#"><img src="img/icon/t.png" alt=""></a></span>
                    <span><a href="#"><img src="img/icon/m.png" alt=""></a></span>
                </div>
            </div>
        </div>
    </div>
    <div class="right">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    <p>Mediamall Ltd. {{ date('Y') }}</p>
                </div>
                <div class="col-sm-3 col-sm-offset-7"></div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="{{ url('js/bootstrap.js') }}"></script>
<script src="{{ url('js/app.js') }}"></script>

<script src="{{ url('js/owl.carousel.js') }}"></script>
<script src="{{ url('js/script.js') }}"></script>
<!-- StikyMenu -->
<script src="{{ url('js/stickUp.min.js') }}"></script>

<script src="{{ url('js/wow.min.js') }}"></script>
<script>
    new WOW().init();
</script>

<script type="text/javascript">
    jQuery(function($) {
        $(document).ready( function() {
            $('.navbar-default').stickUp();

        });
    });

</script>

<!-- Smoothscroll -->
<script type="text/javascript" src="{{ url('js/jquery.corner.js') }}"></script>


<script src="{{ url('js/classie.js') }}"></script>
<script src="{{ url('js/uiMorphingButton_inflow.js') }}"></script>
<!-- Magnific Popup core JS file -->
<script src="{{ url('js/jquery.magnific-popup.js') }}"></script>
<script src="{{ url('js/modernizr-2.8.3.min.js') }}"></script>  <!-- Modernizr /-->


</body>
</html>