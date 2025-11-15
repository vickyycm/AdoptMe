<div class="container form-bottom-space">
    <form>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre', $solicitud->nombre ?? '') }}">
            @error('nombre') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="mail" class="form-label">Email</label>
            <input type="email" name="mail" id="mail" class="form-control" value="{{ old('mail', $solicitud->mail ?? '') }}">
            @error('mail') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="animal_id" class="form-label">Animal</label>
            <select name="animal_id" id="animal_id" class="form-control">
                <option value="">-- Seleccione un animal --</option>
                @foreach($animals as $animal)
                <option value="{{ $animal->id }}" {{ (string) old('animal_id', $solicitud->animal_id ?? '') === (string)$animal->id ? 'selected' : '' }}>
                    {{ $animal->nombre }} ({{ $animal->especie }})
                </option>
                @endforeach
            </select>
            @error('animal_id') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn btn-primary">{{ $buttonText ?? 'Guardar' }}</button>
        <a href="{{ url()->previous() }}" class="btn btn-secondary me-2">Atrás</a>
    </form>
</div>