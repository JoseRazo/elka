@extends('layouts.front.app')

@section('title', 'Servicios')

@section('meta_site')
<meta name="resource-type" content="Nuestros Servicios" />
<meta name="description" content="Somos un equipo con mas de 16 años de experiencia dando soporte como tercería a empresas
                    maquiladoras. Con esto, damos seguridad y confianza a nuestros clientes de un trabajo de calidad,
                    nos apegamos a las normas de calidad y seguridad de las plantas en las que trabajamos. Nuestro personal esta disponible para darle el servicio a nuestros clientes las 24 horas del día, trabajamos
                    mediante procedimientos de calidad y personal capacitado, brindamos atención a los detalles con
                    información clara y concisa que le permita a nuestros clientes una buena rastreabilidad de sus
                    productos mediante nuestros reportes, ya sean diarios, semanales, mensuales, asi como gráficas,
                    muestras, fotografías, etc." />
<meta name="keywords"
    content="control de calidad, soluciones en capital humano, sorteo, re trabajo, inspection, representacion, re empaque, reclutamiento, seleccion, induccion, planeamos, ejecutamos soluciones, control de calidad silao gto" />
@endsection

@section('meta_og')
<meta property="og:title" content="Elka.services" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ request()->url() }}" />
<meta property="og:image" content="{{ asset('/images/slider/slider-bg-1.jpg') }}" />
<meta property="og:site_name" content="Elka.services" />
<meta property="og:description"
    content="Planeamos y ejecutamos las mejores soluciones para nuestros clientes, socios y empresas." />
<meta property="article:publisher" content="" />
<meta property="fb:app_id" content="" />
<meta property="fb:admins" content="" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="" />
<meta name="twitter:creator" content="" />
<meta name="twitter:domain" content="Elka.services" />
<meta name="twitter:title" content="Elka.services" />
<meta name="twitter:description" content="Elka.services SA de CV es una empresa comprometida en brindar servicios superando las expectativas
                    de nuestros clientes mediante una atención de clase mundial, como lo es respuesta rápida, precios
                    competitivos, calidad y mejora continua de nuestros procesos." />
<meta name="twitter:image" content="{{ asset('/images/slider/slider-bg-2.jpg') }}" />
<meta itemprop="image" content="{{ asset('/images/services/img-servicio-reclutamiento.jpg') }}" />
@endsection

@section('content')
<section class="single-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ trans('translator.services') }}</h2>
                <ol class="breadcrumb header-bradcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">{{ trans('translator.services') }}</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- Start Services Section
		==================================== -->
<section class="services" id="services">
    <div class="container">
        <div class="row">

            <!-- section title -->
            <div class="title text-center">
                <h2>{{ trans('translator.services') }}</h2>
                <div class="border"></div>
            </div>
            <!-- /section title -->

            <!-- Single Service Item -->
            <div class="col-md-4 col-sm-6 col-xs-12  no-padding">
                <div class="service-block color-bg text-center">
                    <div class="service-icon text-center">
                        <img class="img-responsive" src="/images/services/img-servicio-inspection.jpg" alt="">
                    </div>
                    <h3>{{ trans('translator.serviceMonitoring') }}</h3>
                    <p></p>
                </div>
            </div>
            <!-- End Single Service Item -->

            <!-- Single Service Item -->
            <div class="col-md-4 col-sm-6 col-xs-12  no-padding">
                <div class="service-block text-center">
                    <div class="service-icon text-center">
                        <img class="img-responsive" src="/images/services/img-servicio-retrabajo.jpg" alt="">
                    </div>
                    <h3>{{ trans('translator.serviceRework') }}</h3>
                    <p></p>
                </div>
            </div>
            <!-- End Single Service Item -->

            <!-- Single Service Item -->
            <div class="col-md-4 col-sm-6 col-xs-12  no-padding">
                <div class="service-block color-bg text-center">
                    <div class="service-icon text-center">
                        <img class="img-responsive" src="/images/services/img-servicio-sorteo.jpg" alt="">
                    </div>
                    <h3>{{ trans('translator.serviceManufacturing') }}</h3>
                    <p></p>
                </div>
            </div>
            <!-- End Single Service Item -->

        </div> <!-- End row -->
        <div class="row">
            <!-- Single Service Item -->
            <div class="col-md-4 col-sm-6 col-xs-12  no-padding">
                <div class="service-block text-center">
                    <div class="service-icon text-center">
                        <img class="img-responsive" src="/images/services/img-servicio-representacion.jpg" alt="">
                    </div>
                    <h3>{{ trans('translator.serviceTradings') }}</h3>
                    <p></p>
                </div>
            </div>
            <!-- End Single Service Item -->

            <!-- Single Service Item -->
            <div class="col-md-4 col-sm-6 col-xs-12  no-padding">
                <div class="service-block color-bg text-center">
                    <div class="service-icon text-center">
                        <img class="img-responsive" src="/images/services/img-servicio-reempaque.jpg" alt="">
                    </div>
                    <h3>{{ trans('translator.serviceRepackaging') }}</h3>
                    <p></p>
                </div>
            </div>
            <!-- End Single Service Item -->
        </div>
    </div> <!-- End container -->
</section> <!-- End section -->

<!-- Start What we offer? Section
		==================================== -->
<section class="offer section-sm bg-gray" id="offer">
    <div class="container">
        <!-- section title -->
        <div class="title text-center">
            <h2>{{ trans('translator.offer') }}</h2>
            <div class="border"></div>
        </div>
        <!-- /section title -->
        <div class="text-center">
            <ul>
                <li><h4>{{ trans('translator.offer1') }}</h4></li>
                <li><h4>{{ trans('translator.offer2') }}</h4></li>
                <li><h4>{{ trans('translator.offer3') }}</h4></li>
                <li><h4>{{ trans('translator.offer4') }}</h4></li>
                <li><h4>{{ trans('translator.offer5') }}</h4></li>
                <li><h4>{{ trans('translator.offer6') }}</h4></li>
                <li><h4>{{ trans('translator.offer7') }}</h4></li>
                <li><h4>{{ trans('translator.offer8') }}</h4></li>
                <li><h4>{{ trans('translator.offer9') }}</h4></li>
                <li><h4>{{ trans('translator.offer10') }}</h4></li>
            </ul>
        </div>
    </div>
</section>
<!-- End section -->

@include('layouts.front.contact')

@endsection