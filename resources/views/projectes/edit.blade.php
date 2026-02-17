<div>
    <form action="{{route("projectes.update", $projecte)}}" method="POST">
    @csrf
    <label>Nom</label><br>
    <input value="{{$projecte->name}}" id="name" name="name"><br>
    <label>Descripcio</label><br>
    <input type="text" id="description" name="description" value="{{$projecte->description}}"><br>
    <label>Codi Projecte</label><br>
    <input disabled value="{{$projecte->project_code}}"/><br>
    <label>Estat</label><br>
    <select type="number" id="state" name="state" value="{{$projecte->state}}">
        <option>PLANIFICACIO</option>
        <option>EN_CURS</option>
        <option>PAUSAT</option>
        <option>FINALIZAT</option>
        <option>CANCELAT</option>
    </select><br>
    <label>Data fi prevista</label><br>
    <input type="date" id="previst_end_date" name="previst_end_date" value="{{$projecte->previst_end_date}}"><br>
    <label>Hores estimades</label><br>
    <input type="number" id="estimate_budget_hours" name="estimate_budget_hours" value="{{$projecte->estimate_budget_hours}}"><br>
    <label>Id del Client</label><br>
    <select disabled><option>{{$projecte->client_id}}</option></select><br>
    <button type="submit">Enviar</button>

    </form>
</div>
