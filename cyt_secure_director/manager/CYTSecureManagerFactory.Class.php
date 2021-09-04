<?php

/**
 * Factory para Managers
 *  
 * @author Marcos
 * @since 09-11-2013
 */
class CYTSecureManagerFactory{

	public static function getUserUserGroupManager(){
		return new UserUserGroupManager();
	}
	
	public static function getUserManager(){
		return new UserManager();
	}
	
	public static function getUserGroupFunctionManager(){
		return new UserGroupFunctionManager();
	}
	
	public static function getDocenteManager(){
		return new DocenteManager();
	}
	
	public static function getRegistrationManager(){
		return new RegistrationManager();
	}
	
	public static function getFacultadManager(){
		return new FacultadManager();
	}
	
	public static function getCategoriaManager(){
		return new CategoriaManager();
	}
	
	public static function getCarrerainvManager(){
		return new CarrerainvManager();
	}
	
	public static function getCargoManager(){
		return new CargoManager();
	}
	
	public static function getDeddocManager(){
		return new DeddocManager();
	}
	
	public static function getOrganismoManager(){
		return new OrganismoManager();
	}
	
	public static function getLugarTrabajoManager(){
		return new LugarTrabajoManager();
	}
	
	
	
	
	
}

?>