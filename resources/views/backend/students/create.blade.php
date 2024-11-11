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
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Add Student</h4>
                                <p class="card-description">
                                   Add Student
                                </p>
                                <form class="forms-sample" action="{{ route('student.store') }}" method="POST">
                                   @csrf
                                    <div class="form-group">
                                        <label for="exampleInputName1">Name</label>
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">RegNo</label>
                                        <input type="text" name="reg_no" id="reg_no" class="form-control" placeholder="Reg NO" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword4">Email</label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleSelectGender">Phone number</label>
                                        <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder="Phone Number" required>

                                    </div>
                                    <div class="form-group">
                                        <label>course_enrolled</label>
                                        <input type="text" name="course_enrolled" id="course_enrolled" placeholder="Course" class="form-control"
                                        required>
                                    </div>

                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    <button class="btn btn-light">Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>




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
