@extends('sidebar')
@section('content')

<section class="home-section">
    <div class="home-content">
        <i class='bx bx-menu' ></i>
        <span class="text">Xem công văn</span>
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
            @foreach($congvan as $congvan)
                <a class="btn p-4" href="{{url('/taicongvan/'.$congvan->ID_CONGVAN)}}">Download <i style="font-size: 24px;" class='bx bxs-download'></i></a>
            @endforeach
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

    {{-- @foreach ($congvan as $key => $value)
    <iframe style="width: 100%; height: calc(100vh - 72px);" src="{{asset('uploads/congvan/'.$value->FILE_CONGVAN)}}"></iframe>
    @endforeach --}}

    @foreach ($content as $content)
    <iframe style="width: 100%; height: calc(100vh - 72px);" src="https://drive.google.com/file/d/{{$content['path']}}/preview"></iframe>
    @endforeach

</div>

@endsection