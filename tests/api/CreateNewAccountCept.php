<?php 


$I = new ApiTester($scenario);
$I->wantTo('create new account via API');
$I->sendGet('/api/account');
$I->dontSeeResponseCodeIs(200);
$I->seeResponseIsJson();
$I->dontSeeResponseCodeIs(\Codeception\Util\Httpcode::OK);

