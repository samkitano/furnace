$(document).ready(function() {
  $('.user_dt').DataTable({
    "columnDefs": [ {
      "targets": 3,
      "orderable": false
    } ]
  })
})

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
