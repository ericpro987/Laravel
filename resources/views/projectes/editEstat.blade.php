<div>
    <form action="{{route("projectes.updateEstat", $projecte)}}" method="POST">
        @csrf
        <label>Estat</label><br>
        <select type="number" id="state" name="state" value="{{$projecte->state}}">
           @if($projecte->state == 'PLANIFICACIO')
                <option>PLANIFICACIO</option>
                <option>EN_CURS</option>
           @endif
            @if($projecte->state == 'PAUSAT')
                <option>PAUSAT</option>
                <option>EN_CURS</option>
            @endif
            @if( $projecte->state == 'EN_CURS')<option>EN_CURS</option>
            <option>PAUSAT</option>
            <option>FINALIZAT</option>
            @endif
               <option>CANCELAT</option>
        </select><br>
        <button type="submit">Enviar</button>

    </form>
</div>
