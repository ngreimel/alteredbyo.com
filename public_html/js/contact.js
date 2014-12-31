/**
 * Submit contact form
 */

// Get results from AJAX
$('#contactForm').on('submit', function (e) {
  e.preventDefault();
  var $form   = $(this),
      $modal  = $('#contactModal'),
      $body   = $('#contactModal .modal-body'),
      $footer = $('#contactModal .modal-footer');

  $('.has-error', $form).removeClass('has-error');
  $('.alert', $modal).remove();

  $.ajax({
    'data'     : $form.serialize(),
    'dataType' : 'json',
    'type'     : $form.attr('method'),
    'url'      : $form.attr('action')
  }).done(function (data) {
    if ('success' == data.status) {
      $body.empty().append('<div class="alert alert-success">Your message has been received!</div>');
      $('button[type="submit"]', $footer).remove();
      $('button', $footer).html('Close');
    } else {
      var message = data.message + '<ul>';
      for (input in data.errors) {
        $('div.form-group:has(*[name="' + input + '"])', $form).addClass('has-error');
        message += '<li>' + data.errors[input] + '</li>';
      }
      message += '</ul>';
      $body.prepend('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>' + message + '</div>');
    }
  }).fail(function (xhr, status, error) {
    $body.prepend('<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>Something went wrong. Please try again in a few minutes</div>');
    console.log(xhr);
    console.log(status);
    console.log(error);
  });

  return false;
});
