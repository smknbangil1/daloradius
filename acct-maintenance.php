<?php

    include ("library/checklogin.php");
    $operator = $_SESSION['operator_user'];


	include_once('library/config_read.php');
	$log = "visited page: ";

?>

<?php
	
	include("menu-accounting-maintenance.php");
	
?>
		
		
		
		<div id="contentnorightbar">
		
		<h2 id="Intro"><a href="#" onclick="javascript:toggleShowDiv('helpPage')"><? echo $l['Intro']['acctmaintenance.php']; ?>
		<h144>+</h144></a></h2>
				
		<div id="helpPage" style="display:none;visibility:visible" >
			<?php echo $l['helpPage']['acctmaintenance'] ?>
			<br/>
		</div>
		<br/>


<?php
	include('include/config/logging.php');
?>

		</div>
		
		<div id="footer">
		
<?php
        include 'page-footer.php';
?>

		
		</div>
		
</div>
</div>


</body>
</html>