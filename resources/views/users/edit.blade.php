
<div class="pull-left"><h2>Edit users</h2></div>


<a class="btn btn-
primary" href="" title="Go back"> <i class="fas fa-backward "></i> </a>

</div> </div> </div>
@if ($errors->any())
<div class="alert alert-danger">
<strong>Error!</strong>
<ul> @foreach ($errors->all() as $error)
<li></li>
@endforeach </ul> </div>
@endif
<form action="/update/{{$Users->id}}" method="POST">
@csrf
@method('PUT')
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>nom:</strong>
<input type="text" name="nom" value="{{$Users-
>nom}}" class="form-control" placeholder="Name">
</div> </div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>prenom</strong>

<textarea class="form-
control" style="height:50px" name="prenom"

placeholder="prenom">{{$Users-
>prenom}}</textarea>
</div> </div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>actif</strong>

<input type="number" name="actif" class="form-
control" placeholder=""

value="{{$Users->actif}}">
</div>
</div>
<input type="hidden" name="idh" value="{{$Users->id}}">
<div class="col-xs-12 col-sm-12 col-md-12 text-center">

<button type="submit" class="btn btn-
primary">Submit</button>

</div> </div></form>