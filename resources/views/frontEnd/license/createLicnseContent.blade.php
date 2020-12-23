@extends('frontEnd.master')

@section('title')

@endsection

@section('mainContent')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Create License</h1>
                <h3 class="text-center text-blue">{{Session::get('message')}}</h3>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-3">
                <a href="{{ route('user.register') }}"><button class="btn btn-primary">New Registration</button></a>
                <a href="{{ route('logout') }}"><button class="btn btn-danger">LogOut</button></a>
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
                                        <label>Client ID</label>
                                        <input type="text" name="phone_no" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>License Key</label>
                                        <input type="text" name="password" class="form-control">
                                    </div>
                                    {{-- <button type="reset" class="btn btn-warning col-lg-6">Reset</button> --}}
                                    <button type="submit" class="btn btn-success col-lg-12">Save</button>
                                </form>
                            </div>
                            <div class="col-lg-12">
                                <form role="form" action="{{ route('login.submit')}}" method="POST">
                                @csrf
                                    <div class="form-group col-lg-12">
                                        <label>License For</label>
                                            <select class="form-control ">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                    </div>
                                    <button type="submit" class="btn btn-success">Create Key</button>
                                </form>
                                <p>return to Login page</p>
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
