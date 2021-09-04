<?php

/**
 * DAO para Docente
 *  
 * @author Marcos
 * @since 30-10-2013
 */
class DocenteDAO extends EntityDAO {

	public function getTableName(){
		return CYT_TABLE_DOCENTE;
	}
	
	public function getEntityFactory(){
		return new DocenteFactory();
	}
	
	public function getFieldsToAdd($entity){
		
		
	}
	
	
	
	public function getIdFieldName(){
		return "cd_docente";
	}
	
	
public function getFromToSelect(){
		
		$tDocente = $this->getTableName();
		
		$tCategoria = CYTSecureDAOFactory::getCategoriaDAO()->getTableName();
		$tCarrerainv = CYTSecureDAOFactory::getCarrerainvDAO()->getTableName();
		$tOrganismo = CYTSecureDAOFactory::getOrganismoDAO()->getTableName();
		$tCargo = CYTSecureDAOFactory::getCargoDAO()->getTableName();
		$tDeddoc = CYTSecureDAOFactory::getDeddocDAO()->getTableName();
		$tFacultad = CYTSecureDAOFactory::getFacultadDAO()->getTableName();
		$tLugarTrabajo = CYTSecureDAOFactory::getLugarTrabajoDAO()->getTableName();
		
		
		
		
        $sql  = parent::getFromToSelect();
       
        $sql .= " LEFT JOIN " . $tCategoria . " ON($tDocente.cd_categoria = $tCategoria.cd_categoria)";
        $sql .= " LEFT JOIN " . $tCarrerainv . " ON($tDocente.cd_carrerainv = $tCarrerainv.cd_carrerainv)";
        $sql .= " LEFT JOIN " . $tOrganismo . " ON($tDocente.cd_organismo = $tOrganismo.cd_organismo)";
        $sql .= " LEFT JOIN " . $tCargo . " ON($tDocente.cd_cargo = $tCargo.cd_cargo)";
        $sql .= " LEFT JOIN " . $tDeddoc . " ON($tDocente.cd_deddoc = $tDeddoc.cd_deddoc)";
        $sql .= " LEFT JOIN " . $tFacultad . " ON($tDocente.cd_facultad = $tFacultad.cd_facultad)";
        $sql .= " LEFT JOIN " . $tLugarTrabajo . " LugarTrabajo ON($tDocente.cd_unidad = LugarTrabajo.cd_unidad)";
        
       
        
        
        return $sql;
	}
	
	public function getFieldsToSelect(){
		
		
		$tCategoria = CYTSecureDAOFactory::getCategoriaDAO()->getTableName();
		$tCarrerainv = CYTSecureDAOFactory::getCarrerainvDAO()->getTableName();
		$tOrganismo = CYTSecureDAOFactory::getOrganismoDAO()->getTableName();
		$tCargo = CYTSecureDAOFactory::getCargoDAO()->getTableName();
		$tDeddoc = CYTSecureDAOFactory::getDeddocDAO()->getTableName();
		$tFacultad = CYTSecureDAOFactory::getFacultadDAO()->getTableName();
		$tLugarTrabajo = "LugarTrabajo";
		
		$fields = parent::getFieldsToSelect();
		
        
        
        $fields[] = "$tCategoria.cd_categoria as " . $tCategoria . "_oid ";
        $fields[] = "$tCategoria.ds_categoria as " . $tCategoria . "_ds_categoria ";
        
        $fields[] = "$tCarrerainv.cd_carrerainv as " . $tCarrerainv . "_oid ";
        $fields[] = "$tCarrerainv.ds_carrerainv as " . $tCarrerainv . "_ds_carrerainv ";
        
        $fields[] = "$tOrganismo.cd_organismo as " . $tOrganismo . "_oid ";
        $fields[] = "$tOrganismo.ds_codigo as " . $tOrganismo . "_ds_codigo ";
        
        $fields[] = "$tCargo.cd_cargo as " . $tCargo . "_oid ";
        $fields[] = "$tCargo.ds_cargo as " . $tCargo . "_ds_cargo ";
        
        $fields[] = "$tDeddoc.cd_deddoc as " . $tDeddoc . "_oid ";
        $fields[] = "$tDeddoc.ds_deddoc as " . $tDeddoc . "_ds_deddoc ";
        
        $fields[] = "$tFacultad.cd_facultad as " . $tFacultad . "_oid ";
        $fields[] = "$tFacultad.ds_facultad as " . $tFacultad . "_ds_facultad ";
        
        $fields[] = "$tLugarTrabajo.cd_unidad as " . $tLugarTrabajo . "_oid ";
        $fields[] = "$tLugarTrabajo.ds_unidad as " . $tLugarTrabajo . "_ds_unidad ";
        $fields[] = "$tLugarTrabajo.ds_sigla as " . $tLugarTrabajo . "_ds_sigla ";
        
       	
        
        
        
       
        
        return $fields;
	}
	
	

	
	
}
?>