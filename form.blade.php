<label for="Nombre"> Nombre </label>    
<input type="text" name="Nombre" value="{{isset($animal -> Nombre)?$animal -> Nombre:''}}" id="Nombre">
<br>

<label for="Descripcion"> Descripcion </label>   
<input type="text" name="Descripcion" value="{{isset($animal -> Descripcion)?$animal -> Descripcion:''}}" id="Descripcion">
<br>
<label for="Contacto"> Contacto </label>   
<input type="text" name="Contacto" value="{{isset($animal -> Contacto)?$animal -> Contacto:''}}"  id="Contacto">
<br>
<label for="Raza"> Raza </label>   
<input type="text" name="Raza" value="{{isset($animal -> Raza)?$animal -> Raza:''}}" id="Raza">
<br>
<label for="Foto"> Foto </label>   
@if(isset($animal -> Foto))
<img src="{{ asset('storage').'/'.$animal ->Foto}}" width="100" alt="">
@endif
<input type="file" name="Foto" value="" id="Foto">
<br>
<input type="submit" value="Guardar datos">
<br>
<a href="{{url('/animales')}}"> Regresar </a>

<br>