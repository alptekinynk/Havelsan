<?php
namespace App\Controllers;

class SnmpController
{
	public function set()
    {
        $value = request('ip');
        $script = runScript("snmp.py", $value, false);

        return $script;
    }

}
