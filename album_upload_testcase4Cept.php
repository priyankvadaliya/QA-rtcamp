<?php
$I = new AcceptanceTester($scenario);
$I->maximizeWindow();
$I->wantTo('Album should be created with given name and privacy, 5 media should be uploaded successfully');
$I->amOnPage('/');
$I->seeInTitle('Activity – rtCamp');
$I->fillField("log","demo");
$I->fillField("pwd","demo");
$I->click("wp-submit");
$I->amOnUrl("https://qa.rtcamp.net/members/demo/media/album/");
$I->click("//div[@class='clicker rtmedia-action-buttons']");
$I->click("//a[@class='rtmedia-reveal-modal rtmedia-modal-link']");
$I->fillField("//input[@id='rtmedia_album_name']","Priyank");
$I->fillField("//textarea[@id='rtmedia_album_description']","Test_case_allbum");
$I->click("//button[@id='rtmedia_create_new_album']");
$I->click("//button[@class='mfp-close']");
$I->amOnUrl("https://qa.rtcamp.net/members/demo/media/album/");
$I->click("//h4[contains(text(),'Priyank')]");
$I->click("//span[@id='rtm_show_upload_ui']");
$I->wait(2);
$I->click("//input[@id='rtMedia-upload-button']");
$I->attachFile("input[type='file']", "1.jpg");
$I->attachFile("input[type='file']", "2.jpg");
$I->attachFile("input[type='file']", "3.jpg");
$I->attachFile("input[type='file']", "4.jpg");
$I->attachFile("input[type='file']", "5.jpg");
$I->wait(3);
$I->click("//input[@class='start-media-upload']");
$I->wait(9);

$I->see("Log Out");
