@extends('layouts.app')

@section('titulo', 'Últimas Noticias')

@section('contenido')
<header class="news-header container">
    <h2 class="news-heading">TENDENCIAS</h2>
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

<section class="container">
    <div class="row justify-content-between g-4">
        <section class="nscad col-4">
            <div class="ctgagral">Política</div>
            <article class="mnnws">
                <img src="{{asset('img/reciente9.jpg')}}" alt="">
                <span class="fchapbcn">12 de julio de 2025</span>
                <h2>Impactante suceso cambia el rumbo de la ciudad</h2>
            </article>
            <article class="scdarnws">
                <h3>Detalles adicionales del acontecimiento</h3>
                <span class="fchapbnsdra">12 de julio de 2025</span>
                <p>
                    Las primeras declaraciones oficiales indican que el hecho podría tener implicaciones importantes...
                </p>
            </article>
        </section>

        <!-- Tarjeta 2 -->
        <section class="nscad col-4">
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

        <!-- Tarjeta 3 -->
        <section class="nscad col-4">
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

        <!-- Tarjeta 4 -->
        <section class="nscad col-4">
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

        <!-- Tarjeta 5 -->
        <section class="nscad col-4">
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

        <!-- Tarjeta 6 -->
        <section class="nscad col-4">
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
</section>

<!-- VIDEOS ANIMALITOS -->
<section class="vdsamts">
    <header class="latest-news-header">
        <h2 class="latest-news-title">Videos de animalitos</h2>
        <div class="latest-badge">🐥 Tus videos favoritos</div>
        <p class="latest-subheading">Lo mas tierno, lo más antiestres</p>
    </header>

    <div class="container">
        <div class="row justify-content-around">
            <!-- Tarjeta 1 -->
            <div class="vdacrd col-2">
                <div class="vdothm">
                    <video src="{{asset('videos/prueba.mp4')}}" muted></video>
                </div>
                <p class="vdodscpn">
                    Un tierno gatito jugando con una bola de estambre mientras rueda por la sala.
                </p>
            </div>

            <!-- Tarjeta 2 -->
            <div class="vdacrd col-2">
                <div class="vdothm">
                    <video src="{{asset('videos/prueba.mp4')}}" muted></video>
                </div>
                <p class="vdodscpn">
                    Un perrito bebé persiguiendo burbujas en un jardín soleado.
                </p>
            </div>

            <!-- Tarjeta 3 -->
            <div class="vdacrd col-2">
                <div class="vdothm">
                    <video src="{{asset('videos/prueba.mp4')}}" muted></video>
                </div>
                <p class="vdodscpn">
                    Un hamster corriendo dentro de una mini pista de obstáculos súper ingeniosa.
                </p>
            </div>

            <!-- Tarjeta 4 -->
            <div class="vdacrd col-2">
                <div class="vdothm">
                    <video src="{{asset('videos/prueba.mp4')}}" muted></video>
                </div>
                <p class="vdodscpn">
                    Un pequeño patito intentando imitar a su mamá mientras caminan juntos.
                </p>
            </div>

            <!-- Tarjeta 5 -->
            <div class="vdacrd col-2">
                <div class="vdothm">
                    <video src="{{asset('videos/prueba.mp4')}}" muted></video>
                </div>
                <p class="vdodscpn">
                    Un zorrillito bebé explorando por primera vez un bosque lleno de hojas.
                </p>
            </div>
        </div>
    </div>

    <div class="btnmsctn">
        <button class="btnmstms">Mostrar más</button>
    </div>
</section>
@endsection
