<!DOCTYPE html>
<html>
<head>
<title>Acknowledgement</title>
</head>
<body>
<h4>These are the data from page1.html.</h4>
<script>
 
var queryString = decodeURIComponent(window.location.search);
queryString = queryString.substring(1);
var queries = queryString.split("&");
for (var i = 0; i < queries.length; i++)
{
  document.write(queries[i] + "<br>");
}
 
</script> 
</body>
</html>