<?php

namespace HnhDigital\LinodeApi\Managed;

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
 * This is the Issues class.
 *
 * This file is automatically generated.
 *
 * @link https://developers.linode.com/api/v4#tag/Managed-Issues
 *
 * @author Rocco Howard <rocco@hnh.digital>
 */
class Issues extends Base
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'managed/issues';

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
     * Returns a paginated list of recent and ongoing issues detected on your Managed Services.
     *
     * @link https://developers.linode.com/api/v4#operation/getManagedIssues
     *
     * @return array
     */
    public function get()
    {
        return $this->apiSearch($this->endpoint, ['class' => 'Managed\Managed\Issue', 'parameters' => ['id']]);
    }
}
