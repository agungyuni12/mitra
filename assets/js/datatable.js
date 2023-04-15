$(document).ready(function () {
    $('#mitra').DataTable({
        order: [[0, 'asc']],
        scrollX: true,
    });
    
    $('#postingan').DataTable({
        order: [[0, 'asc']],
        scrollX: false,
    });
});