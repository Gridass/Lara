<?php

class HomeCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->wantTo('check home page');
        $I->amOnRoute('home');
        $I->see('Laravel');
    }
}'отправленно.', '.alert-success');