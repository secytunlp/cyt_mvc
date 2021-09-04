<?php 

/** 
 * Manager para CYTRegistration
 *  
 * @author Marcos
 * @since 05-11-2013
 */ 
class CYTRegistrationManager extends CdtRegistrationManager{ 

	
	
	/**
	 * se agrega la nueva entity
	 * @param CdtRegistration $oCdtRegistration entity a agregar.
	 */
	public function addCdtRegistration(CdtRegistration $oCdtRegistration) { 

		//validaciones;
		$this->validateRegistration( $oCdtRegistration );
		
		//generamos un c�digo de activaci�n y asignamos la fecha.
		$ds_activationCode=md5(uniqid(rand()));
		$dt_date = date('Ymd');

		$oCdtRegistration->setDs_activationcode( $ds_activationCode );
		$oCdtRegistration->setDt_date( $dt_date );
		//persistir en la bbdd.
		$this->getCdtRegistrationDAO()->addCdtRegistration($oCdtRegistration);
		
		//env�o del email al futuro usuario con el c�digo de activaci�n.
		$subject = CDT_SECURE_MSG_REGISTRATION_EMAIL_SUBJECT;
		//$nameTo = $oCdtRegistration->getDs_username();
		$to = $oCdtRegistration->getDs_email();
		
		$activationLink = WEB_PATH . CDT_SECURE_ACTIVATE_REGISTRATION_ACTION . '&activationcode=' . $ds_activationCode;
		
		$xtpl = new XTemplate( CDT_SECURE_TEMPLATE_ACTIVATE_REGISTRATION_EMAIL );
		$xtpl->assign ( 'WEB_PATH', WEB_PATH );
		$xtpl->parse('main');
		$msg = $xtpl->text('main');
		
		$separarCUIL = explode('-',trim($oCdtRegistration->getDs_username()));
		
		$oCriteria = new CdtSearchCriteria();
		$oCriteria->addFilter('nu_documento', $separarCUIL[1], '=');
		
		$managerDocente =  CYTSecureManagerFactory::getDocenteManager();
		$oDocente = $managerDocente->getEntity($oCriteria);
		if (empty($oDocente)) {
			throw new GenericException( CYT_SECURE_MSG_ACTIVATION_DIRECTOR_ERROR );			
		}
		else{
			if (in_array($oDocente->getCategoria()->getOid(),  explode(",",CYT_CATEGORIA_DIRECTOR))) {
				$nameTo = $oDocente->getDs_nombre().' '.$oDocente->getDs_Apellido();
							
			}
			else{
				throw new GenericException( CYT_SECURE_MSG_ACTIVATION_DIRECTOR_ERROR_CATEGORIA );
			}
		}
		
		$params[] = $nameTo;
		$params[] = $activationLink;
        $msg = CdtFormatUtils::formatMessage($msg, $params);
		
        
        //CdtUtils::sendMail( $nameTo, $to, $subject, $msg );
        CYTSecureUtils::sendMail( $nameTo, $to, $subject, $msg );
        
		
	}

	
} 
?>
