@extends('backend.layouts.main')
@section('content')
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        @include('backend.layouts.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->

            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            @include('backend.layouts.sidebar')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">


                    <h1>Edit Student</h1>

                    <form action="{{ route('student.update', $student->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="container mt-5">
                            <h2 class="text-center mb-4">Fill in your updates</h2>

                            <!-- Name field -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Name:</label>
                                <input type="text" name="name" id="name" value="{{ $student->name }}" class="form-control"
                                    required>
                            </div>

                            <!-- Registration Number field -->
                            <div class="mb-3">
                                <label for="reg_no" class="form-label">Reg No:</label>
                                <input type="text" name="reg_no" id="reg_no" value="{{ $student->reg_no }}" class="form-control"
                                    required>
                            </div>

                            <!-- Email field -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" name="email" id="email" value="{{ $student->email }}" class="form-control"
                                    required>
                            </div>

                            <!-- Phone Number field -->
                            <div class="mb-3">
                                <label for="phone_number" class="form-label">Phone Number:</label>
                                <input type="text" name="phone_number" value="{{ $student->phone_number }}" id="phone_number"
                                    class="form-control" required>
                            </div>

                            <!-- Course Enrolled field -->
                            <div class="mb-3">
                                <label for="course_enrolled" class="form-label">Course Enrolled:</label>
                                <input type="text" name="course_enrolled" value="{{ $student->course_enrolled }}"
                                    id="course_enrolled" class="form-control" required>
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Edit Student</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                @include('backend.layouts.footer')
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
@endsection
