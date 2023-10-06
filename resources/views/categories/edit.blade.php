<?php

var_dump($category->CategoryID);exit();

?>

@extends('layouts.app')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container" id="kt_content_container">
            <!--begin::Row-->
            <div class="row g-5 gx-xxl-8 mb-xxl-3">
                <!--begin::Col-->
                <div class="col-xxl-4">
                    <!--begin::Engage Widget 1-->
                    <div class="card card-xxl-stretch">
                        <!--begin::Card body-->
                        <div class="card-body d-flex flex-column justify-content-between h-100">
                            <!--begin::Section-->

                            @if (isset($category))
                                <form method="POST" action="{{ route('categories.edit', $category->CategoryID) }}">
                                    @method('PUT')
                                @else
                                    <form method="POST" action="{{ route('categories.store') }}">
                            @endif
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlInput1" class="required form-label">Category Name</label>
                                <input type="text"
                                    class=" form-control form-control-solid @error('CategoryName') is-invalid @enderror"
                                    id="CategoryName" name="CategoryName" placeholder="name@example.com"
                                    value="{{ isset($category) ? $category->CategoryName : old('CategoryName') }}"
                                    maxlength="50">
                                @error('CategoryName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1" class="required form-label">Description</label>
                                <textarea class="form-control  form-control-solid @error('Description') is-invalid @enderror" id="Description"
                                    name="Description" rows="4">{{ isset($category) ? $category->Description : old('Description') }}</textarea>
                                @error('Description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit"
                                    class="btn btn-primary mt-2">{{ isset($category) ? 'Update' : 'Create' }}
                                    Category</button>
                            </div>
                            </form>
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Engage Widget 1-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
@endsection
