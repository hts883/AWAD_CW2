<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <div class="nav-link">
          <div class="profile-image">
            <img src="images/faces/face5.jpg" alt="image"/>
          </div>
          <div class="profile-name">
            <p class="name">
              HTS Student mgt syst
            </p>
            <p class="designation">
               Admin account
            </p>
          </div>
        </div>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
          <i class="fab fa-trello menu-icon"></i>
          <span class="menu-title">Students</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="page-layouts">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="{{ route('student.create') }}">Add Student</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('student.index') }}">View Student</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('student.report') }}">view reports</a></li>

        </div>


      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
          <i class="fas fa-clipboard-list menu-icon"></i>
          <span class="menu-title">Courses</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-advanced">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('course.create') }}">Add course</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('course.index') }}">View course</a></li>
          </ul>
        </div>
      </li>




      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
          <i class="fas fa-clipboard-list menu-icon"></i>
          <span class="menu-title">Enrollments</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-advanced">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('enrollment.create') }}">Enroll for a course</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('enrollment.index') }}">View course</a></li>
          </ul>
        </div>
      </li>

      
    </ul>
    
  </nav>
