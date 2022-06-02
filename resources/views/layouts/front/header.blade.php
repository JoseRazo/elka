<!--
Fixed Navigation
==================================== -->
	<header class="navigation navbar navbar-fixed-top">
	    <div class="container">
	        <div class="navbar-header">
	            <!-- responsive nav button -->
	            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>
	            <!-- /responsive nav button -->
	            <!-- logo -->
	            <a class="navbar-brand logo" href="{{ route('home') }}">
	                <img class="logo-default" src="/images/logo-elka-services-color.png" style="width: 90px;"
	                    alt="LOGO Elka.services" title="Elka.services All you need" />
	                <img class="logo-white" src="/images/logo-elka-services-blanco.png" style="width: 180px;"
	                    alt="LOGO Elka.services" title="Elka.services All you need" />
	            </a>
	            <!-- /logo -->
	        </div>
	        <!-- main nav -->
	        <nav class="collapse navbar-collapse navbar-right">
	            <ul id="nav" class="nav navbar-nav menu">
	                <li><a href="{{ route('about') }}">{{ trans('translator.about') }}</a></li>
	                <li><a href="{{ route('services') }}">{{ trans('translator.services') }}</a></li>
	                <li><a href="{{ route('clients') }}">{{ trans('translator.coverage') }}</a></li>
	                <li><a href="{{ route('contact') }}">{{ trans('translator.contact') }}</a></li>
	                <li style="width: 30px;"><a href="{{ url('lang', ['en']) }}"><img src="/images/icons/USA-icon.png" alt="English"title="English"></a></li>
	                <li style="width: 30px;"><a href="{{ url('lang', ['es']) }}"><img src="/images/icons/Mexico-icon.png" alt="Español"title="Español"></a></li>
	            </ul>
	        </nav>
	        <!-- /main nav -->
	    </div>
	</header>
	<!--
End Fixed Navigation
==================================== -->