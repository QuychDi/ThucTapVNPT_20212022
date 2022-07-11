@extends('sidebar')
@section('content')

<section class="home-section">
    <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text">Cập nhật đơn vị</span>
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
    </div>
</section>

<div class="showMain" style="padding: 5px;">

    @foreach ($data as $key => $value1)
    <form action="{{url('/capnhatdonvi/'.$value1->ID_DV)}}" method="post">
        @csrf
        <div class="d-flex">
            <div class="w-75 m-2">
                <label class="form-label">Tên đơn vị</label>
                <input name="tendonvi" type="text" class="form-control" value="{{$value1->Ten_DV}}">
            </div>
            <div id="btn" style="margin-top: 2rem; width: 100%">
                <!-- <button type="submit" style="height: 0px" class="btn btn-primary">thêm đơn vị</button> -->
                <button style="height: 40px;" type="submit" class="btn btn-primary m-2 w-25">Lưu</button>
            </div>
        </div>
    </form>
    @endforeach

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