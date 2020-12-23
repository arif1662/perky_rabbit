@extends('frontEnd.master')

@section('title')
Home
@endsection

@section('mainContent')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">New Registration Here......!</h1>
                <h3 class="text-center text-blue">{{Session::get('message')}}</h3>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-3">
                @if(Auth::user())
                    {{-- <a href="{{ route('login.form') }}"><button class="btn btn-primary">Login</button></a> --}}
                    <a href="{{ route('view.regInfo') }}"><button class="btn btn-info">View Registration</button></a>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <button class="btn btn-danger">LogOut</button>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @else
                    <a href="{{ route('login.form') }}"><button class="btn btn-primary">User Login</button></a>
                @endif
            </div>
            <div class="col-lg-7">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Enter Your Information Here
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form role="form" action="{{ route('register.form')}}" method="POST">
                                @csrf
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name="first_name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" name="last_name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Name of Organization</label>
                                        <input type="text" name="org_name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Street</label>
                                        <input type="text" name="street" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" name="city" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>E-mail</label>
                                        <input type="email" name="email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Mobile Number</label>
                                        <input type="number" name="phone_no" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="password" name="confirm_password" class="form-control">
                                    </div>
                                    <button type="reset" class="btn btn-warning">Reset</button>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </form>
                            </div>
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-2"></div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->


@endsection
