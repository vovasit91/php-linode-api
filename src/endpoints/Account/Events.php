<?php

namespace HnhDigital\LinodeApi\Account;

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
 * This is the Events class.
 *
 * This file is automatically generated.
 *
 * @link https://developers.linode.com/api/v4#tag/Account-Events
 *
 * @author Rocco Howard <rocco@hnh.digital>
 */
class Events extends Base
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'account/events';

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
     * Returns a collection of Event objects representing actions taken on your Account. The Events returned depends on your
     * grants.
     *
     * @link https://developers.linode.com/api/v4#operation/getEvents
     *
     * @return array
     */
    public function get()
    {
        return $this->apiSearch($this->endpoint, ['class' => 'Account\Event', 'parameters' => ['id']]);
    }
}
