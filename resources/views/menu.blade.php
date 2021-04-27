@extends('layout.layout')
@section('content')
<h3 class="text-center w3-row w3-padding-64"> Main Dish Menu</h3>
<a href="{{route('menus.create')}}" class="btn btn-info"> Add Product </a>
<table class="table table-striped table-hover ">
    <thead>
      <tr>
       
        <th scope="col">
          Food Name
        </th>
        <th scope="col">
          component
        </th>
        <th scope="col">
          type
        </th>
        <th scope="col">
          Price
        </th>
        <th scope="col" colspan="3" class="text-center">Edit  |  Delete </th>
       

      </tr>
    </thead>
    <tbody>
      @foreach ($data as $item)
      <tr>
      
        <td>
          {{$item["name"]}}
        </td>
        <td>
          {{$item["component"]}}
        </td>
        <td>
          {{$item["type"]}}
        </td>
        <td>
          {{$item["price"]}}
        </td>
         <td><a href="{{route('menus.show',$item) }}" class="btn btn-info"> See More</a></td>
        <td><a href="{{route('menus.edit',$item->id) }}" class="btn btn-info">Edit</a></td>
        <td>
          <form action="{{ route('menus.destroy', $item->id)}}" method="POST">
            @csrf
            @method('DELETE')
             
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
      </td>
      </tr>
     
    </tbody>
     @endforeach
  </table>
@endsection

