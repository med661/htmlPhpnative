
<div >
<div >
<div >
<h2>test</h2>
</div>
<div class="pull-right">
<style type="text/css">
.btn{
    background-color:yellow;
     /* some styling here */
};
.divtab{
    display:"flex";
    justify-content:"center";

    align-items: "center";

}
     /* some styling here */
</style>
<a class="btn btn-success" href="/create" title="Create a Personne">create <i class="fas fa-plus-
circle"></i>

</a>
</div></div></div>
@if ($message = Session::get('success'))
<div class="alert alert-success"> <p></p></div>
@endif
<div class="divtab">
<table class="table table-bordered table-responsive-lg">
<tr><th>Id</th><th>nom</th><th>prenom</th><th>actif</th><th>email</th>
<th>Actions</th></tr>
@foreach ($users as $Personne)
<tr>
<td>{{$Personne->id}}</td>
<td>{{$Personne->nom}}</td>
<td>{{$Personne->prenom}}</td>
<td>{{$Personne->actif}}</td>
<td>{{$Personne->email}}</td>


<td>
<form action="/" method="POST">
<a href="/show/{{$Personne->id}}" title="show">show
<i class="fas fa-eye text-success fa-lg"></i></a>
<a href="/edit/{{$Personne->id}}">edit
<i class="fas fa-edit fa-lg"></i></a>

<a href="/destroy/{{$Personne->id}}"> delete<i class="fas fa-trash fa-
lg text-danger"></i></a>

@csrf

@method('DELETE')
</form> </td> </tr>
@endforeach
</table>
</div>
{!! $users->links() !!}
