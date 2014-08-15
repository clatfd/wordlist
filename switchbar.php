<div class="row-fluid">
	<div class="col-md-2 col-xs-3">
		 <a class="menu" href="default.php?list=<?php echo $_GET['list'] ?>&gro=<?php echo $_GET['gro']-1 ?>&idlo=<?php echo $_GET['idlo'] ?>&idup=<?php echo $_GET['idup'] ?>">last_group </a>
	 </div>
 	<div class="col-md-2 col-xs-3">
		<a class="menu" href="default.php?list=<?php echo $_GET['list'] ?>&gro=<?php echo $_GET['gro']+1 ?>&idlo=<?php echo $_GET['idlo'] ?>&idup=<?php echo $_GET['idup'] ?>">next_group </a>
	</div>
	<div class="col-md-2 col-xs-3">
		<a class="menu" href="default.php?list=<?php echo $_GET['list'] ?>&amp;gro=<?php echo $_GET['gro'] ?>&amp;idlo=<?php echo $_GET['idlo']-100 ?>&amp;idup=<?php echo $_GET['idup']-100 ?>">last_list </a>
  	</div>
  	<div class="col-md-2 col-xs-3">
		<a class="menu" href="default.php?list=<?php echo $_GET['list'] ?>&amp;gro=<?php echo $_GET['gro'] ?>&amp;idlo=<?php echo $_GET['idlo']+100 ?>&amp;idup=<?php echo $_GET['idup']+100 ?>">next_list </a> 
	</div>
  	<div class="col-md-4 col-xs-6">
  		<a class="menu" href="Index.html">return</a>
  	</div>
</div>