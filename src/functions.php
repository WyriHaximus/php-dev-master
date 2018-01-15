<?php

namespace WyriHaximus\DevMaster;

use PackageVersions\Versions;

function isDevMaster(string $package): bool
{
    return strpos(Versions::getVersion($package), 'dev-') === 0;
}
