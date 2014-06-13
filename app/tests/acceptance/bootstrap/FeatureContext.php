<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;

//
// Require 3rd-party libraries here:
//
//   require_once 'PHPUnit/Autoload.php';
//   require_once 'PHPUnit/Framework/Assert/Functions.php';
//

/**
 * Features context.
 */
class FeatureContext extends MinkContext
{
    /**
     * Initializes context.
     * Every scenario gets its own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        // Initialize your context here
    }

	/**
	 * @static
	 * @beforeSuite
	 */
	public static function bootstrapLaravel()
	{
		$unitTesting = true;
		$testEnvironment = 'testing';

		$app = require_once __DIR__.'/../../../../bootstrap/start.php';

		Artisan::call('migrate:refresh');
//		See route which performs Guestbook::truncate();
	}

    /**
     * @Given /^I fill out the guest book form$/
     */
    public function iFillOutTheGuestBookForm()
    {
        $this->fillField('name', 'John Doe');
		$this->pressButton('Submit');
    }

    /**
     * @Given /^there are no guests$/
     */
    public function thereAreNoGuests()
    {
//        Guestbook::truncate();
    }
}
