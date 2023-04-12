
<br>
<label for="idproducto">ID Producto</label>
<input type="text" name="idproducto" value="{{  isset($pedidos->idproducto)?$pedidos->idproducto:''}}" id="idproducto">
<br>

<label for="cantidad">Cantidad</label>
<input type="text" name="cantidad" value="{{  isset($pedidos->cantidad)?$pedidos->cantidad:''}}" id="cantidad">
<br>

<label for="precio">Precio</label>
<input type="text" name="precio" value="{{  isset($pedidos->precio)?$pedidos->precio:''}}" id="precio">
<br>

<label for="preciototal">Precio Total</label>
<input type="text" name="preciototal" value="{{  isset($pedidos->preciototal)?$pedidos->preciototal:''}}" id="preciototal">
<br>

<label for="estatus">Estatus</label>
<input type="text" name="estatus" value="{{  isset($pedidos->estatus)?$pedidos->estatus:''}}" id="estatus">
<br>


<input type="submit" value="Guardar Info">
<br>
<a href="{{url('pedidos/')}}">Regresar</a>