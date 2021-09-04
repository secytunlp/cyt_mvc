<?php 

/**
 * Acción para loguearse en el sistema.
 * 
 * @author Marcos
 * @since 16-10-2013
 * 
 */
class CYTLoginAction extends CdtAction{

	/**
	 * (non-PHPdoc)
	 * @see CdtAction::execute();
	 */
	public function execute(){
		
		$nu_precuil =  CdtUtils::getParamPOST('nu_precuil') ;
		$nu_documento =  CdtUtils::getParamPOST('nu_documento') ;
		$nu_postcuil =  CdtUtils::getParamPOST('nu_postcuil') ;
		
		$username = $nu_precuil.'-'.$nu_documento.'-'.$nu_postcuil;
		
		CdtUtils::log($username, __CLASS__,LoggerLevel::getLevelDebug());
		
		$password = CdtUtils::getParamPOST('password') ; 
		
		$ip = $_SERVER[ 'REMOTE_ADDR'] ; 
		
		
		try{

			$manager = new CdtUserManager();
			$oUser = $manager->getUserByUsernamePassword($username,$password, $ip);
			
			//lo dejamos en sesión.
			CdtSecureUtils::login( $oUser );
			
			//tomamos del get o del post.
			$backTo = CdtUtils::getParam('backTo', CdtUtils::getParamPOST('backTo','') );
		
			if(!empty($backTo)){
				$forward = null;
				CdtDbManager::close();
				header("Location:". $backTo);
				exit();
			}

			$forward = 'login_success';
			
		}catch(GenericException $ex){
			
			CdtDbManager::undo();
			$forward = $this->doForwardException( $ex, 'login_error');
		}
		
		if (CdtSecureUtils::isUserLogged()) {

        	CdtUtils::cleanRequestError();
        	
            //obtenemos el usuario logueado.
            $oUser = CdtSecureUtils::getUserLogged();

            //chequeamos si el usuario es un matriculado.
            /*$oManager = new MatriculadoManager();
            $oCriteria = new CdtSearchCriteria();
			$oCriteria->addFilter('cd_user', $oUser->getCd_user (), '=');
			$oMatriculado = $oManager->getEntity($oCriteria);
            if (!empty($oMatriculado)) {
            	CYTUtils::login($oMatriculado);
                //$forward = 'login_member_success';
            }*/
            
            
        }
		return $forward;
	}
	
	
}