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
 * This is the Volumes class.
 *
 * This file is automatically generated.
 *
 * @link https://developers.linode.com/v4/reference/endpoints/volumes
 *
 * @author Rocco Howard <rocco@hnh.digital>
 */
class Volumes extends Base
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'volumes';
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
     * Returns a list of volumes.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/volumes#GET
     *
     * @return array
     */
    public function search()
    {
        return $this->apiSearch($this->endpoint, ['class' => 'Volume', 'parameters' => ['id']]);
    }

    /**
     * Create a new Block Storage Volume
     *
     * @param string $label    A unique label to identify your new volume with.
     * @param string $region   Which region the new volume should be created in.
     * @param array  $optional
     *                         - [size=20] (int) The size in GiBs that you wish to make your new volume. Defaults to 20 GiB, can be as large as 1024 GiB (1 TiB).
     *                         - [linode_id] (int) An id to a Linode you'd like this volume to be attached to after creation. Requires an additional scope of `linode:modify` and you must have permission to access that given Linode.
     *                         - [config_id] (int) An id to a Linode configuration profile to used when attaching to a Linode that has more than one configuration profile.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/volumes#POST
     *
     * @return bool
     */
    public function create($label, $region, $optional = [])
    {
        return $this->apiCall('post', '', [\'json\' => array_merge([
            'label'  => $label,
            'region' => $region,
        ], $optional)]);
    }
}
