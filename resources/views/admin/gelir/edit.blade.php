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
              <h4 class="card-title">Gelir Düzenle</h4>
            </div>
            <div class="card-body">
            <form action="{{route('admin.gelir.edit.post',['id' => $data[0]->id])}}" method="POST">
                {{ csrf_field() }}
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group bmd-form-group">
                      <label class="bmd-label-floating">Gelir Adı</label>
                    <input type="text" name="geliradi" class="form-control" value="{{$data[0]->geliradi}}">
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right">GELİR DÜZENLE</button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
