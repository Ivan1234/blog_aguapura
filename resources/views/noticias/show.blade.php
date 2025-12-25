@extends('layouts.app')

@section('titulo', 'Ejemplo de título')

@section('estilos')
<link rel="stylesheet" href="{{asset('css/noticia.css')}}">
@endsection

@push('head')
    <meta name="description" content="{{ $noticia->meta_descripcion }}">
    <link rel="canonical" href="{{ $noticia->canonical_url ?? $noticia->url }}">

    <meta property="og:title" content="{{ $noticia->og_titulo ?? $noticia->titulo }}">
    <meta property="og:description" content="{{ $noticia->og_descripcion ?? $noticia->meta_descripcion }}">
    <meta property="og:image" content="{{ asset($noticia->og_imagen ?? $noticia->imagen_principal) }}">
    <meta property="og:type" content="article">
@endpush

@section('contenido')
    <div class="ctner">
        <!-- Contenido principal -->
        <article class="news-article">
    
            <!-- Publicidad superior -->
            <div class="ad ad-top">
                <!-- Google AdSense (pegas tu script normal aquí) -->
                <p>Publicidad</p>
            </div>
    
            <h1 class="news-title">{{$noticia->title}}</h1>

            @php
                \Carbon\Carbon::setLocale('es');
            @endphp

            <div class="meta">
                <span>🕒 {{ \Carbon\Carbon::parse($noticia->published_at)->translatedFormat('j \d\e F, Y') }}</span>
                <span>✍️ Redacción Noticias MX</span>
            </div>
    
            <!-- Imagen principal obligatoria -->
            <figure class="main-image">
                <img src="{{asset('img/demo.jpg')}}" alt="Imagen principal de la nota">
                <figcaption>Descripción breve de la imagen principal</figcaption>
            </figure>
    
            <!-- Galería opcional -->
            <section class="gallery">
                <h3>Galería</h3>
                <div class="gallery-grid">
                    <img src="{{asset('img/reciente1.jpg')}}" alt="galería1">
                    <img src="{{asset('img/reciente2.jpg')}}" alt="galería2">
                    <img src="{{asset('img/reciente3.jpg')}}" alt="galería3">
                </div>
            </section>
    
            <!-- Cuerpo de la nota -->
            <section class="content">
                <p>
                    {{$noticia->body}}
                </p>
                <!--<p>
                    Este diseño está pensado para un portal moderno con enfoque en mantener al usuario dentro del sitio el mayor
                    tiempo posible, mostrando contenido relevante y espacios publicitarios estratégicamente colocados.
                </p>-->
            </section>
    
            <!-- Tweet embebible opcional -->
            <section class="tweet-section">
                <h3>Reacciones en Twitter</h3>
                <blockquote class="twitter-tweet">
                    <p lang="es" dir="ltr">Este es un tweet de ejemplo para incrustar dentro de la nota.</p>
                    &mdash; Usuario (@usuario)
                    <a href="#">Fecha</a>
                </blockquote>
            </section>
    
            <!-- Publicidad dentro del contenido -->
            <div class="ad ad-mid">
                <p>Publicidad</p>
            </div>
    
        </article>
    
        <!-- Noticias recomendadas -->
        <aside class="recommended">
            <h2>Noticias Recomendadas</h2>
    
            <div class="rec-item">
                <img src="{{asset('img/reciente5.jpg')}}" alt="recomendada1">
                <div>
                    <h4>Título de una noticia recomendada</h4>
                    <p>Pequeña descripción para enganchar al usuario.</p>
                </div>
            </div>
    
            <div class="rec-item">
                <img src="{{asset('img/reciente6.jpg')}}" alt="recomendada2">
                <div>
                    <h4>Otra noticia recomendada</h4>
                    <p>Contenido relacionado para retener al usuario.</p>
                </div>
            </div>
    
            <div class="rec-item">
                <img src="{{asset('img/reciente7.jpg')}}" alt="recomendada3">
                <div>
                    <h4>Más contenido relevante</h4>
                    <p>Para aumentar permanencia en el portal.</p>
                </div>
            </div>
    
            <!-- Publicidad lateral -->
            <div class="ad ad-side">
                <p>Publicidad</p>
            </div>
        </aside>
    </div>
@endsection