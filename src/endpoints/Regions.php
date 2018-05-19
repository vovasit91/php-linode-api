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
 * This is the Regions class.
 *
 * This file is automatically generated.
 *
 * @link https://developers.linode.com/api/v4#tag/Regions
 *
 * @author Rocco Howard <rocco@hnh.digital>
 */
class Regions extends Base
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'regions';

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
     * Lists the Regions available for Linode services. Not all services are guaranteed to be
     * available in all Regions.
     *
     * @link https://developers.linode.com/api/v4#operation/getRegions
     *
     * @return array
     */
    public function get()
    {
        return $this->apiCall('get', '');
    }
}
