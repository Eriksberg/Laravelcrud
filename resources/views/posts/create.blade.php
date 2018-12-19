@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Share
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
      <form method="post" action="{{ route('posts.store') }}">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Placeholder" id="post_byggnad" type="text" class="validate">
          <label for="post_byggnad">Byggnad</label>
        </div>
        <div class="input-field col s6">
          <input placeholder="Placeholder" id="post_sal" type="text" class="validate">
          <label for="post_sal">Sal</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s4">
          <input placeholder="Placeholder" id="post_typ" type="text" class="validate">
          <label for="post_typ">Typ</label>
        </div>
        <div class="input-field col s4">
          <input placeholder="Placeholder" id="post_märke" type="text" class="validate">
          <label for="post_Märke">Märke</label>
        </div>
        <div class="input-field col s4">
          <input placeholder="Placeholder" id="post_modell" type="text" class="validate">
          <label for="post_modell">Modell</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s4">
          <input placeholder="Placeholder" id="post_serienummer" type="text" class="validate">
          <label for="post_serienummer">Serienummer</label>
        </div>
        <div class="input-field col s4">
          <input placeholder="Placeholder" id="post_ägare" type="text" class="validate">
          <label for="post_ägare">Ägare</label>
        </div>
        <div class="input-field col s4">
          <input placeholder="Placeholder" id="post_stöldnummer" type="text" class="validate">
          <label for="post_stöldnummer">Stöldnummer</label>
        </div>
      </div>
          <div class="row">
            <form class="col s12">
              <div class="row">
                <div class="input-field col s12">
                  <textarea id="post_annteckning" class="materialize-textarea"></textarea>
                  <label for="post_annteckning">Kommentar</label>
                </div>
              </div>
            </form>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection
