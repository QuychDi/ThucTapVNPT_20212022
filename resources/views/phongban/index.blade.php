@extends('sidebar')
@section('content')

<section class="home-section">
    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text">Phòng ban</span>
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
            </div>
            <div class="name-job">
                <div class="profile_name" style="color: #000000; margin: 10px; font-weight: 500;">Hai Dang</div>
            </div>
        </div>
    </div>
</section>

<div class="showMain" style="padding: 5px;">

    <form action="{{url('/themphongban')}}" method="post">
        @csrf
        <div class="d-flex">
            <div class="w-50 m-2">
                <label class="form-label">Tên phòng ban</label>
                <input name="tenphongban" type="text" class="form-control">
            </div>
            <div class="w-25 m-2">
                <label class="form-label">Đơn vị</label>
                <select name="donvi" class="form-select" aria-label="Default select example">
                    <option selected>Chọn đơn vị</option>
                    @foreach($donvi as $key => $value1)
                    <option value="{{$value1->ID_DV}}">{{$value1->Ten_DV}}</option>
                    @endforeach
                </select>
            </div>
            <!-- <div class="btn" style="margin-top: 1rem;"> -->
            <button style="height: 40px; width: 50%; transform: translateY(1.8rem)" type="submit" class="btn btn-primary m-2 w-25">Thêm phòng ban</button>
            <!-- </div> -->
        </div>
    </form>

    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Mã phòng ban</th>
                <th>Tên phòng ban</th>
                <th>Tên đơn vị</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list as $key => $value)
            <tr>
                <td>{{$value->ID_PHONGBAN}}</td>
                <td>{{$value->Ten_PhongBan}}</td>
                <td>{{$value->Ten_DV}}</td>
                <td style="display: flex;">
                    <a href="{{url('/suaphongban/'.$value->ID_PHONGBAN)}}" style="padding-right: 10px"><i class='bx bxs-pencil'></i></a> |
                    <a href="{{url('/xoaphongban/'.$value->ID_PHONGBAN)}}" style="padding-left: 10px"><i class='bx bx-trash'></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Mã phòng ban</th>
                <th>Tên phòng ban</th>
                <th>Tên đơn vị</th>
                <th>#</th>
            </tr>
        </tfoot>
    </table>

</div>

@endsection