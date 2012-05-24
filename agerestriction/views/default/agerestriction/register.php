<?php
/**
 *
 */

if (elgg_is_sticky_form('register')) {
        extract(elgg_get_sticky_values('register'));
        elgg_clear_sticky_form('register');
}

?>
<label>
	<input type="checkbox" name="agevalid" value="true">
	<?php echo elgg_echo('agerestriction:confirmation')."</a>"; ?>
</label><br/>