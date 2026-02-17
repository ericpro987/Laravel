<div>
    <form action="{{route("tickets.store")}}" method="POST">
        @csrf
        <h2>Titol</h2><br>
        <input type="text" id="titol" name="titol" required><br>
        <h2>Descripcio</h2><br>
        <input type="text" id="descripcio" name="descripcio" required><br>
        <h2>Codi Ticket</h2><br>
        <input type="text" id="codi_ticket" name="codi_ticket" required><br>
        <h2>Tipus</h2><br>
        <select type="number" id="tipus" name="tipus" required>
            <option>TASCA</option>
            <option>ERROR</option>
            <option>MILLORA</option>
            <option>CONSULTA</option>
        </select><br>
        <h2>Prioritat</h2><br>
        <select type="number" id="prioritat" name="prioritat" required>
            <option>BAIXA</option>
            <option>MITJA</option>
            <option>ALTA</option>
            <option>CRITICA</option>
        </select><br>
        <h2>Estat</h2><br>
        <select type="number" id="estat" name="estat" required>
            <option>NOU</option>
            <option>ASSIGNAT</option>
            <option>EN_PROGRES</option>
            <option>EN_REVISIO</option>
            <option>TANCAT</option>
        </select><br>
        <h2>Hores estimades</h2><br>
        <input type="number" id="hores_estimades" name="hores_estimades" required><br>
        <h2>Projecte</h2><br>
        <select id="projecte_id" name="projecte_id" required>
            @foreach($projects as $project)
                <option value="{{$project->id}}">{{$project->id}}</option>
            @endforeach
        </select><br>
        <h2>Ticket pare</h2><br>
        <select id="ticket_pare_id" name="ticket_pare_id">
            @foreach($tickets as $ticket)
                <option value="{{$ticket->id}}">{{$ticket->id}}</option>
            @endforeach
        </select><br>
        <h2>Assignat a</h2><br>
        <select id="assignat_a" name="assignat_a" required>
            @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->id}}</option>
            @endforeach
        </select><br>
        <button type="submit">Enviar</button>

    </form>

</div>
