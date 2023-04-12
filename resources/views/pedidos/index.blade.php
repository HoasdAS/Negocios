
<br>
<a href="{{url('pedidos/create')}}" class="btn btn-primary">Agregar nuevo Pedido</a>
    <br><br>

<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th> ID del Producto</th>
            <th> Cantidad</th>
            <th> Precio</th>
            <th> Precio Total</th>
            <th> Estatus</th>
            <th> Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach ( $pedidos as $pedidos )
            
        <tr>
            <td>{{ $pedidos->id }}</td>

            <td>{{ $pedidos->idproducto }}</td>
            <td>{{ $pedidos->cantidad }}</td>
            <td>{{ $pedidos->preciototal }}</td>
            <td>{{ $pedidos->estatus }}</td>
            <td>
                
                <a href="{{ url('/pedidos/'.$pedidos->id.'/edit') }}">
                    Editar
                </a>
                
                <form action="{{ url('/pedidos/'.$pedidos->id) }}" method="post" class="d-inline">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="submit" onclick="return confirm('Quiere borrar?')" value="Eliminar">


                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<br>
<a href="{{url('empleado/')}}" class="btn btn-primary">Lista de Emojis</a>