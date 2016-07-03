function process(){

	var mail = $('#inputEmail').val();

	$.post('signUp.php',{ postmail:mail }, function(data){

		$('#underInput').html(data);
	} );
}