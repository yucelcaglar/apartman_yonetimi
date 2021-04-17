@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
        <a class="btn btn-success" href="{{url('admin/site/ekle')}}">Blok Ekle</a>
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Site Adı gelecek</h4>
              <p class="card-category"> Tanımlı Blok</p>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>Blok Adı</th>
                    <th>Düzenle</th>
                    <th>Sil</th>
                  </thead>
                  <tbody>
                     @foreach ($data as $key => $val)
                      <tr>
                        <td>{{$val->blok}}</td>
                        <td><a href="{{route('admin.site.edit',['id' => $val->id])}}">Düzenle</a></td>
                        <td><a href="{{route('admin.site.delete',['id' => $val->id])}}">Sil</a></td>
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
