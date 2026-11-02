@extends('layouts.app')

@section('content')
    <div class="container">
     <div class="row justify-content-center">
        <div class="col-md-3">
          <div class="list-group">
            <a href="/management/category" class="list-group-item list-group-item-action"><i class="fa-solid fa-bars"></i>   Catagory</a>
            <a class="list-group-item list-group-item-action"><i class="fa-solid fa-burger"></i>   Menu</a>
            <a class="list-group-item list-group-item-action"><i class="fa-solid fa-chair"></i>   Table</a>
            <a class="list-group-item list-group-item-action"><i class="fa-solid fa-user"></i>   User</a>

          </div>
        </div>
        <div class="col-md-8">
          <i class="fa-solid fa-bars"></i>Create a Category
          <hr>
          @if($errors->any())
            <div class="alert alert-danger" role="alert">
              <ul>
              @foreach($errors->all() as $errors)
               <li>{{$errors}}</li>
               @endforeach
               </ul>
              </div>


          @endif
          <form action="/management/category/{{$category->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="from-group">
                <label for="categoryname">Category Name</label>
                <input type="text" name="name" value="{{$category->name}}"
                class="form=control" placeholder="Category...">
             </div>
             <button type="sumbit" class="btn btn-primary">Update</button>
          </form>
        </div>

     </div>
    </div>
@endsection
