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
                @include('layouts.admin-header')
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
                                    <form action="{{ route('wisata.store') }}" method="POST">
                                        @csrf
                                        @method('POST')
                                        <div class="row">
                                            <!-- Detail wo -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nama- ">Destinasi</label>
                                                    <input type="text" class="form-control" id="nama-k"
                                                        placeholder="Masukkan nama Destinasi" name="nama_wisata" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="link-lokasi">Link Lokasi (iframe)</label>
                                                    <input type="text" class="form-control" name="map_wisata" id="link-lokasi"
                                                        placeholder="Masukkan link lokasi" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="lokasi-wisata">Lokasi</label>
                                                    <textarea class="form-control" id="lokasi" name="lokasi_wisata" rows="3" placeholder="Masukkan detail lokasi" required></textarea>
                                                </div>

                                                <div class="form-group">
                                                    <label for="jam-buka">Jam Buka</label>
                                                    <textarea class="form-control" id="jam_buka" name="jam_buka" rows="3" placeholder="Masukkan jam buka" required></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="harga">Harga</label>
                                                    <textarea class="form-control" id="harga" name="harga_wisata" rows="3" placeholder="Masukkan daftar harga tiket" required></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="deskripsi">Deskripsi</label>
                                                    <textarea class="form-control" id="deskripsi" name="deskripsi_wisata" rows="6" placeholder="Masukkan deskripsi" required></textarea>
                                                </div>
                                            </div>
                                            <!-- Deskripsi dan Gambar -->
                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <label for="gambar">Gambar</label>
                                                    <input type="file" class="form-control-file mb-3" id="gambar_wisata"
                                                        accept="image/png, image/jpeg" required>
                                                    <img class="base64-image" id="image-base64"
                                                        src="{{ asset('assets/images/emptyImage.png') }}">
                                                        
                                                    <input type="hidden" name="gambar_wisata" id="gambar_input">
                                                </div>

                                                <div class="form-group">
                                                    <div class="button-container">
                                                        <label for="gallery">Galeri (Minimal 1 Gambar)</label>
                                                        {{-- <div class="">
                                                            <button type="button" id="removeButton" class="btn btn-primary">-</button>
                                                            <button type="button" id="addButton" class="btn btn-primary">+</button>
                                                        </div> --}}

                                                    </div>
                                                    {{-- <div id="fileInputs">
                                                        <input type="file" class="form-control-file" id="galeri-1" accept="image/png, image/jpeg" required>
                                                        <input type="hidden" name="galeri-1" id="input-galeri-1">
                                                    </div> --}}

                                                    <div class="file-inputs-container" id="fileInputs">
                                                        <div class="mr-1 mb-1">
                                                            <label class="upload-box" for="galeri-1">
                                                                <img id="image-galeri-1" class="placeholder" src="" alt="Upload Image">
                                                            </label>
                                                            <input type="file" class="form-control-file" id="galeri-1" accept="image/png, image/jpeg" style="display:none" required>
                                                            <input type="hidden" name="galeri-1" id="input-galeri-1">
                                                        </div>
                                                        <div class="mr-1 mb-1">
                                                            <label class="upload-box" for="galeri-2">
                                                                <img id="image-galeri-2" class="placeholder" src="" alt="Upload Image">
                                                            </label>
                                                            <input type="file" class="form-control-file" id="galeri-2" accept="image/png, image/jpeg" style="display:none" >
                                                            <input type="hidden" name="galeri-2" id="input-galeri-2">
                                                        </div>
                                                        <div class="mr-1 mb-1">
                                                            <label class="upload-box" for="galeri-3">
                                                                <img id="image-galeri-3" class="placeholder" src="" alt="Upload Image">
                                                            </label>
                                                            <input type="file" class="form-control-file" id="galeri-3" accept="image/png, image/jpeg" style="display:none" >
                                                            <input type="hidden" name="galeri-3" id="input-galeri-3">
                                                        </div>
                                                        <div class="mr-1 mb-1">
                                                            <label class="upload-box" for="galeri-4">
                                                                <img id="image-galeri-4" class="placeholder" src="" alt="Upload Image">
                                                            </label>
                                                            <input type="file" class="form-control-file" id="galeri-4" accept="image/png, image/jpeg" style="display:none" >
                                                            <input type="hidden" name="galeri-4" id="input-galeri-4">
                                                        </div>
                                                        <div class="mr-1 mb-1">
                                                            <label class="upload-box" for="galeri-5">
                                                                <img id="image-galeri-5" class="placeholder" src="" alt="Upload Image">
                                                            </label>
                                                            <input type="file" class="form-control-file" id="galeri-5" accept="image/png, image/jpeg" style="display:none" >
                                                            <input type="hidden" name="galeri-5" id="input-galeri-5">
                                                        </div>
                                                        <div class="mr-1 mb-1">
                                                            <label class="upload-box" for="galeri-6">
                                                                <img id="image-galeri-6" class="placeholder" src="" alt="Upload Image">
                                                            </label>
                                                            <input type="file" class="form-control-file" id="galeri-6" accept="image/png, image/jpeg" style="display:none" >
                                                            <input type="hidden" name="galeri-6" id="input-galeri-6">
                                                        </div>
                                                    </div>

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

            // ===============================
            // let maxFiles = 6;
            // let fileCount = 1;

            // $('#addButton').click(function() {
            //     if (fileCount < maxFiles) {
            //         fileCount++;
            //         let newInput = `<input type="file" class="form-control-file mt-2" id="galeri-${fileCount}" name="galeri-${fileCount}" accept="image/png, image/jpeg">`;
            //         $('#fileInputs').append(newInput);
            //         $('#removeButton').prop('disabled', false);
            //     }
            //     if (fileCount === maxFiles) {
            //         $('#addButton').prop('disabled', true);
            //     }
            // });

            // $(`#galeri-1`).change(async function() {
            //     const file = this.files[0]; // Get the selected file
            //     if (file) {
            //         try {
            //             // const base64String = await convertToBase64(file); // Convert file to base64 with compression
            //             // document.getElementById("input-galeri-1").value = base64String;
            //             // console.log(document.getElementById("input-galeri-1").value); // Output the base64 string

            //             const base64String = await convertToBase64(file); // Convert file to base64 with compression
            //             document.getElementById("input-galeri-1").value = base64String;
            //             // console.log(document.getElementById("input-galeri-1").value); // Output the base64 string

            //             const img = document.getElementById('image-galeri-1');
            //             img.src = base64String;
            //             img.classList.add('uploaded');
            //         } catch (error) {
            //             console.error("Error converting file to base64:", error);
            //         }
            //     }
            // });



            // $('#addButton').click(function() {
            //     if (fileCount < maxFiles) {
            //         fileCount++;
            //         let newInput = `<input type="file" class="form-control-file mt-2" id="galeri-${fileCount}"  accept="image/png, image/jpeg">`;
            //         $('#fileInputs').append(newInput);
            //         $('#removeButton').prop('disabled', false);

            //         // Add event listener for the new input file
            //         $(`#galeri-${fileCount}`).change(async function() {
            //             const file = this.files[0]; // Get the selected file
            //             if (file) {
            //                 try {
            //                     const base64String = await convertToBase64(file); // Convert file to base64 with compression
            //                     console.log(base64String); // Output the base64 string

            //                     // Create a hidden input to hold the base64 value
            //                     let base64Input = `<input type="hidden" id="input-galeri-${fileCount}" name="galeri-${fileCount}" value="${base64String}">`;

            //                     $('#fileInputs').append(base64Input);
            //                 } catch (error) {
            //                     console.error("Error converting file to base64:", error);
            //                 }
            //             }
            //         });
            //     }
            //     if (fileCount === maxFiles) {
            //         $('#addButton').prop('disabled', true);
            //     }
            // });

            // $('#removeButton').click(function() {
            //     if (fileCount > 1) {
            //         $('#fileInputs input:last-child').remove();
            //         fileCount--;
            //         $('#addButton').prop('disabled', false);
            //     }
            //     if (fileCount === 1) {
            //         $('#removeButton').prop('disabled', true);
            //     }
            // });

            // // Disable the remove button initially since we start with one input
            // $('#removeButton').prop('disabled', true);



        });


    </script>



</body>

</html>
