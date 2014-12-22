// Radio Button Style Selector

function radiobutton(button)
{
	$(document).ready(function()
	{
		$('.access-radio').removeClass('active-radio');
		$('#' + button).addClass('active-radio');
	});
}

// Upload Button Style Selector

function uploadbutton()
{
  document.querySelector('#fileSelect').addEventListener('click', function(e) {
    var fileInput = document.querySelector('#fileElem');
    //click(fileInput); // Simulate the click with a custom event.
    fileInput.click(); // Or, use the native click() of the file input.
  }, false);
}

function click(el) {
  // Simulate click on the element.
  var evt = document.createEvent('Event');
  evt.initEvent('click', true, true);
  el.dispatchEvent(evt);
}
    
function handleFiles(files) {
  $('#profile-picture-display').attr("src", $('#fileElem').val());
}