@extends('sidebar')
@section('content')

<section class="home-section">
    <div class="home-content">
        <i class='bx bx-menu' ></i>
        <span class="text">Công văn</span>
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

    <form action="{{url('/themcongvan')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="d-flex">
            <div class="w-75">
                <div class="m-2">
                    <label class="form-label">Tên công văn</label>
                    <input name="tencongvan" type="text" class="form-control">
                </div>
                <div class="m-2">
                    <label class="form-label">Đơn vị soạn thảo</label>
                    <select name="donvi" class="form-select" aria-label="Default select example">
                        <option selected>Chọn đơn vị</option>
                        @foreach($donvi as $key => $value1)
                        <option value="{{$value1->ID_DV}}" >{{$value1->Ten_DV}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="m-2">
                    <label class="form-label">File công văn</label>
                    <input type="file" name="filecongvan" class="form-control">
                </div>
            </div>
            <div class="w-50 m-2">
                <label class="form-label">Đơn vị áp dụng</label>
                @foreach($donvi as $key => $value2)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="donviapdung[]" value="{{$value2->ID_DV}}" id="flexCheckDefault{{$value2->ID_DV}}">
                    <label class="form-check-label" for="flexCheckDefault{{$value2->ID_DV}}">
                        {{$value2->Ten_DV}}
                    </label>
                </div>
                @endforeach
            </div>
        </div>
        <button type="submit" class="btn btn-primary m-2 w-25">Thêm công văn</button>
    </form>

    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Mã công văn</th>
                <th>Tên công văn</th>
                <th>Đơn vị soạn thảo</th>
                <th>Đơn vị áp dụng</th>
                <th>File công văn</th>
                <th>Ngày tạo</th>
                <th>Ngày cập nhật</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list as $key => $value)
            <tr>
                <td>{{$value->ID_CONGVAN}}</td>
                <td class="dropend">
                    <a class="btn" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">{{$value->TEN_CONGVAN}}</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="{{url('/xemcongvan/'.$value->ID_CONGVAN)}}">Xem file công văn</a></li>
                        <li><a class="dropdown-item" href="{{url('/taicongvan/'.$value->ID_CONGVAN)}}">Tải file công văn</a></li>
                        <li><a class="dropdown-item" href="{{url('/congvanlienquan/'.$value->ID_CONGVAN)}}">Công văn liên quan</a></li>
                    </ul>
                </td>
                <td>{{$value->Ten_DV}}</td>
                <td>
                    <ul>
                        @foreach ($donviapdung as $item)
                        @if($item->ID_CONGVAN == $value->ID_CONGVAN)
                        <li class="btn">{{$item->Ten_DV}}</li> 
                        @endif
                        @endforeach
                    </ul>
                </td>
                <td class="dropend">
                    <a class="btn" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">{{$value->FILE_CONGVAN}}</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="{{url('/xemcongvan/'.$value->ID_CONGVAN)}}">Xem file công văn</a></li>
                        <li><a class="dropdown-item" href="{{url('/taicongvan/'.$value->ID_CONGVAN)}}">Tải file công văn</a></li>
                        <li><a class="dropdown-item" href="{{url('/congvanlienquan/'.$value->ID_CONGVAN)}}">Công văn liên quan</a></li>
                    </ul>
                </td>
                <td>{{$value->NGAY_TAO}}</td>
                <td>{{$value->NGAY_CAP_NHAT}}</td>
                <td style="display: flex;">
                    <a href="{{url('/suacongvan/'.$value->ID_CONGVAN)}}" style="padding-right: 10px"><i class='bx bxs-pencil'></i></a> | 
                    <a href="{{url('/xoacongvan/'.$value->ID_CONGVAN)}}" style="padding-left: 10px; padding-right: 10px;"><i class='bx bx-trash'></i></a> | 
                    <a href="{{url('/xemcongvan/'.$value->ID_CONGVAN)}}" style="padding-left: 10px;"><i class='bx bx-show'></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Mã công văn</th>
                <th>Tên công văn</th>
                <th>Đơn vị soạn thảo</th>
                <th>Đơn vị áp dụng</th>
                <th>File công văn</th>
                <th>Ngày tạo</th>
                <th>Ngày cập nhật</th>
                <th>#</th>
            </tr>
        </tfoot>
    </table>

</div>

@endsection
