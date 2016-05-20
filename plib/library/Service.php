<?php
// Copyright 1999-2015. Parallels IP Holdings GmbH. All Rights Reserved.

class Modules_CustomService_Service extends pm_SystemService_Service
{

    public function getName()
    {
        return 'My Custom Service SDK Example';
    }

    public function getId ()
    {
        return 'customservice';
    }

    public function onStart()
    {
        $result = pm_ApiCli::callSbin('mycustomserviceconsole', array('start'));
        if ($result['code'] !== 0) {
            throw new pm_Exception ('Error occured when starting My custom service.');
        }
    }

    public function onStop()
    {
        $result = pm_ApiCli::callSbin('mycustomserviceconsole', array('stop'));
        if ($result['code'] !== 0) {
            throw new pm_Exception ('Error occured when stopping My custom service.');
        }
    }

    public function onRestart()
    {
        $result = pm_ApiCli::callSbin('mycustomserviceconsole', array('restart'));
        if ($result['code'] !== 0) {
            throw new pm_Exception ('Error occured when restarting My custom service.');
        }
    }

    public function isRunning()
    {
        $result = pm_ApiCli::callSbin('mycustomserviceconsole', array('status'));
        if ($result['code'] == 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function isConfigured()
    {
        $result = pm_ApiCli::callSbin('mycustomserviceconsole', array('isconfigured'));
        if ($result['code'] == 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function isInstalled()
    {
        $result = pm_ApiCli::callSbin('mycustomserviceconsole', array('isinstalled'));
        if ($result['code'] == 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}