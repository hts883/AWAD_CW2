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
                                <h4 class="card-title">Enroll for course</h4>
                                <p class="card-description">
                                   Enroll for course
                                </p>
                                <form class="forms-sample" action="{{ route('enrollment.store') }}" method="POST">
                                   @csrf
                                    <div class="form-group">
                                        <label for="exampleInputName1">course</label>
                                        <input type="text" name="course" id="course" class="form-control" placeholder="Course" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">date</label>
                                        <input type="text" name="date" id="date" class="form-control" placeholder="Date" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword4">Student_id</label>
                                        <input type="student_id" name="student_id" id="student_id" class="form-control" placeholder="student_id" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleSelectGender">Status(Active,pending,completed)</label>
                                        <input type="text" name="status" id="status" class="form-control" placeholder="status " required>

                                    </div>
                                    <div class="form-group">
                                        <label>Semester</label>
                                        <input type="text" name="semester" id="semester" placeholder="semester" class="form-control"
                                        required>
                                    </div>

                                    <button type="submit" class="btn btn-primary mr-2">Enroll</button>
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
