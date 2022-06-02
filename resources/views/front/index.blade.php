@extends('layouts.front.app')

@section('title', 'Home')

@section('meta_site')
<meta name="resource-type" content="Homepage" />
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
@include('layouts.front.slider')
@include('layouts.front.about')
@include('layouts.front.services')
@include('layouts.front.contact')
@include('layouts.front.partners')
@endsection