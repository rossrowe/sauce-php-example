<?php

require_once 'PHPUnit/Extensions/SeleniumTestCase/SauceOnDemandTestCase.php';
require_once 'PHPUnit/Extensions/SeleniumTestCase/SauceOnDemandTestCase/Driver.php';

class ExampleTest extends PHPUnit_Extensions_SeleniumTestCase_SauceOnDemandTestCase {

    function setUp() {
        $this->setUsername(getenv('SAUCE_USER_NAME'));
        $this->setAccessKey(getenv('SAUCE_API_KEY'));
        $this->setOs(getenv('SELENIUM_PLATFORM'));
        $this->setBrowser(getenv('SELENIUM_BROWSER'));
        $this->setBrowserVersion(getenv('SELENIUM_VERSION'));
        $this->setBrowserUrl('http://example.saucelabs.com');
    }

    function test_example() {
        $this->open('/');
        $this->assertTitle('Cross browser testing with Selenium - Sauce Labs');
    }
}