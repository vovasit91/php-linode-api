<?php

namespace HnhDigital\LinodeApi\Networking\Ipv4;

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
 * This is the Address class.
 *
 * This file is automatically generated.
 *
 * @link https://developers.linode.com/v4/reference/endpoints/networking/ipv4/$address
 *
 * @author Rocco Howard <rocco@hnh.digital>
 */
class Address extends Base
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'networking/ipv4/%s';
    /**
     * Address.
     *
     * @var string
     */
    protected $address;
    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct($address)
    {
        $this->address = $address;
        parent::__construct($address);
    }

    /**
     * Returns a single IPv4 Address.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/networking/ipv4/$address#GET
     *
     * @return array
     */
    public function get()
    {
        return $this->apiCall('get', '');
    }

    /**
     * Update RDNS on one IPv4 Address. Set RDNS to null to reset.
     *
     * @param string $domain Domain name or null.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/networking/ipv4/$address#PUT
     *
     * @return void
     */
    public function rdns($domain)
    {
        return $this->call('put', '', [
            'domain' => $domain,
        ]);
    }

    /**
     * Delete a public IPv4 address.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/networking/ipv4/$address#DELETE
     *
     * @return void
     */
    public function delete()
    {
        return $this->call('delete', '');
    }
}
