<!-- Footer -->
<footer id="footer">
    <div class="footer-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="widget">
                        <p><a href="#"><img src="/logo/black.png" alt="logo" class="img-fluid" style="max-width: 250px;"></a></p>
                        <p class="mb-5">{{ __('Built with love in Ulaanbaatar, Mongolia') }}</p>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="widget">
                                <div class="widget-title">{{ __('Company') }}</div>
                                <ul class="list">
                                    <li><a href="{{ route('blog') }}">{{ __('Blog') }}</a></li>
                                    <li><a href="{{ route('about-us') }}">{{ __('About Us') }}</a></li>
                                    <li><a href="{{ route('terms-conditions') }}">{{ __('Terms & Conditions') }}</a></li>
                                    <li><a href="{{ route('privacy-policy') }}">{{ __('Privacy Policy') }}</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="widget">
                                <div class="widget-title">{{ __('Profile') }}</div>
                                <ul class="list">
                                    <li><a href="{{ route('profile') }}">{{ __('My Profile') }}</a></li>
                                    <li><a href="{{ route('orders') }}">{{ __('Orders') }}</a></li>
                                    <li><a href="{{ route('settings') }}">{{ __('Settings') }}</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="widget">
                                <div class="widget-title">{{ __('Support') }}</div>
                                <ul class="list">
                                    <li><a href="{{ route('faq') }}">{{ __('FAQ') }}</a></li>
                                    <li><a href="{{ route('contact-us') }}">{{ __('Contact Us') }}</a></li>
                                    <li><a href="{{ route('sitemap') }}">{{ __('Sitemap') }}</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-5">

                            <ul class="list-icon">
                                {{-- <li><i class="fa fa-map-marker-alt"></i> <strong>Gardenia, LLC.</strong><br>5th Khoroo, 15th Micro District <br>Peace Avenue 52<br>Ulaanbaatar</li> --}}
                                <li><i class="fa fa-phone"></i> (976) 8811-5505 </li>
                                <li><i class="far fa-envelope"></i> <a href="mailto:info@gardenia.mn">info@gardenia.mn</a> </li>
                            </ul>

                            @include('layouts.footer-item-newsletter')
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-content">
        <div class="container">
            <div class="copyright-text text-center">&copy; 2021 Edelweiss - Floral & Design. {{ __('All Rights Reserved') }}.</div>
        </div>
    </div>
</footer>
<!-- end: Footer -->