<div>
<form action="{{ route('RegistreTemps.store', $id) }}" method="POST">
    @csrf
    <label for="user_id">Usuario:</label>
    <select name="user_id" id="user_id" required>
        <option value="">Selecciona un usuario</option>
        @foreach($clients as $client)
            <option value="{{ $client->id }}">
                {{ $client->name }}
            </option>
        @endforeach
    </select>
    <br><br>
    <label for="data">Fecha:</label>
    <input type="date" name="data" id="data" required>
    <br><br>
    <label for="hores_treballades">Horas trabajadas:</label>
    <input type="number" name="hores_treballades" id="hores_treballades" step="0.01" min="0" required>
    <br><br>
    <label for="descripcio_treball">Descripción:</label>
    <input name="descripcio_treball" id="descripcio_treball" required/>
    <br><br>
    <button type="submit">Guardar</button>
</form>
</div>
