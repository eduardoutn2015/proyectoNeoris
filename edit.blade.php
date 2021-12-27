

<form action="{{ url('/animales/'.$animal->id)}}" method="post" enctype="multipart/form-data">    
     @csrf
{{method_field('PATCH')}}
@include('animales.form')

</form>    