@extends('layouts.front.app')

@section('title', 'Nuestra Empresa')

@section('meta_site')
<meta name="resource-type" content="{{ trans('translator.about') }}" />
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
                <h2>{{ trans('translator.about') }}</h2>
                <ol class="breadcrumb header-bradcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">{{ trans('translator.about') }}</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="about-shot-info section-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-20 text-justify">
                <h2>{{ trans('translator.aboutExecuteSolutions') }}</h2>
                <p>{{ trans('translator.aboutp1') }}</p>
                <p>{{ trans('translator.aboutp2') }}</p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="/images/company/company-image.jpg" alt="">
            </div>
        </div>
    </div>
</section>

<section class="company-mission section-sm bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>{{ trans('translator.missionTitle') }}</h3>
                <p>{{ trans('translator.missionText') }}</p>
                <img src="/images/company/company-image-2.jpg" alt="" class="img-responsive mt-30">
            </div>
            <div class="col-md-6">
                <h3>{{ trans('translator.visionTitle') }}</h3>
                <p>{{ trans('translator.visionText') }}</p>
                <img src="/images/company/company-image-3.jpg" alt="" class="img-responsive mt-30">
            </div>
        </div>
    </div>
</section>

<!--
		Start Counter Section
		==================================== -->
<section class="counter-wrapper section-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="title">
                    <h2>{{ trans('translator.values') }}</h2>
                    <div class="border"></div>
                </div>
            </div>
            <!-- first count item -->
            <div class="col-md-4 col-sm-6 col-xs-12 text-center ">
                <div class="counters-item">
                    <i class="tf-ion-android-bookmark"></i>
                    <div>
                        <span class="counter">{{ trans('translator.valueRespect') }}</span>
                    </div>
                </div>
            </div>
            <!-- end first count item -->

            <!-- second count item -->
            <div class="col-md-4 col-sm-6 col-xs-12 text-center ">
                <div class="counters-item">
                    <i class="tf-ion-android-bookmark"></i>
                    <div>
                        <span class="counter">{{ trans('translator.valueTrust') }}</span>
                    </div>
                </div>
            </div>
            <!-- end second count item -->

            <!-- third count item -->
            <div class="col-md-4 col-sm-6 col-xs-12 text-center ">
                <div class="counters-item kill-border">
                    <i class="tf-ion-android-bookmark"></i>
                    <div>
                        <span class="counter">{{ trans('translator.valueResponsability') }}</span>
                    </div>
                </div>
            </div>
            <!-- end third count item -->
            <div class="row">
                <!-- fourth count item -->
                <div class="col-md-4 col-sm-6 col-xs-12 text-center ">
                    <div class="counters-item">
                        <i class="tf-ion-android-bookmark"></i>
                        <div>
                            <span class="counter">{{ trans('translator.valueDiscipline') }}</span>
                        </div>
                    </div>
                </div>
                <!-- end fourth count item -->

                <!-- five count item -->
                <div class="col-md-4 col-sm-6 col-xs-12 text-center ">
                    <div class="counters-item">
                        <i class="tf-ion-android-bookmark"></i>
                        <div>
                            <span class="counter">{{ trans('translator.valueEthic') }}</span>
                        </div>
                    </div>
                </div>
                <!-- end five count item -->

                <!-- six count item -->
                <div class="col-md-4 col-sm-6 col-xs-12 text-center ">
                    <div class="counters-item kill-border">
                        <i class="tf-ion-android-bookmark"></i>
                        <div>
                            <span class="counter">{{ trans('translator.valueIntegrity') }}</span>
                        </div>
                    </div>
                </div>
                <!-- end six count item -->

                <!-- seven count item -->
                <div class="col-md-4 col-sm-6 col-xs-12 text-center ">
                    <div class="counters-item">
                        <i class="tf-ion-android-bookmark"></i>
                        <div>
                            <span class="counter">{{ trans('translator.valueServiceapproach') }}</span>
                        </div>
                    </div>
                </div>
                <!-- end seven count item -->
                <!-- seven eight item -->
                <div class="col-md-4 col-sm-6 col-xs-12 text-center ">
                    <div class="counters-item">
                        <i class="tf-ion-android-bookmark"></i>
                        <div>
                            <span class="counter">{{ trans('translator.valueWorkteam') }}</span>
                        </div>
                    </div>
                </div>
                <!-- end eight count item -->

                <!-- six nine item -->
                <div class="col-md-4 col-sm-6 col-xs-12 text-center ">
                    <div class="counters-item kill-border">
                        <i class="tf-ion-android-bookmark"></i>
                        <div>
                            <span class="counter">{{ trans('translator.valueQuality') }}</span>
                        </div>
                    </div>
                </div>
                <!-- end nine count item -->
            </div> <!-- end row -->
        </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- end section -->

<!--
Start Call To Action
==================================== -->
<section class="call-to-action-2 section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="text-white">
                    <h2>{{ trans('translator.qualityTitle') }}</h2>
                    <div class="border"></div>
                </div>
                <h3>{{ trans('translator.qualityText') }}</h3>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- End section -->

<section class="section grallery">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="title text-center">
                    <h2>{{ trans('translator.gallery') }}</h2>
                    <div class="border"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="company-gallery">
                    <img src="/images/company/gallery-1.jpg" alt="">
                    <img src="/images/company/gallery-2.jpg" alt="">
                    <img src="/images/company/gallery-3.jpg" alt="">
                    <img src="/images/company/gallery-4.jpg" alt="">
                    <img src="/images/company/gallery-5.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
@include('layouts.front.contact')
@endsection