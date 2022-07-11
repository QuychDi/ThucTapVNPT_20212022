@extends('sidebar')
@section('content')

<section class="home-section">
    <div class="home-content">
        <i class='bx bx-menu' ></i>
        <span class="text">Chỉ tiêu công văn</span>
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

    <form action="{{url('/themchitieucongvan')}}" method="post">
        @csrf
        <div class="d-flex">
            <div class="w-50">
                <div class="m-2">
                    <label class="form-label">Chỉ tiêu</label>
                    <select name="chitieu" class="form-select" aria-label="Default select example">
                        <option selected>Chọn chỉ tiêu</option>
                        @foreach($chitieu as $key => $value2)
                        <option value="{{$value2->ID_CHITIEU}}" >{{$value2->TEN_CHITIEU}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="m-2">
                    <label class="form-label">Công thức</label>
                    <textarea name="congthuc" style="resize: none; overflow: auto;" rows="6" class="form-control"></textarea>
                </div>
                <div class="m-2">
                    <label class="form-label">SQL</label>
                    <textarea name="sql" style="resize: none; overflow: auto;" rows="11" class="form-control"></textarea>
                </div>
            </div>
            <div class="w-50" style="height: 600px; overflow: auto;">
                <div class="m-2">
                    <label class="form-label">Công văn</label>
                    @foreach($congvan as $key => $value1)
                    <div class="form-check">
                        <input class="form-check-input" name="congvan[]" type="checkbox" value="{{$value1->ID_CONGVAN}}" id="flexCheckDefault{{$value1->ID_CONGVAN}}">
                        <label class="form-check-label" for="flexCheckDefault{{$value1->ID_CONGVAN}}">
                            {{$value1->TEN_CONGVAN}}
                        </label>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary m-2 w-25">Thêm chỉ tiêu công văn</button>
    </form>

    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Mã chỉ tiêu công văn</th>
                <th>Tên công văn</th>
                <th>Tên chỉ tiêu</th>
                <th>Công thức</th>
                <th>SQL</th>
                <th>Ngày tạo công văn</th>
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
                <td>{{$value->NGAY_TAO}}</td>
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
                <th>Ngày tạo công văn</th>
                <th>Ngày tạo</th>
                <th>Ngày cập nhật</th>
                <th>#</th>
            </tr>
        </tfoot>
    </table>

</div>

@endsection
