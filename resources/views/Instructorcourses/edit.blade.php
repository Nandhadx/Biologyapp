@extends('layouts.app')

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="container" id="kt_content_container">
            <div class="row g-5 gx-xxl-8 mb-xxl-3">
                <div class="col-xxl-5">
                    <div class="card card-xxl-stretch">
                        <div class="card-body d-flex flex-column justify-content-between h-100">
                            <form method="POST" action="{{ route('instructorcourses.add') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="InstructorID" class="required form-label">Instructor</label>
                                    <select name="InstructorID" class="form-control form-control-solid @error('InstructorID') is-invalid @enderror">
                                        <option value="">Select an Instructor</option>
                                        @foreach ($instructors as $instructor)
                                            <option value="{{ $instructor->id }}">{{ $instructor->FirstName }}</option>
                                        @endforeach
                                    </select>
                                    @error('InstructorID')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="CourseID" class="required form-label">Course</label>
                                    <select name="CourseID" class="form-control form-control-solid @error('CourseID') is-invalid @enderror">
                                        <option value="">Select a Course</option>
                                        @foreach ($courses as $course)
                                            <option value="{{ $course->CourseID }}">{{ $course->CourseName }}</option>
                                        @endforeach
                                    </select>
                                    @error('CourseID')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit"
                                        class="btn btn-primary mt-2">{{ isset($instructorCourse) ? 'Update' : 'Create' }}
                                        Instructor Course</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-7">
                    <div class="card card-xxl-stretch mb-5 mb-xxl-8">
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-boldest fs-3 text-dark">Instructor Courses</span>
                            </h3>
                        </div>
                        <div class="card-body">
                            @if (count($instructorCourses) > 0)
                                <table class="table table-row-dashed table-row-gray-300 gy-7">
                                    <thead>
                                        <tr class="fw-bolder fs-6 text-gray-800">
                                            <th>Instructor ID</th>
                                            <th>Course ID</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($instructorCourses as $instructorCourse)
                                            <tr>
                                                <td>{{ $instructorCourse->InstructorID }}</td>
                                                <td>{{ $instructorCourse->CourseID }}</td>
                                                <td>
                                                    <a href="{{ route('instructorcourses.edit', $instructorCourse->InstructorCourseID) }}"
                                                        class="btn btn-sm btn-primary"><i class="fas fa-pen-nib"></i></a>
                                                    <a href="{{ route('instructorcourses.delete', $instructorCourse->InstructorCourseID) }}"
                                                        class="btn btn-sm btn-danger"><i class="las la-trash"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <p>No Instructor Courses available.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
