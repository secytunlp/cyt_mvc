<?php

/**
 * Factory para Facultad
 *  
 * @author Marcos
 * @since 21-10-2013
 */
class FacultadFactory extends CdtGenericFactory {

    public function build($next) {

        $this->setClassName('Facultad');
        $facultad = parent::build($next);
        if(array_key_exists('cd_facultad',$next)){
        	$facultad->setOid( $next["cd_facultad"] );
        }

        return $facultad;
    }

}
?>
