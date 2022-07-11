<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">

  <link rel="stylesheet" href="{{asset('resources/css/app.css')}}">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title style="font-size: 18px">HỆ THỐNG QUẢN LÝ CHỈ TIÊU</title>
  <link rel="icon" type="image/x-icon" href="https://cdn.chanhtuoi.com/uploads/2020/05/icon-facebook-08-2.jpg.webp">
</head>
@if(Auth::id())

<body>
  <div class="sidebar close">
    <div class="logo-details">
      <a href="{{ url('/') }}">
        <i class='bx bxs-file-doc'></i>
      </a>
      <span class="logo_name" style="font-size: 16px">HỆ THỐNG QUẢN LÝ CHỈ TIÊU</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="{{ url('/') }}">
          <i class='bx bxs-home'></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="{{ url('/') }}">Dashboard</a></li>
        </ul>
      </li>
      <li>
        <a href="{{ url('/donvi') }}">
          <i class='bx bx-chevrons-right'></i>
          <span class="link_name">Đơn vị</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="{{ url('/donvi') }}">Đơn vị</a></li>
        </ul>
      </li>
      <li>
        <a href="{{ url('/phongban') }}">
          <i class='bx bx-chevrons-right'></i>
          <span class="link_name">Phòng ban</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="{{ url('/phongban') }}">Phòng ban</a></li>
        </ul>
      </li>
      <li>
        <a href="{{ url('/congvan') }}">
          <i class='bx bx-chevrons-right'></i>
          <span class="link_name">Công văn</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="{{ url('/congvan') }}">Công văn</a></li>
        </ul>
      </li>
      <li>
        <a href="{{ url('/chitieu') }}">
          <i class='bx bx-chevrons-right'></i>
          <span class="link_name">Chỉ tiêu</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="{{ url('/chitieu') }}">Chỉ tiêu</a></li>
        </ul>
      </li>
      {{-- <li>
        <a href="{{ url('/chitieucongvan') }}">
      <i class='bx bx-chevrons-right'></i>
      <span class="link_name">Chỉ tiêu công văn</span>
      </a>
      <ul class="sub-menu blank">
        <li><a class="link_name" href="{{ url('/chitieucongvan') }}">Chỉ tiêu công văn</a></li>
      </ul>
      </li> --}}
      <li>
        <div class="iocn-link">
          <a href="{{ url('/chitieucongvan') }}">
            <i class='bx bx-chevrons-right'></i>
            <span class="link_name">Chỉ tiêu công văn</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="{{ url('/chitieucongvan') }}">Chỉ tiêu công văn</a></li>
          <li><a href="{{ url('/chitieucongvan') }}">Thêm chỉ tiêu</a></li>
          <li><a href="{{ url('/lietkechitieucongvan') }}">Liệt kê chỉ tiêu</a></li>
        </ul>
      </li>
      <li>
        <div class="profile-details">
          <div class="profile-content">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQAiSbUgqCbN_h3H7g5tjIZK4ljpN7cOAOFg&usqp=CAU" alt="profileImg">
          </div>
          <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            <div class="name-job">
              <div class="profile_name">Đăng xuất</div>
            </div>
            <i class='bx bx-log-out'></i>
          </a>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
      </li>
    </ul>
  </div>


  @yield('content')


  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script>
    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
      arrow[i].addEventListener("click", (e) => {
        let arrowParent = e.target.parentElement.parentElement;
        arrowParent.classList.toggle("showMenu");
      });
    }
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".bx-menu");
    sidebarBtn.addEventListener("click", () => {
      sidebar.classList.toggle("close");
    });
  </script>
  <script>
    $(document).ready(function() {
      $('#example').DataTable({
        scrollY: '70vh',
        scrollCollapse: true,
        paging: false,
      });
    });
  </script>
</body>
@endif

</html>