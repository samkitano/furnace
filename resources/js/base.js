/**
 * Activate BS tooltips
 */
$(function () {
  $(".hasTooltip").tooltip();
})

/**
 * Sidebar Menu
 */
$('.dismiss, .overlay').on('click', function() {
  $('.sidebar').removeClass('active');
  $('.overlay').removeClass('active');
});

$('.open-menu').on('click', function(e) {
  e.preventDefault();
  $('.sidebar').toggleClass('active');
  $('.overlay').toggleClass('active');

  $('.collapse.show').toggleClass('show');

  const $tgt = $('a[aria-expanded=true]')
  const exp = $tgt.attr('aria-expanded')

  $tgt.attr('aria-expanded', !exp);
});

/** Application Utilities */
window.appUtil = {
  checkFormChanges (data) {
    // TODO
    
    console.log(data)
    return this
  },

  loadDT (options) {
    $('.dt').DataTable(options)

    return this
  },

  watchDelete () {
    $('#deleteModal').on('show.bs.modal', function (event) {
      const button = $(event.relatedTarget)
      const name = button.data('name')
      const modal = $(this)

      let msg = `Delete ${button.data('single')} #${button.data('id')}`

      msg += name !== '' ? ` - «${name}»?` : '?'

      modal.find('.modal-body').text(msg)
      modal.find('form').attr('action', button.data('route'))
    })
  }
};
