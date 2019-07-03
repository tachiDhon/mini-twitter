$(document).ready(function()){
	$("#tweet").submit(function(event){
		event.preventDefault();
		$.post(
			'tweet.php',
			{
				email : $_SESSION['email'].val(),
				tweet : $('#tweet').val()
			},
			callback,
			'text',
	);

		function callback(data){
			box.html("test")
		}
	});
};