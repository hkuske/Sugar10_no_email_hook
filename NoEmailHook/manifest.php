	<?php
/*********************************************************************************
 * 
 ********************************************************************************/
$manifest = [
	'acceptable_sugar_versions' => [
		'10.*.*',
		'11.*.*',
		'12.*.*',
	],
	'acceptable_sugar_flavors' => [
		'PRO',
		'ENT',
		'ULT',
	],
    'readme'=>'',
    'author' => 'Harald Kuske',
    'description' => 'set no_email flag for Prospects, Leads, Contacts, Accounts',
    'icon' => '',
    'is_uninstallable' => true,
    'name' => 'NoEmailFlag',
    'published_date' => '2021-10-01',
    'type' => 'module',
    'version' => '20211001',
];

$installdefs = [
    'id' => 'NoEmailFlag',
    'copy' =>
        [
            [
     		'from'=> '<basepath>/SugarModules/custom/modules/Prospects/checkEmailHook.php',
    	 	'to'=> 'custom/modules/Prospects/checkEmailHook.php',
            ],
            [
     		'from'=> '<basepath>/SugarModules/custom/Extension/modules/Prospects/Ext/Vardefs/sugarfield_no_email.php',
    	 	'to'=> 'custom/Extension/modules/Prospects/Ext/Vardefs/sugarfield_no_email.php',
            ],
            [
     		'from'=> '<basepath>/SugarModules/custom/Extension/modules/Prospects/Ext/Language/en_us.no_email.lang.php',
    	 	'to'=> 'custom/Extension/modules/Prospects/Ext/Language/en_us.no_email.lang.php',
            ],
            [
     		'from'=> '<basepath>/SugarModules/custom/modules/Leads/checkEmailHook.php',
    	 	'to'=> 'custom/modules/Leads/checkEmailHook.php',
            ],
            [
     		'from'=> '<basepath>/SugarModules/custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_no_email.php',
    	 	'to'=> 'custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_no_email.php',
            ],
            [
     		'from'=> '<basepath>/SugarModules/custom/Extension/modules/Leads/Ext/Language/en_us.no_email.lang.php',
    	 	'to'=> 'custom/Extension/modules/Leads/Ext/Language/en_us.no_email.lang.php',
            ],
            [
     		'from'=> '<basepath>/SugarModules/custom/modules/Contacts/checkEmailHook.php',
    	 	'to'=> 'custom/modules/Contacts/checkEmailHook.php',
            ],
            [
     		'from'=> '<basepath>/SugarModules/custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_no_email.php',
    	 	'to'=> 'custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_no_email.php',
            ],
            [
     		'from'=> '<basepath>/SugarModules/custom/Extension/modules/Contacts/Ext/Language/en_us.no_email.lang.php',
    	 	'to'=> 'custom/Extension/modules/Contacts/Ext/Language/en_us.no_email.lang.php',
            ],
            [
     		'from'=> '<basepath>/SugarModules/custom/modules/Accounts/checkEmailHook.php',
    	 	'to'=> 'custom/modules/Accounts/checkEmailHook.php',
            ],
            [
     		'from'=> '<basepath>/SugarModules/custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_no_email.php',
    	 	'to'=> 'custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_no_email.php',
            ],
            [
     		'from'=> '<basepath>/SugarModules/custom/Extension/modules/Accounts/Ext/Language/en_us.no_email.lang.php',
    	 	'to'=> 'custom/Extension/modules/Accounts/Ext/Language/en_us.no_email.lang.php',
            ],
        ],
	'hookdefs' => [
		[
			'from' => '<basepath>/SugarModules/custom/Extension/modules/Prospects/Ext/LogicHooks/setNoEmailHook.php',
			'to_module' => 'Prospects',
		],
		[
			'from' => '<basepath>/SugarModules/custom/Extension/modules/Leads/Ext/LogicHooks/setNoEmailHook.php',
			'to_module' => 'Leads',
		],
		[
			'from' => '<basepath>/SugarModules/custom/Extension/modules/Contacts/Ext/LogicHooks/setNoEmailHook.php',
			'to_module' => 'Contacts',
		],
		[
			'from' => '<basepath>/SugarModules/custom/Extension/modules/Accounts/Ext/LogicHooks/setNoEmailHook.php',
			'to_module' => 'Accounts',
		],
	],
];  
  
