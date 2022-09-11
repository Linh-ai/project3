
<p>Chinh sua cho {{$brand->name}}</p>
<form method ="post">
@csrf
    <input type = "text" name = "newName" required >
    <input type = "submit" >
</form>
