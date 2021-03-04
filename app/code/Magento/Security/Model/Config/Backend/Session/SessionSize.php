<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

/**
 * System config email field backend model
 */
declare(strict_types=1);

namespace Magento\Security\Model\Config\Backend\Session;

use Magento\Framework\App\Config\Value;

/**
 * Backend Model for Max Session Size
 */
class SessionSize extends Value
{
    /**
     * Handles the before save event
     *
     * @return $this
     */
    public function beforeSave()
    {
        $value = (int)$this->getValue();

        if ($value === null || $value < 0) {
            $value = 0;
        }
        $this->setValue((string)$value);
        return $this;
    }
}
