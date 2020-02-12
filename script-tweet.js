$(document).ready(function(){

	$("#post_tweet").submit(function(event){
		event.preventDefault();

		alert('Bien vu igo')
		$.post(
			'tweet.php',
			{
				tweet : $('#the-textarea').val()
			},
			callback,
			'html',
		);

		function callback(data){
            $('#affiche_tweet').html('')
            location.reload(true)
			.prepend(data)
		}
	});
});