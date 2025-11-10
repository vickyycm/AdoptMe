<div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre', $animal->nombre ?? '') }}">
    @error('nombre') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label for="especie" class="form-label">Especie</label>
    <input type="text" name="especie" id="especie" class="form-control" value="{{ old('especie', $animal->especie ?? '') }}">
    @error('especie') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label for="edad" class="form-label">Edad</label>
    <input type="number" name="edad" id="edad" class="form-control" value="{{ old('edad', $animal->edad ?? '') }}" min="0">
    @error('edad') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label for="estado" class="form-label">Estado</label>
    <select name="estado" id="estado" class="form-control">
        <option value="disponible" {{ old('estado', $animal->estado ?? '') === 'disponible' ? 'selected' : '' }}>Disponible</option>
        <option value="adoptado" {{ old('estado', $animal->estado ?? '') === 'adoptado' ? 'selected' : '' }}>Adoptado</option>
    </select>
    @error('estado') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<button type="submit" class="btn btn-primary">{{ $buttonText ?? 'Guardar' }}</button>
<a href="{{ route('animals.index') }}" class="btn btn-secondary">Cancelar</a>