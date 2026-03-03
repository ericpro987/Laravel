<div>
    <form action="{{route("tickets.update", $ticket)}}" method="POST">
        @csrf
        <label>Titol</label><br>
        <input type="text"  id="titol" name="titol" value="{{$ticket->titol}}"/><br>
        <label>Descripcio</label><br>
        <input type="text" id="descripcio" name="descripcio" value="{{$ticket->descripcio}}"/><br>
        <label>Estat</label><br>
        <select type="number" id="prioritat" name="prioritat" value="{{$ticket->estat}}">
            <option>BAIXA</option>
            <option>MITJA</option>
            <option>ALTA</option>
            <option>CRITICA</option>
        </select><br>
        <select type="number" id="estat" name="estat" value="{{$ticket->estat}}">
            <option>NOU</option>
            <option>ASSIGNAT</option>
            <option>EN_PROGRES</option>
            <option>EN_REVISIO</option>
            <option>TANCAT</option>
        </select><br>
        <label>Hores estimades</label><br>
        <input type="number" id="hores_estimades" name="hores_estimades" value="{{$ticket->hores_estimades}}"><br>
        <label>Data DeadLine</label><br>
        <input type="date" id="data_deadline" name="data_deadline"
               value="{{$ticket->data_deadline}}"><br>
        <label>Id del Client</label><br>
        <select disabled id="assignat_a" name = "assignat_a">
            <option>{{$ticket->assignat_a}}</option>
        </select><br>
        <select disabled id="projecte_id" name="projecte_id">
            <option>{{$ticket->projecte_id}}</option>
        </select><br>
        <button type="submit">Enviar</button>
    </form>
</div>
