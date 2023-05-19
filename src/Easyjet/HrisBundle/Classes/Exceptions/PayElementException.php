<?php

namespace App\Easyjet\HrisBundle\Classes\Exceptions;

class PayElementException extends \Exception
{

	private $payElementValue = null;

	// Redéfinissez l'exception ainsi le message n'est pas facultatif
	public function __construct($message, $payElementValue = "*Not defined*", $code = 0, \Exception $previous = null) {

		$this->payElementValue = $payElementValue;
		// assurez-vous que tout a été assigné proprement
		parent::__construct($message, $code, $previous);
	}

	// chaîne personnalisée représentant l'objet
	public function __toString() {
		return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
	}

	public function getPayElementValue() {
		return $this->payElementValue;
	}
}