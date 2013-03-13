$(document).ready(function(){

	// CSS
	$('.admin-edit').parent().css('position', 'relative');
	

	// Admin-edit
	var element;
	var element_id;
	var edit = '<span class="admin-edit">';
		edit += $('.admin-edit').html();
		edit += '</span>';

	// show popup
	$(document).delegate( '.admin-edit a', 'click', function(){
		 // Dus alleen de elementen die op die declaratie beschikbaar waren hadden die handler
		var data = $(this).parent().parent().text().slice(0,-4);
		console.log('data', data);
		console.log( $( '#adminModal .modal-body textarea' ) );
		$('#adminModal .modal-body textarea').val(data);	
		element = $(this).parent().parent();
		element_id = $(this).attr('content-id');
	});

	// save changes
	$('.save').click(function(){
		var data = $('.modal-body textarea').val();
		console.log('changed data', data);
		var url = base+'Ajax/meta/';
		console.log(element_id);
		$(element).html(data+edit); // Doordat ge edit er als string aanplakt word da als "nieuw element" gerendered.
								// Aan deze nieuwe elementen hangt die handler nie omdat ge die alleen op de a's had
								// gehangen die op het ogenblik van die selector beschikbaar waren.

		$.ajax({
			type: "POST",
			url: url,
			data: { id: element_id, content: data }
		});
		$('#adminModal').modal('hide');
	});

});