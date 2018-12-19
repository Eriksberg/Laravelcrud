@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Post
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('posts.update', $post->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Post Name:</label>
          <input type="text" class="form-control" name="post_name" value={{ $post->post_name }} />
        </div>
        <div class="form-group">
          <label for="price">Post Price :</label>
          <input type="text" class="form-control" name="post_price" value={{ $post->post_price }} />
        </div>
        <div class="form-group">
          <label for="quantity">Post Quantity:</label>
          <input type="text" class="form-control" name="post_qty" value={{ $post->post_qty }} />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection
