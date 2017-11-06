<?php
class EclpOrderAddOrderRequest
{
	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.order.addOrder";
	}
	
	public function getApiParas(){
		return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
	public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
                                                        		                                    	                   			private $isvUUID;
    	                        
	public function setIsvUUID($isvUUID){
		$this->isvUUID = $isvUUID;
         $this->apiParas["isvUUID"] = $isvUUID;
	}

	public function getIsvUUID(){
	  return $this->isvUUID;
	}

                        	                   			private $isvSource;
    	                        
	public function setIsvSource($isvSource){
		$this->isvSource = $isvSource;
         $this->apiParas["isvSource"] = $isvSource;
	}

	public function getIsvSource(){
	  return $this->isvSource;
	}

                        	                   			private $shopNo;
    	                        
	public function setShopNo($shopNo){
		$this->shopNo = $shopNo;
         $this->apiParas["shopNo"] = $shopNo;
	}

	public function getShopNo(){
	  return $this->shopNo;
	}

                        	                   			private $bdOwnerNo;
    	                        
	public function setBdOwnerNo($bdOwnerNo){
		$this->bdOwnerNo = $bdOwnerNo;
         $this->apiParas["bdOwnerNo"] = $bdOwnerNo;
	}

	public function getBdOwnerNo(){
	  return $this->bdOwnerNo;
	}

                        	                   			private $departmentNo;
    	                        
	public function setDepartmentNo($departmentNo){
		$this->departmentNo = $departmentNo;
         $this->apiParas["departmentNo"] = $departmentNo;
	}

	public function getDepartmentNo(){
	  return $this->departmentNo;
	}

                        	                   			private $warehouseNo;
    	                        
	public function setWarehouseNo($warehouseNo){
		$this->warehouseNo = $warehouseNo;
         $this->apiParas["warehouseNo"] = $warehouseNo;
	}

	public function getWarehouseNo(){
	  return $this->warehouseNo;
	}

                        	                   			private $shipperNo;
    	                        
	public function setShipperNo($shipperNo){
		$this->shipperNo = $shipperNo;
         $this->apiParas["shipperNo"] = $shipperNo;
	}

	public function getShipperNo(){
	  return $this->shipperNo;
	}

                        	                   			private $salesPlatformOrderNo;
    	                        
	public function setSalesPlatformOrderNo($salesPlatformOrderNo){
		$this->salesPlatformOrderNo = $salesPlatformOrderNo;
         $this->apiParas["salesPlatformOrderNo"] = $salesPlatformOrderNo;
	}

	public function getSalesPlatformOrderNo(){
	  return $this->salesPlatformOrderNo;
	}

                        	                   			private $salePlatformSource;
    	                        
	public function setSalePlatformSource($salePlatformSource){
		$this->salePlatformSource = $salePlatformSource;
         $this->apiParas["salePlatformSource"] = $salePlatformSource;
	}

	public function getSalePlatformSource(){
	  return $this->salePlatformSource;
	}

                        	                   			private $salesPlatformCreateTime;
    	                        
	public function setSalesPlatformCreateTime($salesPlatformCreateTime){
		$this->salesPlatformCreateTime = $salesPlatformCreateTime;
         $this->apiParas["salesPlatformCreateTime"] = $salesPlatformCreateTime;
	}

	public function getSalesPlatformCreateTime(){
	  return $this->salesPlatformCreateTime;
	}

                        	                   			private $consigneeName;
    	                        
	public function setConsigneeName($consigneeName){
		$this->consigneeName = $consigneeName;
         $this->apiParas["consigneeName"] = $consigneeName;
	}

	public function getConsigneeName(){
	  return $this->consigneeName;
	}

                        	                   			private $consigneeMobile;
    	                        
	public function setConsigneeMobile($consigneeMobile){
		$this->consigneeMobile = $consigneeMobile;
         $this->apiParas["consigneeMobile"] = $consigneeMobile;
	}

	public function getConsigneeMobile(){
	  return $this->consigneeMobile;
	}

                        	                   			private $consigneePhone;
    	                        
	public function setConsigneePhone($consigneePhone){
		$this->consigneePhone = $consigneePhone;
         $this->apiParas["consigneePhone"] = $consigneePhone;
	}

	public function getConsigneePhone(){
	  return $this->consigneePhone;
	}

                        	                   			private $consigneeEmail;
    	                        
	public function setConsigneeEmail($consigneeEmail){
		$this->consigneeEmail = $consigneeEmail;
         $this->apiParas["consigneeEmail"] = $consigneeEmail;
	}

	public function getConsigneeEmail(){
	  return $this->consigneeEmail;
	}

                        	                   			private $expectDate;
    	                        
	public function setExpectDate($expectDate){
		$this->expectDate = $expectDate;
         $this->apiParas["expectDate"] = $expectDate;
	}

	public function getExpectDate(){
	  return $this->expectDate;
	}

                        	                   			private $addressProvince;
    	                        
	public function setAddressProvince($addressProvince){
		$this->addressProvince = $addressProvince;
         $this->apiParas["addressProvince"] = $addressProvince;
	}

	public function getAddressProvince(){
	  return $this->addressProvince;
	}

                        	                   			private $addressCity;
    	                        
	public function setAddressCity($addressCity){
		$this->addressCity = $addressCity;
         $this->apiParas["addressCity"] = $addressCity;
	}

	public function getAddressCity(){
	  return $this->addressCity;
	}

                        	                   			private $addressCounty;
    	                        
	public function setAddressCounty($addressCounty){
		$this->addressCounty = $addressCounty;
         $this->apiParas["addressCounty"] = $addressCounty;
	}

	public function getAddressCounty(){
	  return $this->addressCounty;
	}

                        	                   			private $addressTown;
    	                        
	public function setAddressTown($addressTown){
		$this->addressTown = $addressTown;
         $this->apiParas["addressTown"] = $addressTown;
	}

	public function getAddressTown(){
	  return $this->addressTown;
	}

                        	                   			private $consigneeAddress;
    	                        
	public function setConsigneeAddress($consigneeAddress){
		$this->consigneeAddress = $consigneeAddress;
         $this->apiParas["consigneeAddress"] = $consigneeAddress;
	}

	public function getConsigneeAddress(){
	  return $this->consigneeAddress;
	}

                        	                   			private $consigneePostcode;
    	                        
	public function setConsigneePostcode($consigneePostcode){
		$this->consigneePostcode = $consigneePostcode;
         $this->apiParas["consigneePostcode"] = $consigneePostcode;
	}

	public function getConsigneePostcode(){
	  return $this->consigneePostcode;
	}

                        	                   			private $receivable;
    	                        
	public function setReceivable($receivable){
		$this->receivable = $receivable;
         $this->apiParas["receivable"] = $receivable;
	}

	public function getReceivable(){
	  return $this->receivable;
	}

                        	                   			private $consigneeRemark;
    	                        
	public function setConsigneeRemark($consigneeRemark){
		$this->consigneeRemark = $consigneeRemark;
         $this->apiParas["consigneeRemark"] = $consigneeRemark;
	}

	public function getConsigneeRemark(){
	  return $this->consigneeRemark;
	}

                        	                   			private $orderMark;
    	                        
	public function setOrderMark($orderMark){
		$this->orderMark = $orderMark;
         $this->apiParas["orderMark"] = $orderMark;
	}

	public function getOrderMark(){
	  return $this->orderMark;
	}

                        	                   			private $thirdWayBill;
    	                        
	public function setThirdWayBill($thirdWayBill){
		$this->thirdWayBill = $thirdWayBill;
         $this->apiParas["thirdWayBill"] = $thirdWayBill;
	}

	public function getThirdWayBill(){
	  return $this->thirdWayBill;
	}

                        	                   			private $packageMark;
    	                        
	public function setPackageMark($packageMark){
		$this->packageMark = $packageMark;
         $this->apiParas["packageMark"] = $packageMark;
	}

	public function getPackageMark(){
	  return $this->packageMark;
	}

                        	                   			private $businessType;
    	                        
	public function setBusinessType($businessType){
		$this->businessType = $businessType;
         $this->apiParas["businessType"] = $businessType;
	}

	public function getBusinessType(){
	  return $this->businessType;
	}

                        	                   			private $destinationCode;
    	                        
	public function setDestinationCode($destinationCode){
		$this->destinationCode = $destinationCode;
         $this->apiParas["destinationCode"] = $destinationCode;
	}

	public function getDestinationCode(){
	  return $this->destinationCode;
	}

                        	                   			private $destinationName;
    	                        
	public function setDestinationName($destinationName){
		$this->destinationName = $destinationName;
         $this->apiParas["destinationName"] = $destinationName;
	}

	public function getDestinationName(){
	  return $this->destinationName;
	}

                        	                   			private $sendWebsiteCode;
    	                        
	public function setSendWebsiteCode($sendWebsiteCode){
		$this->sendWebsiteCode = $sendWebsiteCode;
         $this->apiParas["sendWebsiteCode"] = $sendWebsiteCode;
	}

	public function getSendWebsiteCode(){
	  return $this->sendWebsiteCode;
	}

                        	                   			private $sendWebsiteName;
    	                        
	public function setSendWebsiteName($sendWebsiteName){
		$this->sendWebsiteName = $sendWebsiteName;
         $this->apiParas["sendWebsiteName"] = $sendWebsiteName;
	}

	public function getSendWebsiteName(){
	  return $this->sendWebsiteName;
	}

                        	                   			private $sendMode;
    	                        
	public function setSendMode($sendMode){
		$this->sendMode = $sendMode;
         $this->apiParas["sendMode"] = $sendMode;
	}

	public function getSendMode(){
	  return $this->sendMode;
	}

                        	                   			private $receiveMode;
    	                        
	public function setReceiveMode($receiveMode){
		$this->receiveMode = $receiveMode;
         $this->apiParas["receiveMode"] = $receiveMode;
	}

	public function getReceiveMode(){
	  return $this->receiveMode;
	}

                        	                   			private $appointDeliveryTime;
    	                        
	public function setAppointDeliveryTime($appointDeliveryTime){
		$this->appointDeliveryTime = $appointDeliveryTime;
         $this->apiParas["appointDeliveryTime"] = $appointDeliveryTime;
	}

	public function getAppointDeliveryTime(){
	  return $this->appointDeliveryTime;
	}

                        	                   			private $insuredPriceFlag;
    	                        
	public function setInsuredPriceFlag($insuredPriceFlag){
		$this->insuredPriceFlag = $insuredPriceFlag;
         $this->apiParas["insuredPriceFlag"] = $insuredPriceFlag;
	}

	public function getInsuredPriceFlag(){
	  return $this->insuredPriceFlag;
	}

                        	                        	                        	                   			private $thirdPayment;
    	                        
	public function setThirdPayment($thirdPayment){
		$this->thirdPayment = $thirdPayment;
         $this->apiParas["thirdPayment"] = $thirdPayment;
	}

	public function getThirdPayment(){
	  return $this->thirdPayment;
	}

                        	                   			private $monthlyAccount;
    	                        
	public function setMonthlyAccount($monthlyAccount){
		$this->monthlyAccount = $monthlyAccount;
         $this->apiParas["monthlyAccount"] = $monthlyAccount;
	}

	public function getMonthlyAccount(){
	  return $this->monthlyAccount;
	}

                        	                   			private $shipment;
    	                        
	public function setShipment($shipment){
		$this->shipment = $shipment;
         $this->apiParas["shipment"] = $shipment;
	}

	public function getShipment(){
	  return $this->shipment;
	}

                        	                   			private $sellerRemark;
    	                        
	public function setSellerRemark($sellerRemark){
		$this->sellerRemark = $sellerRemark;
         $this->apiParas["sellerRemark"] = $sellerRemark;
	}

	public function getSellerRemark(){
	  return $this->sellerRemark;
	}

                        	                   			private $thirdSite;
    	                        
	public function setThirdSite($thirdSite){
		$this->thirdSite = $thirdSite;
         $this->apiParas["thirdSite"] = $thirdSite;
	}

	public function getThirdSite(){
	  return $this->thirdSite;
	}

                                                                             	                        	                                                                                                                                                                                                                                                                                                               private $goodsNo;
                              public function setGoodsNo($goodsNo ){
                 $this->goodsNo=$goodsNo;
                 $this->apiParas["goodsNo"] = $goodsNo;
              }

              public function getGoodsNo(){
              	return $this->goodsNo;
              }
                                                                                                                                                                                                                                                                                                                                              private $price;
                              public function setPrice($price ){
                 $this->price=$price;
                 $this->apiParas["price"] = $price;
              }

              public function getPrice(){
              	return $this->price;
              }
                                                                                                                                                                                                                                                                                                                                              private $quantity;
                              public function setQuantity($quantity ){
                 $this->quantity=$quantity;
                 $this->apiParas["quantity"] = $quantity;
              }

              public function getQuantity(){
              	return $this->quantity;
              }
                                                                                                                                        	}





        
 
