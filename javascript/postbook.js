function renderPostbook(data)
{
	$(document).ready(function(e) {
		for(entry = 0; entry < data.length; entry ++)
		{
			 if ($('#post-col-1').height() <= $('#post-col-2').height()) {
				 postColumn = '#post-col-1';
			 }
			 else if($('#post-col-2').height() < $('#post-col-1').height()) {
				 postColumn = '#post-col-2';
			 }
			 $(postColumn).append(''+
			 	'<div class="columns post hoverlight">'+
			 		'<div>'+
						'<h2 class="condensed">'+
							data[entry].title+
							' <small>'+ data[entry].sender + '</small>'+
						'</h2>'+
						'<p>'+data[entry].post+'</p>'+
				  	'</div>'+
				'</div>'
			);
		}
	});
}