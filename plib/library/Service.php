<?php
// Copyright 1999-2016. Parallels IP Holdings GmbH. All Rights Reserved.

class Modules_CustomService_Service extends pm_SystemService_Service
{

    public function getName()
    {
        return 'My Custom Service SDK Example';
    }

    public function getId ()
    {
        return 'custom-service';
    }

    public function onStart()
    {
        $result = pm_ApiCli::callSbin('mycustomserviceconsole', ['start']);
        if ($result['code'] !== 0) {
            throw new pm_Exception ('Error occurred when starting My custom service.');
        }
    }

    public function onStop()
    {
        $result = pm_ApiCli::callSbin('mycustomserviceconsole', ['stop']);
        if ($result['code'] !== 0) {
            throw new pm_Exception ('Error occurred when stopping My custom service.');
        }
    }

    public function onRestart()
    {
        $result = pm_ApiCli::callSbin('mycustomserviceconsole', ['restart']);
        if ($result['code'] !== 0) {
            throw new pm_Exception ('Error occurred when restarting My custom service.');
        }
    }

    public function isRunning()
    {
        $result = pm_ApiCli::callSbin('mycustomserviceconsole', ['status']);
        return $result['code'] == 0;
    }

    public function isConfigured()
    {
        $result = pm_ApiCli::callSbin('mycustomserviceconsole', ['isconfigured']);
        return $result['code'] == 0;
    }

    public function isInstalled()
    {
        $result = pm_ApiCli::callSbin('mycustomserviceconsole', ['isinstalled']);
        return $result['code'] == 0;
    }

}
