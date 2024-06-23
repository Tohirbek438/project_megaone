<!--Footer Start-->
<section class="text-center footer-sec">
    <h2 class="d-none">hidden</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer-social">
                    <ul class="list-unstyled text-white">
                        <?php $heads = \App\Models\Header::first();?>
                        <li><a class="wow fadeInUp facebook-bg-hvr" href="https://www.facebook.com/{{$heads->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a class="wow fadeInDown twitter-bg-hvr" href="https://twitter.com/{{$heads->twitter}}"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a class="wow fadeInUp instagram-bg-hvr" href="https://twitter.com/{{$heads->instagram}}"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <p class="company-about fadeIn theme-dark text-capitalize">{{$heads->site_about}}<a class="theme-dark" href="javascript:void(0);"></a></p>
            </div>
        </div>
    </div>
</section>
<!--Footer End-->
<!-- JavaScript -->

<script src="{{asset('vendor')}}/js/bundle.min.js"></script>
<!-- Plugin Js -->
<script src="{{asset('vendor')}}/js/jquery.fancybox.min.js"></script>
<script src="{{asset('vendor')}}/js/owl.carousel.min.js"></script>
<script src="{{asset('vendor')}}/js/swiper.min.js"></script>
<script src="{{asset('vendor')}}/js/jquery.cubeportfolio.min.js"></script>
<script src="{{asset('vendor')}}/js/jquery.appear.js"></script>
<script src="{{asset('vendor')}}/js/hover-item.js"></script>
<script src="{{asset('vendor')}}/js/isotope.pkgd.min.js"></script>
<!-- REVOLUTION JS FILES -->
<script src="{{asset('vendor')}}/js/jquery.themepunch.tools.min.js"></script>
<script src="{{asset('vendor')}}/js/jquery.themepunch.revolution.min.js"></script>
<!-- SLIDER REVOLUTION EXTENSIONS -->
<script src="{{asset('vendor')}}/js/extensions/revolution.extension.actions.min.js"></script>
<script src="{{asset('vendor')}}/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="{{asset('vendor')}}/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="{{asset('vendor')}}/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="{{asset('vendor')}}/js/extensions/revolution.extension.migration.min.js"></script>
<script src="{{asset('vendor')}}/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="{{asset('vendor')}}/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="{{asset('vendor')}}/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="{{asset('vendor')}}/js/extensions/revolution.extension.video.min.js"></script>
<!-- custom script -->
<script src="{{asset('vendor')}}/js/select2.min.js"></script>
<script src="{{asset('vendor')}}/js/date.js"></script>
<script src="{{asset('site')}}/site_ajax.js"></script>
<script src="{{asset('vendor')}}/js/jquery.hoverdir.js"></script>
<script src="{{asset('vendor')}}/js/jquery-ui.bundle.js"></script>
<script src="{{asset('vendor')}}/js/flip.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4fusEY9kSwNHgtK8KOgyoTsyP5Tb2NXo"></script>
<script src="{{asset('medical')}}/js/map.js"></script>
<script src="{{asset('vendor')}}/js/contact_us.js"></script>
<script src="{{asset('medical')}}/js/script.js"></script>
</body>
</html>
