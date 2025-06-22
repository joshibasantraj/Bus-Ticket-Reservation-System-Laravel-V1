@extends('layouts.frontend')
@section('content')
   <div class="container">
       <div class="row">
           <div class="col-sm-12" id="card">
                   <div class="row" style="margin-top:50px;margin-left:20px;">
                       <div class="col-sm-6">
                           <p style="font-size:30px;">
                               We Provides Customers with facility to book ticket of bus Online.
                               This Web Appplication Focuses on instant provision of tickets to its customers all over the Nepal.
                           </p>
                       </div>
                       <div class="col-sm-6">
                           <img src="{{ asset('assets/frontend/images/bus_image.png') }}" alt="" class="img img-thumbnail img-responsive">
                       </div>
                   </div>
                   <div class="row" style="margin-left:20px;">
                       <div class="col-sm-12">
                           <p style="font-size:30px;">
                               You can Buy Ticket and get ticket downlaod or print it . It is supported for almost all bus communities in Nepal that consists of larger routes.
                           </p>
                       </div>
                   </div>
           </div>
       </div>
   </div>
@endsection