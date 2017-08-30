<?php 

$data = [
	'first_name' => 'indra',
	'last_name' => 'maulana',
	'email' => 'indra+1@upwardstech.com',
];


$I = new ApiTester($scenario);
$I->wantTo('create new user via API');
$I->sendPost('/api/user',$data);
$I->dontSeeResponseCodeIs(201);
$I->dontSeeResponseCodeIs(204);
$I->seeResponseIsJson();
$I->dontSeeResponseCodeIs(\Codeception\Util\HttpCode::OK);
$I->seeResponseJsonMatchesXpath('');

