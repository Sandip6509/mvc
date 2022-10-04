<?php

class Model {

	protected $connection = '';
	protected $servername = 'localhost';
	protected $username = 'root';
	protected $password = 'password';
	protected $db = 'mvc';

	function __construct(){
		
		mysqli_report(MYSQLI_REPORT_STRICT);
		try{
			$this->connection = new mysqli($this->servername, $this->username, $this->password, $this->db);
		} catch (Exception $ex) {
			echo "Connection Failed: " . $ex->getMessage();
			exit;
		}
	}

	function insertData($table, $data){
		$columns = implode(',', array_keys($data));
		$values = implode("','", $data);
		$sql = "insert into $table ($columns) values ('$values')";
		$insert = $this->connection->query($sql);

		if($insert){
			$response['data'] = null;
			$response['status'] = true;
			$response['message'] = 'Data insert successfully!';
		}else{
			$response['data'] = null;
			$response['status'] = false;
			$response['message'] = 'Data insertion failed!';
		}
		return $response;
	}

	function login($email,$pass){
		$sql = "SELECT * FROM users where email ='$email'";
		$login = $this->connection->query($sql);
		$data = $login->fetch_object();
		if($login->num_rows > 0 && password_verify($pass,$data->pass)){
			$response['data'] = $data;
			$response['status'] = true;
			$response['message'] = 'Login successfully!';
		}else{
			$response['data'] = null;
			$response['status'] = false;
			$response['message'] = 'Email or password is incorrect.';
		}
		return $response;
	}

	function selectData(string $table, array $where = []){
		$sql = "SELECT * FROM $table";
		if(!empty($where)){
			$sql .= " WHERE ";
			foreach ($where as $key => $value) {
				$sql .= " $key = '$value' AND";
			}
			$sql = rtrim($sql, 'AND');
		}
		$select = $this->connection->query($sql);
		if($select->num_rows > 0){
			while($fetchData = $select->fetch_object()){
				$allData[] = $fetchData;
			}
			$response['data'] = $allData;
			$response['status'] = true;
			$response['message'] = 'Data retrived successfully!';
		}else{
			$response['data'] = [];
			$response['status'] = false;
			$response['message'] = 'Data not found.';
		}
		return $response;
	}

	function UpdateData ($table, $data, $where) {
		$sql = "UPDATE $table SET ";
		foreach ($data as $key => $value) {
			$sql .= "$key = '$value',"; 
		}
		$sql = rtrim($sql, ',');
		$sql .= " WHERE ";

		foreach ($where as $key => $value) {
			$sql .= "$key = '$value' AND";
		}
		$sql = rtrim($sql, 'AND');
		return $update = $this->connection->query($sql);
	}

	function deleteData($table,$where)
	{
		$sql = "DELETE FROM $table WHERE ";
		foreach ($where as $key => $value) {
			$sql .="$key ='$value'";
		}
		return $this->connection->query($sql);
	}

}
