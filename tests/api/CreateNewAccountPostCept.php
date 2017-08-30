<?php 

$data = [
	'name' => '',

];

$I = new ApiTester($scenario);
$I->wantTo('create new account via API');
$I->sendPost('/api/account', $data);
$I->dontSeeResponseCodeIs(200);
$I->seeResponseIsJson();
$I->dontSeeResponseCodeIs(\Codeception\Util\Httpcode::OK);
