<!DOCTYPE html>
<html>
<head>
	<title>testttttttt</title>
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
<p>aaaaaaaaaaaa</p>
<div id="element">
 <audio id="foo" controls onended="test()">
 	<source src="Audios/test.mp3" id="aaa" >
 </audio>
</div>
<script type="text/javascript">
	function test()
	{
		alert("aaaaa");
	}
	/*
var soundFoo = document.getElementById('foo');
//soundFoo.play();
var i=0;
soundFoo.onended = function() {
	i++;
	if(i==1)
$("#element").remove();
  //soundFoo.currentTime = 1;
//$("aaa").remove();
 //aa.removeAttr('src');​
 // soundFoo.play(); // assuming you want it to repeat right away.
}
*/
</script>

</body>
</html>
