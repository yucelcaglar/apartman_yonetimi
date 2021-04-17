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
              <h4 class="card-title">Gider Düzenle</h4>
            </div>
            <div class="card-body">
            <form action="{{route('admin.giderEkle.edit.post',['id' => $data[0]->id])}}" method="POST">
                {{ csrf_field() }}
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group bmd-form-group">
                        <label for="exampleFormControlSelect1">Gider Adı</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            @foreach ($dataGider as $key => $val)
                            <option value="{{$key}}">{{$val}}</option>
                            @endforeach

                        </select>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right">GİDER DÜZENLE</button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
