@extends('layouts.frontend')
@section('content')
<div id="content">
  <div id="rotator">
              <ul>
                    <li class="show"><img src="{{ asset('assets/frontend/xres/images/jb2/011.jpg') }}" width="961" height="279"  alt="" /></li>
                    <li><img src="{{ asset('assets/frontend/xres/images/jb2/022.jpg') }}" width="961" height="279"  alt="" /></li>
                    <li><img src="{{ asset('assets/frontend/xres/images/jb2/033.jpg') }}" width="961" height="279"  alt="" /></li>
                    <li><img src="{{ asset('assets/frontend/xres/images/jb2/044.jpg') }}" width="961" height="279"  alt="" /></li>
              </ul>	  
  </div>
</div>
<div class="btn-bar" style="position:fixed;top:400px;z-index:50;margin-left:600px;">   
      <a href="{{ route('book') }}" class="btn" id="btn_1" style="float-right:50%;font-size:30px;">Reserve Now</a>
</div>
@endsection