<?php
//require_once(realpath(dirname(__FILE__)) . '/GestoreAccessi.php');

//use GestoreAccessi;

/**
 * @access public
 * @author mariol96
 */
class Utente {
	/**
	 * @AttributeType string
	 */
	private $username;
	/**
	 * @AttributeType string
	 */
	private $email;
	/**
	 * @AttributeType string
	 */
	private $password;
	/**
	 * @AttributeType int
	 */
	private $livelloAutorizzativo;
	/**
	 * @AttributeType string
	 */
	private $preferenze;
	/**
	 * @AttributeType string
	 */
	private $impostazioniHub;
	/**
	 * @AssociationType GestoreAccessi
	 * @AssociationMultiplicity 1
	 */
	//public $unnamed_GestoreAccessi_;

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getUsername() {
		return $this->username;
	}

	/**
	 * @access public
	 * @param string aUsername
	 * @return void
	 * @ParamType aUsername string
	 * @ReturnType void
	 */
	public function setUsername($aUsername) {
		$this->username = $aUsername;
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * @access public
	 * @param string aEmail
	 * @return void
	 * @ParamType aEmail string
	 * @ReturnType void
	 */
	public function setEmail($aEmail) {
		$this->email = $aEmail;
	}

	/**
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getPassword() {
		return $this->password;
	}

	/**
	 * @access public
	 * @param string aPassword
	 * @return void
	 * @ParamType aPassword string
	 * @ReturnType void
	 */
	public function setPassword($aPassword) {
		$this->password = $aPassword;
	}
}

$utente = new Utente();
$utente -> setPassword('hjbgfdgbfdkj');
?>