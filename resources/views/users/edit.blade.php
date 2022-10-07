
<div class="pull-left"><h2>Edit users</h2></div>

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
<a class="btn btn-success" href="/index" title="Create a Personne">go back <i class="fas fa-plus-
circle"></i>

</a>
</div></div></div>
@if ($message = Session::get('success'))
<div class="alert alert-success"> <p></p></div>
@endif
<div class="divtab">
{{$Users->nom}}
<form action="/update/{{$Users->id}}" method="POST">
@csrf
@method('PUT')

<label for="nom">nom</label>
<input type="text" name="nom" id="nom" placeholder="nom" value="{{$Users->nom}}"/><br><br>
<label for="nom">prenom</label>
<input type="text" name="prenom" id="prenom" placeholder="nom" value="{{$Users->prenom}}"/>
<br><br>
<label for="email">email</label>
<input type="text" name="email" id="email" placeholder="nom" value="{{$Users->email}}"/>
<br><br>
<button type="submit" class="btn btn-
primary">Submit</button>

</div>
