$(function() {
	$("#frm_search").on("submit", function(event) {
		event.preventDefault();
		var address = $('input[name=address]').val() //to get address 
		if(address.length > 0) {
			$('#result_container').html('Loading...');
			$.post("searchAddress.php", {
				searchAddress: address
			}, function(result) {
				console.log(result);
				var resultContent = '';
				$.each(result, function(key, val) {
					$.each(val, function(name, response) {
						resultContent += "<div class='flex-container'><div class='col addressTxt'>For Address " + address + " : <br/>" + name + ":</div>";
						$.each(response, function(ofSet, res) {
							resultContent += "<div class='col'>Latitude : " + res.lat + "  <br/>Longitude : " + res.lon + "</div>";
						});
						resultContent += "</div>";
					});
				});
				$("#result_container").html(resultContent);
			}, 'json');
		}
	});
})