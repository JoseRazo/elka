<!-- Start About Section
==================================== -->
<section class="about-2 section" id="about">
    <div class="container">
        <div class="row">

            <!-- section title -->
            <div class="title text-center">
                <h2>{{ trans('translator.about') }}</h2>
                <p>{{ trans('translator.qualityText') }}</p>
                <div class="border"></div>
            </div>
            <!-- /section title -->

            <div class="col-md-6">
                <img src="/images/services/img-servicio-reclutamiento.jpg" class="img-responsive" alt="">
            </div>
            <div class="col-md-6 mt-20">
                <p>{{ trans('translator.aboutp1') }}</p>
                <p>{{ trans('translator.aboutp2') }}</p>
                <a href="{{ route('about') }}" class="btn btn-main mt-20">{{ trans('translator.readMore') }}</a>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- End about section -->