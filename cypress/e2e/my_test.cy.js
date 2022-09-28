describe('My Spec', () => {
  it('Visit the form page', () => {
    cy.visit('http://cypress.test/')
    cy.contains('My Awesome Form')
  });

  it('Fills the form', () => {
    cy.get('input[name=name]').type('Julio Bitencourt')
    cy.get('input[name=website]').type('juliobitencourt.dev')
  });

  it('Submits the form', () => {
    cy.intercept('http://cypress.test/submit-form.php').as('submitForm')
    cy.get('form').submit()
    cy.wait('@submitForm').its('response.statusCode').should('eq', 201)
  })
})