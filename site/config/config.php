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

c::set('license', 'K2-PRO-00000c0000c00b0cd00f000d0000f000');
c::set('debug', true);
/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

c::set('environment', 'production');


/*
---------------------------------------
SMARTYPANTS - Micro-typo
---------------------------------------
*/
c::set('smartypants', true);
c::set('smartypants.attr', 3);
c::set('smartypants.doublequote.open', '«&#8239;');
c::set('smartypants.doublequote.close', '&#8239;»');
c::set('smartypants.space.emdash', ' ');
c::set('smartypants.space.endash', ' ');
c::set('smartypants.space.colon', '&#8239;');
c::set('smartypants.space.semicolon', '&#8239;');
c::set('smartypants.space.marks', ' ');
c::set('smartypants.space.frenchquote', '&#8239;');
c::set('smartypants.space.thousand', '');
c::set('smartypants.space.unit', ' ');
