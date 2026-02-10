<div>
<h1>Info General</h1>
    <h2>Titol</h2>
    <p>{{$projecte->name}}</p>
    <h2>Codi</h2>
    <p>{{$projecte->project_code}}</p>
    <h2>Descripcio</h2>
    <p>{{$projecte->description}}</p>
<h1>Client Associat</h1>
    <h2>Nom Client</h2>
    <p>{{$client->name}}</p>
    <h2>CIF</h2>
    <p>{{$client->cif}}</p>
    <h2>Gestor Assignat</h2>
    <p>{{$gestor->name}}</p>
<h1>Estat</h1>
    <p>{{$projecte->state}}</p>
<h1>Dates</h1>
    <h2>Inici</h2>
    <p>{{$projecte->begin_date}}</p>
    <h2>Fi previst</h2>
    <p>{{$projecte->previst_end_date}}</p>

</div>
