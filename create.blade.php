

<form action="{{ url('/animales')}}" method="post" enctype="multipart/form-data">
@csrf
@include('animales.form')
</form>    