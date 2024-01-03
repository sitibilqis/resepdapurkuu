@extends('layouts.mainadmin')
@section('page_title','Daftar Artikel dan Resep')

<!-- Library / Plugin Css Build -->
<link rel="stylesheet" href="{{asset('admin/assets/admin/assets/css/core/libs.min.css')}}">
      
<!-- Hope Ui Design System Css -->
<link rel="stylesheet" href="{{asset('admin/assets/admin/assets/css/hope-ui.min.css?v=4.0.0')}}">
      
<!-- Custom Css -->
<link rel="stylesheet" href="{{asset('admin/assets/admin/assets/css/custom.min.css?v=4.0.0')}}">
      
<!-- Dark Css -->
<link rel="stylesheet" href="{{asset('admin/assets/admin/assets/css/dark.min.css')}}">
      
<!-- Customizer Css -->
<link rel="stylesheet" href="{{asset('admin/assets/admin/assets/css/customizer.min.css')}}">
      
<!-- RTL Css -->
<link rel="stylesheet" href="{{asset('admin/assets/admin/assets/css/rtl.min.css')}}">
@section('content')
<div class="mt-5 col-12 m-auto">
    <div class="px-5 pt-3 d-flex">
        <h3>Resep</h3>
    </div>
    <div class="card-body px-5">
        <div class="table-responsive">
            <table id="user-list-table" class="table table-striped border" role="grid" data-bs-toggle="data-table">
                <thead>
                    <tr class="ligth">
                        <th>No</th>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Deskripsi</th>
                        <th style="min-width: 100px">Aksi</th>
                    </tr>
                </thead>
                @foreach($recipes as $recipe)
                <tbody>
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$recipe->title}}</td>
                        <td>{{$recipe->category}}</td>
                        <td>{{$recipe->desc}}</td>
                        <td>
                            <div class="flex align-items-center list-user-action"> 
                                @if (count($recipe->reviews) == 0)
                                <form action="{{ route('recipe.destroy', $recipe->id) }}" method="post">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                </form>
                                @endif
                            </div>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>


<!-- Article -->
<div class="mt-5 col-12 m-auto">
    <div class="px-5 pt-3 d-flex">
        <h3>Artikel</h3>
    </div>
    <div class="card-body px-5 pb-5">
        <div class="table-responsive">
            <table id="user-list-table" class="table table-striped" role="grid" data-bs-toggle="data-table">
                <thead>
                    <tr class="ligth">
                        <th>No</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th style="min-width: 100px">Action</th>
                    </tr>
                </thead>
                @foreach($articles as $article)
                <tbody>
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$article->title}}</td>
                        <td>{{$article->desc}}</td>
                        <td>
                            <form action="{{ route('recipe.destroy', $recipe->id) }}" method="post">
                                @csrf @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
