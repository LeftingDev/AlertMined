<?php
	class AlertMined
	{
	//Check if message it's completed (allow or not allow mined).
	  public function GetMessage()
	  {
	    // Print if user complete a message by AlertMined.
	    if (isset($_COOKIE["AlertMined"])) {
	    	//return true if COOKIE (AlertMined) is existed.
	    	return true;
	    }else{
	    	//return false if COOKIE (AlertMined) is not existed.
	    	return false;
	    }
	  }
	// Check if user mined or not
	  public function GetMined()
	  {
	    if ($_COOKIE["AlertMined"] == "true") {
	    	//return true if user mined.
	    	return true;
	    }else{
	    	//return false if user is not mined.
	    	return false;
	    }
	  }
	}
	?>