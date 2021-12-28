@if(session('message'))
    {{-- <div class="message bg-success text-center py-3 my-0">{{ session('message') }}</div> --}}
    <script>
        $(function () {
            toastr.success('{{ session('message') }}');
        });
    </script>
@endif