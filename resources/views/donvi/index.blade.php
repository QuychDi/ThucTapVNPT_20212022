@extends('sidebar')
@section('content')
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<section class="home-section">
    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text">Đơn vị</span>
        @if (session('error'))
        <div class="alert alert-danger m-4" role="alert">
            {{ session('error') }}
        </div>
        @endif
        @if(session('success'))
        <div class="alert alert-success m-4">
            {{ session('success') }}
        </div>
        @endif
        <div class="profile-right">
            <div class="profile-content">
                <img style="height: 50px; width: 50px; border-radius: 10px; padding: 5px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQAiSbUgqCbN_h3H7g5tjIZK4ljpN7cOAOFg&usqp=CAU" alt="profileImg">
                <!-- JavaScript Bundle with Popper -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
            </div>
            <div class="name-job">
                <div class="profile_name" style="color: #000000; margin: 10px; font-weight: 500;">Hai Dang</div>
            </div>
        </div>
    </div>
</section>

<div class="showMain" style="padding: 5px;">

    <form action="{{url('/themdonvi')}}" method="post">
        @csrf
        <div class="d-flex">
            <div class="w-75 m-2">
                <label class="form-label">Tên đơn vị</label>
                <input name="tendonvi" type="text" class="form-control">
            </div>
            <div id="btn" style="margin-top: 2rem; width: 100%">
                <!-- <button type="submit" style="height: 0px" class="btn btn-primary">thêm đơn vị</button> -->
                <button style="height: 40px;" type="submit" class="btn btn-primary m-2 w-25">Thêm đơn vị</button>
            </div>
        </div>
    </form>

    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Mã đơn vi</th>
                <th>Tên đơn vi</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list as $key => $value)
            <tr>
                <td>{{$value->ID_DV}}</td>
                <td>{{$value->Ten_DV}}</td>
                <td style="display: flex;">
                    <a href="{{url('/suadonvi/'.$value->ID_DV)}}" style="padding-right: 10px"><i class='bx bxs-pencil'></i></a> |
                    <a href="{{url('/xoadonvi/'.$value->ID_DV)}}" style="padding-left: 10px"><i class='bx bx-trash'></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Mã đơn vi</th>
                <th>Tên đơn vi</th>
                <th>#</th>
            </tr>
        </tfoot>
    </table>

</div>

@endsection