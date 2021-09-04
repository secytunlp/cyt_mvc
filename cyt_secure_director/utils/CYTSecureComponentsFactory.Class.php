<?php

/**
 * Factory para componentes
 *
 * @author Marcos
 * @since 12-11-2013
 */

class CYTSecureComponentsFactory {


	
	
	public static function getFindLugarTrabajo(LugarTrabajo $lugarTrabajo, $label, $required_msg="", $inputId='lugarTrabajo_oid', $inputName='lugarTrabajo.oid', $fCallback="lugarTrabajo_change") {

		$findEntityInput = FieldBuilder::buildFieldFindEntity ($lugarTrabajo->getOid(), $label, $inputId, $inputName, self::getAutocompleteLugarTrabajo($lugarTrabajo), get_class(CYTSecureManagerFactory::getLugarTrabajoManager()), "CMPLugarTrabajoPopupGrid" , $required_msg );
		$findEntityInput->getInput()->setFunctionCallback($fCallback);		
		$findEntityInput->getInput()->setItemAttributesCallback('oid,ds_unidad,ds_sigla');

		$findEntityInput->getInput()->setInputSize(5,25);
		
		return $findEntityInput;
		
	}

	
	
	public static function getAutocompleteLugarTrabajo(LugarTrabajo $lugarTrabajo, $required_msg="", $inputId='autocomplete_lugarTrabajo', $inputName='autocomplete_lugarTrabajo', $fCallback="autocomplete_lugarTrabajo_change") {

		$autocomplete = new CMPLugarTrabajoAutocomplete();

		$autocomplete->setFunctionCallback( $fCallback );
		$autocomplete->setInputSize( $inputSize );
		$autocomplete->setInputName( $inputName );
		$autocomplete->setInputId(  $inputId );
			
		return $autocomplete;
	}
	
	
	public static function getAutocompleteDocente(Docente $docente, $required_msg="", $inputId='autocomplete_docente', $inputName='autocomplete_docente', $fCallback="autocomplete_docente_change") {

		$autocomplete = new CMPDocenteAutocomplete();

		$autocomplete->setFunctionCallback( $fCallback );
		$autocomplete->setInputSize( $inputSize );
		$autocomplete->setInputName( $inputName );
		$autocomplete->setInputId(  $inputId );
			
		return $autocomplete;
	}
	
}
?>