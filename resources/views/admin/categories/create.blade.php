@section('title', 'Create Categories')

@extends('layouts.admin.main')

@section('content')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Categories</a></li>
                        <li class="active">Create</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Create Categories</strong>
                        </div>
                        <div class="card-body">
                            <!-- Credit Card -->
                            <div id="pay-invoice">
                                <div class="card-body">
                                    <form action="{{ route('categories.store') }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="cc-name" class="control-label mb-1">Name</label>
                                            <input id="cc-name" name="name" type="text"
                                                class="form-control cc-name valid" data-val="true"
                                                data-val-required="Please enter the name on card" autocomplete="cc-name"
                                                aria-required="true" aria-invalid="false" autofocus aria-describedby="cc-name-error">
                                            <span class="help-block field-validation-valid" data-valmsg-for="cc-name"
                                                data-valmsg-replace="true"></span>
                                        </div>

                                        <div class="form-group">
                                            <label for="cc-name" class="control-label mb-1">Subcategory</label>
                                            <select data-placeholder="Choose a Subcategory..." name="category_id" class="standardSelect" tabindex="1">
                                                <option value=""></option>
                                                @foreach ($categories as $category)

                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>


                                        <div>
                                            <button id="payment-button" type="submit"
                                                class="btn btn-lg btn-success btn-block">
                                                <i class="fa fa-save"></i>&nbsp;
                                                <span id="payment-button-amount">Save</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div> <!-- .card -->

                </div><!--/.col-->
            </div>

        </div>
    </div>
@endsection
