@ui
Feature: Test article page
  In article page
  As a visitor
  I could put a comment
    
  Scenario: 
    Given I am on "/form.php"
    Then I press "Laisser un commentaire"
    Then I should see "error"
    
  Scenario: Testing home page link
    Given I am on "/form.php"
    Then I should see "Laisser un commentaire"
    Then I fill in "comment" with "commentaire test"
    And I fill in "author" with "John Doe"
    And I fill in "email" with "john@doe.com"
    And I press "Laisser un commentaire"
    And I should see "commentaire test" 