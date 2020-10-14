

$(function() {
$('#select_section').change(function(){
	$('.aaa').hide();
	$('#' +$(this).val()).show();
  });
});

