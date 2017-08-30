<?php 
$I = new ApiTester($scenario);
$I->wantTo('goes to dashboard via api');
$I->sendGet('/api/account');
$I->dontSeeResponseCodeIs(200);
$I->dontSeeResponseCodeIs(204);
$I->seeResponseIsJson();
$I->dontSeeResponseCodeIs(\Codeception\Util\HttpCode::OK);
