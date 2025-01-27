<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard bencana id</title>
    @include('template/header')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

    <!-- Preloader -->
    @include('template/preloader')
    <!-- Navbar -->
    @include('template/nav')
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    @include('template/aside')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Posko List</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <a href="/posko/create" class="btn btn-primary">Tambah Data</a>
                                </h3>

                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right"
                                            placeholder="Search">

                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th rowspan="2">No</th>
                                            <th rowspan="2">Posko Name</th>
                                            <th rowspan="2">Address</th>
                                            <th colspan="3" class="text-center">Logistik</th>
                                        </tr>
                                        <tr>
                                            <th>Item</th>
                                            <th>Demand</th>
                                            <th>Stock</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{ $i = 0; }}
                                        @foreach ($posko as $pos)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $pos->name }}</td>
                                            <td>
                                                <a href="{{ $pos->link_gps }}" target="_blank" rel="noopener noreferrer">{{ $pos->alamat }}</a>
                                            </td>
                                            <td>
                                                <ul>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>30 Dus</li>
                                                    <li>40 Dus</li>
                                                    <li>10 pcs</li>
                                                    <li>5 pcs</li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>5 Dus</li>
                                                    <li>23 Dus</li>
                                                    <li>4 pcs</li>
                                                    <li>2 pcs</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        <li>{{ $pos->status->name }}</li>

                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>
    <!-- Footer section -->
    @include('template/footer')
</body>

</html>
