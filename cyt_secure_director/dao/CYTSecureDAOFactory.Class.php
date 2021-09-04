<?php

/**
 * Factory para DAOs
 *
 * @author Marcos
 * @since 09-11-2013
 */
class CYTSecureDAOFactory{

	public static function getUserUserGroupDAO(){
		return new UserUserGroupDAO();
	}
	
	public static function getUserDAO(){
		return new UserDAO();
	}
	
	public static function getUserGroupFunctionDAO(){
		return new UserGroupFunctionDAO();
	}
	
	public static function getDocenteDAO(){
		return new DocenteDAO();
	}
	
	public static function getCategoriaDAO(){
		return new CategoriaDAO();
	}
	
	public static function getCarrerainvDAO(){
		return new CarrerainvDAO();
	}
	
	public static function getOrganismoDAO(){
		return new OrganismoDAO();
	}
	
	public static function getCargoDAO(){
		return new CargoDAO();
	}
	
	public static function getDeddocDAO(){
		return new DeddocDAO();
	}
	
	public static function getLugarTrabajoDAO(){
		return new LugarTrabajoDAO();
	}
	
	public static function getFacultadDAO(){
		return new FacultadDAO();
	}
	
	
}
?>
