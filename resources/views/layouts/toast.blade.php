@if (session()->has('message')) 
    <script>
        Toast('{{ session()->get('message') }}');
    </script>
@endif