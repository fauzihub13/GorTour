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
    {{-- <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css"> --}}
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
    {{-- <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"> --}}

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

     .upload-box {
            width: 100px;
            height: 100px;
            border: 2px dashed #ccc;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            cursor: pointer;
            overflow: hidden; /* To ensure the image fits within the box */
        }
        .upload-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: none; /* Hidden by default */
        }
        .upload-box::before {
            content: '+';
            font-size: 2em;
            color: #ccc;
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .upload-box img.uploaded {
            display: block; /* Show the image when it is uploaded */
        }

        .file-inputs-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px; /* Spacing between boxes */
        }



</style>

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
                    <h1 class="h3 mb-2 text-gray-800">Ubah Data</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <?php
                                    if (isset($dataUser) && is_array($dataUser) && !empty($dataUser))
                                        $userDB = $dataUser;
                                    else
                                        $userDB = 0;

                                    if ($userDB>0){
                                        $value=$userDB[0];
                                        if ($value->role === 1){
                                            $role="Admin";
                                        }else{
                                            $role="User";
                                        }

                                ?>
                                <div class="card-body">
                                    <form action="{{ route('user.update', $value->_id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <!-- Detail wo -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nama- ">Nama Lengkap</label>
                                                    <input type="text" class="form-control" id="nama-k"
                                                        placeholder="Masukkan nama lengkap" name="nama_lengkap" value="{{ $value->nama_lengkap }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="link-lokasi">Username</label>
                                                    <input type="text" class="form-control" name="username" id="link-lokasi"
                                                        placeholder="Masukkan username" value="{{ $value->username }}"  required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="lokasi-wisata">Email</label>
                                                    <input type="email" class="form-control" name="email" id="link-lokasi"
                                                        placeholder="Masukkan email" value="{{ $value->email }}"  required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="role">Role</label>
                                                    <select name="role" class="form-control">
                                                        <option value="0" {{ $value->role === 0 ? 'selected' : '' }}>User</option>
                                                        <option value="1" {{ $value->role === 1 ? 'selected' : '' }}>Admin</option>
                                                    </select>
                                                </div>

                                            </div>
                                            <!-- Deskripsi dan Gambar -->

                                        </div>
                                        <div class="mt-2">
                                            <button type="submit" class="btn btn-primary btn-custom mr-2">
                                                <i class="fas fa-save"></i> Save
                                            </button>
                                            <a href="{{ route('user.index') }}" class="btn btn-secondary btn-custom">
                                                <i class="fas fa-times"></i> Cancel
                                            </a>

                                        </div>
                                    </form>
                                </div>
                                <?php
                                    }else{

                                    };
                                ?>
                                <!-- Bootstrap JS and dependencies (optional) -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('layouts.admin-footer')
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
    <script src="{{ asset('assets/js/post_create.js') }}"></script>

    <script>
        $(document).ready(function() {

            for (let i = 1; i <= 6; i++) {
                document.getElementById(`galeri-${i}`).addEventListener('change', async function() {
                    const file = this.files[0]; // Get the selected file
                    if (file) {
                        try {
                            const base64String = await convertToBase64(file); // Convert file to base64 with compression
                            document.getElementById(`input-galeri-${i}`).value = base64String;
                            console.log(document.getElementById(`input-galeri-${i}`).value); // Output the base64 string

                            const img = document.getElementById(`image-galeri-${i}`);
                            img.src = base64String;
                            img.classList.add('uploaded');
                        } catch (error) {
                            console.error("Error converting file to base64:", error);
                        }
                    }
                });
            }

        });

    </script>

</body>

</html>
