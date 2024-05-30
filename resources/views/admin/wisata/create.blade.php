<!DOCTYPE html>
<html lang="en">

<head>
    @include('scripts.session-manager')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tambah Wisata</title>

    <!-- Custom fonts for this template -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>
<style>
    body {
        background-color: #f8f9fa;
    }

    .card {
        border-radius: 10px;
    }

    .card-header {
        background-color: #343a40;
        color: white;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .btn-custom {
        border-radius: 50px;
    }

    .form-control {
        border-radius: 5px;
    }

    .container {
        max-width: 800px;
    }

    .form-group img {
        max-width: 100%;
        height: auto;
    }



</style>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center"
                href="{{ route('wisata.index') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-map"></i>
                </div>
                <div class="sidebar-brand-text mx-3">GorTour </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('wisata.index') }}">
                    <i class="fa fa-map"></i>
                    <span>Wisata</span></a>
            </li>



            <hr class="sidebar-divider my-0">


            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('kuliner.index') }}">
                    <i class="fa fa-plate-wheat" aria-hidden="true"></i>
                    <span>Kuliner</span></a>
            </li>

            <hr class="sidebar-divider my-0">



            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>




        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                    {{-- <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> --}}

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>




                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Farhan</span>
                                <img class="img-profile rounded-circle"
                                    src="{{ asset('assets/images/undraw_profile.svg') }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tambah Data</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="card-body">
                                    <form action="" method="POST">
                                        @csrf
                                        @method('POST')
                                        <div class="row">
                                            <!-- Detail wo -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nama- ">Destinasi</label>
                                                    <input type="text" class="form-control" id="nama-k"
                                                        placeholder="Masukkan nama Destinasi" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="link-lokasi">Link Lokasi (iframe)</label>
                                                    <input type="text" class="form-control" id="link-lokasi"
                                                        placeholder="Masukkan link lokasi">
                                                </div>
                                                <div class="form-group">
                                                    <label for="lokasi-wisata">Lokasi</label>
                                                    <textarea class="form-control" id="lokasi" rows="3" placeholder="Masukkan detail lokasi"></textarea>
                                                </div>

                                                <div class="form-group">
                                                    <label for="jam-buka">Jam Buka</label>
                                                    <textarea class="form-control" id="jam_buka" rows="3" placeholder="Masukkan jam buka"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="harga">Harga</label>
                                                    <textarea class="form-control" id="harga" rows="3" placeholder="Masukkan daftar harga tiket"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="deskripsi">Deskripsi</label>
                                                    <textarea class="form-control" id="deskripsi" rows="6" placeholder="Masukkan deskripsi"></textarea>
                                                </div>
                                            </div>
                                            <!-- Deskripsi dan Gambar -->
                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <label for="gambar">Gambar</label>
                                                    <input type="file" class="form-control-file mb-3" id="gambar"
                                                        accept="image/png, image/jpeg" required>
                                                    <img class="base64-image" id="image-base64"
                                                        src="{{ asset('assets/images/emptyImage.png') }}">
                                                    <input type="hidden" name="gambar_wisata" id="gambar_input">
                                                </div>

                                                <div class="form-group">
                                                    <div class="button-container">
                                                        <label for="gallery">Galeri (max 6 gambar)</label>
                                                        <div class="">
                                                            <button type="button" id="removeButton" class="btn btn-primary">-</button>
                                                            <button type="button" id="addButton" class="btn btn-primary">+</button>
                                                        </div>

                                                    </div>
                                                    <div id="fileInputs">
                                                        <input type="file" class="form-control-file" id="galeri-1" name="galeri-1" accept="image/png, image/jpeg" required>
                                                    </div>

                                                    {{-- <button type="button" id="addButton" class="btn btn-primary mt-2">+</button> --}}
                                                </div>


                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-custom mr-2">
                                                <i class="fas fa-save"></i> Save
                                            </button>
                                            <button type="reset" class="btn btn-secondary btn-custom">
                                                <i class="fas fa-times"></i> Cancel
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <!-- Bootstrap JS and dependencies (optional) -->
                            </div>
                        </div>
                    </div>
                </div>





                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>

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
                    <a class="btn btn-primary" href="{{ route('login') }}">Logout</a>
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

    <script>
        $(document).ready(function() {
            let maxFiles = 6;
            let fileCount = 1;

            $('#addButton').click(function() {
                if (fileCount < maxFiles) {
                    fileCount++;
                    let newInput = `<input type="file" class="form-control-file mt-2" id="galeri-${fileCount}" name="galeri-${fileCount}" accept="image/png, image/jpeg">`;
                    $('#fileInputs').append(newInput);
                    $('#removeButton').prop('disabled', false);
                }
                if (fileCount === maxFiles) {
                    $('#addButton').prop('disabled', true);
                }
            });

            $('#removeButton').click(function() {
                if (fileCount > 1) {
                    $('#fileInputs input:last-child').remove();
                    fileCount--;
                    $('#addButton').prop('disabled', false);
                }
                if (fileCount === 1) {
                    $('#removeButton').prop('disabled', true);
                }
            });

            // Disable the remove button initially since we start with one input
            $('#removeButton').prop('disabled', true);



        });


    </script>



</body>

</html>
