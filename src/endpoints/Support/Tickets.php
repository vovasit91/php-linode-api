<?php

namespace HnhDigital\LinodeApi\Support;

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
 * This is the Tickets class.
 *
 * This file is automatically generated.
 *
 * @link https://developers.linode.com/api/v4#tag/Support-Tickets
 *
 * @author Rocco Howard <rocco@hnh.digital>
 */
class Tickets extends Base
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'support/tickets';

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
     * Returns a collection of Support Tickets on your Account. Support Tickets can be both tickets you open with Linode for
     * support, as well as tickets generated by Linode regarding your Account.
     * This collection includes all Support Tickets generated on your Account, with open tickets returned first.
     *
     * @link https://developers.linode.com/api/v4#operation/getTickets
     *
     * @return array
     */
    public function get()
    {
        return $this->apiCall('get', '');
    }

    /**
     * Open a Support Ticket.
     * Only one of the ID attributes (`linode_id`, `domain_id`, etc.) can be set on a single Support Ticket.
     *
     * @link https://developers.linode.com/api/v4#operation/createTicket
     *
     * @return mixed
     */
    public function createTicket()
    {
        return $this->apiCall('post', '');
    }
}
