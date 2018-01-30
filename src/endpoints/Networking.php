<?php

namespace HnhDigital\LinodeApi;

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
 * This is the Networking class.
 *
 * This file is automatically generated.
 *
 * @link https://developers.linode.com/v4/reference/networking
 *
 * @author Rocco Howard <rocco@hnh.digital>
 */
class Networking extends Base
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'networking';
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
     * Assigns an IPv4 address to a Linode.
     *
     * @param string $region      The region where the IPv4 address and Linode are located.
     * @param json   $assignments An array of IPv4 addresses and the Linode IDs they will be assigned to
     *
     * @link https://developers.linode.com/v4/reference/endpoints/networking/ip-assign
     *
     * @return mixed
     */
    public function assign($region, $assignments)
    {
        return $this->apiCall('post', 'ip-assign', ['json' => [
            'region'      => $region,
            'assignments' => $assignments,
        ]]);
    }
}
