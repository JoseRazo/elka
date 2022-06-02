<!-- Footer Area
========================================== -->
<footer id="footer" class="bg-one">
    <div class="top-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <h3>{{ trans('translator.aboutElka') }}</h3>
                    <p>{{ trans('translator.qualityText') }}</p>
                </div>
                <!-- End of .col-sm-3 -->

                <div class="col-sm-3 col-md-3 col-lg-3">
                    <ul>
                        <li>
                            <h3>{{ trans('translator.services') }}</h3>
                        </li>
                        <li><a href="{{ route('services') }}">{{ trans('translator.serviceMonitoring') }}</a></li>
                        <li><a href="{{ route('services') }}">{{ trans('translator.serviceRework') }}</a></li>
                        <li><a href="{{ route('services') }}">{{ trans('translator.serviceManufacturing') }}</a></li>
                        <li><a href="{{ route('services') }}">{{ trans('translator.serviceTradings') }}</a></li>
                        <li><a href="{{ route('services') }}">{{ trans('translator.serviceRepackaging') }}</a></li>
                    </ul>
                </div>
                <!-- End of .col-sm-3 -->

                <div class="col-sm-3 col-md-3 col-lg-3">
                    <ul>
                        <li>
                            <h3>{{ trans('translator.quickLinks') }}</h3>
                        </li>
                        <li><a href="{{ route('about') }}">{{ trans('translator.about') }}</a></li>
                        <li><a href="{{ route('services') }}">{{ trans('translator.services') }}</a></li>
                        <li><a href="{{ route('clients') }}">{{ trans('translator.coverage') }}</a></li>
                        <li><a href="{{ route('contact') }}">{{ trans('translator.contact') }}</a></li>
                    </ul>
                </div>
                <!-- End of .col-sm-3 -->

                <div class="col-sm-3 col-md-3 col-lg-3">
                    <ul>
                        <li>
                            <h3>{{ trans('translator.socialNetworks') }}</h3>
                        </li>
                        <li><a href="#"><i class="tf-ion-social-facebook"></i> Facebook</a></li>
                        <li><a href="#"><i class="tf-ion-social-twitter"></i> Twitter</a></li>
                        <li><a href="#"><i class="tf-ion-social-youtube"></i> Youtube</a></li>
                        <li><a href="#"><i class="tf-ion-social-instagram"></i> Instagram</a></li>
                    </ul>
                </div>
                <!-- End of .col-sm-3 -->

            </div>
        </div> <!-- end container -->
    </div>
    <div class="footer-bottom">
        <h5>Copyright 2020. All rights reserved.</h5>
        <h6>{{ trans('translator.aboutExecuteSolutions') }} <a href="{{ route('home') }}">Elka.services SA de CV</a></h6>
    </div>
</footer> <!-- end footer -->

<!-- end Footer Area
    ========================================== -->