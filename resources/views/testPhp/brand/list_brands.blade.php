<a href ="{{route('addNew')}}">Add New</a>
<table>
    <tr>
        <th> id </th>
        <th> name </th>
        <th> Sửa </th>
        <th> Xóa </th>
    </tr>
    @foreach($brands as $brand)
    <tr>
        <td>{{$brand->id}}</td>
        <td>{{$brand->name}}</td>
        <td><a href = "{{route('editBrand', ['id' => $brand->id])}} ">Sua</a></td>
        <td><a href = "{{route('deleteBrand', ['id' => $brand->id])}}">Xoas</a></td>
    </tr>
    @endforeach
</table>