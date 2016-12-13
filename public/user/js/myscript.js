console.log('myscript.js');
$(document).ready(function(){
	$(".updatecart").click(function(){
		console.log('click update cart');
		var rowid=$(this).attr('id');
		var qty = $(this).parent().parent().find(".qty").val();
		// var token = $("input[name='_token']").val();
		$.ajax({
			url: 'routes/update_cart.php',
			type: 'GET',
			cache: false,
			data: {"id": rowid, "qty": qty},
			success: function(data){
				window.location="gio-hang.php";
			}
		});
	});
});
