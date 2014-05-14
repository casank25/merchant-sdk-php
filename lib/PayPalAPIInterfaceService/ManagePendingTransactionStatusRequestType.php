<?php 
/**
 * 
 */
class ManagePendingTransactionStatusRequestType  extends AbstractRequestType  
  {

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $TransactionID;

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $Action;

	/**
	 * Constructor with arguments
	 */
	public function __construct($TransactionID = NULL, $Action = NULL) {
		$this->TransactionID = $TransactionID;
		$this->Action = $Action;
	}


  
 
}
