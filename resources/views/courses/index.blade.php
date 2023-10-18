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
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body ">
                            @if (count($courses) > 0)
                                <table class="table table table-row-dashed table-row-gray-300 gy-7">
                                    <thead>
                                        <tr class="fw-bolder fs-6 text-gray-800">
                                            <th>CourseName</th>
                                            <th>Description</th>
                                            <th>InstructorID</th>
                                            <th>StartDate</th>
                                            <th>EndDate</th>
                                            <th>Price</th>
                                            <th>Level</th>
                                            <th>IsActive</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($courses as $courses23)
                                            <tr>
                                                <td>{{ $courses23->CourseName }}</td>
                                                <td>{{ $courses23->Description }}</td>
                                                <td>{{ $courses23->InstructorID }}</td>
                                                <td>{{ $courses23->StartDate }}</td>
                                                <td>{{ $courses23->EndDate }}</td>
                                                <td>{{ $courses23->Price }}</td>
                                                <td>{{ $courses23->Level }}</td>
                                                <td>{{ $courses23->IsActive }}</td>
                                                <td>
                                                    <a href="{{ route('courses.files', $courses23->CourseID) }}"
                                                        class="btn-sm">Delete</a>
                                                    <a href="{{ route('courses.edit', $courses23->CourseID) }}"
                                                        class="btn btn-sm btn-primary">Edit</a>
                                                    <a href="{{ route('courses.delete', $courses23->CourseID) }}"
                                                        class="btn-sm">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <p>No courses available.</p>
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
