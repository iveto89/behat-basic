@ui
Feature: test comment put
  As a user
  I could see my comment
    
    
  Scenario: Testing home page link
    Given I am on "/form.php"
    When I fill a random comment with "commentaire random"
    And I fill in "author" with "John Doe"
    And I fill in "email" with "john@doe.com"
    And I press "Laisser un commentaire"
    Then I see my random comment