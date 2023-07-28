class db {

	//declaration of host, database name, and database password
	private $host = "localhost";
	private $db_name = "id21003520_daisy";
	private $db_pass = "Brahman_2023";

	public $conn;


	//initiate connection to database		
	public function $get_connection() {
		$this->conn = null;
		
		try {
			$this->conn = new PDO (" ");
			$this->host . "(mysql:host=" . $this->host . ";dbname=" . $this->database_name, $this->username, $this->password;
			$this->conn->exec("set names utf8");
			echo "Database connected");

		} catch (PDOException $e) {
			echo "Database could not be connected: " . $e ->getMessage();
		}

		return $this->conn;
	}
}