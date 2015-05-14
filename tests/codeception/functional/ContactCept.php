<?php

use tests\codeception\_pages\ContactPage;

/* @var $scenario Codeception\Scenario */

$I = new FunctionalTester($scenario);
$I->wantTo('garantizar que las obras estan en contacto');

$contactPage = ContactPage::openBy($I);

$I->see('Contacto', 'h1');

$I->amGoingTo('presentar formulario de contacto sin datos');
$contactPage->submit([]);
$I->expectTo('ver errores validaciones');
$I->see('contacto', 'h1');
$I->see('el nombre no puede estar en blanco');
$I->see('El Email no puede estar en blanco');
$I->see('Subject cannot be blank');
$I->see('el cuerpo no puede estar en blanco');
$I->see('El código de verificación es incorrecta');

$I->amGoingTo('enviar el formulario de contacto con el correo electrónico , esta no es correcta');
$contactPage->submit([
    'name'			=>	'tester',
    'email'			=>	'tester.email',
    'subject'		=>	'test subject',
    'body'			=>	'test content',
    'verifyCode'	=>	'testme',
]);
$I->expectTo('ver que la dirección de correo electrónico está mal');
$I->dontSee('El nombre no puede dejarse en blanco', '.help-inline');
$I->see('El Email no es una dirección de correo electrónico válida.');
$I->dontSee('no puede estar en blanco', '.help-inline');
$I->dontSee('El campo no puede estar en blanco', '.help-inline');
$I->dontSee('El código de verificación es incorrecto', '.help-inline');

$I->amGoingTo('submit contact form with correct data');
$contactPage->submit([
    'name'			=>	'tester',
    'email'			=>	'tester@example.com',
    'subject'		=>	'test subject',
    'body'			=>	'test content',
    'verifyCode'	=>	'testme',
]);
$I->dontSeeElement('#contact-form');
$I->see('Gracias por contactarnos. Te responderemos lo mas pronto posible .');
