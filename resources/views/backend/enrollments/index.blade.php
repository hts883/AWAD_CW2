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


                    <table>
                        <thead>
                            <tr>
                                <th>course</th>
                                <th>date</th>
                                <th>student_id</th>
                                <th>status</th>
                                <th>semester</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($enrollments as $enrollment)
                                <tr>
                                    <td>{{ $enrollment->course }}</td>
                                    <td>{{ $enrollment->date }}</td>
                                    <td>{{ $enrollment->student_id }}</td>
                                    <td>{{ $enrollment->status }}</td>
                                    <td>{{ $enrollment->semester }}</td>
                                    <td>

                                        <a href="{{ route('enrollment.edit', $enrollment->id) }}">Edit</a>
                                        <form action="{{ route('enrollment.destroy', $enrollment->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

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
