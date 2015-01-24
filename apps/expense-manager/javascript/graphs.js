function chart(list, query)
{
	// All the Major Categories
	rows = []
	for (var data in list)
		rows.push({'label': data, 'value': list[data]});
	// All Components of a Category
	
	packet = []
	for (var obj in query)
		packet.push( { 'label': query[obj].head, 'value': query[obj].amount } );
	
	new Morris.Donut({
		element: 'donut-split-chart',
		data: rows,
		formatter: function(x) { return("Rs. " + x); }
	}).on('click', function (i, row) { splitchart.setData(getPacket(rows[i].label, query)); $('#split-category').html(rows[i].label + ' Split'); });
	
	var splitchart = new Morris.Donut({
		element: 'donut-category-chart',
		data: packet,
		formatter: function(x) { return("Rs. " + x); }
	});
}

function getPacket(category, query)
{
	packet = []
	for (var obj in query)
		if(query[obj].category === category)
			packet.push( { 'label': query[obj].head, 'value': query[obj].amount } );
	return packet
}