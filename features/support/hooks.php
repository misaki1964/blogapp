<?php
// features/support/hooks.php
App::uses('CakeTestCase', 'TestSuite');				// 追加
class BddAllFixture extends CakeTestCase {			// (1) 追加
	public $fixtures = [							// 追加
		'app.post'									// 追加
	];												// 追加
}													// 追加

$hooks->beforeSuite(function($event) {
    // Do something before whole test suite
});
$hooks->afterSuite(function($event) {
    // Do something after whole test suite
});

$hooks->beforeFeature('', function($event) {
    // do something before each feature
});
$hooks->afterFeature('', function($event) {
    // do something after each feature
});

$hooks->beforeScenario('', function($event) {		// (2) 追加
    // do something before each scenario			// 追加
	$manager = new CakeFixtureManager();			// 追加
	$fixture = new BddAllFixture();					// 追加
	$manager->fixturize($fixture);					// 追加
	$manager->load($fixture);						// 追加
});
$hooks->afterScenario('', function($event) {
    // do something after each scenario
});

