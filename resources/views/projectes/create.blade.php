<div>
    <form action="{{route("projectes.store")}}" method="POST">
        @csrf
        <input type="text" id="name" name="name">
        <input type="text" id="description" name="description">
        <input type="text" id="project_code" name="project_code">
        <select type="number" id="state" name="state">
            <option>PLANIFICACIO</option>
            <option>EN_CURS</option>
            <option>PAUSAT</option>
            <option>FINALIZAT</option>
            <option>CANCELAT</option>
        </select>
        <input type="date" id="previst_end_date" name="previst_end_date">
        <input type="number" id="estimate_budget_hours" name="estimate_budget_hours">
        <select id="client_id" name="client_id">
            @foreach($clients as $client)
                <option value="{{$client->id}}">{{$client->id }}</option>
            @endforeach
        </select>
        <button type="submit">Enviar</button>

    </form>

</div>
