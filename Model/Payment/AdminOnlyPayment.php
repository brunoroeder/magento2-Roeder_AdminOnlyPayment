<?php
/**
 * This module enable a new payment method only for admin orders.
 * Copyright (C) 2016  Bruno Roeder - 2016
 *
 * This file is part of Roeder/AdminOnlyPayment.
 *
 * Roeder/AdminOnlyPayment is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

namespace Roeder\AdminOnlyPayment\Model\Payment;

class AdminOnlyPayment extends \Magento\Payment\Model\Method\AbstractMethod
{
    const CODE                  = 'adminonlypayment';

    protected $_code            = self::CODE;
    protected $_isOffline       = true;
    protected $_canUseCheckout  = false;
    protected $_canUseInternal  = true;

    public function isAvailable(\Magento\Quote\Api\Data\CartInterface $quote = null)
    {
        return parent::isAvailable($quote);
    }
}
