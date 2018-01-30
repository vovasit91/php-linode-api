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
 * @link https://developers.linode.com/v4/reference/endpoints/regions
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
     * Returns a list of regions.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/regions#GET
     *
     * @return array
     */
    public function search()
    {
        return $this->apiSearch($this->endpoint, ['class' => 'Region', 'parameters' => ['id']]);
    }
}
