<?php 
$I = new AcceptanceTester($scenario);
/**
 * It will check that your frontpage contains the word Home in it
 * 检查页面是否包含"Home"这个单词
 */
$I->wantTo('ensure that frontpage works');
$I->amOnPage('/');
$I->see('Home');