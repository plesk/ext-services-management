<?php
// Copyright 1999-2016. Parallels IP Holdings GmbH. All Rights Reserved.

class Modules_CustomService_SystemServices extends pm_Hook_SystemServices
{
    public function getServices()
    {
        return [new Modules_CustomService_Service()];
    }
}
