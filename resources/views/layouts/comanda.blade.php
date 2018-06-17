<div id="ContComanda" class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Productos</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>    
            @foreach($productos as $prod) 
                <tr class="success">
                    <td>{{ $prod->Nombre}}</td>
                    <td> </td>
                    <td>{{ $prod->Precio }}</td>
                    <td>
                        <button type="button" class="btn btn-danger">X</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>