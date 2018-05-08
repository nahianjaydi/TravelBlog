<?php
class User
{
	private $db;

	public function __construct()
	{
		$this->db = new Database;
  }

  public function createUser($data)
	{
		$this->db->query("INSERT INTO users (name, email, password)
		VALUES (:name, :email, :password)
		");
		
		$this->db->bind(":name", $data["name"]);
		$this->db->bind(":email", $data["email"]);
		$this->db->bind(":password", $data["password"]);

		if ($this->db->execute()) {
			return true;
		} else {
			return false;
		}

	}

	public function emailExist($email)
	{
		$this->db->query("SELECT * 
						FROM users
						WHERE email = :email ");

		$this->db->bind(":email", $email);
		$user = $this->db->single();

		return $user;

		// if ($this->db->execute()) {
		// 	return true;
		// } else {
		// 	return false;
		// }

	}

	public function logout(){
		unset($_SESSION["is_looged_in"]);
		unset($_SESSION["userId"]);
		unset($_SESSION["name"]);
		unset($_SESSION["email"]);
		session_destroy();
		return true;
	}

	public function updatePassword($id, $new_password)
	{
		$this->db->query("UPDATE users 
		SET
		password = :password
		WHERE id = $id 
		");
		
		$this->db->bind(":password", $new_password);

		if ($this->db->execute()) {
			return true;
		} else {
			return false;
		}

	}

}
?>