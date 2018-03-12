<?php
session_start();
$user = $_POST["inEmail"];
$pass = $_POST["inPass"];

$dbuser = "vidigunawan@gmail.com";
$dbpass = "vidi1212"; 

	if($user == $dbuser && $pass == $dbpass){
	    ?>
	    <script type="text/javascript">alert('Berhasil Masuk'); 
		window.location="berhasil.php";
		</script>
		<?php
	} else {
				if(isset($_SESSION["gagal"])){
					    if($_SESSION['gagal']>=3){
						    //echo '<h1>SEDANG DIBLOKIR</h1>';
				    		//session_aler();
				    		$_SESSION['gagal']=4;
				    		header("location:loginm.php");
				    	}else{
				    		$_SESSION["gagal"]++; 
							header("location:loginm.php");
				    	}	
				}else{
					$_SESSION["gagal"]=1;
					header("location:loginm.php");
				}
		}
?>
