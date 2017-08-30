<?php 
$data = [
	'old_password' => 'mVcQkU3U3v',
	'password' => 'Password1!',
	'password_confirmation' => 'Password1!'
];
$I = new ApiTester($scenario);
$I->wantTo('Change Password via API');
$I->sendPost('/api/user/change_password', $data);
$I->dontSeeResponseCodeIs(200);
$I->dontSeeResponseCodeIs(204);
$I->seeResponseIsJson();
$I->dontSeeResponseCodeIs(\Codeception\Util\HttpCode::OK);
