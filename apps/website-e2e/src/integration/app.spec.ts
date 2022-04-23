import { getName } from '../support/app.po';

describe('website', () => {
  beforeEach(() => cy.visit('/'));

  it('it should show my name', () => {
    getName().contains('Matt Forster');
  });
});
