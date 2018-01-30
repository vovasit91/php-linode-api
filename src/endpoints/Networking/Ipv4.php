<?php

namespace HnhDigital\LinodeApi\Networking;

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
 * This is the Ipv4 class.
 *
 * This file is automatically generated.
 *
 * @link https://developers.linode.com/v4/reference/endpoints/networking/ipv4
 *
 * @author Rocco Howard <rocco@hnh.digital>
 */
class Ipv4 extends Base
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'networking/ipv4';
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
     * Returns a list of IPv4 Addresses.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/networking/ipv4#GET
     *
     * @return array
     */
    public function search()
    {
        return $this->apiSearch($this->endpoint);
    }

    /**
     * Create a new Public IPv4 Address.
     *
     * @param int $linode_id The Linode ID to assign this IP to.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/networking/ipv4#POST
     *
     * @return bool
     */
    public function create($linode_id)
    {
        return $this->apiCall('post', '', [\'json\' => array_merge([
            'linode_id' => $linode_id,
        ], $optional)]);
    }
}
