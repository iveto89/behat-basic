@ui
Feature: Basic Homepage test
  In order to see title on homepage
  As a visitor
  I should see title on the home page

  Scenario: A visitor can see title on the home page
    Given I am on "/"
    Then I should see "test site"