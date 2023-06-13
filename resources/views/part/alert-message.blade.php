@if (session()->has('message'))
    <script>
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true,
            "timeOut"     : 10000,
        }
        toastr.success("{{ session('message') }}");
    </script>
@endif

 @if(session()->has('error'))
    <script>
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true,
            "timeOut"     : 10000,
        }
        toastr.error("{{ session('error') }}");
    </script>
@endif