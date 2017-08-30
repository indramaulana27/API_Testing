<?php 
$data = [
	'email' => 'indra@upwardstech.com',
	//'redirect_url' => 'http://manage.advocacy.s360.is/#!/redirect_url'
];

$I = new ApiTester($scenario);
$I->wantTo('forgot password via API');
$I->sendPost('/api/user/reset',$data);
$I->dontSeeResponseCodeIs(200);
$I->dontSeeResponseCodeIs(204);
$I->seeResponseIsJson();
$I->dontSeeResponseCodeIs(\Codeception\Util\Httpcode::OK);
