<?php

/**
 * Docente
 *
 * @author Marcos
 * @since 29-10-2013
 */

class Docente extends Entity{

	//variables de instancia.

	private $ds_nombre;
	
	private $ds_apellido;
	
	private $nu_precuil;
	
	private $nu_documento;
	
	private $nu_postcuil;
	
	private $ds_mail;
	
	private $nu_telefono;
	
	private $categoria;
	  
	private $carreraInv;  
	
	private $organismo;
	  
	private $cargo;  
	
	private $deddoc;
	
	private $facultad;
	  
	private $lugarTrabajo;  
	
	private $bl_becario;
	  
	private $ds_tipobeca; 
	
	private $ds_orgbeca;
	 
	
	public function __construct(){
		 
		$this->ds_nombre = "";
	
		$this->ds_apellido = "";
		
		$this->nu_precuil = "";
		
		$this->nu_documento = "";
		
		$this->nu_postcuil = "";
		
		$this->ds_mail = "";
		
		$this->nu_telefono = "";
		
		$this->categoria = new Categoria();
		  
		$this->carreraInv = new CarreraInv();  
		
		$this->organismo = new Organismo();
		  
		$this->cargo = new Cargo();  
		
		$this->deddoc = new DedDoc();
		
		$this->facultad = new Facultad();
		  
		$this->lugarTrabajo = new LugarTrabajo();  
		
		$this->bl_becario = "";
		  
		$this->ds_tipobeca = ""; 
		
		$this->ds_orgbeca = "";
		
	}




	

	

	public function getDs_nombre()
	{
	    return $this->ds_nombre;
	}

	public function setDs_nombre($ds_nombre)
	{
	    $this->ds_nombre = $ds_nombre;
	}

	public function getDs_apellido()
	{
	    return $this->ds_apellido;
	}

	public function setDs_apellido($ds_apellido)
	{
	    $this->ds_apellido = $ds_apellido;
	}

	public function getNu_precuil()
	{
	    return $this->nu_precuil;
	}

	public function setNu_precuil($nu_precuil)
	{
	    $this->nu_precuil = $nu_precuil;
	}

	public function getNu_documento()
	{
	    return $this->nu_documento;
	}

	public function setNu_documento($nu_documento)
	{
	    $this->nu_documento = $nu_documento;
	}

	public function getNu_postcuil()
	{
	    return $this->nu_postcuil;
	}

	public function setNu_postcuil($nu_postcuil)
	{
	    $this->nu_postcuil = $nu_postcuil;
	}

	public function getCategoria()
	{
	    return $this->categoria;
	}

	public function setCategoria($categoria)
	{
	    $this->categoria = $categoria;
	}

	public function getCarreraInv()
	{
	    return $this->carreraInv;
	}

	public function setCarreraInv($carreraInv)
	{
	    $this->carreraInv = $carreraInv;
	}

	public function getOrganismo()
	{
	    return $this->organismo;
	}

	public function setOrganismo($organismo)
	{
	    $this->organismo = $organismo;
	}

	public function getCargo()
	{
	    return $this->cargo;
	}

	public function setCargo($cargo)
	{
	    $this->cargo = $cargo;
	}

	public function getDeddoc()
	{
	    return $this->deddoc;
	}

	public function setDeddoc($deddoc)
	{
	    $this->deddoc = $deddoc;
	}

	public function getFacultad()
	{
	    return $this->facultad;
	}

	public function setFacultad($facultad)
	{
	    $this->facultad = $facultad;
	}

	public function getLugarTrabajo()
	{
	    return $this->lugarTrabajo;
	}

	public function setLugarTrabajo($lugarTrabajo)
	{
	    $this->lugarTrabajo = $lugarTrabajo;
	}

	public function getBl_becario()
	{
	    return $this->bl_becario;
	}

	public function setBl_becario($bl_becario)
	{
	    $this->bl_becario = $bl_becario;
	}

	public function getDs_tipobeca()
	{
	    return $this->ds_tipobeca;
	}

	public function setDs_tipobeca($ds_tipobeca)
	{
	    $this->ds_tipobeca = $ds_tipobeca;
	}

	public function getDs_orgbeca()
	{
	    return $this->ds_orgbeca;
	}

	public function setDs_orgbeca($ds_orgbeca)
	{
	    $this->ds_orgbeca = $ds_orgbeca;
	}

	public function getDs_mail()
	{
	    return $this->ds_mail;
	}

	public function setDs_mail($ds_mail)
	{
	    $this->ds_mail = $ds_mail;
	}

	public function getNu_telefono()
	{
	    return $this->nu_telefono;
	}

	public function setNu_telefono($nu_telefono)
	{
	    $this->nu_telefono = $nu_telefono;
	}
	
	public function getCuil()
	{
	    return $this->getNu_precuil().'-'.$this->getNu_documento().'-'.$this->getNu_postcuil();
	}
}
?>