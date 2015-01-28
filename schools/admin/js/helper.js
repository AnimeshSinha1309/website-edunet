function donut(element, data)
{
	$(document).ready(function(e) {
		data = data;
		final = [];
		for(datum in data)
			final.push({label: datum, value: data[datum]});
		Morris.Donut({
			element: element,
			data: final,
			resize: true
		});
	});
}