<?php
namespace Decidir\Cybersource;

include_once dirname(__FILE__)."/AbstractData.php";
include_once dirname(__FILE__)."/Product.php";

class Retail extends AbstractData
{
	protected $dataSet = array();
	protected $products_data = null;
	
	public function __construct($retailData, $productsData) {

		$this->setRequiredFields(array(	
			"send_to_cs" => array(
				"name" => "setChannel"
			),
			"channel" => array(
				"name" => "setSendToCs"
			),
			"bill_to" => array(
				"name" => "setBillTo"
			),
			"currency" => array(
				"name" => "setCurrency"
			),
			"amount" => array(
				"name" => "setAmount"
			),
			"days_in_site" => array(
				"name" => "setDaysInSite"
			),
			"is_guest" => array(
				"name" => "setIsGuest"
			),
			"password" => array(
				"name" => "setPassword"
			),
			"num_of_transactions" => array(
				"name" => "setNumOfTransactions"
			),
			"cellphone_number" => array(
				"name" => "setCellPhoneNumber"
			),
			"date_of_birth" => array(
				"name" => "setDateOfBirth"
			),
			"street" => array(
				"name" => "setStreet"
			),
			"ship_to" => array(
				"name" => "setShipTo"
			),
			"days_to_delivery" => array(
				"name" => "setDaysToDelivery"
			),
			"dispatch_method" => array(
				"name" => "setDispatchMethod"
			),
			"tax_voucher_required" => array(
				"name" => "setTaxVoucherRequired"
			),
			"customer_loyality_number" => array(
				"name" => "setCustomerLoyalityNumber"
			),
			"coupon_code" => array(
				"name" => "setCouponCode"
			)						
		));		
		
		parent::__construct($retailData);

		foreach($productsData as $index => $product) {
			$this->products_data[] = new Product($product);
		}

		$this->setProducts($this->products_data);;
	}
	
	public function setSendToCs($index, $value) {
		$this->dataSet[$index] = $value;
	}

	public function setChannel($index, $value) {
		$this->dataSet[$index] = $value;
	}

	public function setBillTo($index, $value) {
		$this->dataSet[$index] = $value;
	}

	public function setCurrency($index, $value) {
		$this->dataSet['purchase_totals'][$index] = $value;
	}

	public function setAmount($index, $value) {
		$this->dataSet['purchase_totals'][$index] = $value;
	}

	public function setDaysInSite($index, $value) {
		$this->dataSet['customer_in_site'][$index] = $value;
	}

	public function setIsGuest($index, $value) {
		$this->dataSet['customer_in_site'][$index] = $value;
	}

	public function setPassword($index, $value) {
		$this->dataSet['customer_in_site'][$index] = $value;
	}

	public function setNumOfTransactions($index, $value) {
		$this->dataSet['customer_in_site'][$index] = $value;
	}

	public function setCellPhoneNumber($index, $value) {
		$this->dataSet['customer_in_site'][$index] = $value;
	}

	public function setDateOfBirth($index, $value) {
		$this->dataSet['customer_in_site'][$index] = $value;
	}

	public function setStreet($index, $value) {
		$this->dataSet['customer_in_site'][$index] = $value;
	}

	public function setShipTo($index, $value) {
		$this->dataSet['retail_transaction_data'][$index] = $value;
	}

	public function setDaysToDelivery($index, $value) {
		$this->dataSet['retail_transaction_data'][$index] = $value;
	}

	public function setDispatchMethod($index, $value) {
		$this->dataSet['retail_transaction_data'][$index] = $value;
	}

	public function setTaxVoucherRequired($index, $value) {
		$this->dataSet['retail_transaction_data'][$index] = $value;
	}

	public function setCustomerLoyalityNumber($index, $value) {
		$this->dataSet['retail_transaction_data'][$index] = $value;
	}

	public function setCouponCode($index, $value) {
		$this->dataSet['retail_transaction_data'][$index] = $value;
	}
	
	public function setProducts($value) {
		$this->dataSet['retail_transaction_data']['items'] = $value;
	}	
	
	public function getData(){
		return $this->dataSet;
	}

}