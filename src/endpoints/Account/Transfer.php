<?php

namespace HnhDigital\LinodeApi\Account;

/*
 * This file is part of the PHP Linode API.
 *
 * (c) H&H|Digital <hello@hnh.digital>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use HnhDigital\LinodeApi\Foundation\Base;

/**
 * This is the Transfer class.
 *
 * This file is automatically generated.
 *
 * @link https://developers.linode.com/api/v4#tag/Account-Transfer
 *
 * @author Rocco Howard <rocco@hnh.digital>
 */
class Transfer extends Base
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'account/transfer';

    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Returns a Transfer object showing your network utilization, in GB, for the current month.
     *
     * @link https://developers.linode.com/api/v4#operation/getTransfer
     *
     * @return array
     */
    public function get()
    {
        return $this->apiCall('get', '');
    }
}
