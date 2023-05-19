<?php

namespace App\Easyjet\HrisBundle\Classes\Exceptions;

class DemographicDataException extends \Exception
{

	private $demographicDataValue = null;

	// Redéfinissez l'exception ainsi le message n'est pas facultatif
	public function __construct($message, $demographicDataValue = "*Not defined*", $code = 0, \Exception $previous = null) {

		$this->demographicDataValue = $demographicDataValue;
		// assurez-vous que tout a été assigné proprement
		parent::__construct($message, $code, $previous);
	}

	// chaîne personnalisée représentant l'objet
	public function __toString() {
		return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
	}

	public function getDemographicDataValue() {
		return $this->demographicDataValue;
	}
}