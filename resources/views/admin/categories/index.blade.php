@section('title', 'Admin | Categories')

@extends('layouts.admin.main')

@section('content')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Categories</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Dashboard</a></li>
                        <li class="active">Categories</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        @if (session('success'))
        <div class="col-sm-12">
            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                <span class="badge badge-pill badge-success">Success</span>{{session('success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        @endif


        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Product Categories</strong>
                            <a class="btn btn-success rounded pull-right btn-sm" href="{{ route('categories.create') }}">Create</a>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Name</th>
                                        <th>Parent Category</th>
                                        <th>Created Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $key=>$category)

                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $category->name }}</td>
                                        @if ($category->category_id)
                                        <td>{{ $category->parent->name }}</td>
                                        @else
                                            <td>No Parent Category</td>
                                        @endif
                                        <td>{{ $category->created_at->diffForHumans() }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->
    </div><!-- .content -->

@endsection
