<!DOCTYPE html>
<html>
<body>

<h2>JSON Object Creation in JavaScript</h2>

<p id="demo"></p>

<script src="../../datafiles/noabbreviate.json" type="application/json"></script>
<script src="../../libraries/foundation/js/vendor/jquery.js" type="text/javascript"></script>
<script>
var text = '{"r":{"fullform":"are","shortform":"r","usage":80,"alternative":"none","block-when":{"word":"whole", "check":"strict"}},"u":{"fullform":"you","shortform":"u","usage":80,"alternative":"none","block-when":{"word":"whole", "check":"strict"}},"ol9":{"fullform":"online","shortform":"ol9","usage":60,"alternative":"none","block-when":{"word":"whole", "check":"general"}},"didnt":{"fullform":"didn\'t","shortform":"didnt","usage":90,"alternative":"none","block-when":{"word":"whole", "check":"extreme"}}}'

var obj = JSON.parse(text);

document.getElementById("demo").innerHTML =
obj.r.fullform + "<br>" +
obj.u.usage + "<br>" +
obj.ol9.shortform;

$.getJSON("www.edunet.org/datafiles/noabbreviate.json", function( data ) {
  	$('body').append('success')
  });

</script>

</body>
</html>