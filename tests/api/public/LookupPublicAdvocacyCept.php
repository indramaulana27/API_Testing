<?php 

$data = [
'street' => '1600 pennsylvania ave', 
'city' => 'washington', 
'zipcode' => '20500', 
'advocacy_campaign_id' => '001'
];

$I = new ApiTester($scenario);
 		$I->wantTo('lookup advocacy via API');
        //$I->amHttpAuthenticated('service_user', '123456');
        $I->haveHttpHeader('Content-Type', 'application/x-www-form-urlencoded');
        $I->sendPOST('/api/lookup', $data);
        $I->seeResponseCodeIs(200);
        $I->seeResponseIsJson();
        $data2 = $I->grabDataFromJsonResponse('message');
        $I->sendGet(['/api/lookup' => [$data]]);
        //$I->seeResponseJsonMatchesXpath('//data/result_openstates');
