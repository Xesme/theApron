jQuery(document).ready(function($){
  $('#edit-preview').click(function () {
    $(this).css('background-color', 'Tomato');
    $(this).css('box-shadow', '0px 0px 5px white');
  });

  $('#edit-submit').click(function () {
    $(this).css('background-color', 'MediumSeaGreen');
    $(this).css('box-shadow', '0px 0px 5px white');

  });
});
