<div>
    <form action="{{ route('Comentaris.store') }}" method="POST">
        @csrf
        <label for="ticket_id">Ticket:</label>
        <select name="ticket_id" id="user_id" required>
            <option value="">Selecciona un usuario</option>
            @foreach($tickets as $ticket)
                <option value="{{ $ticket->id }}">
                    {{ $ticket->titol }}
                </option>
            @endforeach
        </select>
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
        <label for="contingut">Contingut:</label>
        <input type="text" name="contingut" id="contingut" required>
        <br><br>
        <label for="data">Fecha:</label>
        <input type="date" name="data" id="data" required>
        <br><br>
        <button type="submit">Guardar</button>
    </form>
</div>
