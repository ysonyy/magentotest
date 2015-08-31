<?php
$installer = $this;
$attribute  = array(
    'type'          => 'varchar',
    'backend_type'  => 'text',
    'frontend_input' => 'text',
    'is_user_defined' => true,
    'label'         => 'Test Field',
    'visible'       => true,
    'required'      => false,
    'user_defined'  => true,
    'searchable'    => false,
    'filterable'    => false,
    'comparable'    => false,
);
$installer->addAttribute('order_payment', 'test_field', $attribute);

$attribute  = array(
    'type'          => 'varchar',
    'backend_type'  => 'text',
    'frontend_input' => 'text',
    'is_user_defined' => true,
    'label'         => 'Test Field',
    'visible'       => true,
    'required'      => false,
    'user_defined'  => true,
    'searchable'    => false,
    'filterable'    => false,
    'comparable'    => false,
);
$installer->addAttribute('quote_payment', 'test_field', $attribute);
$installer->endSetup();