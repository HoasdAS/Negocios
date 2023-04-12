Formulario de edicion de Pedidos

<form action="{{ url('/pedidos/'.$pedidos->id) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    @include('pedidos.form')

</form>