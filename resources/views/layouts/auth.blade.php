<!doctype html>
<html lang="en">

<head>
    

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $instansi->nama }}</title>
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/{{ $instansi->ico }}" />
    <link rel="stylesheet" href="../assets/css/styles.min.css" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        .fade-out {
            opacity: 0;
            transition: opacity 1s ease-out;
        }
    </style>
</head>

<body>
    
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">

                    @yield('content')

                </div>
            </div>
        </div>
    </div>
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>

    <script>
        $(document).ready(function() {
            @if (session('status') === 'profile-updated')
                $("#saved-message").show();
                setTimeout(function() {
                    $("#saved-message").addClass("fade-out");
                }, 2000);
            @endif
        });
    </script>

    <script>
        $(document).ready(function() {
            @if (session('status') === 'password-updated')
                $("#saved-password").show();
                setTimeout(function() {
                    $("#saved-password").addClass("fade-out");
                }, 2000);
            @endif
        });
    </script>

    @if ($errors->userDeletion->get('password'))
        <script>
            $(document).ready(function() {
                // Menampilkan modal saat halaman dimuat
                $('#modalHapus').modal('show');
            });
        </script>
    @endif
</body>

</html>
