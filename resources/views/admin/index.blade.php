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
                                    <a class="btn btn-sm btn-icon btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" href="{{ route('recipe.destroy', $recipe->id) }}" aria-label="Delete" data-bs-original-title="Delete">
                                        <span class="btn-inner">
                                            <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor">
                                                <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                    </a>
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
                            <div class="flex align-items-center list-user-action"> 
                                <a class="btn btn-sm btn-icon btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" href="/delete-article/{{ $article->id }}" aria-label="Delete" data-bs-original-title="Delete">
                                    <span class="btn-inner">
                                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor">
                                            <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
