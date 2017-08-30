<?php 

$data = [
	'email' => 'indra@upwardstech.com',
	'password' => 'mVcQkU3U3v'
];
$I = new ApiTester($scenario);
$I->wantTo('Login via API');
$I->sendPost('/api/token', $data);
$I->dontSeeResponseCodeIs(200);
$I->dontSeeResponseCodeIs(204);
$I->seeResponseIsJson();
$I->dontSeeResponseCodeIs(\Codeception\Util\HttpCode::OK);
