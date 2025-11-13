<div class="container form-bottom-space">
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" name="nombre" class="form-control" value="{{ old('nombre', $animal->nombre ?? '') }}" required>
    </div>
    <div class="mb-3">
        <label for="especie" class="form-label">Especie</label>
        <input type="text" name="especie" class="form-control" value="{{ old('especie', $animal->especie ?? '') }}" required>
    </div>
    <div class="mb-3">
        <label for="edad" class="form-label">Edad</label>
        <input type="number" name="edad" class="form-control" value="{{ old('edad', $animal->edad ?? '') }}" required>
    </div>
    <div class="mb-3">
        <label for="estado" class="form-label">Estado</label>
        <select name="estado" class="form-control">
            <option value="disponible" {{ old('estado', $animal->estado ?? '') == 'disponible' ? 'selected' : '' }}>Disponible</option>
            <option value="adoptado" {{ old('estado', $animal->estado ?? '') == 'adoptado' ? 'selected' : '' }}>Adoptado</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="photo" class="form-label">Foto</label>
        <input type="file" name="photo" class="form-control" {{ isset($animal) ? '' : 'required' }}>
    </div>
    <button type="submit" class="btn btn-primary">{{ $buttonText }}</button>
    <a href="{{ route('animals.index') }}" class="btn btn-secondary me-2">Atrás</a>
</div>
