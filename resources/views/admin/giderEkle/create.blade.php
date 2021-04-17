@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            @if (session('status'))
                <div class="alert alert-primary" role="alert">{{session('status')}}</div>
            @endif
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Gider Ekle</h4>
            </div>
            <div class="card-body">
            <form action="{{route('admin.giderEkle.create.post')}}" method="POST">
                {{ csrf_field() }}
                <div class="row">
                  <div class="col-md-5">
                    <div class="form-group bmd-form-group">
                        <label for="exampleFormControlSelect1">Gider Adı</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            @foreach ($dataGider as $key )
                            <option value="{{$key->id}}">{{$key->gideradi}}</option>
                            @endforeach
                        </select>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="form-group bmd-form-group">
                        <label for="exampleFormControlSelect1">Blok Adı</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            @foreach ($dataBlok as $key )
                            <option value="{{$key->id}}">{{$key->blok}}</option>
                            @endforeach
                        </select>
                    </div>
                  </div>
                  <div class="col-md-2">
                      <div class="form-group bmd-form-group">
                          <label for="exampleFormControlInput1">Daire</label>
                          <input type="number" value="" class="form-control" id="exampleFormControlInput1" min="1"  max="50" placeholder="35">
                      </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right">EKLE</button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
