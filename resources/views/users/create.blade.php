<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Add New user</h2>
</div>
<div class="pull-right">

<a class="btn btn-
primary" href="" title="Go back"> <i class="fas fa-backward "></i> </a>

</div> </div> </div>
@if ($errors->any())
<div class="alert alert-danger">
<strong>Error!</strong>
<ul>
@foreach ($errors->all() as $error)
<li></li>
@endforeach
</ul>
</div>
@endif
<form action="/store" method="POST" >
@csrf
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>nom:</strong>

<input type="text" name="nom" class="form-
control" placeholder="Name">

</div> </div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Prenom:</strong>

<input class="form-
control" style="height:50px" name="prenom"

placeholder="prenom"></input>
</div> </div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>actif:</strong>

<input type="text" name="actif" class="form-control" placeholder="put your status">

</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>email:</strong>

<input type="text" name="email" class="form-control" placeholder="Put email">

</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">

<button type="submit" class="btn btn-
primary">Submit</button>

</div>
</div>
</form>