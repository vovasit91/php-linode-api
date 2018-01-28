<?php

namespace HnhDigital\LinodeApi\Domain;

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
 * This is the Records class.
 *
 * This file is automatically generated.
 *
 * @link https://developers.linode.com/v4/reference/endpoints/domains/$id/records
 *
 * @author Rocco Howard <rocco@hnh.digital>
 */
class Records extends Base
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'domains/%s';
    /**
     * Domain Id.
     *
     * @var int
     */
    protected $domain_id;

    /**
     * Type.
     *
     * @var array
     */
    public $type = [
        'A' => 'A',
        'AAAA' => 'AAAA',
        'NS' => 'NS',
        'MX' => 'MX',
        'CNAME' => 'CNAME',
        'TXT' => 'TXT',
        'SRV' => 'SRV',
        'PTR' => 'PTR',
        'CAA' => 'CAA',
    ];

    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct($domain_id)
    {
        $this->domain_id = $domain_id;
        parent::__construct($domain_id);
    }

    /**
     * Returns a list of Domain Records.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/domains/$id/records#GET
     *
     * @return array
     */
    public function all()
    {
        return $this->apiSearch($this->endpoint, ['class' => 'Domain/Record', 'parameters' => ['domain_id', 'id']]);
    }

    /**
     * Create a Domain Record.
     *
     * @param string $type Type of record. Can be one of "A", "AAAA", "NS", "MX", "CNAME", "TXT", "SRV", "PTR", or "CAA".
     * @param array $optional
     *                        - [name] (string) The hostname or FQDN. When type=MX the subdomain to delegate to the Target MX server.
     *                        - [target] (string) When Type=MX the hostname. When Type=CNAME the target of the alias. When Type=TXT or CAA the value of the record. When Type=A or AAAA the token of '[remote_addr]' will be substituted with the IP address of the request.
     *                        - [priority] (int) Priority for MX and SRV records.
     *                        - [weight] (int) A relative weight for records with the same priority, higher value means more preferred.
     *                        - [port] (int) The TCP or UDP port on which the service is to be found.
     *                        - [service] (string) The service to append to an SRV record.
     *                        - [protocol] (string) The protocol to append to an SRV record.
     *                        - [tag] (string) The tag attribute for a CAA record. One of "issue", "issuewild", or "iodef". Ignored on other record types.
     *                        - [ttl] (int) Time interval that the resource record may be cached before it should be discarded. In seconds. Leave as 0 to accept our default.
     *
     *
     * @link https://developers.linode.com/v4/reference/endpoints/domains/$id/records#POST
     *
     * @return bool
     */
    public function create($type, $optional = [])
    {
        return $this->call('post', '', array_merge([
            'type' => $type,
        ], $optional));
    }
}
