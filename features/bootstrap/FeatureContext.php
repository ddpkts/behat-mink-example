<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\MinkExtension\Context\MinkContext;
use Behat\Behat\Hook\Scope\BeforeScenarioScope;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements Context, SnippetAcceptingContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * Maximize browser window
     *
     * @param BeforeScenarioScope $scope
     *
     * @BeforeScenario
     */
    public function beforeScenario(BeforeScenarioScope $scope)
    {
        $this->getSession()->getDriver()->maximizeWindow('current');
    }

    /**
     * Wait for seconds
     *
     * @Then /^(?:|I )wait for (?P<seconds>\d+) seconds$/
     *
     * @param $seconds
     */
    public function iWaitForSeconds($seconds)
    {
        sleep($seconds);
    }

    /**
     * Click on any element
     *
     * @When /^(?:|I )click on "(?P<element>[^"]*)" element$/
     */
    public function iClickOnElement($element)
    {
        $this->getSession()
            ->getPage()
            ->find("css", $element)
            ->click();
    }

    /**
     * Take screen shot when step fails.
     *
     * @param $event
     *
     * @afterStep
     */
    public function takeScreenshotAfterFailedStep($event)
    {
        if (0 != $event->getTestResult()->getResultCode()) {
            $this->saveScreenshot(null, __DIR__ . '/../_output');
        }
    }
}
