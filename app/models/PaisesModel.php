<?php 
class PaisesModel
{
	private $db;

	public function __construct(){
		$this->db = new Sql;

	}

	public function obtener_paises(){
		$this->db->query("SELECT * FROM pais");

		return $this->db->registers();
	}

	public function obtener_pais($id){
		$this->db->query("SET lc_time_names = 'es_ES'");
		$this->db->execute();
		
		$this->db->query("SELECT idpais, nombre_pais, continente, numero_habitantes, ave_nacional
							FROM pais WHERE idpais=:id");
		$this->db->bind(':id' , $idpais);

		return $this->db->register();

	}



		public function guardar($pais){
		$this->db->query(
			"INSERT INTO pais (nombre_pais, continente, numero_habitantes, ave_nacional)
			VALUES (:nombre_pais, :continente, :numero_habitantes, :ave_nacional");

		$this->db->bind(':nombre_pais', $pais['nombre_pais']);
		$this->db->bind(':continente', $pais['continente']);
		$this->db->bind(':numero_habitantes', $pais['numero_habitantes']);
		$this->db->bind(':ave_nacional', $pais['ave_nacional']);

		if ($this->db->execute()){
			return true;
		}else{
			return false;
		}

	}



	public function actualizar($id, $pais){
		$this->db->query("UPDATE pais SET nombre_pais=:nombre_pais, continente=:continente, numero_habitantes=:numero_habitantes, ave_nacional=:ave_nacional WHERE idpais = :id");
	
		$this->db->bind(':nombre_pais', $pais['nombre_pais']);
		$this->db->bind(':continente', $pais['continente']);
		$this->db->bind(':numero_habitantes', $pais['numero_habitantes']);
		$this->db->bind(':ave_nacional', $pais['ave_nacional']);
		$this->db->bind(':id', $id);

		if ($this->db->execute()){
			return true;
		}else{
			return false;
		}
	}


	public function delete($id){
		$this->db->query("DELETE FROM pais WHERE idpais=:id");
		$this->db->bind(':id', $id);

		if($this->db->execute()){
			return true;

		}else{
			return false;
		}
	}

	
}


 ?>