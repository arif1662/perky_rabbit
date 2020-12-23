@extends('frontEnd.master')

@section('title')
View Page
@endsection

@section('mainContent')

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Registration Information
                <span>
                    <a href="{{ route('user.register')}}"><button class="btn btn-info">New Registration</button></a>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <button class="btn btn-danger">LogOut</button>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </span>
            </h1>
            <h3 class="text-center text-blue">{{Session::get('message')}}</h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    View All Registration Information here
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Organization Name</th>
                                <th>Street</th>
                                <th>City</th>
                                <th>E-mail</th>
                                <th>Phone Number</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($allRegInfos as $key => $allRegInfo)
                            <tr class="odd gradeX">
                                <td>{{$allRegInfo-> first_name.' '.$allRegInfo-> last_name}}</td>
                                <td>{{$allRegInfo-> org_name}}</td>
                                <td>{{$allRegInfo-> street}}</td>
                                <td>{{$allRegInfo-> city}}</td>
                                <td>{{$allRegInfo-> email}}</td>
                                <td>{{$allRegInfo-> phone_no}}</td>
                                <td class="center">Active</td>
                                <td class="center">X</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
</div>
<!-- /#page-wrapper -->

@endsection