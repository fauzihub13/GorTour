
<script src="{{ asset('library/jquery/jquery.min.js') }}"></script>

@if(Session::has('error'))
    <script>
        $(document).ready(function() {
            var errorMessage = "{{ Session::get('error') }}";
            swalErrorMessage(errorMessage);
        });
    </script>
@endif

@if(Session::has('success'))
    <script>
        $(document).ready(function() {
            var successMessage = "{{ Session::get('success') }}";
            swalSuccessMessage(successMessage);
        });
    </script>
@endif
