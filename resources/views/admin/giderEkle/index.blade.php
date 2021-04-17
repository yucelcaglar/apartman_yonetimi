@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
        <a class="btn btn-success" href="{{url('admin/giderEkle/ekle')}}">Gider Ekle</a>
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title "></h4>
              <p class="card-category"> Gider Ekle</p>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>Gider Adı</th>
                    <th>Blok</th>
                    <th>Daire</th>
                    <th>Düzenle</th>
                    <th>Sil</th>
                  </thead>
                  <tbody>
                      @foreach ($data as $key => $val)
                      <tr>
                      <td>{{$val->gideradi}}</td>
                      <td><a href="{{route('admin.giderEkle.edit',['id' => $val->id])}}" >Düzenle</a></td>
                      <td><a href="{{route('admin.giderEkle.delete',['id' => $val->id])}}" >Sil</a></td>
                      </tr>
                      @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
