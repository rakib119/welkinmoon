@extends('layouts.dashboard')
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="page-title-box">
            <div class="container-fluid">
             <div class="row align-items-center">
                 <div class="col-sm-6">
                     <div class="page-title">
                         <h4>DashBoard</h4>
                         <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">DashBoard</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Slider</a></li>
                            <li class="breadcrumb-item active">Slider List</li>
                        </ol>
                     </div>
                 </div>
             </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="page-content-wrapper">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h2 class=" mb-4">Slider List</h2>
                                    </div>
                                    <div class="float-end d-none d-sm-block">
                                        <a href="{{route('slider.create')}}" class="btn btn-success">Add Slider</a>
                                    </div>
                                </div>
                                <table id="myTable" class="table table-centered table-nowrap mb-0">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>SL</th>
                                            <th>Title</th>
                                            <th>Button Name</th>
                                            <th>Short Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $sliders as $slider)
                                        <tr>
                                            <td>{{$loop->index+1}}</td>
                                            <td>{!! $slider->title !!}</td>
                                            <td>{{ Str::substr($slider->short_description, 0, 70)  }}</td>
                                            <td>{{ $slider->button_name}}</td>
                                            <td >
                                                <!-- Example single danger button -->
                                                <div class="btn-group">
                                                <button type="button" class="btn btn-primary has-arrow dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                   Action <i class="fas fa-angle-down"></i>
                                                </button>
                                                    <ul class="dropdown-menu">
                                                       <li><a class="dropdown-item" href="{{route('slider.edit',$slider->id)}}">Edit</a>
                                                        @if ($slider->slider_details)
                                                            <li><a class="dropdown-item" href="{{route('slider-details.edit',$slider->id)}}">Edit Details</a>
                                                        @else
                                                            <li><a class="dropdown-item" href="{{route('slider-details.create',$slider->id)}}">Add Details</a>
                                                        @endif
                                                       <li>
                                                            <form id="deleteData{{$slider->id}}" action="{{ route('slider.destroy', $slider->id) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <a style="cursor: pointer;"  class="dropdown-item" onclick="deleteData({{$slider->id}})">Delete</a>
                                                            </form>
                                                       </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
