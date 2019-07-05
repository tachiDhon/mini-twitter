$(function () {
	$('[data-toggle="tooltip"]').tooltip()
})

$(function () {
	$('[data-toggle="popover"]').popover()
})

function countChar(val) {
	var len = val.value.length;
	if (len >= 140) {
		val.value = val.value.substring(0, 500);
	} else {
		$('#charNum').text(140 - len);
	}
};