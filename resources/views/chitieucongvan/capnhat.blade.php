@extends('sidebar')
@section('content')

<section class="home-section">
    <div class="home-content">
        <i class='bx bx-menu' ></i>
        <span class="text">Cập nhật chỉ tiêu công văn</span>
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

    @foreach ($data as $key => $value3)
    <form action="{{url('/capnhatchitieucongvan/'.$value3->ID_CHITIEUCONGVAN)}}" method="post">
        @csrf
        <div class="d-flex">
            <div class="w-50 m-2">
                <label class="form-label">Công văn</label>
                <select name="congvan" class="form-select" aria-label="Default select example">
                    <option value="{{$value3->ID_CONGVAN}}" selected>{{$value3->TEN_CONGVAN}}</option>
                    @foreach($congvan as $key => $value1)
                    <option value="{{$value1->ID_CONGVAN}}" >{{$value1->TEN_CONGVAN}}</option>
                    @endforeach
                </select>
            </div>
            <div class="w-50 m-2">
                <label class="form-label">Chỉ tiêu</label>
                <select name="chitieu" class="form-select" aria-label="Default select example">
                    <option value="{{$value3->ID_CHITIEU}}" selected>{{$value3->TEN_CHITIEU}}</option>
                    @foreach($chitieu as $key => $value2)
                    <option value="{{$value2->ID_CHITIEU}}" >{{$value2->TEN_CHITIEU}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="d-flex">
            <div class="w-100 m-2">
                <label class="form-label">Công thức</label>
                <textarea name="congthuc" style="resize: none; overflow: auto;" rows="6" class="form-control">{{$value3->CONGTHUC}}</textarea>
            </div>
        </div>
        <div class="d-flex">
            <div class="w-100 m-2">
                <label class="form-label">SQL</label>
                <textarea name="sql" style="resize: none; overflow: auto;" rows="10" class="form-control">{{$value3->CAULENHSQL}}</textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary m-2 w-25">Cập nhật chỉ tiêu công văn</button>
    </form>
    @endforeach

    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Mã chỉ tiêu công văn</th>
                <th>Tên công văn</th>
                <th>Tên chỉ tiêu</th>
                <th>Công thức</th>
                <th>SQL</th>
                <th>Ngày tạo</th>
                <th>Ngày cập nhật</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list as $key => $value)
            <tr>
                <td>{{$value->ID_CHITIEUCONGVAN}}</td>
                <td class="dropend">
                    <a class="btn" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">{{$value->TEN_CONGVAN}}</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="{{url('/xemcongvan/'.$value->ID_CONGVAN)}}">Xem công văn</a></li>
                        <li><a class="dropdown-item" href="{{url('/taicongvan/'.$value->ID_CONGVAN)}}">Tải file công văn</a></li>
                        <li><a class="dropdown-item" href="{{url('/congvanlienquan/'.$value->ID_CONGVAN)}}">Công văn liên quan</a></li>
                    </ul>
                </td>
                <td>{{$value->TEN_CHITIEU}}</td>
                <td>{{$value->CONGTHUC}}</td>
                <td>{{$value->CAULENHSQL}}</td>
                <td>{{$value->NGAYTAO}}</td>
                <td>{{$value->NGAYCAPNHAT}}</td>
                <td style="display: flex;">
                    <a href="{{url('/suachitieucongvan/'.$value->ID_CHITIEUCONGVAN)}}" style="padding-right: 10px"><i class='bx bxs-pencil'></i></a> | 
                    <a href="{{url('/xoachitieucongvan/'.$value->ID_CHITIEUCONGVAN)}}" style="padding-left: 10px"><i class='bx bx-trash'></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Mã chỉ tiêu công văn</th>
                <th>Tên công văn</th>
                <th>Tên chỉ tiêu</th>
                <th>Công thức</th>
                <th>SQL</th>
                <th>Ngày tạo</th>
                <th>Ngày cập nhật</th>
                <th>#</th>
            </tr>
        </tfoot>
    </table>

</div>

@endsection