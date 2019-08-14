
<?php

$installer = $this;
$installer->startSetup();
$installer->run("ALTER TABLE {$this->getTable('cms_page')} ADD `custom_newtab_value` varchar( 250 ) NOT NULL DEFAULT '';");

$installer->endSetup();

?>
