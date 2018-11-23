<style type="text/css">
	
	@keyframes type{
    	from{width: 0ch}
    	to{width: <?php session_start();
    		            echo 1.4*strlen("HELLO ".$_SESSION['name']);
    		        ?>ch; }
	}
	@keyframes caret{
 	   from,to{border-color:transparent;}
 	   50%{border-color:white;}
	}

</style>