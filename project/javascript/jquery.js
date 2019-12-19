$(document).ready(function(){
	$('#keyword').on('keyup', function(){
		$('#container').load('javascript/search.php?keyword=' + $('#keyword').val());
	});
});