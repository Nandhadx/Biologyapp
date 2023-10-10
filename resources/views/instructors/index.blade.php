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
                            <form method="POST" action="{{ route('instructors.add') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="FirstName" class="required form-label">First Name</label>
                                    <input type="text"
                                        class="form-control form-control-solid @error('FirstName') is-invalid @enderror"
                                        id="FirstName" name="FirstName" placeholder="Enter first name"
                                        value="{{ isset($instructor) ? $instructor->FirstName : old('FirstName') }}"
                                        maxlength="50">
                                    @error('FirstName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="LastName" class="required form-label">Last Name</label>
                                    <input type="text"
                                        class="form-control form-control-solid @error('LastName') is-invalid @enderror"
                                        id="LastName" name="LastName" placeholder="Enter last name"
                                        value="{{ isset($instructor) ? $instructor->LastName : old('LastName') }}"
                                        maxlength="50">
                                    @error('LastName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="Email" class="required form-label">Email</label>
                                    <input type="email"
                                        class="form-control form-control-solid @error('Email') is-invalid @enderror"
                                        id="Email" name="Email" placeholder="Enter email"
                                        value="{{ isset($instructor) ? $instructor->Email : old('Email') }}"
                                        maxlength="255">
                                    @error('Email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="Biography" class="required form-label">Biography</label>
                                    <textarea class="form-control form-control-solid @error('Biography') is-invalid @enderror" id="Biography"
                                        name="Biography" rows="4">{{ isset($instructor) ? $instructor->Biography : old('Biography') }}</textarea>
                                    @error('Biography')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="ProfileImageURL" class="required form-label">Profile Image URL</label>
                                    <input type="text"
                                        class="form-control form-control-solid @error('ProfileImageURL') is-invalid @enderror"
                                        id="ProfileImageURL" name="ProfileImageURL" placeholder="Enter image URL"
                                        value="{{ isset($instructor) ? $instructor->ProfileImageURL : old('ProfileImageURL') }}"
                                        maxlength="255">
                                    @error('ProfileImageURL')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="JoinDate" class=" form-label">Join Date</label>
                                    <input type="date"
                                        class="form-control form-control-solid @error('JoinDate') is-invalid @enderror"
                                        id="JoinDate" name="JoinDate"
                                        value="{{ isset($instructor) ? $instructor->JoinDate : old('JoinDate') }}">
                                    @error('JoinDate')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit"
                                        class="btn btn-primary mt-2">{{ isset($instructor) ? 'Update' : 'Create' }}
                                        Instructor</button>
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
                                <span class="card-label fw-boldest fs-3 text-dark">Instructors</span>
                            </h3>
                            <!--end::Card title-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Card body-->
                        <div class="card-body">
                            @if (count($instructors) > 0)
                                <table class="table table-row-dashed table-row-gray-300 gy-7">
                                    <thead>
                                        <tr class="fw-bolder fs-6 text-gray-800">
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Biography</th>
                                            <th>Join Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($instructors as $instructor)
                                            <tr>
                                                <td>{{ $instructor->FirstName }} {{ $instructor->LastName }}</td>
                                                <td>{{ $instructor->Email }}</td>
                                                <td>{{ $instructor->Biography }}</td>
                                                <td>{{ $instructor->JoinDate }}</td>
                                                <td>
                                                    <a href="{{ route('instructors.edit', $instructor->InstructorID) }}"
                                                        class="btn  btn-sm btn-primary"><i class="fas fa-pen-nib"></i></a>
                                                    <a href="{{ route('instructors.delete', $instructor->InstructorID) }}"
                                                        class="btn btn-sm btn-danger"><i class="las la-trash"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <p>No instructors available.</p>
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
