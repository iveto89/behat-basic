@api
Feature: test my user api
  As api client
  I could consume user api
  
  Scenario:
    When I request "/api.php"
    Then the response code is 200
    And the response body is a JSON array with a length of at least 1
    
  Scenario:
    When I request "/api.php?action=get&id=0"
    Then the response code is 200
    And the response body contains JSON:
    """
    {
      "name": "mario"
    }
    """
    
  Scenario:
    When I request "/api.php?action=get&id=5"
    Then the response code is 404
    
  Scenario:
    When I request "/api.php?action=unknow&id=5"
    Then the response code is 400
    
  Scenario:
    When I request "/api.php?action=search&key=luigi"
    Then the response code is 200
    And the response body matches:
    """
    /\"name\"\:\"luigi\"/
    """
    
  Scenario:
    When I request "/api.php?action=search&key=toto"
    Then the response code is 200
    And the response body is an empty JSON array