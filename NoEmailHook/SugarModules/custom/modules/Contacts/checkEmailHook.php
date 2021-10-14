<?php

class checkEmailHook
{
    public function setNoEmail($bean, $event, $arguments)
    {
		$bean->no_email = empty($bean->email);
    }
}
