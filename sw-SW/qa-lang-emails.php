<?php
/*
	Question2Answer by Gideon Greenspan na contributors
	http://www.question2answer.org/

	Description: Language phrases for email notifications


	This program is free software; you can redistribute it na/au
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, au (at your chaguo) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY au FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about hiki license: http://www.question2answer.org/license.php
*/

return array(
	'a_commented_body' => "Jibu lako kwenye ^site_title lina maoni mapya na ^c_handle:\n\n^open^c_content^close\n\nJibu lako lilikuwa:\n\n^open^c_context^close\n\nUnaweza kurejelea kwa kuongeza maoni yako:\n\n^url\n\nAsante,\n\n^site_title",
	'a_commented_subject' => 'Jibu lako la ^site_title lina maoni mapya',

	'a_followed_body' => "Jibu lako kwenye ^site_title lina swali jipya linalohusiana nalo na ^q_handle:\n\n^open^q_title^close\n\nJibu lako lilikuwa:\n\n^open^a_content^close\n\nBonyeza hapo chini ili kujibu swali hili jipya:\n\n^url\n\nAsante,\n\n^site_title",
	'a_followed_subject' => 'Jibu lako kwenye ^site_title lina swali jipya',

	'a_selected_body' => "Heko! Jibu lako kwenye ^site_title limechaguliwa kuwa bora ^s_handle:\n\n^open^a_content^close\n\nSwali lako lilikuwa:\n\n^open^q_title^close\n\nBonyeza hapo chini ili kuona jibu lako:\n\n^url\n\nAsante,\n\n^site_title",
	'a_selected_subject' => 'Jibu lako kwenye ^site_title limechaguliwa kuwa bora!',

	'c_commented_body' => "Maoni mapya na ^c_handle yameongezewa baada ya maoni yako kwenye ^site_title:\n\n^open^c_content^close\n\nMjadala unafwatilia:\n\n^open^c_context^close\n\nUnaweza kurejelea kwa kuongeza maoni mengine:\n\n^url\n\nAsante,\n\n^site_title",
	'c_commented_subject' => 'Maoni yako kwenye ^site_title yameongezewa maoni mengine',

	'confirm_body' => "Tafadhali bonyeza hapo chini ili kuthibithisha barua pepe ya ^site_title.\n\n^url\n\nKodi ya Uthibithisho: ^code\n\n Asante,\n^site_title",
	'confirm_subject' => '^site_title - Uthibithisho wa Barua pepe',

	'feedback_body' => "Maoni:\n^message\n\nName:\n^name\n\nEmail:\n^email\n\nUkurasa uliotangulia:\n^previous\n\nMtumiaji:\n^url\n\nAnwani ya IP:\n^ip\n\nKivinjari:\n^browser",
	'feedback_subject' => '^ mawasiliano',

	'flagged_body' => "Chapisho na ^p_handle limepokea ^flags:\n\n^open^p_context^close\n\nBonyeza hapo chini ili kuona chapisho:\n\n^url\n\n\nBonyeza hapo chini ili kuona machapisho megine mengine yenye flags:\n\n^a_url\n\n\nAsante,\n\n^site_title",
	'flagged_subject' => '^site_title ina chapisho lenye flags',

	'moderate_body' => "Chapisho na ^p_handle linahitaji idhini yako:\n\n^open^p_context^close\n\nBonyeza hapo chini ili kuidhinisha au kukataa chapisho:\n\n^url\n\n\nBonyeza hapo chini ili kukagua machapisho yote yanayosubiri idhini:\n\n^a_url\n\n\nAsante,\n\n^site_title",
	'moderate_subject' => 'Ukaguzi wa ^site_title',

	'new_password_body' => "Nenosiri lako jipya la ^site_title liko hapo chini.\n\nNenosiri: ^password\n\nUnapaswa ubadili nenosiri hili mara moja baada ya kuingia kwenye tovuti.\n\nAsante,\n^site_title\n^url",
	'new_password_subject' => '^site_title - Nenosiri lako jipya',

	'private_message_body' => "Umetumiwa ujumbe wa faraghani na ^f_handle kwenye ^site_title:\n\n^open^message^close\n\n^moreAsante,\n\n^site_title\n\n\nIli kuzuia jumbe za faraghani, tembelea ukurasa wa akaunti yako:\n^a_url",
	'private_message_info' => "Taarifa zaidi kuhusu ^f_handle:\n\n^url\n\n",
	'private_message_reply' => "Bonyeza hapo chini ili kumjibu ^f_handle kwa ujumbe wa faraghani:\n\n^url\n\n",
	'private_message_subject' => 'Ujumbe kutoka kwa ^f_handle kwenye ^site_title',

	'q_answered_body' => "Swali lako kwenye ^site_title limejibiwa na ^a_handle:\n\n^open^a_content^close\n\nSwali lako lilikuwa:\n\n^open^q_title^close\n\nKama unapenda jibu hili, unaweza kujichagua kama bora:\n\n^url\n\nAsante,\n\n^site_title",
	'q_answered_subject' => 'Swali lako la ^site_title limejibiwa',

	'q_commented_body' => "Swali lako la ^site_title lina maoni mapya na ^c_handle:\n\n^open^c_content^close\n\nSwali lako lilikuwa:\n\n^open^c_context^close\n\nUnaweza kurejelea kwa kuongeza maoni yako:\n\n^url\n\nAsante,\n\n^site_title",
	'q_commented_subject' => 'Swali lako la ^site_title lina maoni mapya',

	'q_posted_body' => "Swali jipya limeulizwa na ^q_handle:\n\n^open^q_title\n\n^q_content^close\n\nBonyeza hapo chini ili kuliona swali:\n\n^url\n\nAsante,\n\n^site_title",
	'q_posted_subject' => '^site_title lina swali',

	'remoderate_body' => "Chapisho lililohaririwa na ^p_handle lianhitaji idhini yako:\n\n^open^p_context^close\n\nBonyeza hapo chini ili kuidhinisha au kuficha chapisho liliohaririwa:\n\n^url\n\n\nBonyeza hapo chini ili kukagua machapisho yaote yaliyohaririwa:\n\n^a_url\n\n\nAsante,\n\n^site_title",
	'remoderate_subject' => 'Ukaguzi wa ^site_title',

	'reset_body' => "Tafadhali bonyeza hapo chini ili kubadilisha nenosiri lako la ^site_title.\n\n^url\n\nPia, unaweza kuingiza kodi hapo chini kwenye uga uliopeanwa.\n\nCode: ^code\n\nKama haukuomba kubadilisha nenosiri lako, tafadhali puuza ujumbe huu.\n\nAsante,\n^site_title",
	'reset_subject' => '^site_title - Badlisha Nenosiri Liliosahaulika',

	'to_handle_prefix' => "^,\n\n",

	'u_registered_body' => "Mtumiaji mpya amejisali kama ^u_handle.\n\nBonyeza hapo chini ili kuona profaili yake:\n\n^url\n\nAsante,\n\n^site_title",
	'u_registered_subject' => '^site_title ila mtumiaji mpya aliyejisajili',
	'u_to_approve_body' => "Mtumiaji mpya amejisajili kama ^u_handle.\n\nBonyeza hapo chini ili kumwidhinisha mtumiaji:\n\n^url\n\nBonyeza hapo chini ili kukagua watumiaji wote wanaosubiri kuidhinishwa:\n\n^a_url\n\nAsante,\n\n^site_title",

	'u_approved_body' => "Unaweza kuona profile yako hapa:\n\n^url\n\nAsante,\n\n^site_title",
	'u_approved_subject' => 'Umeidhinishwa kwenye ^site_title',

	'wall_post_body' => "^f_handle amechapisha kwenye ukuta wako katika ^site_title:\n\n^open^chapisho^close\n\nUnaweza kurejelea chapisho lake hapa:\n\n^url\n\nAsante,\n\n^site_title",
	'wall_post_subject' => 'Chapisho kwenye ukuta wako wa ^site_title',

	'welcome_body' => "Asante kwa kujisajili kwenye ^site_title.\n\n^custom^confirmMaelezo yako ya kuingia ni kama ifwatavyo:\n\nJina la Mtuamiaji: ^handle\nBarua pepe: ^email\n\nTafadhali weka maelezo ahaya salama kwa ajili ya kurejelea baadaye.\n\nAsante,\n\n^site_title\n^url",
	'welcome_confirm' => "Tafadhali bonyeza chini ili kuthibithisha barua pepe yako.\n\n^url\n\n",
	'welcome_subject' => 'Karibu kwa ^site_title!',
);
