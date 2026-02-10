<div>
    <form action="{{route("clients.store")}}" method="POST">
        @csrf
        <input type="text" id="name" name="name">
        <input type="text" id="cif" name="cif">
        <input type="email" id="email" name="email">
        <input type="number" id="phone" name="phone">
        <input type="text" id="address" name="address">
        <input type="number" min="0" max="1" id="active" name="active">

        <button type="submit">Enviar</button>

    </form>

</div>
