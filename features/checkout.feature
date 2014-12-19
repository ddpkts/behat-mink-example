Feature: Checkout
  In order to buy Transport container barrel
  As a user
  I need to login, add product to basket and go through checkout process

  Scenario: Buy Transport container barrel
    Given I am on the homepage

    Then I follow "Log in"
    When I fill in the following:
      | E-mail address | admin |
      | Password | admin |
    And I press "Log in"
    Then I should see "Hello, John Doe"

    And I should see "Transport container BARREL"
    When I follow "Transport container BARREL"
    Then I should see "Waterproof container for wetsuits, cool beverages or gear"

    When I press "To cart"
    Then I should see "New item was added to cart" in the "#newItemMsg" element
    Then I wait for 4 seconds
    And I should see "1" in the "#countValue" element

    When I click on "#minibasketIcon" element
    Then I should see "Checkout"

    When I follow "Checkout"
    Then I should see "Pay" in the "#breadCrumb" element

    When I press "Continue to the next step"
    Then I should see "Order completed" in the "#breadCrumb" element

    When I press "Order now"
    Then I should see "Thank you"