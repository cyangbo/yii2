<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('log in as regular user');
$I->amOnPage('/index.php?r=site%2Flogin');

$I->fillField('LoginForm[username]','admin');
$I->fillField('LoginForm[password]','admin');
$I->click('Login');
$I->see('Home');