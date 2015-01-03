// Radio Button Style Selector

function radiobutton(button)
{
	$(document).ready(function()
	{
		$('.el-radio label').removeClass('active');
		$(button).parent().addClass('active');
	});
}

// Upload Button Style Selector

function uploadbutton()
{
  document.querySelector('#profile-picture-button').addEventListener('click', function(e) {
    var fileInput = document.querySelector('#profile-picture-fileinput');
    fileInput.click();
  }, false);
}
function uploadButtonHandle(files) {
  $('#profile-picture-display').attr("src", "/images/avatar-red.png");
}
function click(el) {
  // Simulate click on the element.
  var evt = document.createEvent('Event');
  evt.initEvent('click', true, true);
  el.dispatchEvent(evt);
}

// Form repopulator function
function repopulate(data, idprefix) {
	for(var datum in data)
	  $('#' + idprefix + datum).val(data[datum]);
}