@ui
Feature: AS a Account Manager (Bepark), i would like to have a list of all the parkings avalaible

  Scenario: A visitor can see title on the parking page
    Given I am on "/parking/list"
    Then I should see "parking name"
    And I should see "parking address"

  Scenario: As a visitor, I should see parking address with 50 maximum characters
    Given I am on "/parking/list"
    Then I should see "Rue Lieutenant Freddy Wampach 152 1200 Woluwe-Saint-Lambert" in the "address" element
    And I should see "Rue Lieutenant Freddy Wampach 152 1200 Woluwe-Saint-Lambert" in the title attribute

  Scenario: As a visitor, I should see the number of gates linked to a parking
    Given I am on "/parking/list"
    Then I should see "3" in the "gates" element

  Scenario: As a visitor, I should have a button to see details
    Given I am on "/parking/list"
    And I follow "btn_parking_detail_(.*)"
    Then I should be on "/parking/$1"