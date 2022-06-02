@extends('layouts.front.app')

@section('title', 'Contacto')

@section('meta_site')
<meta name="resource-type" content="Contacto" />
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
<!--
Start single page header contact
==================================== -->
<section class="single-page-header-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>{{ trans('translator.contact') }}</h2>
                <ol class="breadcrumb header-bradcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">{{ trans('translator.contact') }}</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!--
End single page header contact
==================================== -->

<!-- Start Contact Us
		=========================================== -->
<section class="contact-us" id="contact">
    <div class="container">
        <div class="row">

            <!-- section title -->
            <div class="title text-center">
                <h2>{{ trans('translator.contactTitle') }}</h2>
                <p>{{ trans('translator.contactText') }}</p>
                <div class="border"></div>
            </div>
            <!-- /section title -->

            <!-- Contact Details -->
            <div class="contact-details col-md-6 ">
                <h3>{{ trans('translator.contactInfo') }}</h3>
                <p>{{ trans('translator.contactSupport') }}</p>
                <ul class="contact-short-info">
                   
                    <li>
                        <i class="tf-ion-android-mail"></i>
                        <span><a href="mailto:contacto@elkaservices.com">Email: contacto@elkaservices.com</a></span>
                    </li>
                </ul>
                <!--
                <ul class="contact-short-info">
                    <li>
                        <h3>Atención a Clientes</h3>
                    </li>
                    <li>
                        <i class="tf-ion-android-contact"></i>
                        <span>Elena Lona</span>
                    </li>
                    <li>
                        <i class="tf-ion-android-phone-portrait"></i>
                        <span>Celular: 472 116 4517</span>
                    </li>
                    <li>
                        <i class="tf-ion-android-mail"></i>
                        <span>Email: elona@elkaservices.com</span>
                    </li>
                </ul> -->
                <!-- Footer Social Links -->
                <h3 class="mt-50">{{ trans('translator.socialNetworks') }}</h3>
                <div class="social-icon">
                    <ul>
                        <li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
                        <li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
                        <li><a href="#"><i class="tf-ion-social-youtube"></i></a></li>
                        <li><a href="#"><i class="tf-ion-social-instagram"></i></a></li>
                    </ul>
                </div>
                <!--/. End Footer Social Links -->
            </div>
            <!-- / End Contact Details -->

            <!-- Contact Form -->
            <div class="contact-form col-md-6 ">
                <h3>{{ trans('translator.contactForm') }}</h3>
                <p class="text-danger">{{ trans('translator.contactFields') }}</p>
                <form id="contact-form" method="post" action="{{ route('contact.post') }}" role="form">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <div class="form-group">
                        <input type="text" placeholder="{{ trans('translator.inputName') }}" class="form-control" name="name" id="name" required>
                        @if ($errors->has('name'))
                        <small class="form-text text-danger">{{ $errors->first('name') }}</small>
                        @endif
                    </div>

                    <div class="form-group">
                        <input type="email" placeholder="{{ trans('translator.inputEmail') }}" class="form-control" name="email" id="email" required>
                        @if ($errors->has('email'))
                        <small class="form-text text-danger">{{ $errors->first('email') }}</small>
                        @endif
                    </div>

                    <div class="form-group">
                        <input type="text" placeholder="{{ trans('translator.inputSubject') }}" class="form-control" name="subject" id="subject" required>
                        @if ($errors->has('subject'))
                        <small class="form-text text-danger">{{ $errors->first('subject') }}</small>
                        @endif
                    </div>

                    <div class="form-group">
                        <textarea rows="6" placeholder="{{ trans('translator.inputMessage') }}" class="form-control" name="message"
                            id="message" required></textarea>
                        @if ($errors->has('message'))
                        <small class="form-text text-danger">{{ $errors->first('message') }}</small>
                        @endif
                    </div>


                    <button class="btn btn-main btn-block"><i class="tf-ion-android-send"></i>
                    {{ trans('translator.buttonSend') }}</button>

                </form>
            </div>
            <!-- ./End Contact Form -->

        </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- end section -->

@endsection

@section('scripts')
<script type="text/javascript">
toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-bottom-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "10000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
}
@if(Session::has('message'))
var type = "{{ Session::get('alert-type', 'success') }}"

switch (type) {
    case 'success':
        toastr.success("{{ Session::get('message') }}");
        break;
    case 'info':
        toastr.info("{{ Session::get('message') }}");
        break;
    case 'warning':
        toastr.warning("{{ Session::get('message') }}");
        break;
    case 'error':
        toastr.error("{{ Session::get('message') }}");
        break;
}
@endif
</script>
@endsection