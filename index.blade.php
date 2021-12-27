
<a href="{{url('/animales/create')}}"> Registrar otra mascota </a>

<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th># </th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Contacto</th>
            <th>Raza</th>
            <th>Foto</th>
            <th>Acciones</th>
        </tr>
    </thead>
    
    
    <tbody>
        @foreach ($animalesPerdidos as $animalPerdido)
        <tr>
            <td>{{$animalPerdido ->id}}</td>
            <td>{{$animalPerdido ->Nombre}}</td>
            <td>{{$animalPerdido ->Descripcion}}</td>
            <td>{{$animalPerdido ->Contacto}}</td>
            <td>{{$animalPerdido ->Raza}}</td>

            <td>
            <img src="{{ asset('storage').'/'.$animalPerdido ->Foto}}" width="100" alt="">
            </td>

            <td> 
                
            

            <a href="{{url('/animales/'.$animalPerdido ->id.'/edit' )}}">
                Editar 
            </a>

            <form action="{{url('/animales/'.$animalPerdido ->id)}}" method="post">
                @csrf
                {{method_field('DELETE')}}
                <input type="submit" onclick="return confirm('¿Quieres borrarlo?')"
                value= "Borrar">
            </form>
            
            </td>

        </tr>
        @endforeach
    </tbody>        


</table>
