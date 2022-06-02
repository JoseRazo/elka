<style>
.container {
    padding: 2rem;
    
}
.text-center {
    text-align: center;
    margin-top: 3rem;
}
.font-weight-bold {
    font-weight: 700 !important;
}

.font-weight-normal {
    font-weight: 400 !important;
}

.bg-light {
background-color: #f8f9fa !important;
}

.alert-primary {
color: #f8f9fa !important;
background-color: #580b1c !important;
border-color: #580b1c !important;
}

.alert {
text-align: center;
position: relative;
padding: 0 .75rem 0 .75rem;
margin-bottom: 1rem;
border: 1px solid transparent;
    border-top-color: transparent;
    border-right-color: transparent;
    border-bottom-color: transparent;
    border-left-color: transparent;
border-radius: .25rem;

}
</style>
<div class="container bg-light">
    <div class="alert alert-primary">
        <h1>Contacto Elka.services</h1>
    </div>

    <h3 class="font-weight-bold">Enviado por: <span class="font-weight-normal">{{ $nombre }}</span></h3>

    <h3 class="font-weight-bold">Email: <span class="font-weight-normal">{{ $email }}</span></h3>

    <h3 class="font-weight-bold">Asunto: <span class="font-weight-normal">{{ $asunto }}</span></h3>

    <h3 class="font-weight-bold">Mensaje: <span class="font-weight-normal">{{ $bodyMensaje }}</span></h3>

    <div class="text-center">
        <a href="http://elkaservices.com" target="_blank"><img style="width: 160px" src="http://elkaservices.com/images/logo-elka-services-color.png"></a>
    </div>

</div>