function chart(data, element)
{
	new Morris.Donut({
		element: element,
		data: data,
		formatter: function(x) { return(x + " Users"); }
	});
}