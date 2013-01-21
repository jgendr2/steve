 <?php

set_include_path('./ZendFramework/library');
require_once 'Zend/Http/Client.php';

  // Submit XML
  $url = "http://ballpark.allied.com/RAE/RequestAnEstimate.asmx/SendEstimateRequestXmlString";
  $name = explode(' ', $_POST['name']);
  $first_name = $name[0];
  $last_name = str_replace($first_name . ' ', '', $_POST['name']);
  $phone = preg_replace('/[^\d]/', '', $_POST['phone']);
  // Defaults
  $_POST['phone_type'] = 'H';
  $_POST['time_to_call'] = 'E';
  $_POST['work_phone'] = '';
  $_POST['work_phone_ext'] = '';
  $_POST['cell_phone'] = '';
  $_POST['fax'] = '';
  $_POST['address_2'] = '';
  $_POST['amount_of_furnishing'] = 'M';
  $_POST['pickup_shuttle'] = 'N';
  $_POST['delivery_shuttle'] = 'N';
  $_POST['has_vehicles'] = 'N';
  $_POST['requested_estimate_date'] = '3D';
  $_POST['estimate_time_of_day'] = 'E';

  if (!empty($_POST['optin'])) {
    $optin = "Y";
  }else{
    $optin = "N";
  }

  if (!empty($_POST['promo_code'])) {
    $promo_code = $_POST['promo_code'];
  }else{
    $promo_code = "";
  }

  $xml_string = <<<XML
<EstimateRequest>
 <ReferralCode>{$_POST['referral_code']}</ReferralCode>
  <PrimaryContact>
    <Email>{$_POST['email']}</Email>
    <FirstName>{$first_name}</FirstName>
    <LastName>{$last_name}</LastName>
    <PrimaryPhoneType>{$_POST['phone_type']}</PrimaryPhoneType>
    <PreferredContactTime>{$_POST['time_to_call']}</PreferredContactTime>
    <HomePhone>{$phone}</HomePhone>
    <WorkPhone>{$_POST['work_phone']}</WorkPhone>
    <WorkPhoneExt>{$_POST['work_phone_ext']}</WorkPhoneExt>
    <CellPhone>{$_POST['cell_phone']}</CellPhone>
    <FaxPhone>{$_POST['fax']}</FaxPhone>
  </PrimaryContact>
  <PickupAddress>
    <Address1>{$_POST['pickup_address']}</Address1>
    <Address2>{$_POST['address_2']}</Address2>
    <City>{$_POST['pickup_city']}</City>
    <State>{$_POST['pickup_state']}</State>
    <Zip>{$_POST['pickup_zip']}</Zip>
  </PickupAddress>
  <MoveDetails>
    <PickupZip>{$_POST['pickup_zip']}</PickupZip>
    <DeliveryZip>{$_POST['delivery_zip']}</DeliveryZip>
    <MoveDate>{$_POST['move_date']}</MoveDate>
    <DwellingType>{$_POST['dwelling_type']}</DwellingType>
    <AmountOfFurnishings>{$_POST['amount_of_furnishing']}</AmountOfFurnishings>
    <PickupShuttle>{$_POST['pickup_shuttle']}</PickupShuttle>
    <DeliveryShuttle>{$_POST['delivery_shuttle']}</DeliveryShuttle>
  </MoveDetails>
  <EstimateDetails>
    <HasVehicles>{$_POST['has_vehicles']}</HasVehicles>
    <RequestedEstimateDate>{$_POST['requested_estimate_date']}</RequestedEstimateDate>
    <RequestedEstimateTimeOfDay>{$_POST['estimate_time_of_day']}</RequestedEstimateTimeOfDay>
    <SpecialtyItems></SpecialtyItems>
    <Comments></Comments>
  </EstimateDetails>
  <VendorId></VendorId>
  <OptInForSpecialOffers>{$optin}</OptInForSpecialOffers>
  <PromotionCode>{$promo_code}</PromotionCode>
</EstimateRequest>
XML;


  $client = new Zend_Http_Client($url);
  $client->setParameterPost('xmlRequest', $xml_string);
  $response = $client->request("POST");
  $xml = new SimpleXMLElement($response->getBody());
  //var_dump($xml->ErrorList->Error);
?>