<?php 

//$uuid_account_id = $I->grabDataFromResponseJsonPath('data.uuid');

$data = [
	'account_id' => '45asd886dfesf',//uuid
	'person[account_id]' => '45asd886dfesf',//uuid
	'person[source_id]' => '001',
	'person[source_type]' => 'AdvocacyCampaign',
	'person[first_name]' => 'test',
	'person[last_name]' => 'test',
	'person[prefix]' => 'Mr.',
	'person[email]' => 'test@test.com',
	'person[phone]' => '123456789',
	'person[address_street]' => 'street',
	'person[address_street2]' => 'street',
	'person[address_city]' => 'washington',
	'person[address_state]' => 'DC',
	'person[address_zip]' => '20500',
	'person[stateleg_district]' => '',
	'person[congressional_district]' => '',
	'outreach_data[openstates][id][]' => 'ca2ea7f3-d1cf-4822-a916-4bba2e0fe4ad',//uuid
	'outreach_data[openstates][fields][$NAME_PREFIX]' => 'Mr.',
	'outreach_data[openstates][fields][$NAME_FIRST]' => 'test',
	'outreach_data[openstates][fields][$NAME_LAST]' => 'test',
	'outreach_data[openstates][fields][$ADDRESS_STREET]' => 'test',
	'outreach_data[openstates][fields][$ADDRESS_CITY]' => 'test',
	'outreach_data[openstates][fields][$ADDRESS_ZIP5]' => '20050',
	'outreach_data[openstates][fields][$PHONE]' => '44687744',
	'outreach_data[openstates][fields][$EMAIL]' => 'a@a.com',
	'outreach_data[openstates][fields][$SUBJECT]' => 'test',
	'outreach_data[openstates][fields][$MESSAGE]' => 'test',
	'outreach_data[openstates][fields][$ADDRESS_STATE_POSTAL_ABBREV]' => 'DC',
	'advocacy_campaign_id' => '001',
	'lookup_id' => '02fe8969-a714-4d05-a00a-efc4d9e672f0'//uuid
];


$I = new ApiTester($scenario);
$I->wantTo('perform actions and see result');
$I->haveHttpHeader('Content-Type', 'application/x-www-form-urlencoded');
$I->sendPOST('/api/outreaches', $data);
$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();
//$I->seeResponseJsonMatchesXpath('//data/result_openstates');