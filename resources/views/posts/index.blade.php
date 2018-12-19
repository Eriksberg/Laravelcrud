@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>Byggnad</td>
          <td>Sal</td>
          <td>Typ</td>
          <td>Märke</td>
          <td>Modell</td>
          <td>Serienummer</td>
          <td>Stöldnummer</td>
          <td>Ägare</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <td>{{$post->post_byggnad}}</td>
            <td>{{$post->post_sal}}</td>
            <td>{{$post->post_typ}}</td>
            <td>{{$post->post_märke}}</td>
            <td>{{$post->post_modell}}</td>
            <td>{{$post->post_serienummer}}</td>
            <td>{{$post->post_stöldnummer}}</td>
            <td>{{$post->post_ägare}}</td>
            <td><a href="{{ route('posts.edit',$post->id)}}"><i class="material-icons">create</i></a></td>
            <td>
                <form action="{{ route('posts.destroy', $post->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn red" type="submit"><i class="material-icons">delete</i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
