<?php
namespace Decidir\Cybersource;

include_once dirname(__FILE__)."/../Data/AbstractData.php";

class Product extends \Decidir\Data\AbstractData {
	protected $csitproductcode;
	protected $csitproductdescription;
	protected $csitproductname;
	protected $csitproductsku;
	protected $csittotalamount;
	protected $csitquantity;
	protected $csitunitprice;
	
	public function __construct($productData) {
		$this->setRequiredFields(array(	
			"code" => array(
				"name" => "code",
			),
			"description" => array(
				"name" => "description",
			),
			"name" => array(
				"name" => "name",
			),
			"sku" => array(
				"name" => "sku",
			),	
			"total_amount" => array(
				"name" => "total_amount",
			),
			"quantity" => array(
				"name" => "quantity",
			),
			"unit_price" => array(
				"name" => "unit_price",
			),		
		));		
		
		parent::__construct($productData);
		
		$this->csittotalamount = number_format($this->csittotalamount,2,".","");
		$this->csitunitprice = number_format($this->csitunitprice,2,".","");
		$this->csitquantity = number_format($this->csitquantity,0,"","");		
	}
	
	public function getProductcode() {
		return $this->csitproductcode;
	}

	public function setCode($csitproductcode) {
		$this->csitproductcode = $csitproductcode;
	}

	public function getProductdescription() {
		return $this->csitproductdescription;
	}

	public function setDescription($csitproductdescription) {
		$this->csitproductdescription = $csitproductdescription;
	}

	public function getProductname() {
		return $this->csitproductname;
	}

	public function setName($csitproductname) {
		$this->csitproductname = $csitproductname;
	}

	public function getProductsku() {
		return $this->csitproductsku;
	}

	public function setSku($csitproductsku) {
		$this->csitproductsku = $csitproductsku;
	}

	public function getTotalamount() {
		return $this->csittotalamount;
	}

	public function setTotalAmount($csittotalamount) {
		$this->csittotalamount = $csittotalamount;
	}

	public function getQuantity() {
		return $this->csitquantity;
	}

	public function setQuantity($csitquantity) {
		$this->csitquantity = $csitquantity;
	}

	public function getUnitprice() {
		return $this->csitunitprice;
	}

	public function setUnitPrice($csitunitprice) {
		$this->csitunitprice = $csitunitprice;
	}
}