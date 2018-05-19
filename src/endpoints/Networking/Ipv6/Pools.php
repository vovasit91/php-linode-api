<?php

namespace HnhDigital\LinodeApi\Networking\Ipv6;

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
 * This is the Pools class.
 *
 * This file is automatically generated.
 *
 * @link https://developers.linode.com/api/v4#tag/Networking-Ipv6-Pools
 *
 * @author Rocco Howard <rocco@hnh.digital>
 */
class Pools extends Base
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'networking/ipv6/pools';

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
     * Displays the IPv6 pools on your Account.
     *
     * @link https://developers.linode.com/api/v4#operation/getIPv6Pools
     *
     * @return array
     */
    public function get()
    {
        return $this->apiCall('get', '');
    }
}
