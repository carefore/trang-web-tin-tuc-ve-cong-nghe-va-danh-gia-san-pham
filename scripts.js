// scripts.js (using jQuery)
$(document).ready(function() {
  $('#newsForm').submit(function(e) {
    e.preventDefault();

    // Collect form data
    var formData = $(this).serialize();

    // Send data to PHP for processing
    $.ajax({
      type: 'POST',
      url: 'submit.php',
      data: formData,
      success: function(response) {
        alert('Tin tức của bạn đã được gửi đi!');
        // You can do further handling here after successful submission
      },
      error: function(error) {
        alert('Đã xảy ra lỗi khi gửi tin tức.');
        console.error(error);
      }
    });
  });
});
