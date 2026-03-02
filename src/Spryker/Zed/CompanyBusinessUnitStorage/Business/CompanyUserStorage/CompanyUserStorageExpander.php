<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\CompanyBusinessUnitStorage\Business\CompanyUserStorage;

use Generated\Shared\Transfer\CompanyUserStorageTransfer;
use Generated\Shared\Transfer\CompanyUserTransfer;

class CompanyUserStorageExpander implements CompanyUserStorageExpanderInterface
{
    public function expandWithCompanyBusinessUnitId(
        CompanyUserStorageTransfer $companyUserStorageTransfer,
        CompanyUserTransfer $companyUserTransfer
    ): CompanyUserStorageTransfer {
        $companyUserStorageTransfer->setIdCompanyBusinessUnit($companyUserTransfer->getFkCompanyBusinessUnit());

        return $companyUserStorageTransfer;
    }
}
