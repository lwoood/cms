<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'put your license key here');

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

c::set('panel.widgets', array(
  'pages'    => true,
  'site'     => true,
  'account'  => true,
  'history'  => true,
));

c::set('languages', [
  [
    'code'    => 'de',
    'name'    => 'Deutsch',
    'default' => true,
    'locale'  => 'de_DE',
    'url'     => '/',
  ], [
    'code'    => 'en',
    'name'    => 'English',
    'locale'  => 'en_US',
    'url'     => '/en',
  ]
]);

/*
* A/B Testing with multilanguage

c::set('languages', [
  [
    'code'    => 'a',
    'name'    => 'A',
    'default' => true,
    'locale'  => 'de_DE',
    'url'     => '/',
  ], [
    'code'    => 'b',
    'name'    => 'B',
    'locale'  => 'de_DE',
    'url'     => '/b',
  ], [
    'code'    => 'c',
    'name'    => 'C',
    'locale'  => 'de_DE',
    'url'     => '/c',
  ], [
    'code'    => 'd',
    'name'    => 'D',
    'locale'  => 'de_DE',
    'url'     => '/d',
  ]
]);

*/
