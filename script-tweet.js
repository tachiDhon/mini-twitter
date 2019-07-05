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
			'html',
		);

		function callback(data){
            $('#poste').html('')
			.append(data)
		}
	});
});