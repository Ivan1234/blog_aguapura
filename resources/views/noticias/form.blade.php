<div class="row">
    <div class="col s12">
        <ul class="tabs">
            <li class="tab col s3"><a class="active" href="#general">General</a></li>
            <li class="tab col s3"><a href="#contenido">Contenido</a></li>
            <li class="tab col s3"><a href="#seo">SEO</a></li>
            <li class="tab col s3"><a href="#imagenes">Imágenes</a></li>
        </ul>
    </div>

    <!-- General -->
    <div id="general" class="col s12 seo-tab">

        <div class="input-field">
            <input type="text" name="titulo" value="{{ old('titulo', $noticia->titulo ?? '') }}" required>
            <label class="active">Título *</label>
        </div>

        <div class="input-field">
            <input type="text" name="subtitulo" value="{{ old('subtitulo', $noticia->subtitulo ?? '') }}">
            <label class="active">Subtítulo</label>
        </div>

        <div class="input-field">
            <input type="text" name="resumen" value="{{ old('resumen', $noticia->resumen ?? '') }}">
            <label class="active">Resumen corto</label>
        </div>

        <div class="input-field">
            <input type="datetime-local" name="fecha_publicacion"
                value="{{ old('fecha_publicacion', isset($noticia) ? $noticia->fecha_publicacion?->format('Y-m-d\TH:i') : '') }}">
            <label class="active">Fecha de publicación</label>
        </div>

        <p>
            <label>
                <input type="checkbox" name="publicado" value="1"
                {{ old('publicado', $noticia->publicado ?? false) ? 'checked' : '' }}>
                <span>Publicar noticia</span>
            </label>
        </p>
    </div>

    <!-- Contenido -->
    <div id="contenido" class="col s12 seo-tab">
        <div class="input-field">
            <textarea class="materialize-textarea" name="contenido" required>{{ old('contenido', $noticia->contenido ?? '') }}</textarea>
            <label class="active">Contenido *</label>
        </div>
    </div>

    <!-- SEO -->
    <div id="seo" class="col s12 seo-tab">

        <div class="input-field">
            <input type="text" name="meta_titulo" value="{{ old('meta_titulo', $noticia->meta_titulo ?? '') }}">
            <label class="active">Meta Título</label>
        </div>

        <div class="input-field">
            <input type="text" name="meta_descripcion" value="{{ old('meta_descripcion', $noticia->meta_descripcion ?? '') }}">
            <label class="active">Meta Descripción</label>
        </div>

        <div class="input-field">
            <input type="text" name="palabras_clave" value="{{ old('palabras_clave', $noticia->palabras_clave ?? '') }}">
            <label class="active">Palabras clave (SEO)</label>
        </div>

        <div class="input-field">
            <input type="text" name="canonical_url" value="{{ old('canonical_url', $noticia->canonical_url ?? '') }}">
            <label class="active">URL Canónica</label>
        </div>

    </div>

    <!-- Imágenes -->
    <div id="imagenes" class="col s12 seo-tab">

        <div class="input-field">
            <input type="text" name="imagen_principal" value="{{ old('imagen_principal', $noticia->imagen_principal ?? '') }}">
            <label class="active">Imagen principal (URL)</label>
        </div>

        <div class="input-field">
            <input type="text" name="imagen_alt" value="{{ old('imagen_alt', $noticia->imagen_alt ?? '') }}">
            <label class="active">Texto ALT (SEO)</label>
        </div>

    </div>
</div>

<div class="row">
    <div class="col s12 right-align">
        <button class="btn-large blue darken-3">
            <i class="material-icons left">save</i> Guardar Noticia
        </button>
    </div>
</div>
