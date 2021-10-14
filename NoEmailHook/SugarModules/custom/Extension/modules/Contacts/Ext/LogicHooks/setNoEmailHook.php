<?php

$hook_version = 1;
if (!isset($hook_array)) {
    $hook_array = array();
}

if (!isset($hook_array['before_save'])) {
    $hook_array['before_save'] = array();
}

$hook_array['before_save'][] = array(
    200,
    'before save check email',
    'custom/modules/Contacts/checkEmailHook.php',
    'checkEmailHook',
    'setNoEmail'
);

