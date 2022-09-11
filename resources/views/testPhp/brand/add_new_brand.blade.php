{{$msg ?? ' '}}
<form method = "post">
    @csrf
    <input type = "text" name="brand_name" >
    <input type = "submit">
</form>
<a href="{{route('listBrands')}}">Show list</a>