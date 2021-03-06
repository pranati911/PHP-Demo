<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Contact Form </title>

<style type="text/css">
body{
	font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif; 
	font-size:12px;
}
p, h1, form, button{border:0; margin:0; padding:0;}
.spacer{clear:both; height:1px;}

.myform{
	margin:0 auto;
	width:400px;
	padding:15px;
}
	#basic{
		border:solid 2px #DEDEDE;	
	}
	#basic h1 {
		font-size:14px;
		font-weight:bold;
		margin-bottom:8px;
	}
	#basic p{
		font-size:11px;
		color:#666666;
		margin-bottom:20px;
		border-bottom:solid 1px #dedede;
		padding-bottom:10px;
	}
	#basic label{
		display:block;
		font-weight:bold;
		text-align:right;
		width:140px;
		float:left;
	}
	#basic .small{
		color:#666666;
		display:block;
		font-size:11px;
		font-weight:normal;
		text-align:right;
		width:140px;
	}
	#basic input{
		float:left;
		width:200px;
		margin:2px 0 30px 10px;
	}
	#basic button{ 
		clear:both;
		margin-left:150px;
		background:#888888;
		color:#FFFFFF;
		border:solid 1px #666666;
		font-size:11px;
		font-weight:bold;
		padding:4px 6px;
	}

	#stylized{
		border:solid 2px #b7ddf2;
		background:#ebf4fb;

	}
	#stylized h1 {
		font-size:14px;
		font-weight:bold;
		margin-bottom:8px;
	}
	#stylized p{
		font-size:11px;
		color:#666666;
		margin-bottom:20px;
		border-bottom:solid 1px #b7ddf2;
		padding-bottom:10px;
	}
	#stylized label{
		display:block;
		font-weight:bold;
		text-align:right;
		width:140px;
		float:left;
	}
	#stylized .small{
		color:#666666;
		display:block;
		font-size:11px;
		font-weight:normal;
		text-align:right;
		width:140px;
	}
	#stylized input{
		float:left;
		font-size:12px;
		padding:4px 2px;
		border:solid 1px #aacfe4;
		width:200px;
		margin:2px 0 20px 10px;
	}
	#stylized button{ 
		clear:both;
		margin-left:160px;
		width:125px;
		height:31px;
		background:#444;
		text-align:center;
		line-height:31px;
		color:#FFFFFF;
		font-size:11px;
		font-weight:bold;
	}

</style>
</head>

<body>

<br /><h1 style="text-align:center;">A basic ready-to-use contact form for your website!</h1><br />

<div id="stylized" class="myform">

<form id="form1" id="form1" action="mail.php" method="POST">


    <label>Name &emsp;
        <span class="small">Add your name &emsp; </span>
    </label>
<input type="text" name="name">
    <label>Email &emsp;
        <span class="small">Enter a Valid Email &emsp; </span>
    </label>
<input type="text" name="email">
    <label>Phone &emsp;
        <span class="small">Add a Phone Number &emsp; </span>
    </label>
<input type="text" name="phone">

<br />
<br />

    <label>Priority &emsp;
        <span class="small">Priority Level &emsp; </span>
    </label>

<select name="priority" size="1">
<option value="Low">Low</option>
<option value="Normal">Normal</option>
<option value="High">High</option>
<option value="Emergency">Emergency</option>
</select>
<br />
<br />
<br />
    <label>Type &emsp;
        <span class="small">Type of Contact &emsp; </span>
    </label>
<select name="type" size="1">
<option value="update"> Need Updates</option>
<option value="change">Information Change</option>
<option value="addition">Information Addition</option>
<option value="new">Product Information</option>
</select>
<br />
<br />
<br />


    <label>Message &emsp;
        <span class="small">Type Your Message &emsp; </span>
    </label>
<textarea name="message" rows="6" cols="25"></textarea><br />

    <button type="submit" value="Send" style="margin-top:15px;">Submit</button>
<div class="spacer"></div>

</form>

</div>

</body>
</html>