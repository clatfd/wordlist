<link rel="stylesheet" type="text/css" href="css.css">
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="toastr.min.css">

<script type="text/javascript" src="jquery-1.8.2.js"></script>
<script type="text/javascript" src="toastr.min.js"></script>
<script type="text/javascript" src="bootstrap.min.js"></script>
<script type="text/javascript" src="js.js"></script>

<div class="progress progress-striped" style="height:30px">
	<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 1%">
	</div>
</div>

<script>
$(".progress-bar*").removeClass("progress-bar-danger").addClass("progress-bar-info").animate({width:"100%"},20000);
</script>