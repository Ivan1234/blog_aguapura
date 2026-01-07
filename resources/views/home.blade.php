@extends('layouts.app')

@section('titulo', 'Últimas Noticias | Noti-pura')

@section('estilos')
<link rel="stylesheet" href="{{ asset('css/noticias.css') }}">
@endsection

@section('contenido')
<header class="news-header container">
    <h2 class="news-heading">TENDENCIAS</h2>
    <p class="news-subheading">Mantente informado con lo más relevante de México y el mundo</p>
     <div class="trending-badge">
        <span class="fire-icon">🔥</span>
        En Tendencia Ahora
    </div>
</header>

<section class="ads ads-top container">
    <ins class="adsbygoogle"
        style="display:block"
        data-ad-client="ca-pub-XXXXXXXXXXXX"
        data-ad-slot="1111111111"
        data-ad-format="auto"
        data-full-width-responsive="true"></ins>
</section>

<section class="container">
    <div class="row">
        <a href="#" class="news-card col-lg-8 mb-4">
            <div class="news-image" style="background-image: url({{asset('img/demo.jpg')}});"></div>
            <div class="news-card-body">
                <h5 class="news-category">México</h5>
                <h3 class="news-title">Confirmados 14 muertos en accidente de pipa de gas</h3>
                <p class="news-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin imperdiet risus nec metus.</p>
            </div>
        </a>
        <div class="col-lg-4">
            <div class="row justify-content-center align-items-center" style="height: 600px;">
                <a href="#" class="news-card-secundario col-11">
                    <div class="news-image-secundario" style="background-image: url({{asset('img/secundario1.jpg')}});"></div>
                    <div class="news-card-body-secundario">
                        <h5 class="news-category-secundario">México</h5>
                        <h3 class="news-title-secundario">Confirmados 14 muertos en accidente de pipa de gas</h3>
                        <p class="news-text-secundario">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin imperdiet risus nec metus.</p>
                    </div>
                </a>
                <a href="#" class="news-card-secundario col-11">
                    <div class="news-image-secundario" style="background-image: url({{asset('img/secundario2.jpg')}});"></div>
                    <div class="news-card-body-secundario">
                        <h5 class="news-category-secundario">México</h5>
                        <h3 class="news-title-secundario">Confirmados 14 muertos en accidente de pipa de gas</h3>
                        <p class="news-text-secundario">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin imperdiet risus nec metus.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="ads my-4">
        <ins class="adsbygoogle"
            style="display:block"
            data-ad-client="ca-pub-XXXXXXXXXXXX"
            data-ad-slot="2222222222"
            data-ad-format="auto"></ins>
    </div>  
</div>

<section class="latest-news my-5">
    <div class="container" style="padding: 30px 0;">
        <!-- Encabezado -->
        <header class="latest-news-header">
            <h2 class="latest-news-title">Últimas Noticias</h2>
            <div class="latest-badge">📰 Recién Publicadas</div>
            <p class="latest-subheading">Lo más nuevo, minuto a minuto</p>
        </header>
    
        <!-- Grid de últimas noticias -->
        <div class="row align-items-start">
            <div class="col-lg-3 ads-sidebar">
                <aside class="ads-2 mb-4" style="width: 100%;">
                    <ins class="adsbygoogle"
                        style="display:block"
                        data-ad-client="ca-pub-XXXXXXXXXXXX"
                        data-ad-slot="3333333333"
                        data-ad-format="rectangle"></ins>
                </aside>

                <aside class="ads-2 mb-4" style="width: 100%;">
                    <ins class="adsbygoogle"
                        style="display:block"
                        data-ad-client="ca-pub-XXXXXXXXXXXX"
                        data-ad-slot="3333333333"
                        data-ad-format="rectangle"></ins>
                </aside>

                <aside class="ads-2 mb-4" style="width: 100%;">
                    <ins class="adsbygoogle"
                        style="display:block"
                        data-ad-client="ca-pub-XXXXXXXXXXXX"
                        data-ad-slot="3333333333"
                        data-ad-format="rectangle"></ins>
                </aside>
            </div>

            <div class="col-lg-9">
                <div class="row justify-content-around">
                    <!-- Noticia 1 -->
                    <div class="col-md-4">
                        <a href="#" class="latest-card">
                            <div class="latest-image" style="background-image: url('{{asset('img/reciente1.jpg')}}');"></div>
                            <div class="latest-body">
                                <h5 class="latest-category">Política</h5>
                                <h3 class="latest-title">Nuevo acuerdo comercial entre México y Canadá</h3>
                            </div>
                        </a>
                    </div>    
            
                    <!-- Noticia 2 -->
                    <div class="col-md-4">
                        <a href="#" class="latest-card">
                            <div class="latest-image" style="background-image: url('{{asset('img/reciente2.jpg')}}');"></div>
                            <div class="latest-body">
                                <h5 class="latest-category">Tecnología</h5>
                                <h3 class="latest-title">Lanzamiento del nuevo iPhone revoluciona el mercado</h3>
                            </div>
                        </a>
                    </div>
            
                    <!-- Noticia 3 -->
                    <div class="col-md-4">
                        <a href="#" class="latest-card">
                            <div class="latest-image" style="background-image: url('{{asset('img/reciente3.jpg')}}');"></div>
                            <div class="latest-body">
                                <h5 class="latest-category">Deportes</h5>
                                <h3 class="latest-title">América y Chivas se enfrentarán en la semifinal</h3>
                            </div>
                        </a>
                    </div>
            
                    <!-- Noticia 4 -->
                    <div class="col-md-4">
                        <a href="#" class="latest-card">
                            <div class="latest-image" style="background-image: url('{{asset('img/reciente4.jpg')}}');"></div>
                            <div class="latest-body">
                                <h5 class="latest-category">Economía</h5>
                                <h3 class="latest-title">El peso alcanza su mejor nivel en 5 años</h3>
                            </div>
                        </a>
                    </div>
            
                    <!-- Noticia 5 -->
                    <div class="col-md-4">
                        <a href="#" class="latest-card">
                            <div class="latest-image" style="background-image: url('{{asset('img/reciente5.jpg')}}');"></div>
                            <div class="latest-body">
                                <h5 class="latest-category">Salud</h5>
                                <h3 class="latest-title">Avances en la vacuna contra el cáncer</h3>
                            </div>
                        </a>
                    </div>
            
                    <!-- Noticia 6 -->
                    <div class="col-md-4">
                        <a href="#" class="latest-card">
                            <div class="latest-image" style="background-image: url('{{asset('img/reciente6.jpg')}}');"></div>
                            <div class="latest-body">
                                <h5 class="latest-category">Internacional</h5>
                                <h3 class="latest-title">La ONU aprueba medidas contra el cambio climático</h3>
                            </div>
                        </a>
                    </div>
            
                    <!-- Noticia 7 -->
                    <div class="col-md-4">
                        <a href="#" class="latest-card">
                            <div class="latest-image" style="background-image: url('{{asset('img/reciente7.jpg')}}');"></div>
                            <div class="latest-body">
                                <h5 class="latest-category">Cultura</h5>
                                <h3 class="latest-title">Nueva exposición de Frida Kahlo en CDMX</h3>
                            </div>
                        </a>
                    </div>
            
                    <!-- Noticia 8 -->
                    <div class="col-md-4">
                        <a href="#" class="latest-card">
                            <div class="latest-image" style="background-image: url('{{asset('img/reciente8.jpg')}}');"></div>
                            <div class="latest-body">
                                <h5 class="latest-category">Ciencia</h5>
                                <h3 class="latest-title">Descubren planeta similar a la Tierra</h3>
                            </div>
                        </a>
                    </div>
            
                    <!-- Noticia 9 -->
                    <div class="col-md-4">
                        <a href="#" class="latest-card">
                            <div class="latest-image" style="background-image: url('{{asset('img/reciente9.jpg')}}');"></div>
                            <div class="latest-body">
                                <h5 class="latest-category">Educación</h5>
                                <h3 class="latest-title">Reformas en el sistema educativo mexicano</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="see-more-container">
        <button id="load-more" class="see-more-btn">Ver más</button>
    </div>
</section>

<div class="container">
    <div class="col-12 my-4">
        <div class="ads ads-mid">
            <ins class="adsbygoogle"
                style="display:block"
                data-ad-client="ca-pub-XXXXXXXXXXXX"
                data-ad-slot="4444444444"
                data-ad-format="auto"></ins>
        </div>
    </div>
</div>

<section class="container">
    <div class="row justify-content-between">
        <div class="col-4">
            <section class="nscad">
                <div class="ctgagral">Política</div>
                <article class="mnnws">
                    <img src="{{asset('img/reciente9.jpg')}}" alt="">
                    <span class="fchapbcn">12 de julio de 2025</span>
                    <h2 class="ttlprincl">Impactante suceso cambia el rumbo de la ciudad</h2>
                </article>
                <article class="scdarnws">
                    <h3>Detalles adicionales del acontecimiento</h3>
                    <span class="fchapbnsdra">12 de julio de 2025</span>
                    <p>
                        Las primeras declaraciones oficiales indican que el hecho podría tener implicaciones importantes...
                    </p>
                </article>
            </section>
        </div>

        <!-- Tarjeta 2 -->
         <div class="col-4">
             <section class="nscad">
                 <div class="ctgagral">Política</div>
                 <article class="mnnws">
                     <img src="{{asset('img/reciente9.jpg')}}" alt="">
                     <span class="fchapbcn">12 de julio de 2025</span>
                     <h2>Nueva tecnología promete mejorar la calidad de vida</h2>
                 </article>
                 <article class="scdarnws">
                     <h3>Desarrollo y pruebas iniciales</h3>
                     <span class="fchapbnsdra">12 de julio de 2025</span>
                     <p>
                         Expertos señalan que esta innovación podría estar disponible al público antes de lo previsto...
                     </p>
                 </article>
             </section>
         </div>

        <!-- Tarjeta 3 -->
        <div class="col-4">
            <section class="nscad">
                <div class="ctgagral">Política</div>
                <article class="mnnws">
                    <img src="{{asset('img/reciente9.jpg')}}" alt="">
                    <span class="fchapbcn">12 de julio de 2025</span>
                    <h2>La economía presenta señales de recuperación</h2>
                </article>
                <article class="scdarnws">
                    <h3>Analistas optimistas</h3>
                    <span class="fchapbnsdra">12 de julio de 2025</span>
                    <p>
                        Los indicadores comienzan a mostrar un comportamiento positivo luego de varios meses de incertidumbre…
                    </p>
                </article>
            </section>
        </div>

        <!-- Tarjeta 4 -->
        <div class="col-4 mt-3">
            <section class="nscad">
                <div class="ctgagral">Política</div>
                <article class="mnnws">
                    <img src="{{asset('img/reciente9.jpg')}}" alt="">
                    <span class="fchapbcn">12 de julio de 2025</span>
                    <h2>Descubren nueva especie en la selva amazónica</h2>
                </article>
                <article class="scdarnws">
                    <h3>Un hallazgo sorprendente</h3>
                    <span class="fchapbnsdra">12 de julio de 2025</span>
                    <p>
                        Investigadores aseguran que esta especie podría aportar información valiosa sobre la biodiversidad...
                    </p>
                </article>
            </section>
        </div>

        <!-- Tarjeta 5 -->
        <div class="col-4  mt-3">
            <section class="nscad">
                <div class="ctgagral">Política</div>
                <article class="mnnws">
                    <img src="{{asset('img/reciente9.jpg')}}" alt="">
                    <span class="fchapbcn">12 de julio de 2025</span>
                    <h2>Evento cultural reúne a miles de asistentes</h2>
                </article>
                <article class="scdarnws">
                    <h3>Un éxito total</h3>
                    <span class="fchapbnsdra">12 de julio de 2025</span>
                    <p>
                        Artistas de todo el mundo participaron en esta edición que superó todas las expectativas...
                    </p>
                </article>
            </section>
        </div>

        <!-- Tarjeta 6 -->
        <div class="col-4  mt-3">
            <section class="nscad">
                <div class="ctgagral">Política</div>
                <article class="mnnws">
                    <img src="{{asset('img/reciente9.jpg')}}" alt="">
                    <span class="fchapbcn">12 de julio de 2025</span>
                    <h2>Aumentan campañas de concientización ambiental</h2>
                </article>
                <article class="scdarnws">
                    <h3>Participación de jóvenes</h3>
                    <span class="fchapbnsdra">12 de julio de 2025</span>
                    <p>
                        Las nuevas generaciones están tomando un papel clave en la lucha contra el cambio climático...
                    </p>
                </article>
            </section>
        </div>
    </div>
</section>

<section class="ads ads-section-break container my-5">
    <ins class="adsbygoogle"
        style="display:block"
        data-ad-client="ca-pub-XXXXXXXXXXXX"
        data-ad-slot="5555555555"
        data-ad-format="auto"></ins>
</section>

<!-- VIDEOS ANIMALITOS -->
<section class="vdsamts">
    <header class="latest-news-header">
        <h2 class="latest-news-title">Videos</h2>
        <div class="latest-badge">Información cripto en videos</div>
        <p class="latest-subheading">Entérate antes que nadie del mundo cripto</p>
    </header>

    <div class="container">
        <div class="row align-items-start">
            <div class="col-3 ads-sidebar">
                <aside class="ads-2 mb-4" style="width: 100%;">
                    <ins class="adsbygoogle"
                        style="display:block"
                        data-ad-client="ca-pub-XXXXXXXXXXXX"
                        data-ad-slot="3333333333"
                        data-ad-format="rectangle"></ins>
                </aside>

                <aside class="ads-2 mb-4" style="width: 100%;">
                    <ins class="adsbygoogle"
                        style="display:block"
                        data-ad-client="ca-pub-XXXXXXXXXXXX"
                        data-ad-slot="3333333333"
                        data-ad-format="rectangle"></ins>
                </aside>

                <aside class="ads-2 mb-4" style="width: 100%;">
                    <ins class="adsbygoogle"
                        style="display:block"
                        data-ad-client="ca-pub-XXXXXXXXXXXX"
                        data-ad-slot="3333333333"
                        data-ad-format="rectangle"></ins>
                </aside>                
            </div>
            <div class="col-9">
                <div class="row">
                    <!-- Tarjeta 1 -->
                    <div class="col-6 mt-4">
                        <div class="vdacrd">
                            <div class="vdothm">
                                <video src="{{asset('videos/prueba.mp4')}}" muted></video>
                            </div>
                            <p class="vdodscpn">
                                Un tierno gatito jugando con una bola de estambre mientras rueda por la sala.
                            </p>
                        </div>
                    </div>
        
                    <!-- Tarjeta 2 -->
                    <div class="col-6 mt-4">
                        <div class="vdacrd">
                            <div class="vdothm">
                                <video src="{{asset('videos/prueba.mp4')}}" muted></video>
                            </div>
                            <p class="vdodscpn">
                                Un perrito bebé persiguiendo burbujas en un jardín soleado.
                            </p>
                        </div>
                    </div>
        
                    <!-- Tarjeta 3 -->
                    <div class="col-6 mt-4">
                        <div class="vdacrd">
                            <div class="vdothm">
                                <video src="{{asset('videos/prueba.mp4')}}" muted></video>
                            </div>
                            <p class="vdodscpn">
                                Un hamster corriendo dentro de una mini pista de obstáculos súper ingeniosa.
                            </p>
                        </div>
                    </div>
        
                    <!-- Tarjeta 4 -->
                    <div class="col-6 mt-4">
                        <div class="vdacrd">
                            <div class="vdothm">
                                <video src="{{asset('videos/prueba.mp4')}}" muted></video>
                            </div>
                            <p class="vdodscpn">
                                Un pequeño patito intentando imitar a su mamá mientras caminan juntos.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="btnmsctn">
        <button class="btnmstms">Mostrar más</button>
    </div>
</section>

<!-- MODALES -->
<div class="modal fade" id="newsletterModal" tabindex="-1" aria-labelledby="newsletterModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-secondary shadow-2xl custom-dark-modal">
      
      <div class="modal-header border-0 pb-0">
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body px-5 pb-5">
        <div class="text-center mb-4">
          <div class="icon-box-dark mb-3">
             <i class="bi bi-send-check"></i>
          </div>
          <h3 class="modal-title fw-bold text-white" id="newsletterModalLabel">Únete al lado oscuro</h3>
          <p class="text-secondary">Contenido exclusivo y actualizaciones directamente a tu bandeja.</p>
        </div>

        <form action="{{ route('newsletter.subscribe') }}" method="POST" id="formNewsletter1">
          @csrf
          
          <div class="mb-3">
            <label for="nombre" class="form-label small fw-bold text-uppercase text-secondary">Nombre completo</label>
            <input type="text" name="nombre" class="form-control form-control-lg dark-input" placeholder="Ej. Juan Pérez" id="inputNombre" value="{{ old('nombre') }}">
            <div id="nombre-error1" class="text-danger small mt-2" style="display: none;">
                Por favor, ingresa un nombre válido.
            </div>
          </div>

          <div class="mb-4">
            <label for="email" class="form-label small fw-bold text-uppercase text-secondary">Correo electrónico</label>
            <input type="email" name="email" class="form-control form-control-lg dark-input" id="emailNewsLetter1" placeholder="juan@ejemplo.com" autocomplete="email" value="{{ old('email') }}">
            <input type="hidden" name="name_type" value="header">
            <div id="email-error1" class="text-danger small mt-2" style="display: none;">
                Por favor, ingresa un correo electrónico válido.
            </div>
          </div>

          <div class="d-grid">
            <button type="submit" class="btn-primary-dark btn-lg fw-bold" id="btnSubscribe1">
              Confirmar suscripción
            </button>
          </div>
          
          <p class="text-center small text-secondary mt-3 mb-0">
            Sin spam, solo valor. Te lo prometemos.
          </p>
        </form>

        @if($errors->header->any())
            <div class="alert alert-danger border-0 shadow-sm d-flex align-items-center mt-4 mb-2" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-3" viewBox="0 0 16 16">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>
                <div>
                    <ul class="list-unstyled mb-0">
                        @foreach($errors->header->all() as $error)
                            <li class="small fw-bold">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="nameOnlyModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-secondary custom-dark-modal shadow-2xl">
      
      <div class="modal-header border-0 pb-0">
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body px-5 pb-5 text-center">
        <div class="icon-box-dark mb-4">
           <i class="bi bi-person-badge"></i>
        </div>

        <h3 class="fw-bold text-white mb-2">¿Cómo te llamas?</h3>
        <p class="text-secondary mb-4">Queremos personalizar tu experiencia con nosotros.</p>

        <form action="{{ route('newsletter.subscribe') }}" method="POST" id="formNewsletter2">
          @csrf
          <div class="mb-4">
            <input type="text" name="nombre" class="form-control form-control-lg dark-input text-center" placeholder="Escribe tu nombre completo" autocomplete="nombre" id="inputNombre2">
            <input type="hidden" name="email">
            <input type="hidden" name="name_type" value="footer">
            <div id="nombre-error2" class="text-danger small mt-2" style="display: none;">
                Por favor, ingresa un nombre válido.
            </div>
          </div>

          <div class="d-grid">
            <button type="submit" class="btn-primary-dark btn-lg fw-bold py-3" id="btnSubscribe2">
              Continuar <i class="bi bi-arrow-right ms-2"></i>
            </button>
          </div>
        </form>

        @if($errors->footer->any())
            <div class="alert alert-danger border-0 shadow-sm d-flex align-items-center mt-4 mb-2" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-3" viewBox="0 0 16 16">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>
                <div>
                    <ul class="list-unstyled mb-0">
                        @foreach($errors->footer->all() as $error)
                            <li class="small fw-bold">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script>
    let emailValue = null;
    let nombre = null;
    const formNewsletter1 = $("#formNewsletter1");
    const btnSubscribe1 = $("#btnSubscribe1");
    const nombreError1 = $("#nombre-error1");
    const inputNombre = $("#inputNombre");
    const emailError1 = $("#email-error1");
    const emailNewsletter1 = $("#emailNewsLetter1");

    const btnSubscribe2 = $("#btnSubscribe2");
    const nombreError2 = $("#nombre-error2");
    const inputNombre2 = $("#inputNombre2");
    const formNewsletter2 = $("#formNewsletter2");

    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const nameRegex = /^[a-zA-ZÀ-ÿ](?!.*[<>\"'%;()&])[\s'a-zA-ZÀ-ÿ.-]{2,60}$/;

    @if($errors->footer->any())
    const modalFooter = new bootstrap.Modal(document.getElementById('nameOnlyModal'));
    modalFooter.show();
    @endif

    @if($errors->header->any())
    const modalHeader = new bootstrap.Modal(document.getElementById('newsletterModal'));
    modalHeader.show();
    @endif

    btnSubscribe1.click(function(e){
        e.preventDefault();

        nombre = $("input[name='nombre']").val().trim();
        emailValue = $("input[name='email']").val().trim();

        if(nombre === "" || !nameRegex.test(nombre)){
            nombreError1.css({"display":"block"});
            inputNombre.addClass('is-invalid');
            return;
        }

        nombreError1.css({"display":"none"});
        inputNombre.removeClass('is-invalid');

        if(emailValue === "" || !emailPattern.test(emailValue)){
            emailError1.css({"display":"block"});
            emailNewsletter1.addClass('is-invalid');
            return;
        }

        emailError1.css({"display":"none"});
        emailNewsletter1.removeClass('is-invalid');

        formNewsletter1.submit();
    });

    btnSubscribe2.click(function(e){
        e.preventDefault();

        nombre = $("input[name='nombre']:eq(1)").val().trim();

        if(nombre === "" || !nameRegex.test(nombre)){
            nombreError2.css({"display":"block"});
            inputNombre2.addClass('is-invalid');
            return;
        }

        nombreError2.css({"display":"none"});
        inputNombre2.removeClass('is-invalid');

        formNewsletter2.submit();
    });

    function validaryabrir(){
        const emailNewsletter = $("#emailNewsletter");
        emailValue = emailNewsletter.val().trim();
        const errorMsg = $("#email-error");

        if(emailValue === "" || !emailPattern.test(emailValue)){
            errorMsg.css({"display":"block"});
            emailNewsletter.addClass('is-invalid');
            return;
        }

        errorMsg.css({"display":"none"});
        emailNewsletter.removeClass('is-invalid');

        $("input[name='email']").val(emailValue);
        const nameOnlyModal = new bootstrap.Modal(document.getElementById('nameOnlyModal'));
        nameOnlyModal.show();
    }
</script>
@endsection
