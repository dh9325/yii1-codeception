<?php

class IndexCest
{
    public function _before(FunctionalTester $I)
    {
    }

    // tests
    public function testIndex(FunctionalTester $I)
    {
        $I->amOnPage('/');
        $I->see('My Web Application');
    }

    public function testAbout(FunctionalTester $I)
    {
        $I->amOnPage('/index-test.php?r=site/page&view=about');
        $I->see('About');
    }
}
