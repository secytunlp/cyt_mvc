<?php

/**
 * Factory para Categoria
 *  
 * @author Marcos
 * @since 30-10-2013
 */
class CategoriaFactory extends CdtGenericFactory {

    public function build($next) {

        $this->setClassName('Categoria');
        $categoria = parent::build($next);
        if(array_key_exists('cd_categoria',$next)){
        	$categoria->setOid( $next["cd_categoria"] );
        }

        return $categoria;
    }

}
?>
