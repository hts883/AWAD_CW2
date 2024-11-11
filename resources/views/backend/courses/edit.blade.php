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
                                <h4 class="card-title">Edit course</h4>
                                <p class="card-description">
                                   Edit Course
                                </p>
                                <form class="forms-sample" action="{{ route('course.update',$course->id) }}" method="POST">
                                   @csrf
                                   @method('PUT')
                                    <div class="form-group">
                                        <label for="exampleInputName1">Name</label>
                                        <input type="text" name="name" id="name" value="{{ $course->name }}"class="form-control" placeholder="Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Description</label>
                                        <input type="text" name="description" id="description" value="{{ $course->description }}"class="form-control" placeholder="description" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword4">credit Hours</label>
                                        <input type="text" name="credit_hours" id="credit_hours" value="{{ $course->credit_hours }}"class="form-control" placeholder="credit_hours" required>
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
