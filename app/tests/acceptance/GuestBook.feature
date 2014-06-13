Feature:  GuestBook
  In order to track all of my visitors
  As an  administrator
  I want to give users the ability to sign guestbook

  Scenario: With Valid Credentials
    Given there are no guests
    And I am on "guest/create"
    And I fill out the guest book form
    Then I should see "Guest Book"
    And I should see "John Doe"