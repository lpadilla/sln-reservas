<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<script src="{{ asset('js/app.js') }}"></script>

<div class="container">
    <form action="{{ route("cupos.store") }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="cantidad">Cantidad</label>
            <input class="form-control" type="text" name="cantidad" id="cantidad">
            @error('cantidad')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
