<script src="{{ url('assets_backend/js/bootstrap.js') }}"></script>
<script src="{{ url('assets_backend/js/app.js') }}"></script>

{{-- Sweetalert --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

{{-- Data Tables --}}
<script src="{{ url('assets_backend/extensions/jquery/jquery.min.js') }}"></script>
<script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
<script>
    $('#data-table').DataTable({
        scrollX: true,
    });
</script>

<!-- Need: Apexcharts -->
<script src="{{ url('assets_backend/extensions/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ url('assets_backend/js/pages/dashboard.js') }}"></script>

<script src="{{ url('assets_backend/js/naza.js') }}"></script>