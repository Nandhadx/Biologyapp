@extends('layouts.app')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container" id="kt_content_container">
            <!--begin::Row-->
            <div class="row g-5 gx-xxl-8 mb-xxl-3">
                <!--begin::Col-->
                <div class="col-xxl-5">
                    <!--begin::Engage Widget 1-->
                    <div class="card card-xxl-stretch">
                        <!--begin::Card body-->
                        <div class="card-body d-flex flex-column justify-content-between h-100">
                            <!--begin::Section-->
                            <form method="POST" action="{{ route('categories.store') }}">
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
                <div class="col-xxl-7">
                    <!--begin::Chart Widget 1-->
                    <div class="card card-xxl-stretch mb-5 mb-xxl-8">
                        <!--begin::Card header-->
                        <div class="card-header border-0 pt-5">
                            <!--begin::Card title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-boldest fs-3 text-dark">Categories</span>
                            </h3>
                            <!--end::Card title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body ">
                            @if (count($categories) > 0)
                                <table class="table table table-row-dashed table-row-gray-300 gy-7">
                                    <thead>
                                        <tr class="fw-bolder fs-6 text-gray-800">
                                            <th>Category Name</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                            <tr>
                                                <td>{{ $category->CategoryName }}</td>
                                                <td>{{ $category->Description }}</td>
                                                <td>
                                                    <a href="{{ route('categories.edit', $category->CategoryID) }}"
                                                        class="btn btn-primary">Edit</a>
                                                    <a href="{{ route('categories.delete', $category->CategoryID) }}"
                                                        class="btn btn-primary">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <p>No categories available.</p>
                            @endif
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Chart Widget 1-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
@endsection
