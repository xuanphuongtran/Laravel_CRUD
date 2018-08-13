<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="">
        <title>Famous Artist</title>
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
            <div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Famous Artist
                                <small>List</small>
                            </h1>
                        </div>
                        <button type="submit" class="btn btn-default" ><a href="nhanvat/create">Category Add</a></button>
                        <br><br>
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr align="center">
                                    <th>STT</th>
                                    <th>Name</th>
                                    <th>Birthday</th>
                                    <th>Location</th>
                                    <th>Delete</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($nhanvat as $key => $value)
                                <tr class="odd gradeX" align="center">
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->birthday }}</td>
                                    <td>{{ $value->location }}</td>
                                    <td class="center">
                                        <i class="fa fa-pencil fa-fw"></i> 
                                        <a href="{{ route('nhanvat.edit', $value->id) }}">Edit</a>
                                    </td>
                                    <td class="center">
                                        <form action="{{ route('nhanvat.destroy',$value->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <i class="fa fa-pencil fa-fw"></i>
                                            <button type="submit">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{ $nhanvat->links() }}
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>