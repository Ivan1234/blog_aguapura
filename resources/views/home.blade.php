@extends('layouts.app')

@section('titulo', 'Últimas Noticias')

@section('contenido')
<header class="news-header container">
    <h2 class="news-heading">Últimas Noticias</h2>
    <p class="news-subheading">Mantente informado con lo más relevante de México y el mundo</p>
     <div class="trending-badge">
        <span class="fire-icon">🔥</span>
        En Tendencia Ahora
    </div>
</header>
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
            <div class="row justify-content-center align-items-center" style="height: 500px;">
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

<section class="latest-news my-5">
    <div class="container" style="padding: 30px 0;">
        <!-- Encabezado -->
        <header class="latest-news-header">
            <h2 class="latest-news-title">Últimas Noticias</h2>
            <div class="latest-badge">📰 Recién Publicadas</div>
            <p class="latest-subheading">Lo más nuevo, minuto a minuto</p>
        </header>
    
        <!-- Grid de últimas noticias -->
        <div class="row">
            <!-- Noticia 1 -->
            <a href="#" class="latest-card col-md-4">
                <div class="latest-image" style="background-image: url('{{asset('img/reciente1.jpg')}}');"></div>
                <div class="latest-body">
                    <h5 class="latest-category">Política</h5>
                    <h3 class="latest-title">Nuevo acuerdo comercial entre México y Canadá</h3>
                </div>
            </a>
    
            <!-- Noticia 2 -->
            <a href="#" class="latest-card col-md-4">
                <div class="latest-image" style="background-image: url('{{asset('img/reciente2.jpg')}}');"></div>
                <div class="latest-body">
                    <h5 class="latest-category">Tecnología</h5>
                    <h3 class="latest-title">Lanzamiento del nuevo iPhone revoluciona el mercado</h3>
                </div>
            </a>
    
            <!-- Noticia 3 -->
            <a href="#" class="latest-card col-md-4">
                <div class="latest-image" style="background-image: url('{{asset('img/reciente3.jpg')}}');"></div>
                <div class="latest-body">
                    <h5 class="latest-category">Deportes</h5>
                    <h3 class="latest-title">América y Chivas se enfrentarán en la semifinal</h3>
                </div>
            </a>
    
            <!-- Noticia 4 -->
            <a href="#" class="latest-card col-md-4">
                <div class="latest-image" style="background-image: url('{{asset('img/reciente4.jpg')}}');"></div>
                <div class="latest-body">
                    <h5 class="latest-category">Economía</h5>
                    <h3 class="latest-title">El peso alcanza su mejor nivel en 5 años</h3>
                </div>
            </a>
    
            <!-- Noticia 5 -->
            <a href="#" class="latest-card col-md-4">
                <div class="latest-image" style="background-image: url('{{asset('img/reciente5.jpg')}}');"></div>
                <div class="latest-body">
                    <h5 class="latest-category">Salud</h5>
                    <h3 class="latest-title">Avances en la vacuna contra el cáncer</h3>
                </div>
            </a>
    
            <!-- Noticia 6 -->
            <a href="#" class="latest-card col-md-4">
                <div class="latest-image" style="background-image: url('{{asset('img/reciente6.jpg')}}');"></div>
                <div class="latest-body">
                    <h5 class="latest-category">Internacional</h5>
                    <h3 class="latest-title">La ONU aprueba medidas contra el cambio climático</h3>
                </div>
            </a>
    
            <!-- Noticia 7 -->
            <a href="#" class="latest-card col-md-4">
                <div class="latest-image" style="background-image: url('{{asset('img/reciente7.jpg')}}');"></div>
                <div class="latest-body">
                    <h5 class="latest-category">Cultura</h5>
                    <h3 class="latest-title">Nueva exposición de Frida Kahlo en CDMX</h3>
                </div>
            </a>
    
            <!-- Noticia 8 -->
            <a href="#" class="latest-card col-md-4">
                <div class="latest-image" style="background-image: url('{{asset('img/reciente8.jpg')}}');"></div>
                <div class="latest-body">
                    <h5 class="latest-category">Ciencia</h5>
                    <h3 class="latest-title">Descubren planeta similar a la Tierra</h3>
                </div>
            </a>
    
            <!-- Noticia 9 -->
            <a href="#" class="latest-card col-md-4">
                <div class="latest-image" style="background-image: url('{{asset('img/reciente9.jpg')}}');"></div>
                <div class="latest-body">
                    <h5 class="latest-category">Educación</h5>
                    <h3 class="latest-title">Reformas en el sistema educativo mexicano</h3>
                </div>
            </a>
        </div>
    </div>
    <div class="see-more-container">
        <button id="load-more" class="see-more-btn">Ver más</button>
    </div>
</section>
@endsection
