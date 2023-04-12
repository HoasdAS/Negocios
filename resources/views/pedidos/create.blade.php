Formulario de creacion Pedidos

<form action="{{ url('/pedidos') }}" method="post">
    @csrf
    @include('pedidos.form')
</form>