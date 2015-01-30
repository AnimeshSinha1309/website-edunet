/*
 * Radio Button Styles
 *      radioButton()       JavaScript function - scope global
 *      el-radio            HTML class
 *      Add class el-radio to ul containing all the radio input elements,
 *      which gives it the complete behaviour of the elements-radio.
 * Upload Button Styles
 *      uploadButton()      JavaScript function - scope global
 * Form Entry handlers
 *      radioButton()       JavaScript function - scope global
 */

/*
 * radioButton()
 * Associated class: el-radio, added to a ul or ol element
 * Automatically fills in a data field when an associated field is filled.
 * Demo available at http://animeshsinha1309.github.io/Website-Edunet/library/radioButton.html
 * @directions: call the radioButton() function anywhere in your code to initialize element
 * 	styled radio buttons. group all of the input elements into one ul or ol element and add the
 *	class el-radio to it. Your HTML DOM should have a ul or ol elements, with multiple li elements,
 *	each containing a label with an input element and some text, nested inside it.
 */
 
function radioButton() {
	$(document).ready(function() {
		$('ul.el-radio').each(function() {
			$(this).addClass('button-group');
		});
		$('ul.el-radio li label').each(function () {
			$(this).addClass('button');
		});
		$('ul.el-radio li input').each(function() {
			$(this).change(function() {
				$('.el-radio label input[name='+$(this).attr('name')+']').parent().removeClass('active');
				$(this).parent().addClass('active');
            });
		});
		$('ul.el-radio[data-name] li label input').each(function() {
			var name = $(this).parent().parent().parent().attr("data-name");
			$(this).attr('name', name);
			$(this).attr('type', 'radio');
		});
	});
}

/*
 * uploadButton(button, input)
 * Associated class: el-radio, added to a ul or ol element
 * Automatically fills in a data field when an associated field is filled.
 * Demo available at http://animeshsinha1309.github.io/Website-Edunet/library/uploadButton.html
 * @directions: call the radioButton() function anywhere in your code to initialize element
 * 	styled radio buttons. group all of the input elements into one ul or ol element and add the
 *	class el-radio to it. Your HTML DOM should have a ul or ol elements, with multiple li elements,
 *	each containing a label with an input element and some text, nested inside it.
 */

function uploadButton(button, input, handler) {
	$(document).ready(function() {
		$(input).change(handler());
		$(button).click( function() {
			$(input).click();
		});
    });
}
function click(el) {
	var evt = document.createEvent('Event');
	evt.initEvent('click', true, true);
	el.dispatchEvent(evt);
}

/*
 * dataLink(base, mutable, data)
 * Automatically fills in a data field when an associated field is filled.
 * Demo available at http://animeshsinha1309.github.io/Website-Edunet/libraries/js/dataLink.html
 * @parameters:
 *	base: id of the field on which the other field depends
 *	mutable: id of the field that has to be changed according to the base field
 *	data: an object declaring one on one correspondence between the two fields
 */
function dataLink(base, mutable, data){
	$(base).blur(function() {
		for (var i = 0; i < data.length; i++) {
			if (data[i].head == $(base).val()) {
				$(mutable).val(data[i].category);
			}
		}
	});
}

/*
 * repopulate(data)
 * Repopulates the form fields on the basis of given data.
 * Demo available at http://animeshsinha1309.github.io/Website-Edunet/libraries/js/repopulate.html
 * @parameters:
 *	data: an object having their name attribute as keys and value that have to be repopulated
 * @notes:
 *	to repopulate the whole form, received by method post, use json_encode($_POST) to generate data.
 */
function repopulate(data) {
	$(document).ready(function() {
		for(var datum in data) {
			if (data.hasOwnProperty(datum)) {
				$("[name = '" + datum + "']").val(data[datum]);
			}
		}
    });
}

/*
 * heightBalance(data)
 * Pushes in DOM elements to other parent elements while trying to keep all parent elements
 * equal in height. That is, it adds the said element to the parent with the least present height.
 * Demo available at http://animeshsinha1309.github.io/Website-Edunet/libraries/js/heightBalance.html
 * @parameters:
 *	divisions: an array of all container elements the height of all of which is being balanced
 *  push: a function which returns the HTML of the element to be pushed in as a string
 */
function heightBalance(divisions, push)
{
    $(document).ready(function() {
        var postColumn = divisions[0];
        for(var i = 0; i < divisions.length; i++)
            if(divisions[i].length > postColumn.length)
                postColumn = divisions[i];
        $(postColumn).append(push());
    });
}