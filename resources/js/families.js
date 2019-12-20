$(document).ready(function() {
  $('.main_dt').DataTable({
    "columnDefs": [ {
      "targets": 3,
      "orderable": false
    } ]
  })
})
