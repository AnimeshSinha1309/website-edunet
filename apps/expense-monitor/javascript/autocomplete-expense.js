// Auto complete Data
var autocomplete = [
	{'head':'Grocery', 'category':'Food'},
	{'head':'Non Veg', 'category':'Food'},
	{'head':'Vegetables', 'category':'Food'},
	{'head':'Hard Disk', 'category':'Devices'},
	{'head':'Microphone', 'category':'Devices'},
	{'head':'Mobile', 'category':'Devices'},
	{'head':'Tablet', 'category':'Devices'},
	{'head':'Memory Card', 'category':'Devices'},
	{'head':'Laptop', 'category':'Devices'},
	{'head':'Phone', 'category':'Devices'},
	{'head':'Hard Disk', 'category':'Devices'},
	{'head':'Internet', 'category':'Devices'},
	{'head':'School Fees', 'category':'Education'},
	{'head':'Biscuits', 'category':'Food'},
	{'head':'Resistor', 'category':'Electronics'},
	{'head':'Capacitor', 'category':'Electronics'},
	{'head':'Bread Board', 'category':'Electronics'},
	{'head':'Vero Board', 'category':'Electronics'},
	{'head':'Microcontroller', 'category':'Electronics'},
]
$('#newexpense-head').blur(function(e) {
	$('#newexpense-category').val('');
    for(data in autocomplete)
	{
		if(autocomplete[data].head == $('#newexpense-head').val())
		{
			$('#newexpense-category').val(autocomplete[data].category);
		}
	}
});