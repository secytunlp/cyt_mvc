<?php

/**
 * Factory para LugarTrabajo
 *  
 * @author Marcos
 * @since 30-10-2013
 */
class LugarTrabajoFactory extends CdtGenericFactory {
   
    public function build($next) {

        $this->setClassName('LugarTrabajo');
        $lugarTrabajo = parent::build($next);
        
	if(array_key_exists('cd_unidad',$next)){
        	$lugarTrabajo->setOid( $next["cd_unidad"] );
        }
        

	$lugarTrabajoPadre = new LugarTrabajo();
	$lugarTrabajoPadre->setDs_unidad( $next["PADRE_ds_unidad"] );
	$lugarTrabajoPadre->setOid( $next["PADRE_cd_unidad"] );
	$lugarTrabajoPadre->setDs_sigla( $next["PADRE_ds_sigla"] );

        $lugarTrabajo->setPadre( $lugarTrabajoPadre );
	
        return $lugarTrabajo;
    }

}
?>
