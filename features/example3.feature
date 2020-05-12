@ui
Feature: Basic Link test
  In order to click on homepage
  As a visitor
  I should see example page
  
  Scenario: Testing home page link
    Given I am on "/"
    And I follow "commentaire"
    Then I should be on "/form.php"