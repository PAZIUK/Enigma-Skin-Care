<?php 
	class ADMIN
	{
		public static function getAppointments($start,$end){
			$mysqli = DATABASE::Connect();
			$sql = "SELECT * FROM `appointment` ORDER BY `appointment`.`App_Checked` ASC, `appointment`.`App_DateTime` DESC LIMIT ?,?";
			$stmt = $mysqli->prepare($sql);
			$stmt->bind_param("ii",$start,$end);
			$stmt->execute();
			return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
		}
		public static function getAppointmentById($id){
			$mysqli = DATABASE::Connect();
			$sql = "SELECT * FROM `appointment` WHERE `appointment`.`App_ID` = $id";
			$stmt = $mysqli->prepare($sql);
			$stmt->execute();
			return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
		}
		public static function CheckAppointmentById($id){
			$mysqli = DATABASE::Connect();
			$sql = "UPDATE `appointment` SET `appointment`.`App_Checked` = 1 WHERE `appointment`.`App_ID` = ?";
			$stmt = $mysqli->prepare($sql);
			$stmt->bind_param("i",$id);
			$stmt->execute();
		}
		public static function getAllAppointments(){
			$mysqli = DATABASE::Connect();
			$sql = "SELECT * FROM `appointment`";
			$stmt = $mysqli->prepare($sql);
			$stmt->execute();
			return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
		}
		public static function GetSettings(){
			$mysqli = DATABASE::Connect();
			$sql = "SELECT * FROM `config`";
			$stmt = $mysqli->prepare($sql);
			$stmt->execute();
			return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
		}
		public static function SetSettings($POST){
			$mysqli = DATABASE::Connect();

			$sql = "UPDATE `config` SET `config_value` = ? WHERE `config`.`config_id` = 1 ";
			$stmt = $mysqli->prepare($sql);
			$stmt->bind_param("s",$POST["phone"]);
			$stmt->execute();

			$sql = "UPDATE `config` SET `config_value` = ? WHERE `config`.`config_id` = 4 ";
			$stmt = $mysqli->prepare($sql);
			$stmt->bind_param("s",$POST["location"]);
			$stmt->execute();
			
			$sql = "UPDATE `config` SET `config_value` = ? WHERE `config`.`config_id` = 5 ";
			$stmt = $mysqli->prepare($sql);
			$stmt->bind_param("s",$POST["mail"]);
			$stmt->execute();

			$sql = "UPDATE `config` SET `config_value` = ? WHERE `config`.`config_id` = 6 ";
			$stmt = $mysqli->prepare($sql);
			$stmt->bind_param("s",$POST["facebook"]);
			$stmt->execute();

			$sql = "UPDATE `config` SET `config_value` = ? WHERE `config`.`config_id` = 7 ";
			$stmt = $mysqli->prepare($sql);
			$stmt->bind_param("s",$POST["instagram"]);
			$stmt->execute();

			$sql = "UPDATE `config` SET `config_value` = ? WHERE `config`.`config_id` = 8 ";
			$stmt = $mysqli->prepare($sql);
			$stmt->bind_param("s",$POST["siteDescription"]);
			$stmt->execute();
		}
		public static function SetUsername($POST){
			$mysqli = DATABASE::Connect();
			$sql = "UPDATE `users` SET `username` = ? WHERE `users`.`id` = 5";
			$stmt = $mysqli->prepare($sql);
			$stmt->bind_param("s",$POST["login"]);
			$stmt->execute();
		}
		public static function CheckOldPassword($password){
			$mysqli = DATABASE::Connect();
			$sql = "SELECT `users`.`password` FROM `users` WHERE `users`.`id` = 5";
			$stmt = $mysqli->prepare($sql);
			$stmt->execute();
			$passwordDB = $stmt->get_result()->fetch_all(MYSQLI_ASSOC)[0]["password"];
			return password_verify($password, $passwordDB);
		}
		public static function SetPassword($password){
			$hashPassword = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);
			$mysqli = DATABASE::Connect();
			$sql = "UPDATE `users` SET `password` = ? WHERE `users`.`id` = 5";
			$stmt = $mysqli->prepare($sql);
			$stmt->bind_param("s",$hashPassword);
			$stmt->execute();
			return $hashPassword;
		}
		public static function GetUsername(){
			$mysqli = DATABASE::Connect();
			$sql = "SELECT `users`.`username` FROM `users` WHERE `users`.`id` = 5";
			$stmt = $mysqli->prepare($sql);
			$stmt->execute();
			return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
		}
		public static function GetPassword(){
			$mysqli = DATABASE::Connect();
			$sql = "SELECT `users`.`password` FROM `users` WHERE `users`.`id` = 5";
			$stmt = $mysqli->prepare($sql);
			$stmt->execute();
			return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
		}
		public static function returnToAdminHome(){
			?>
				<script>window.location.href = "index.php?action=admin"</script> 
			<?php 
		}
	}	
?>