@extends('layouts.admin')

@section('content')
<div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Resep</h4>
        <form action="{{ route('resep.update', $reseps->id) }}" method="post">
            @csrf
            @method('put')
          <input type="radio" name="status" value="Setuju"> Setuju<br>
          <input type="radio" name="status" value="Tolak"> Tolak
          <div class="form-check form-check-flat form-check-dark">
          </div>
          <button type="submit" class="btn btn-dark mr-2">Kirim</button>
          <a href="{{route('resep.index')}}" class="btn btn-dark mr-2">
            Kembali
          </a>
        </form>
      </div>
    </div>
  </div>
@endsection