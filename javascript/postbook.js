function renderPostbook(data)
{
	$(document).ready(function() {
        for(var entry = data.length - 1; entry >= 0; entry--)
		{
			 if ($('#post-col-1').height() <= $('#post-col-2').height()) {
				 var postColumn = '#post-col-1';
			 }
			 else {
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