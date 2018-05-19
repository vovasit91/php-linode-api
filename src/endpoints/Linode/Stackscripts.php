<?php

namespace HnhDigital\LinodeApi\Linode;

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
 * This is the Stackscripts class.
 *
 * This file is automatically generated.
 *
 * @link https://developers.linode.com/api/v4#tag/Linode-Stackscripts
 *
 * @author Rocco Howard <rocco@hnh.digital>
 */
class Stackscripts extends Base
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'linode/stackscripts';

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
* If the request is not authenticated, only public StackScripts are returned.
     * 
     * For more information on StackScripts, please read our guide: [Automate Deployment with
     * StackScripts](https://linode.com/docs/platform/stackscripts/).
     *
     * @link https://developers.linode.com/api/v4#operation/getStackScripts
     *
     * @return array
     */
    public function get()
    {
        return $this->apiCall('get', '');
    }

    /**
     * Creates a StackScript in your Account.
     *
     * @link https://developers.linode.com/api/v4#operation/addStackScript
     *
     * @return mixed
     */
    public function addStackScript()
    {
        return $this->apiCall('post', '');
    }
}
