<!-- Footer Start-->
<div class="footer-area bg-black pd-top-95">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="widget">
                        <h5 class="widget-title">ABOUT US</h5>
                        <div class="widget_about">
                            <p>
                            Notre mission est de vous fournir des articles clairs, concis, et remplis de conseils pratiques pour vous aider à naviguer dans les défis quotidiens, qu'ils soient personnels ou professionnels.
                            </p>
                            <ul class="social-area social-area-2 mt-4">
                                <li><a class="facebook-icon" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter-icon" href=""><i class="fa fa-twitter"></i></a></li>
                                <li>
                                    <a class="youtube-icon" href="https://www.youtube.com/channel/UC7BeQNpcwLNhLuBNsWsDB4A" target="_blank">
                                        <i class="fa fa-youtube-play"></i>
                                    </a>
                                </li>
                                <li><a class="instagram-icon" href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a class="google-icon" href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="widget widget_tag_cloud">
                        <h5 class="widget-title">THEMES</h5>
                        <div class="tagcloud">
                            @if($categorie->count() > 0)
                            @foreach($categorie as $cat)
                            <a href="{{route('categorie.show', ['categorie' => $cat->id])}}">{{$cat->nom}}</a>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="widget" id="contact">
                        <h5 class="widget-title">CONTACTS</h5>
                        <ul class="contact_info_list">
                            <li><i class="fa fa-map-marker"></i> 829 Cabell Avenue Arlington, VA 22202</li>
                            <!-- <li><i class="fa fa-phone"></i> +088 012121240</li> -->
                            <li><i class="fa fa-envelope-o"></i> contact@leguidequotidien.com</li>
                        </ul>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-sm-6">
                    <div class="widget widget_recent_post">
                        <h5 class="widget-title">POPULAR NEWS</h5>
                        <div class="single-post-list-wrap style-white">
                            <div class="media">
                                <div class="media-left">
                                    <img src="assets/img/post/list/1.png" alt="img">
                                </div>
                                <div class="media-body">
                                    <div class="details">
                                        <div class="post-meta-single">
                                            <ul>
                                                <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                            </ul>
                                        </div>
                                        <h6 class="title"><a href="#">Himachal Pradesh rules in order to allow tourists </a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-post-list-wrap style-white">
                            <div class="media">
                                <div class="media-left">
                                    <img src="assets/img/post/list/2.png" alt="img">
                                </div>
                                <div class="media-body">
                                    <div class="details">
                                        <div class="post-meta-single">
                                            <ul>
                                                <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                            </ul>
                                        </div>
                                        <h6 class="title"><a href="#">Himachal Pradesh rules in order to allow tourists </a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="footer-bottom text-center">
                <ul class="widget_nav_menu">
                <li><a href="about" title="A propos">A Propos</a></li>
                <li>
                    <a href="{{route('politic')}}" title=" Politique de Confidentialité et Conditions d’Utilisation ">
                    Nos Politiques</a>
                </li>
                    <li>
                        <a href="https://www.youtube.com/channel/UC7BeQNpcwLNhLuBNsWsDB4A" target="_blank" title="notre chaine you-tube">
                        Chaine <i class="fa fa-youtube"></i>
                        </a>
                    </li>
                    <!-- <li><a href="#">rivacy Policy</a></li> -->
                    <li><a href="#contact" title="contacter-nous">Contact</a></li>
                </ul>
                <p>Copyright ©2024 <a href="/">leguidequotidien.com</a></p>
            </div>
        </div>
    </div>
    <!-- FooterEnd-->

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->

    <!-- all plugins here -->
    <script src="{{ asset('assets/js/vendor.js') }}"></script>
    <!-- main js  -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>