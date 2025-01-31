@extends('layouts.layout2')
 
@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add restaurant</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('restaurants.store') }}">
          @csrf
          <div class="form-group">    
              <label for="restaurant_name">restaurant Name:*</label>
              <input type="text" class="form-control" name="Nom"/>
          </div>
 
          <button type="submit" class="btn btn-primary" href="RestaurantManager">Add restaurant</button>
      </form>
  </div>
</div>
</div>
@endsection