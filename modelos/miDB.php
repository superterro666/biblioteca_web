<?php
/*
$db = new miDB();
$datos = array( "Perico", "Palotes" );
$sql = "INSERT INTO users ( Nombre, Apellidos) VALUES( ?, ? )";
$db->consulta($sql, $datos);
SELECT COUNT(*) FROM users

*/
class miDB {

    private $pdo;
    private $opciones;
    private $dsn;
    private $stm;
    private $result;
    private $ins;





    public function __construct($dbHost, $dbUser, $dbPass, $dbDB ){
		$this->dsn 		= 'mysql:host='.$dbHost.';dbname=' . $dbDB;
        //$this->dsn = 'sqlite:myDatabase.sq3';
        //$this->dsn = 'sqlite::memory:';
		$this->opciones = array(
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                    PDO::ATTR_PERSISTENT => true,
					//PDO::ATTR_EMULATE_PREPARES => false,
					PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
					PDO::MYSQL_ATTR_FOUND_ROWS => true
        );

        try {
			$this->pdo = new PDO($this->dsn, $dbUser, $dbPass, $this->opciones);

        } catch( PDOException $e ) {
			throw new Exception($e->getMessage());
            echo "error ". $e->getMessage();
			return false;
        }
    }





	private function quitaComillasMagicas( $data ){
		if( get_magic_quotes_gpc() ){
			if( !is_array($data) ){
				return $data = stripslashes($data);
			}else{
				foreach($data as $a => $b){
					$data[$a] = stripslashes($b);
				}
				return $data;
			}
		}else{
			return $data;
		}
	}





    public function sacaUnaFila( $sql, $data=null ){
        if( $data !== null ){
			$data = $this->quitaComillasMagicas( $data );
            $data = array_values( $data );
		}
        $this->stm = $this->pdo->prepare( $sql );
        $this->stm->execute( $data );
        $this->stm->setFetchMode( PDO::FETCH_OBJ );
        $this->result = $this->stm->fetch();
        return $this->result;
    }





    public function sacaVariasFilas( $sql, $data=null ){
	$this->stm = $this->pdo->prepare( $sql );
	$this->stm->setFetchMode( PDO::FETCH_OBJ );
        if( $data !== null ){
            $data = $this->quitaComillasMagicas( $data );
            $data = array_values( $data );
            $this->stm->execute( $data );
	}else{
            $this->stm->execute();
	}

	$this->obj = $this->stm->fetchAll();

        return $this->obj;
    }





    public function consulta( $sql, $data=null ){
        $this->stm = $this->pdo->prepare( $sql );
		if( $data !== null ){
			$data = $this->quitaComillasMagicas( $data );
            $data = array_values( $data );
			return $this->stm->execute( $data );
        }else{
			return $this->pdo->query($sql);
		}
    }

	public function insercion( $sql, $data=null ){
        $this->stm = $this->pdo->prepare( $sql );
		if( $data !== null ){
			$data = $this->quitaComillasMagicas( $data );
            $data = array_values( $data );
			$this->stm->execute( $data );
			return $this->pdo->lastInsertId();
        }else{
			return false;
		}
    }





	public function rowCount($sql, $data=null ){
		if( $data !== null ){
			$this->stm = $this->pdo->prepare( $sql );
			$data = $this->quitaComillasMagicas( $data );
                        $data = array_values( $data );
			$this->stm->execute( $data );
			return $this->stm->fetchColumn();
                }else{
            		$this->stm = $this->pdo->query($sql);
			return $this->stm->fetchColumn();
		}
            }







    public function __destruct(){
        $this->pdo = null;
    }
}


















?>