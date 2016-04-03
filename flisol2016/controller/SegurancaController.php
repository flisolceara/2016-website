<?php

if ( ! isset($_SESSION['usuario']) ) {
	if ($_SESSION['usuario'] != 'admin@flisolce.org') {
		 header('Location: login.php');
	}
}