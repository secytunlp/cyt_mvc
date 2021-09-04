<?php 

/**
 * Acción para registrarse en el sistema.
 * 
 * @author Marcos
 * @since 05-11-2011
 * 
 */
class CYTSignupAction extends CdtSignupAction{

	/**
	 * se registra el usuario en el sistema.
	 * @return forward.
	 */
	public function execute(){
			
		$oUser = $this->getEntity();
		
		try{
			
			CdtDbManager::begin_tran();
			
			$oManager = new CYTUserManager();
			$oManager->signup( $oUser );
			
			$forward = 'signup_success';
			
			CdtDbManager::save();
			
		}catch(GenericException $ex){
			CdtDbManager::undo();
			$forward = $this->doForwardException( $ex, 'signup_error' );					
		}

		
		
		return $forward;
	}
	
	protected function getEntity(){
		
		$oUser = new CdtUser ( );
		
		$oUser->setDs_username( CdtUtils::getParamPOST('nu_precuil').'-'.CdtUtils::getParamPOST('nu_documento').'-'.CdtUtils::getParamPOST('nu_postcuil') ) ;
		
		$oUser->setDs_email (  CdtUtils::getParamPOST('ds_email') ) ;
		
		$oUser->setDs_password (  CdtUtils::getParamPOST('ds_password') ) ;
		
		return $oUser;
	}	
	
}