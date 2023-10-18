@extends('layouts.app')
@section('content')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="container" id="kt_content_container">
            <div class="row g-5 gx-xxl-8 mb-xxl-3">
                <div class="col-xxl-12">
                    <div class="card card-xxl-stretch mb-5 mb-xxl-8">
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-boldest fs-3 text-dark">Insert Resource</span>
                            </h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" enctype="multipart/form-data" id="fileUploadForm">
                                @csrf
                                <div class="mb-3">
                                    <input type="hidden" class="form-control" id="CourseID" name="CourseID"
                                        value="{{ $CourseID }}" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="ResourceType" class="form-label">Resource Type</label>
                                    <select class="form-select" id="ResourceType" name="ResourceType">
                                        <option value="Video">Video</option>
                                        <option value="PDF">PDF</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="ResourceFile" class="form-label">Resource File</label>
                                    <input type="file" class="form-control" id="ResourceFile" name="ResourceFile">
                                </div>
                                <div class="mb-3">
                                    <label for="FileName" class="form-label">File Name</label>
                                    <input type="text" class="form-control" id="FileName" name="FileName"
                                        placeholder="Enter File Name">
                                </div>
                                <div class="mb-3">
                                    <div class="progress">
                                        <div class="progress-bar" id="progressBar" role="progressbar" style="width: 0%;"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                                    </div>
                                </div>
                                <!-- Add success message div -->
                                <div class="alert alert-success" id="successMessage" style="display: none;">
                                    Upload Successful!
                                </div>
                                <!-- End success message div -->
                                <button type="button" class="btn btn-primary" id="submitButton">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Function to handle the file upload
        function handleFileUpload() {
            const form = document.getElementById('fileUploadForm');
            const progressBar = document.getElementById('progressBar');
            const successMessage = document.getElementById('successMessage');
            const submitButton = document.getElementById('submitButton');

            // Add an event listener for the submit button click
            submitButton.addEventListener('click', function() {
                // Disable the submit button
                submitButton.disabled = true;

                // Create a FormData object to send the form data
                const formData = new FormData(form);

                // Make an AJAX request using Axios
                axios.post('{{ route('courses.fileupload') }}', formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data',
                    },
                    onUploadProgress: function(progressEvent) {
                        // Update the progress bar during the file upload
                        const progress = (progressEvent.loaded / progressEvent.total) * 100;
                        progressBar.style.width = progress + '%';
                        progressBar.textContent = Math.round(progress) + '%';
                    },
                }).then(function(response) {
                    // Handle the response from the server (e.g., show success message)
                    console.log(response.data);
                    // Show the success message and hide the progress bar
                    progressBar.style.display = 'none';
                    successMessage.style.display = 'block';
                }).catch(function(error) {
                    if (error.response.status === 422) {
                        // Handle validation errors here
                        const errors = error.response.data.errors;
                        for (const key in errors) {
                            alert(errors[key][0]); // Display the first validation error
                        }
                    } else {
                        // Handle other errors
                        console.error(error);
                    }
                }).finally(function() {
                    // Re-enable the submit button
                    submitButton.disabled = false;
                });
            });
        }

        // Call the function to handle file upload
        handleFileUpload();
    </script>
@endsection
