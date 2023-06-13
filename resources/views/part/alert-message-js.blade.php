@push('scripts')
    <script>
        @if(Session::has('message'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true,
                "timeOut"     : 10000,
            }
            toastr.success("{{ session('message') }}");
        @endif

        @if(Session::has('error'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true,
                "timeOut"     : 10000,
            }
            toastr.error("{{ session('error') }}");
        @endif
    </script>
@endpush