@extends('layouts.app')

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="container" id="kt_content_container">
        <div class="row g-5 gx-xxl-8 mb-xxl-3">
            <div class="col-xxl-10">
                <div class="card card-xxl-stretch">
                    <div class="card-body d-flex flex-column justify-content-between h-100">
                        <form method="POST" action="{{ route('courses.update', $Courses->CourseID) }}">
                            @csrf
                            <input type="hidden" name="CourseID" value="{{$Courses->CourseID}}">
                            <div class="row g-3">
                                <div class="form-group">
                                    <label for="CourseName" class="required form-label">Course Name</label>
                                    <input type="text" class="form-control form-control-solid @error('CourseName') is-invalid @enderror"
                                        id="CourseName" name="CourseName" placeholder="Enter Course Name" value="{{ old('CourseName', $Courses->CourseName) }}">
                                    @error('CourseName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="Description" class="required form-label">Course Description</label>
                                    <textarea class="form-control form-control-solid @error('Description') is-invalid @enderror"
                                        id="Description" name="Description" rows="4" placeholder="Enter Course Description">{{ old('Description', $Courses->Description) }}</textarea>
                                    @error('Description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Category" class="required form-label">Category</label>
                                        <select name="CategoryID"
                                            class="form-control form-control-solid @error('CategoryID') is-invalid @enderror">
                                            <option value="">Select a Category</option>
                                            @foreach ($Categorys as $Category)
                                                <option value="{{ $Category->CategoryID }}" @if(old('CategoryID', $Courses->Category) == $Category->CategoryID) selected @endif>
                                                    {{ $Category->CategoryName }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('CategoryID')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div form-group>
                                        <label for="StartDate" class="required form-label">Start Date</label>
                                        <input type="date"
                                            class="form-control form-control-solid @error('StartDate') is-invalid @enderror"
                                            id="StartDate" name="StartDate" value="{{ old('StartDate', $Courses->StartDate) }}">
                                        @error('StartDate')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="EndDate" class="required form-label">End Date</label>
                                        <input type="date"
                                            class="form-control form-control-solid @error('EndDate') is-invalid @enderror"
                                            id="EndDate" name="EndDate" value="{{ old('EndDate', $Courses->EndDate) }}">
                                        @error('EndDate')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Price" class="required form-label">Price</label>
                                        <input type="text"
                                            class="form-control form-control-solid @error('Price') is-invalid @enderror"
                                            id="Price" name="Price" placeholder="Enter Price"
                                            value="{{ old('Price', $Courses->Price) }}">
                                        @error('Price')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Level" class="required form-label">Level</label>
                                        <select name="Level"
                                            class="form-control form-control-solid @error('Level') is-invalid @enderror">
                                            <option value="Beginner" @if(old('Level', $Courses->Level) == 'Beginner') selected @endif>Beginner</option>
                                            <option value="Intermediate" @if(old('Level', $Courses->Level) == 'Intermediate') selected @endif>Intermediate</option>
                                            <option value="Advanced" @if(old('Level', $Courses->Level) == 'Advanced') selected @endif>Advanced</option>
                                        </select>
                                        @error('Level')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group m-3">
                                <label class="required form-label">Is Active</label>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input @error('IsActive') is-invalid @enderror"
                                        name="IsActive" id="activeYes" value="1" @if(old('IsActive', $Courses->IsActive) == 1) checked @endif>
                                    <label class="form-check-label" for="activeYes">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="form-check-input @error('IsActive') is-invalid @enderror"
                                        name="IsActive" id="activeNo" value="0" @if(old('IsActive', $Courses->IsActive) == 0) checked @endif>
                                    <label class="form-check-label" for="activeNo">No</label>
                                </div>
                                @error('IsActive')
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary mt-2">Update Course</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
