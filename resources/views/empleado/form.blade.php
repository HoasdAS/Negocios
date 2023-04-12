
<br>
<label for="nombre">Nombre</label>
<input type="text" name="nombre" value="{{  isset($empleado->nombre)?$empleado->nombre:''}}" id="nombre">
<br>

<label for="descripcion">Descripcion</label>
<input type="text" name="descripcion" value="{{  isset($empleado->descripcion)?$empleado->descripcion:''}}" id="descripcion">
<br>

<label for="foto">Foto</label>

@if(isset($empleado->foto))
<img src="{{ asset('storage').'/'.$empleado->foto }}" width="100" alt="">
@endif

<input type="file" name="foto" value="{{  isset($empleado->foto)?$empleado->foto:''}}" id="foto">
<br>

<label for="precio">Precio</label>
<input type="text"name="precio" value="{{  isset($empleado->precio)?$empleado->precio:''}}" id="precio">
<br>

<label for="stock">Stock</label>
<input type="text" name="stock" value="{{  isset($empleado->stock)?$empleado->stock:''}}" id="stock">
<br>

<input type="submit" value="Guardar Info">
<br>
<a href="{{url('empleado/')}}">Regresar</a>