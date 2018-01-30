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
 * This is the Domains class.
 *
 * This file is automatically generated.
 *
 * @link https://developers.linode.com/v4/reference/endpoints/domains
 *
 * @author Rocco Howard <rocco@hnh.digital>
 */
class Domains extends Base
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'domains';
    /**
     * Type.
     *
     * @var array
     */
    public $type = [
        'master' => 'Master',
        'slave'  => 'Slave',
    ];

    /**
     * Status.
     *
     * @var array
     */
    public $status = [
        'disabled'  => 'Disabled',
        'active'    => 'Active',
        'edit_mode' => 'Edit mode',
    ];

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
     * Returns a list of Domains.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/domains#GET
     *
     * @return array
     */
    public function search()
    {
        return $this->apiSearch($this->endpoint, ['class' => 'Domain', 'parameters' => ['id']]);
    }

    /**
     * Create a Domain.
     *
     * @param string $domain   The Domain name.
     * @param string $type     Domain type. Can be "master" or "slave".
     * @param array  $optional
     *                         - [soa_email] (string) Start of Authority (SOA) contact email.
     *                         - [description] (string) A description to keep track of this Domain.
     *                         - [refresh_sec] (int) Time interval before the Domain should be refreshed, in seconds.
     *                         - [retry_sec] (int) Time interval that should elapse before a failed refresh should be retried, in seconds.
     *                         - [expire_sec] (int) Time value that specifies the upper limit on the time interval that can elapse before the Domain is no longer authoritative, in seconds.
     *                         - [ttl_sec] (int) Time interval that the resource record may be cached before it should be discarded, in seconds.
     *                         - [status='active'] (string) The status of the Domain. Can be "disabled", "active", or "edit_mode".
     *                         - [master_ips=[]] (array) An array of IP addresses for this Domain.
     *                         - [axfr_ips=[]] (array) An array of IP addresses allowed to AXFR the entire Domain.
     *                         - [group] (string) A display group to keep track of this Domain.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/domains#POST
     *
     * @return bool
     */
    public function create($domain, $type, $optional = [])
    {
        return $this->call('post', '', array_merge([
            'domain' => $domain,
            'type'   => $type,
        ], $optional));
    }
}
