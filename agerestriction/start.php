<?php
/*******************************************************************************
 * agerestriction
 *
  ******************************************************************************/

function agerestriction_init()
{
	//put the check at the very end
	elgg_extend_view('register/extend', 'agerestriction/register', 1000);

	//block user registration if they don't check the box
	elgg_register_plugin_hook_handler('action', 'register', 'agerestriction_register_hook');
}

function agerestriction_register_hook()
{
        elgg_make_sticky_form('register');

        if (get_input('agevalid',false) != 'true') {
		register_error(elgg_echo('agerestriction:required'));

		forward(REFERER);
	}
}

elgg_register_event_handler('init', 'system', 'agerestriction_init');