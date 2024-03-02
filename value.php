<!DOCTYPE html>
<html>
<head>
<title></title>
<script type="text/javascript">
function showUser(meeting_val)
{
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange=function(){
		if(this.readyState==4 &&this.status==200)
		{
			console.log('result:'+this.responseText);
			document.getElementById("table1").innerHTML=this.responseText;
		}
	};
	xmlhttp.open("GET","get_val.php?p="+meeting_val,true);
	xmlhttp.send();
}
</script>

<style type="text/css">
.header {
margin-top:3%;
margin-bottom:5%;
border-left:2px solid #4CAF50;
border-top:2px solid #4CAF50;
border-right:2px solid #008CBA;
border-bottom:2px solid #008CBA;
padding:8px;
font-size:30px;
text-align:center;
}

table {
text-align:center;
border-collapse:collapse;
font-size:20px;
}

tr:nth-child(even) {background-color:#efefef;}

select {
	
text-align:center bottom;
font-size:20px;
line-height: 80px;

}
</style>
</head>
<body>
<center>
<div class="header">View Visitor Details</div>
<form>
<div>
<select name="users" onchange="showUser(this.value)">
<option value="select">Select a person:</option>
<option value="1">principal</option>
<option value="2">vice-principal</option>
<option value="3">staff</option>
<option value="4">student</option>
</select>
</div>
</form>
<br><br><br>
<div id="table1">
	<a href="show.php">Display</a>
	<a href="insertAJAX.php">Home</a>
</div>
</center>
</body>
</html>