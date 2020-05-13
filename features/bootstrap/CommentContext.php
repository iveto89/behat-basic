<?php

use Behat\Behat\Context\Context;
use Behat\MinkExtension\Context\MinkContext;
use Behat\Behat\Hook\Scope\AfterScenarioScope;
use Behat\Testwork\Hook\Scope\BeforeSuiteScope;

/**
 * Defines application features from the specific context.
 */
class CommentContext extends MinkContext implements Context {
    
    
    protected $comment;
    
    protected function getComment() {
        return $this->comment;
    }
    
    /**
    * @Given /^wait for the page to load$/
    */
    public function waitForThePageToLoad()
    {
        $this->getSession()->wait('5000');
    }
    
    protected function setComment($comment) {
        $this->comment = $comment;
        return $this;
    }  
    
    /**
     * @When I fill a random comment with :base
     */
    public function iFillRandomComment($base) {
        $comment = $base . ' ' . rand(1, 100) . ' ' . date('Y-m-d H:i:s');
        
        $field = $this->fixStepArgument('comment');
        $value = $this->fixStepArgument($comment);
        $this->getSession()->getPage()->fillField($field, $value);
        $this->setComment($comment);
    }
    
    /**
     * @Then I see my random comment
     */
    public function iSeeMyRandomComment() {
        echo "comment : " . $this->getComment() . "\n";
        $this->assertSession()->responseContains($this->fixStepArgument($this->getComment()));
    }

	/**
	 * @Then I should see :address in the title attribute
	 */
    public function iSeeTitleInElement($address)
    {
    	$element = $this->getSession()->getPage()->find('css', 'address');

    	if ($element !== null)
	    {
		    $this->assertSession()->elementAttributeContains($element, $address);
	    }
    	else
	    {
	    	throw new \Exception('No address element found.');
	    }
    }
}