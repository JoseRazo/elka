@extends('layouts.front.app')

@section('title', 'Nuestra Cobertura')

@section('meta_site')
<meta name="resource-type" content="Nuestra Cobertura" />
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
                <h2>{{ trans('translator.coverage') }}</h2>
                <ol class="breadcrumb header-bradcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">{{ trans('translator.coverage') }}</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- Start Coverage Section
=========================================== -->
<section class="coverage section-sm bg-gray" id="coverage">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-12">
                <!-- section title -->
                <div class="title text-center">
                    <h2>{{ trans('translator.coverage') }}</h2>
                    <div class="border"></div>
                </div>
                <!-- /section title -->
            </div>
            <div class="container">
                <div class="col-lg-12">
                    <img src="/images/partners/mapa-mexico.png" alt="Mapa México" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
</section><!-- End coverage section -->

<!-- Start Portfolio Section
=========================================== -->
<section class="portfolio section-sm" id="portfolio">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-12">

                <!-- section title -->
                <div class="title text-center">
                    <h2>{{ trans('translator.customers') }}</h2>
                    <div class="border"></div>
                </div>
                <!-- /section title -->

                <!--
                <div class="portfolio-filter">
                    <button type="button" data-filter="all">Todos</button>
                    <button type="button" data-filter=".reempaque">Reempaque</button>
                    <button type="button" data-filter=".retrabajo">Retrabajo</button>
                    <button type="button" data-filter=".representacion">Representación</button>
                    <button type="button" data-filter=".inspeccion">Inspección</button>
                    <button type="button" data-filter=".manufactura">Manufactura</button>
                </div>
                -->
                <div class="container">
                    <div class="portfolio-items-wrapper">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12 mix">
                                <div class="portfolio-block">
                                    <img class="img-responsive" src="/images/partners/logo-ritus.png"
                                        alt="Ritus Corporation">
                                    <div class="caption">
                                        <a class="search-icon" href="/images/partners/logo-ritus.png"
                                            data-lightbox="image-1">
                                            <i class="tf-ion-ios-search-strong"></i>
                                        </a>
                                        <h4><a href="https://ritus.com/" target="_blank">Ritus Corporation</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12 mix">
                                <div class="portfolio-block">
                                    <img class="img-responsive" src="/images/partners/logo-continental.png"
                                        alt="Continental Mexico">
                                    <div class="caption">
                                        <a class="search-icon" href="/images/partners/logo-continental.png"
                                            data-lightbox="image-1">
                                            <i class="tf-ion-ios-search-strong"></i>
                                        </a>
                                        <h4><a href="https://www.continental.com/es-mx" target="_blank">Continental
                                                Mexico</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12 mix">
                                <div class="portfolio-block">
                                    <img class="img-responsive" src="/images/partners/logo-parker.jpg"
                                        alt="Parker Mexico">
                                    <div class="caption">
                                        <a class="search-icon" href="/images/partners/logo-parker.jpg"
                                            data-lightbox="image-1">
                                            <i class="tf-ion-ios-search-strong"></i>
                                        </a>
                                        <h4><a href="https://www.parker.com/" target="_blank">Parker Mexico</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12 mix">
                                <div class="portfolio-block">
                                    <img class="img-responsive" src="/images/partners/logo-kh.jpg" alt="KH Mexico">
                                    <div class="caption">
                                        <a class="search-icon" href="/images/partners/logo-kh.jpg"
                                            data-lightbox="image-1">
                                            <i class="tf-ion-ios-search-strong"></i>
                                        </a>
                                        <h4><a href="https://www.kh.de/es/compania/grupo-kh/kh-mexico.html"
                                                target="_blank">KH Mexico</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12 mix">
                                <div class="portfolio-block">
                                    <img class="img-responsive" src="/images/partners/logo-aceway.png" alt="ACEWAY">
                                    <div class="caption">
                                        <a class="search-icon" href="/images/partners/logo-aceway.png"
                                            data-lightbox="image-1">
                                            <i class="tf-ion-ios-search-strong"></i>
                                        </a>
                                        <h4><a href="http://www.aceway.com.mx/" target="_blank">ACEWAY</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12 mix">
                                <div class="portfolio-block">
                                    <img class="img-responsive" src="/images/partners/logo-antolin.png"
                                        alt="Grupo Antolin">
                                    <div class="caption">
                                        <a class="search-icon" href="/images/partners/logo-antolin.png"
                                            data-lightbox="image-1">
                                            <i class="tf-ion-ios-search-strong"></i>
                                        </a>
                                        <h4><a href="https://www.grupoantolin.com/" target="_blank">Grupo Antolin</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- /end col-lg-12 -->
        </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- End section -->

@include('layouts.front.contact')

@endsection