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
	'a_commented_body' => "Your jibu on ^site_title has a new maoni by ^c_handle:\n\n^open^c_content^close\n\nYour jibu was:\n\n^open^c_context^close\n\nYou may respond by adding your own maoni:\n\n^url\n\nThank you,\n\n^site_title",
	'a_commented_subject' => 'Your ^site_title jibu has a new maoni',

	'a_followed_body' => "Your jibu on ^site_title has a new related swali by ^q_handle:\n\n^open^q_title^close\n\nYour jibu was:\n\n^open^a_content^close\n\nClick below to jibu the new swali:\n\n^url\n\nThank you,\n\n^site_title",
	'a_followed_subject' => 'Your ^site_title jibu has a related swali',

	'a_selected_body' => "Congratulations! Your jibu on ^site_title has been selected as the best by ^s_handle:\n\n^open^a_content^close\n\nThe swali was:\n\n^open^q_title^close\n\nClick below to see your jibu:\n\n^url\n\nThank you,\n\n^site_title",
	'a_selected_subject' => 'Your ^site_title jibu has been selected!',

	'c_commented_body' => "A new maoni by ^c_handle has been added after your maoni on ^site_title:\n\n^open^c_content^close\n\nThe discussion is following:\n\n^open^c_context^close\n\nYou may respond by adding another maoni:\n\n^url\n\nThank you,\n\n^site_title",
	'c_commented_subject' => 'Your ^site_title maoni has been added to',

	'confirm_body' => "Please click below to confirm your email address for ^site_title.\n\n^url\n\nConfirmation code: ^code\n\n Thank you,\n^site_title",
	'confirm_subject' => '^site_title - Email Address Confirmation',

	'feedback_body' => "Maoni:\n^message\n\nName:\n^name\n\nEmail:\n^email\n\nPrevious page:\n^previous\n\nUser:\n^url\n\nIP address:\n^ip\n\nBrowser:\n^browser",
	'feedback_subject' => '^ feedback',

	'flagged_body' => "A chapisho by ^p_handle has received ^flags:\n\n^open^p_context^close\n\nClick below to see the chapisho:\n\n^url\n\n\nClick below to review all flagged chapisho:\n\n^a_url\n\n\nThank you,\n\n^site_title",
	'flagged_subject' => '^site_title has a flagged chapisho',

	'moderate_body' => "A chapisho by ^p_handle requires your approval:\n\n^open^p_context^close\n\nClick below to approve au reject the chapisho:\n\n^url\n\n\nClick below to review all queued chapisho:\n\n^a_url\n\n\nThank you,\n\n^site_title",
	'moderate_subject' => '^site_title moderation',

	'new_password_body' => "Your new password for ^site_title is below.\n\nPassword: ^password\n\nIt is recommended to change hiki password immediately after logging in.\n\nThank you,\n^site_title\n^url",
	'new_password_subject' => '^site_title - Your New Password',

	'private_message_body' => "You have been sent a private message by ^f_handle on ^site_title:\n\n^open^message^close\n\n^moreThank you,\n\n^site_title\n\n\nTo block private messages, visit your account page:\n^a_url",
	'private_message_info' => "More information about ^f_handle:\n\n^url\n\n",
	'private_message_reply' => "Click below to reply to ^f_handle by private message:\n\n^url\n\n",
	'private_message_subject' => 'Message from ^f_handle on ^site_title',

	'q_answered_body' => "Your swali on ^site_title has been alijibu by ^a_handle:\n\n^open^a_content^close\n\nYour swali was:\n\n^open^q_title^close\n\nIf you like hiki jibu, you may select it as the best:\n\n^url\n\nThank you,\n\n^site_title",
	'q_answered_subject' => 'Your ^site_title swali was alijibu',

	'q_commented_body' => "Your swali on ^site_title has a new maoni by ^c_handle:\n\n^open^c_content^close\n\nYour swali was:\n\n^open^c_context^close\n\nYou may respond by adding your own maoni:\n\n^url\n\nThank you,\n\n^site_title",
	'q_commented_subject' => 'Your ^site_title swali has a new maoni',

	'q_posted_body' => "A new swali has been aliuliza by ^q_handle:\n\n^open^q_title\n\n^q_content^close\n\nClick below to see the swali:\n\n^url\n\nThank you,\n\n^site_title",
	'q_posted_subject' => '^site_title has a new swali',

	'remoderate_body' => "An edited chapisho by ^p_handle requires your reapproval:\n\n^open^p_context^close\n\nClick below to approve au hide the edited chapisho:\n\n^url\n\n\nClick below to review all queued chapisho:\n\n^a_url\n\n\nThank you,\n\n^site_title",
	'remoderate_subject' => '^site_title moderation',

	'reset_body' => "Please click below to reset your password for ^site_title.\n\n^url\n\nAlternatively, enter the code below into the uga provided.\n\nCode: ^code\n\nIf you did not uliza to reset your password, please ignore hiki message.\n\nThank you,\n^site_title",
	'reset_subject' => '^site_title - Reset Forgotten Password',

	'to_handle_prefix' => "^,\n\n",

	'u_registered_body' => "A new mtumiaji has registered as ^u_handle.\n\nClick below to view the mtumiaji profile:\n\n^url\n\nThank you,\n\n^site_title",
	'u_registered_subject' => '^site_title has a new registered mtumiaji',
	'u_to_approve_body' => "A new mtumiaji has registered as ^u_handle.\n\nClick below to approve the mtumiaji:\n\n^url\n\nClick below to review all watumiaji waiting for approval:\n\n^a_url\n\nThank you,\n\n^site_title",

	'u_approved_body' => "You can see your new mtumiaji profile here:\n\n^url\n\nThank you,\n\n^site_title",
	'u_approved_subject' => 'Your ^site_title mtumiaji has been approved',

	'wall_post_body' => "^f_handle has posted on your mtumiaji wall at ^site_title:\n\n^open^chapisho^close\n\nYou may respond to the chapisho here:\n\n^url\n\nThank you,\n\n^site_title",
	'wall_post_subject' => 'Post on your ^site_title wall',

	'welcome_body' => "Thank you for registering for ^site_title.\n\n^custom^confirmYour login details are as follows:\n\nUsername: ^handle\nEmail: ^email\n\nPlease keep hiki information safe for future reference.\n\nThank you,\n\n^site_title\n^url",
	'welcome_confirm' => "Please click below to confirm your email address.\n\n^url\n\n",
	'welcome_subject' => 'Welcome to ^site_title!',
);
