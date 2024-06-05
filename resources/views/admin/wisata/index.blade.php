<!DOCTYPE html>
<html lang="en">

<head>
    @include('scripts.session-manager')


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GorTour Admin</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('library/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset ('assets/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link href="{{ asset ('assets/css/admin/custom.css')}}" rel="stylesheet">


    <style>
        td {
            border: none !important;
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('layouts.admin-sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('layouts.admin-header')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Wisata</h1>
                        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
                    </div>

                </div>
                <!-- /.container-fluid -->

                <div class="container-fluid">
                    <!-- Button -->
                    <div class="mb-4">
                        <a href="{{ route('wisata.create')}}" class="btn btn-primary" id="addNewButton">
                            <i class="fas fa-plus-circle"></i> Tambah Data Wisata
                        </a>
                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Wisata</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Destinasi</th>
                                            <th>Lokasi</th>
                                            <th>Deskripsi</th>
                                            <th>Gambar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            if (isset($dataWisata) && is_array($dataWisata) && !empty($dataWisata))
                                                $newsDB = $dataWisata;
                                            else
                                                $newsDB = 0;

                                            $counter = 0;

                                            if($newsDB>0){
                                                foreach ($newsDB as $value) {
                                                    $counter +=1; ?>
                                                    <tr>
                                                        <td> {{ $counter }} </td>
                                                        <td> {{ ($value->nama_wisata) }} </td>
                                                        <td> {{ substr($value->lokasi_wisata,0, 32) }} </td>
                                                        <td> {{ substr($value->deskripsi_wisata,0, 32) }} </td>
                                                        <td>
                                                            @if (isset($value->gambar_wisata) && is_string($value->gambar_wisata) && strpos($value->gambar_wisata, 'data:image') === 0)
                                                                <img class="base64-image-thumbnail"  src="{{ $value->gambar_wisata }}">
                                                            @else
                                                                <img class="base64-image-thumbnail"  src="{{ asset('assets/images/gortour/emptyImage.png') }}">
                                                            @endif
                                                            {{-- <img class="base64-image-thumbnail"  src="{{ asset('assets/images/gortour/emptyImage.png') }}"> --}}
                                                        </td>
                                                        <td>
                                                            <div class="d-flex ">
                                                                {{-- <a href="">
                                                                <button class="btn btn-primary btn-sm edit-btn" >
                                                                    <i class="fas fa-edit"></i> Edit
                                                                </button></a> --}}
                                                                <a href='{{ route('wisata.edit', $value->_id) }}'
                                                                    class="btn btn-primary btn-sm edit-btn mr-1">
                                                                    <i class="fas fa-edit"></i>
                                                                    Edit
                                                                </a>
                                                                {{-- <button class="btn btn-danger btn-sm delete-btn">
                                                                    <i class="fas fa-trash"></i> Delete
                                                                </button> --}}
                                                                <form id="deleteForm{{ $value->_id }}" action="{{ route('wisata.destroy', $value->_id) }}" method="POST"
                                                                    onsubmit="return confirmDelete(event, '{{ $value->_id }}')" >
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <input type="hidden" name="_method" value="DELETE" />
                                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                                    <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                                                        <i class="fas fa-trash"></i> Delete
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                        <?php
                                                }
                                            } else{
                                                echo
                                                    "<div class='row'>
                                                        <h2>Maaf, tidak ada produk untuk saat ini...</h2>
                                                    </div>";
                                            }
                                        ?>

                                        <!-- Your other table rows go here -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End of Main Content -->


            <!-- Footer -->
            @include('layouts.admin-footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{ route('login')}}">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('library/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('library/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('library/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>

    <!-- Scritps Sweet Alert-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>;
    <script src="{{ asset('assets/js/sweet_alert.js') }}"></script>
    @include('scripts.sweet_alert')



</body>

</html>
