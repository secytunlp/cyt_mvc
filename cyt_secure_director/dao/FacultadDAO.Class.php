<?php

/**
 * DAO para Facultad
 *  
 * @author Marcos
 * @since 21-10-2013
 */
class FacultadDAO extends EntityDAO {

	public function getTableName(){
		return CYT_TABLE_FACULTAD;
	}
	
	public function getEntityFactory(){
		return new FacultadFactory();
	}
	
	public function getFieldsToAdd($entity){
		
		
	}
	
	
	
	public function getIdFieldName(){
		return "cd_facultad";
	}
	
	
	
	
	

	
	
}
?>