@extends('sidebar')
@section('content')

<section class="home-section">
    <div class="home-content">
        <i class='bx bx-menu' ></i>
        <span class="text">Cập nhật chỉ tiêu</span>
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

    @foreach ($data as $key => $value1)
    <form action="{{url('/capnhatchitieu/'.$value1->ID_CHITIEU)}}" method="post">
        @csrf
        <div class="d-flex">
            <div class="w-75 m-2">
                <label class="form-label">Tên chỉ tiêu</label>
                <input name="tenchitieu" type="text" class="form-control" value="{{$value1->TEN_CHITIEU}}">
            </div>
            <button type="submit" class="btn btn-primary m-2 w-25">Cập nhật chỉ tiêu</button>
        </div>
    </form>
    @endforeach

    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Mã chỉ tiêu</th>
                <th>Tên chỉ tiêu</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list as $key => $value)
            <tr>
                <td>{{$value->ID_CHITIEU}}</td>
                <td>{{$value->TEN_CHITIEU}}</td>
                <td style="display: flex;">
                    <a href="{{url('/suachitieu/'.$value->ID_CHITIEU)}}" style="padding-right: 10px"><i class='bx bxs-pencil'></i></a> | 
                    <a href="{{url('/xoachitieu/'.$value->ID_CHITIEU)}}" style="padding-left: 10px"><i class='bx bx-trash'></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Mã chỉ tiêu</th>
                <th>Tên chỉ tiêu</th>
                <th>#</th>
            </tr>
        </tfoot>
    </table>

</div>

@endsection
