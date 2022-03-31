@extends('layouts.dashboard.master')

@section('title','Article')

@section('link')
    <link rel="stylesheet" href="{{ asset('app-assets/dashboard/assets/css/dataTables.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/dashboard/files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/dashboard/files/assets/pages/data-table/css/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/dashboard/files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">
@endsection

@section('content')
    <!-- Body: Header -->
    <div class="body-header border-0 rounded-0 px-xl-4 px-md-2">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center py-2">
                        <ol class="breadcrumb rounded-0 mb-0 ps-0 bg-transparent flex-grow-1">
                            <li class="breadcrumb-item"><a href="{{ route('login') }}"><i class="fa fa-home" aria-hidden="true"></i> Dashboard</a></li>
                        </ol>
                        <div class="d-flex flex-wrap align-items-center">
                            {{-- <button class="btn btn-dark ms-1" type="button"><i class="fa fa-refresh"></i></button> --}}
                            <a class="btn btn-dark d-none d-sm-inline-block ms-1" href="{{ route('dashboard.article.create') }}"><i class="fa fa-plus"></i> Tambah Article</a>
                        </div>
                    </div>
                </div>
            </div> <!-- .row end -->

        </div>
    </div>

    <!-- Body: Body -->
    <div class="body px-xl-4 px-md-2">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card mb-4 border-0 lift">
                        <div class="card-header py-3 d-flex flex-wrap justify-content-between align-items-center bg-transparent border-bottom-0">
                            <div>
                                <h6 class="card-title m-0">Daftar Article</h6>
                            </div>
                        </div>
                        <div class="card-body">
                            @if(session()->has('success'))
                                <div id="alert-success" class="alert alert-success alert-with-border" role="alert">
                                    <i class="fa fa-check" aria-hidden="true"></i> {{ session()->get('success') }}
                                </div>
                            @endif
                            @if(session()->has('error'))
                                <div id="alert-danger" class="alert alert-danger alert-with-border" role="alert">
                                    {{ session()->get('error') }}
                                </div>
                            @endif
                            <div class="table-responsive">
                                @if($c->count()>= 1)
                                    <table id="data_value" class="table table-bordered table-striped text-center">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Gambar</th>
                                                <th>Article</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                @else
                                    <table id="data_side" class="table table-bordered table-striped text-center">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Gambar</th>
                                                <th>Article</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td colspan="4" class="text-center"><i class="text-danger">no data</i></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('app-assets/dashboard/assets/bundles/dataTables.bundle.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#data_value').DataTable( {
                ajax: {
                    "url" : "{{ route('dashboard.article.all-datatable') }}",
                    "type" : "GET"
                },
                responsive: true,
                columns: [
                    { data: 0 },
                    { data: 1 },
                    { data: 2 },
                    { data: 3 }
                ]
            });
        });
    </script>

    <script>
        function delData(id)
        {
            if(confirm("Data akan dihapus ?")){
                $.ajax({
                    url: "{{ url('/dashboard/delete-article') }}"+'/'+id,
                    type:'GET',
                    data: {},
                    success:function(data){
                        alert('Data berhasil dihapus.');
                        window.location.reload();
                    },
                    error: function(jqXHR, textStatus, errorThrown) {}
                });
            }
        }
    </script>
    <script>
        $("#alert-success").fadeTo(2000, 500).slideUp(500, function(){
            $("#alert-success").slideUp(500);
        });

        $("#alert-danger").fadeTo(2000, 500).slideUp(500, function(){
            $("#alert-danger").slideUp(500);
        });
    </script>
@endsection
