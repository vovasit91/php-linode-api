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
 * This is the Nodebalancer class.
 *
 * This file is automatically generated.
 *
 * @link https://developers.linode.com/api/v4#tag/Nodebalancers
 *
 * @author Rocco Howard <rocco@hnh.digital>
 */
class Nodebalancer extends Base
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'nodebalancers/%s';
    /**
     * Node Balancer Id.
     *
     * @var int
     */
    protected $node_balancer_id;

    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct($node_balancer_id)
    {
        $this->node_balancer_id = $node_balancer_id;
        parent::__construct($node_balancer_id);
    }

    /**
     * Returns a single NodeBalancer you can access.
     *
     * @link https://developers.linode.com/api/v4#operation/getNodeBalancer
     *
     * @return array
     */
    public function get()
    {
        return $this->apiCall('get', '');
    }

    /**
     * Returns a paginated list of NodeBalancer Configs associated with this NodeBalancer. NodeBalancer Configs represent
     * individual ports that this NodeBalancer will accept traffic on, one Config per port.
     *
     * For example, if you wanted to accept standard HTTP traffic, you would need a Config listening on port 80.
     *
     * @link https://developers.linode.com/api/v4#operation/getNodeBalancerConfigs
     *
     * @return array
     */
    public function getNodeBalancerConfigs()
    {
        return $this->apiCall('get', '/configs');
    }

    /**
     * Updates information about a NodeBalancer you can access.
     *
     * @param int $node_balancer_id The ID of the NodeBalancer to access.
     *
     * @link https://developers.linode.com/api/v4#operation/updateNodeBalancer
     *
     * @return void
     */
    public function update()
    {
        return $this->apiCall('put', '', ['json' => [
            'node_balancer_id' => $node_balancer_id,
        ]]);
    }

    /**
     * Creates a NodeBalancer Config, which allows the NodeBalancer to accept traffic on a new port. You will need to add
     * NodeBalancer Nodes to the new Config before it can actually serve requests.
     *
     * @param int $node_balancer_id The ID of the NodeBalancer to access.
     *
     * @link https://developers.linode.com/api/v4#operation/createNodeBalancerConfig
     *
     * @return mixed
     */
    public function createNodeBalancerConfig()
    {
        return $this->apiCall('post', '/configs', ['json' => [
            'node_balancer_id' => $node_balancer_id,
        ]]);
    }

    /**
     * Deletes a NodeBalancer.
     *
     * --This is a destructive action and cannot be undone.--
     *
     * Deleting a NodeBalancer will also delete all associated Configs and Nodes, although the backend servers represented by
     * the Nodes will not be changed or removed. Deleting a NodeBalancer will cause you to lose access to the IP Addresses
     * assigned to this NodeBalancer.
     *
     * @param int $node_balancer_id The ID of the NodeBalancer to access.
     *
     * @link https://developers.linode.com/api/v4#operation/deleteNodeBalancer
     *
     * @return void
     */
    public function delete()
    {
        return $this->apiCall('delete', '');
    }
}
