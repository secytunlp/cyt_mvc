<?php

/**
 * Manager para Docente
 *  
 * @author Marcos
 * @since 30-10-2013
 */
class DocenteManager extends EntityManager{

	public function getDAO(){
		return CYTSecureDAOFactory::getDocenteDAO();
	}

}
?>
