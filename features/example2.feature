@ui
Feature: Verify routing errors
  In order to get a 404 error
  As a visitor
  If I request an unexisting page

  Scenario: Testing unexisting page
    Given I am on "/toto-123456"
    Then I should see "Not Found"