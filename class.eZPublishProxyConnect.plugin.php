<?php if (!defined('APPLICATION')) exit();

// Define the plugin:
$PluginInfo['EZPublishProxyConnect'] = array( // The plugin key must match the folder the plugin is in.
   'Name' => 'EZ Publish Proxy connect',
   'Description' => 'User and account from EZ Publish', // Be as descriptive as possible.
   'Version' => '0.1', // A version number compatible with php's version_compare().
   //'RequiredApplications' => array('ApplicationKey' => MinVersion),
   //'RequiredTheme' => array('ThemeKey' => MinVersion),
   //'RequiredPlugins' => array('PluginKey' => MinVersion),
   'HasLocale' => FALSE,
   'Author' => 'Jérome Vielledent',
   //'AuthorEmail' => 'Your email here', // optional
   //'AuthorUrl' => 'Your url here' // optional
);

class EZPublishProxyConnectPlugin extends Gdn_Plugin {
	
}