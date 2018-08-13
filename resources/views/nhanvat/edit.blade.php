<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Khóa Học Lập Trình Laravel Framework 5.x Tại Khoa Phạm">
        <meta name="author" content="">
        <title>Admin - Khoa Phạm</title>
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
            <div id="page-wrapper">
                <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="page-header">Famous Artist
                                <small>{{$nhanvat->name}}</small>
                                </h1>
                            </div>
                            <div class="col-lg-7" style="padding-bottom:120px">
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

                                <form action="{{  route('nhanvat.update', $nhanvat->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label>Name Famous Artist</label>
                                        <input class="form-control" name="name"  value="{{$nhanvat->name}}"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Birthday Famous Artist</label>
                                        <input class="form-control" name="birthday"  value="{{$nhanvat->birthday}}"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Location Famous Artist</label>
                                        <input class="form-control" name="location"  value="{{$nhanvat->location}}"/>
                                    </div>

                                    <button type="submit" class="btn btn-default">Edit</button>
                                    <button type="reset" class="btn btn-default">Reset</button>
                                <form>
                            </div>
                        </div>
                </div>
            </div>
        </div>
            </body>
        </html>