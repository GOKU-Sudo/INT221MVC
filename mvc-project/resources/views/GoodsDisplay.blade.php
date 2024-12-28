<!-- View: GoodsDisplay -->
 

 @extends('includes.header')

@section('content')

@foreach($goods as $g)
<div class="card" style="margin:20px">
    <div class="card-header">
    Good #{{$g->id}}
    </div>
    <div class="card-body">
      <h5 class="card-title">{{$g->name}}</h5>
      
      <a href="/goods/{{$g->id}} " class="btn btn-success">Get Details</a>
      <a href="/goods/{{$g->id}}/edit " class="btn btn-warning">Edit</a>

      <form action="/goods/{{$g->id}}" method="POST">
        @csrf
        {{-- {{method_field('DELETE')}} --}}
        @method('DELETE')
      <input type="submit" name="submit" value="Delete" class="btn btn-danger">

      </form>
    </div>
  </div>
@endforeach
@endsection