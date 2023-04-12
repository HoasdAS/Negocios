Compania vende emojis

<br>
<a href="{{url('empleado/create')}}" class="btn btn-primary">Agregar nuevo Emoji</a>
    <br>

<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th> Foto</th>
            <th> Nombre</th>
            <th> Descripcion</th>
            <th> Precio</th>
            <th> Stock</th>
            <th> Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach ( $empleados as $empleado )
            
        <tr>
            <td>{{ $empleado->id }}</td>

            <td>
                <img src="{{ asset('storage').'/'.$empleado->foto }}" width="100" alt="">
            </td>


            <td>{{ $empleado->nombre }}</td>
            <td>{{ $empleado->descripcion }}</td>
            <td>{{ $empleado->precio }}</td>
            <td>{{ $empleado->stock }}</td>
            <td>
                
                <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}">
                    Editar
                </a>
                
                <form action="{{ url('/empleado/'.$empleado->id) }}" method="post" class="d-inline">
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
<a href="{{url('pedidos/')}}" class="btn btn-primary">Lista de Pedidos</a>
    

