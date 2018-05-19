<?php

namespace HnhDigital\LinodeApi\Nodebalancers;

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
 * This is the Config class.
 *
 * This file is automatically generated.
 *
 * @link https://developers.linode.com/api/v4#tag/Nodebalancers-Configs
 *
 * @author Rocco Howard <rocco@hnh.digital>
 */
class Config extends Base
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'nodebalancers/%s/configs/%s';
    /**
     * Node Balancer Id.
     *
     * @var integer
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
     * Returns configuration information for a single port of this NodeBalancer.
     *
     * @link https://developers.linode.com/api/v4#operation/getNodeBalancerConfig
     *
     * @return array
     */
    public function get($config_id)
    {
        return $this->apiCall('get', '');
    }

    /**
* Returns a paginated list of NodeBalancer nodes associated with this Config. These are the backends that will be sent
     * traffic for this port.
     *
     * @link https://developers.linode.com/api/v4#operation/getNodeBalancerConfigNodes
     *
     * @return array
     */
    public function getNodeBalancerConfigNodes($config_id)
    {
        return $this->apiCall('get', '/nodes');
    }

    /**
     * Updates the configuration for a single port on a NodeBalancer.
     *
     * @param int $node_balancer_id The ID of the NodeBalancer to access.
     * @param int $config_id        The ID of the config to access.
     *
     * @link https://developers.linode.com/api/v4#operation/updateNodeBalancerConfig
     *
     * @return void
     */
    public function update($config_id)
    {
        return $this->apiCall('put', '', ['json' => [
            'node_balancer_id' => $node_balancer_id,
            'config_id'        => $config_id,
        ]]);
    }

    /**
* Creates a NodeBalancer Node, a backend that can accept traffic for this NodeBalancer Config. Nodes are routed requests
     * on the configured port based on their status.
     *
     * @param int $node_balancer_id The ID of the NodeBalancer to access.
     * @param int $config_id        The ID of the NodeBalancer config to access.
     *
     * @link https://developers.linode.com/api/v4#operation/createNodeBalancerNode
     *
     * @return mixed
     */
    public function createNodeBalancerNode($config_id)
    {
        return $this->apiCall('post', '/nodes', ['json' => [
            'node_balancer_id' => $node_balancer_id,
            'config_id'        => $config_id,
        ]]);
    }

    /**
* Deletes the Config for a port of this NodeBalancer.
     * 
     * --This cannot be undone.--
     * 
     * Once completed, this NodeBalancer will no longer respond to requests on the given port. This also deletes all associated
     * NodeBalancerNodes, but the Linodes they were routing traffic to will be unchanged and will not be removed.
     *
     * @param int $node_balancer_id The ID of the NodeBalancer to access.
     * @param int $config_id        The ID of the config to access.
     *
     * @link https://developers.linode.com/api/v4#operation/deleteNodeBalancerConfig
     *
     * @return void
     */
    public function delete()
    {
        return $this->apiCall('delete', '');
    }
}
