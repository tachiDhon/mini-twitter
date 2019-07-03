$(document).ready(function(){

	$("#tweeet").submit(function(event){
		event.preventDefault();

		alert('Bien vu igo')
		$.post(
			'tweet.php',
			{
				tweet : $('#tweet-contenu').val()
			},
			callback,
			'text',
		);

		function callback(data){
			alert(data)
		}
	});
});