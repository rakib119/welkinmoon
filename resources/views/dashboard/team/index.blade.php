@extends('layouts.dashboard')
@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
@endsection
@section('javacript')
    <script src="//cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"> </script>
@endsection
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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Teams</a></li>
                            <li class="breadcrumb-item active">All Members</li>
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
                                        <h2 class=" mb-4">Team Members</h2>
                                    </div>
                                    <div class="float-end d-none d-sm-block">
                                        <a href="{{route('team.create')}}" class="btn btn-success">Add Members</a>
                                    </div>
                                </div>
                                <table id="myTable" class="table table-centered table-nowrap mb-0">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>show In</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $teams as $team)
                                        <tr>
                                            <td>{{$loop->index+1}}</td>
                                            <td>{{ $team->name}}</td>
                                            <td>{{  $team->post}}</td>
                                            <td class="text-capitalize">@foreach (explode('_',$team->show_in) as $value)
                                               {{ $value." ";}}
                                            @endforeach  </td>
                                            <td><img class="rounded-circle" height="50"
                                                src="{{ asset('assets/images/teams/'.$team->img) }}" alt="photo not found"></td>
                                            <td >
                                                <!-- Example single danger button -->
                                                <div class="btn-group">
                                                <button type="button" class="btn btn-primary has-arrow dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                   Action <i class="fas fa-angle-down"></i>
                                                </button>
                                                    <ul class="dropdown-menu">
                                                       <li><a class="dropdown-item" href="{{route('team.edit',$team->id)}}">Edit</a>
                                                       <li>
                                                            <form id="deleteData{{$team->id}}" action="{{ route('team.destroy', $team->id) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <a style="cursor: pointer;"  class="dropdown-item" onclick="deleteData({{$team->id}})" >Delete</a>
                                                            </form>
                                                       </li>
                                                    </ul>
                                                </div>
                                            </td>
                                            {{-- <td><span
                                                    class="badge badge-pill badge-soft-primary font-size-13">{{ $team->img}}</span>
                                            </td> --}}
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
