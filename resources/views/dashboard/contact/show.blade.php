@extends('layouts.dashboard')
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="page-title-box">
            <div class="container-fluid">
             <div class="row align-items-center">
                 <div class="col-sm-6">
                     <div class="page-title">
                         <h4>Message Details</h4>
                             <ol class="breadcrumb m-0">
                                 <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                 <li class="breadcrumb-item"><a href="{{ route('contact.index')}}">Messages</a></li>
                                 <li class="breadcrumb-item active">{{ $message->subject }}</li>
                             </ol>
                     </div>
                 </div>
                 <div class="col-sm-6">
                    <div class="float-end d-none d-sm-block">
                        <a href="{{ url()->previous() }}" class="btn btn-success">Back</a>
                    </div>
                 </div>
             </div>
            </div>
         </div>
        <div class="container-fluid">
            <div class="page-content-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    @if ($message->screenshots)
                                         <div class="col-xl-5">
                                            <div class="product-detail">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                            @foreach ( explode(',',$message->screenshots)   as $screenshot)
                                                                <a class="nav-link {{$loop->first ? 'active' : "" }}" id="image{{$loop->index+1}}-tab" data-bs-toggle="pill" href="#image{{$loop->index+1}}" role="tab">
                                                                    <img src="{{asset("assets/images/contacts_photo/$screenshot")}}" alt="" class="img-fluid mx-auto d-block tab-img rounded">
                                                                </a>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-9">
                                                        <div class="tab-content" id="v-pills-tabContent">
                                                            @foreach ( explode(',',$message->screenshots)   as $screenshot)
                                                                <div class="tab-pane fade {{$loop->first ? 'show active' : "" }}" id="image{{$loop->index+1}}" role="tabpanel">
                                                                    <div class="product-img">
                                                                        <img src="{{asset("assets/images/contacts_photo/$screenshot")}}" alt="" class="img-fluid mx-auto d-block">
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                         </div>
                                    @endif
                                    <div class="col-xl-7">
                                        <div class="mt-4 mt-xl-3">
                                            <a href="#" class="text-primary">Subject: {{ $message->subject }}</a>
                                            <h5 class="mt-1 mb-3">From: {{ $message->name }}</h5>
                                            <p class="mt-1 mb-3">Mobile: {{ $message->mobile ? $message->mobile : 'N/A' }}</p>
                                            <p class="mt-1 mb-3">Email: {{ $message->email ? $message->email : 'N/A' }}</p>
                                            <hr class="my-4">
                                            <div class="mt-4">
                                                <h6>Messages :</h6>
                                              <div class="mt-4">
                                                <P> {{ $message->message }}</P>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

