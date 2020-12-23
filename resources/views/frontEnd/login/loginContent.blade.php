@extends('frontEnd.master')

@section('title')
Login Page
@endsection

@section('mainContent')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Login Page</h1>
                <h3 style="color:red" class="text-center text-blue">{{Session::get('message')}}</h3>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-3">
                <a href="{{ route('user.register') }}"><button class="btn btn-primary">New Registration</button></a>
                {{-- <a href="{{ route('view.reginfo') }}"><button class="btn btn-danger">View Info</button></a> --}}
            </div>
            <div class="col-lg-7">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Enter Your login Credential Here.....
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form role="form" action="{{ route('login.submit')}}" method="POST">
                                @csrf
                                    <div class="form-group">
                                        <label>Phone number</label>
                                        <input type="number" name="phone_no" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" required>
                                    </div>
                                    <button type="reset" class="btn btn-warning">Reset</button>
                                    <button type="submit" class="btn btn-success">Login</button>
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
