<div>
    <h1>Tickets Info</h1>
    <h2>Titol</h2>
    <p>{{$ticket->titol}}</p>
    <h2>Codi</h2>
    <p>{{$ticket->codi_ticket}}</p>
    <h2>Descripcio</h2>
    <p>{{$ticket->descripcio}}</p>
    <h2>Tipus</h2>
    <p>{{$ticket->tipus}}</p>
    <h2>Prioritat</h2>
    <p>{{$ticket->prioritat}}</p>
    <h2>Projecte</h2>
    <p>{{$ticket->projecte_id}}</p>
    <h2>Client</h2>
    <p>{{$ticket->assignat_a}}</p>
    <h2>Desenvolupador</h2>
    <p>{{$ticket->desenvolupador}}</p>
    <h2>Hores estimades</h2>
    <p>{{$ticket->hores_estimades}}</p>
    <h2>Hores reals</h2>
    <p>{{$ticket->hores_reals}}</p>
    <h2>Hores de desviacio</h2>
    <p>{{$ticket->hores_estimades-$ticket->hores_reals}}</p>
    <h2>Data creacio</h2>
    <p>{{$ticket->data_creacio}}</p>
    <h2>Data venciment</h2>
    <p>{{$ticket->data_deadline}}</p>
    <h2>Data tancament</h2>
    <p>{{$ticket->data_tancament}}</p>
    <h2>Subtasques</h2>
    <h2>Registre de temps</h2>
    <h2>Timeline</h2>
    <h3>Autor</h3>
    <p>{{$ticket->creat_per}}</p>
    <h3>Contingut</h3>
    <p>{{$ticket->estat}}</p>
</div>
