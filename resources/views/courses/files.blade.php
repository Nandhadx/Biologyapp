@extends('layouts.app')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container" id="kt_content_container">
            <!--begin::Row-->
            <div class="row g-5 gx-xxl-8 mb-xxl-3">
                <div class="col-xxl-12">
                    <!--begin::Chart Widget 1-->
                    <div class="card card-xxl-stretch mb-5 mb-xxl-8">
                        <!--begin::Card header-->
                        <div class="card-header border-0 pt-5">
                            <!--begin::Card title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-boldest fs-3 text-dark">Courses</span>
                            </h3>
                            <!--end::Card title-->
                        </div>
                        <div class="card-body ">
                            @if (count($files) > 0)
                            @else
                                <div class="alert alert-warning" role="alert">
                                    <h1> No Files</h1>
                                </div>
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
