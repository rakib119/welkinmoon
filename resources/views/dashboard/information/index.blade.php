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
                            <h4>Add Information</h4>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                                <li class="breadcrumb-item  "><a href="javascript:void(0)">Information</a>
                                <li class="breadcrumb-item active">Add Information</li>
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
                        @if (!$has_p_info && !$has_f_info && !$has_m_info )
                            @include('dashboard.information.yourinfo')
                        @elseif ($has_p_info && !$has_f_info && !$has_m_info)
                            @include('dashboard.information.father_info')
                        @elseif ($has_p_info && $has_f_info && !$has_m_info)
                            @include('dashboard.information.mother_info')
                        @else
                            @include('dashboard.information.all_information')
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
