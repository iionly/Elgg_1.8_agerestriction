Agerestriction plugin for Elgg 1.8
Latest Version: 1.8.1
Released: 2014-01-15
Contact: iionly@gmx.de
License: GNU General Public License version 2
Copyright: (c) iionly


This plugin adds a "confirm age" checkbox on the register form. New users must confirm they are of full age (or any other age range you have in mind - just modify the language file then) before they are allowed to join. There's no verification of any kind if the users really are as old as they say, but at least you have asked them prior registration...



Installation:

Just drop the plugin folder to the mod folder on your site and enable the plugin in the admin section.

No guarantee of any kind that it works with any other 3rd party plugins. The age check is currently configured to ask for confirmation of full age (18 years or older). You can change the question by simply modifing language/en.php.



Changelog:

1.8.1

- The Elgg core register from is no longer (unnecessarily) overriden (already fixed in version 1.9.1 for Elgg 1.9),
- German language file added.


1.1

- Correctly uses the sticky form feature introduced in Elgg 1.8, i.e. the input fields will keep their content in case of an error input. The age checkbox has to be re-checked though to confirm the age.


1.0

- Initial release for Elgg 1.8
