<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\CompanyBusinessUnitStorage\Business\CompanyUserStorage;

use Generated\Shared\Transfer\CompanyUserStorageTransfer;
use Generated\Shared\Transfer\CompanyUserTransfer;

interface CompanyUserStorageExpanderInterface
{
    public function expandWithCompanyBusinessUnitId(
        CompanyUserStorageTransfer $companyUserStorageTransfer,
        CompanyUserTransfer $companyUserTransfer
    ): CompanyUserStorageTransfer;
}
