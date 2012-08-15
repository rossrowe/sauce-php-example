<?php

require_once 'PHPUnit/Extensions/SeleniumTestCase/SauceOnDemandTestCase.php';
require_once 'PHPUnit/Extensions/SeleniumTestCase/SauceOnDemandTestCase/Driver.php';

class ExampleTest extends PHPUnit_Extensions_SeleniumTestCase_SauceOnDemandTestCase {

    function setUp() {
        $this->setUsername(getenv('SAUCE_USER_NAME'));
        $this->setAccessKey(getenv('SAUCE_API_KEY'));
        $this->setOs('Windows 2003');
        $this->setBrowser('firefox');
        $this->setBrowserVersion('3.6.');
        $this->setBrowserUrl('http://example.saucelabs.com');
    }

    function test_example() {
        $this->open('/');
        $this->assertTitle('Cross browser testing with Selenium - Sauce Labs');
    }
}