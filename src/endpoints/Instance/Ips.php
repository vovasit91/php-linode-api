<?php

namespace HnhDigital\LinodeApi\Instance;

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
 * This is the Ips class.
 *
 * This file is automatically generated.
 *
 * @link https://developers.linode.com/v4/reference/endpoints/linode/instances/$id/ips
 *
 * @author Rocco Howard <rocco@hnh.digital>
 */
class Ips extends Base
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'linode/instances/%s/ips';
    /**
     * Linode Id.
     *
     * @var int
     */
    protected $linode_id;
    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct($linode_id)
    {
        $this->linode_id = $linode_id;
        parent::__construct($linode_id);
    }

    /**
     * Returns a Linode Networking Object.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/linode/instances/$id/ips#GET
     *
     * @return array
     */
    public function all()
    {
        return $this->apiCall('get', '');
    }

    /**
     * Allocates a new IP Address for this Linode.
     *
     * @param string $type='private' (optional)The type of IP Address this is, can be one of "public" or "private". Public IP Addresses, over and above the one included with each Linode, incur an additional monthly charge. If you need an additional Public IP Address you must request one - please open a ticket.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/linode/instances/$id/ips#POST
     *
     * @return mixed
     */
    public function add($type = 'private')
    {
        return $this->apiCall('post', '', ['json' => [
            'type' => $type,
        ]]);
    }

    /**
     * Sets IP Sharing for this Linode.
     *
     * @param array $ips A list of IP Addresses this Linode will share.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/linode/instances/$id/ips/sharing
     *
     * @return mixed
     */
    public function sharing($ips)
    {
        return $this->apiCall('post', '/sharing', ['json' => [
            'ips' => $ips,
        ]]);
    }
}
