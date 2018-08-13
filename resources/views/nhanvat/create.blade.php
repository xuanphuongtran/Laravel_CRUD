<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="">
        <title>Famous Artist</title>
        <base href="{{asset('')}}">
        <!-- Bootstrap Core CSS -->
        <link href="admin_asset/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="admin_asset/dist/css/sb-admin-2.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="admin_asset/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- DataTables CSS -->
        <link href="admin_asset/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
        <!-- DataTables Responsive CSS -->
        <link href="admin_asset/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
    </head>
    <body>
        <div id="wrapper">

            <div >
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Famous
                                <small>Add Famous Artist</small>
                            </h1>
                        </div>
                        {{-- display err --}}
                        @if (count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $err)
                                    {{$err}}<br>
                                @endforeach
                            </div>
                        @endif 

                        @if (session('thongbao'))
                            <div class="alert alert-danger">
                                {{session('thongbao')}}
                            </div>  
                        @endif
                        <div class="col-lg-7" style="padding-bottom:120px">                            
                            <form action="{{  route('nhanvat.store') }}" method="POST">
                            @csrf
                                <div class="form-group">
                                    <label>Name Famous Artist</label>
                                    <input class="form-control" name="name" placeholder="input famous artist" />
                                    <br>
                                    <label>Birthday Famous Artist</label>
                                    <input class="form-control" name="birthday" placeholder="input famous artist" />
                                    <br>
                                    <label>Location Famous Artist</label>
                                    <input class="form-control" name="location" placeholder="input famous artist" />
                                </div>

                                <button type="submit" class="btn btn-default">Add</button>
                                <button type="reset" class="btn btn-default">Reset</button>
                            </form>

                            {{-- {!! Form::open(['route' => 'nhanvat.store']) !!}
                                <div class="form-group">
                                    <label>Name Famous Artist</label>
                                    {!! Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'input famous artist']) !!}
                                    <br>
                                    <label>Birthday Famous Artist</label>
                                    {!! Form::text('birthday', '', ['class' => 'form-control', 'placeholder' => 'input famous artist']) !!}
                                    <br>
                                    <label>Location Famous Artist</label>
                                    {!! Form::text('location', '', ['class' => 'form-control', 'placeholder' => 'input famous artist']) !!}
                                </div>

                                {!! Form::submit('Add', ['class' => 'btn btn-default']) !!}
                                {!! Form::reset('Reset', ['class' => 'btn btn-default']) !!}
                            {!! Form::close() !!} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>