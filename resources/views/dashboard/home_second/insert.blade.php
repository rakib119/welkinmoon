@extends('layouts.dashboard')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <!-- start page title -->
            <div class="page-title-box">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="page-title">
                                <h4>Home Second Right </h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                                    <li class="breadcrumb-item  "><a href="javascript:void(0)">Home Second Right</a>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="container-fluid">
                <div class="page-content-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h2>Home Second Right </h2>
                                        <a href="{{ url()->previous() }}" class="btn btn-success">Back</a>
                                    </div>
                                    <div class="form py-3">
                                        <form action="{{ route('home_second_right.store')}}" enctype="multipart/form-data" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="Short_Title">Short Title<span class="text-danger">*</span></label>
                                                        <input id="Short_Title" type="text" class="form-control"
                                                            value="{{old('question')}}" name="short_title" autofocus>
                                                        @error('short_title')
                                                            <h6 class="text-danger"> {{ $message }}</h6>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" >Title
                                                            <span class="text-danger">*</span></label>
                                                        <input id="title" type="text" class="form-control"
                                                            value="{{old('title')}}" name="title">
                                                        @error('title')
                                                            <h6 class="text-danger"> {{ $message }}</h6>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" >Icon
                                                            <span class="text-danger">*</span></label>
                                                        <input readonly id="icon-input-field" type="text" class="form-control"
                                                            value="{{old('icon')}}" name="icon">
                                                        @error('icon')
                                                            <h6 class="text-danger"> {{ $message }}</h6>
                                                        @enderror
                                                        <div class="mt-3" style="height: 100px; overflow-y:scroll">
                                                            @foreach ($icons as $icon)
                                                            <span >
                                                                <i id="{{$icon->icon}}" style="font-size: 25px; margin: 5px; padding: 5px;" class="input-icon border {{$icon->icon}}"></i>
                                                            </span>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" >Short Description
                                                            <span class="text-danger">*</span></label>
                                                            <Textarea name="short_description"
                                                             class="form-control">{{  old('short_description')  }}</Textarea>
                                                        @error('short_description')
                                                            <h6 class="text-danger"> {{ $message }}</h6>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 mt-3">
                                                    <div class="mb-3">
                                                        <button type="submit" class="btn btn-success">Submit </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h2>List </h2>
                                        <h5 class="text-warning">Remember that, only latest 6 items show on you website</h5>
                                    </div>
                                    <div class="form py-3">
                                        <table id="myTable" class="table table-centered table-nowrap mb-0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>SL</th>
                                                    <th>Short Title</th>
                                                    <th> Title </th>
                                                    <th> Icon  </th>
                                                    <th> Short Description  </th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ( $datas as $data)
                                                <tr>
                                                    <td>{{$loop->index+1}}</td>
                                                    <td>{{ Str::substr($data->short_title, 0, 50)."..."}}</td>
                                                    <td>{{ Str::substr($data->title, 0, 50)."..." }}</td>
                                                    <td><i style="font-size:40px" class="{{$data->icon}}"></i></td>
                                                    <td>{{ Str::substr($data->short_description, 0, 50)."..." }}</td>
                                                    <td >
                                                        <!-- Example single danger button -->
                                                        <div class="btn-group">
                                                        <button type="button" class="btn btn-primary has-arrow dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                           Action <i class="fas fa-angle-down"></i>
                                                        </button>
                                                            <ul class="dropdown-menu">
                                                               <li><a class="dropdown-item" href="{{route('home_second_right.edit',$data->id)}}">Edit</a>
                                                               <li>
                                                                    <form id="deleteData{{$data->id}}" action="{{ route('home_second_right.delete', $data->id) }}"
                                                                        method="post">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <a style="cursor: pointer;"  class="dropdown-item" onclick="deleteData({{$data->id}})">Delete</a>
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
    </div>
@endsection
@section('javacript')
<script>
    $(".input-icon").click(function(){
        $("#icon-input-field").val($(this).attr('id'))
    })
</script>

@endsection
