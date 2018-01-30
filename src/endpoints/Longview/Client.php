<?php

namespace HnhDigital\LinodeApi\Longview;

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
 * This is the Client class.
 *
 * This file is automatically generated.
 *
 * @link https://developers.linode.com/v4/reference/endpoints/longview/clients/$id
 *
 * @author Rocco Howard <rocco@hnh.digital>
 */
class Client extends Base
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'longview/clients/%s';
    /**
     * Client Id.
     *
     * @var int
     */
    protected $client_id;
    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct($client_id)
    {
        $this->client_id = $client_id;
        parent::__construct($client_id);
    }

    /**
     * Returns information about this Longview client.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/longview/clients/$id#GET
     *
     * @return array
     */
    public function get()
    {
        return $this->apiCall('get', '');
    }

    /**
     * Modifies this Longview client.
     *
     * @param array $optional
     *                        - [label] (string) Label of the client.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/longview/clients/$id#PUT
     *
     * @return void
     */
    public function update($optional = [])
    {
        return $this->apiCall('put', '', ['json' => $optional]);
    }

    /**
     * Deletes this Longview client. This action cannot be undone.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/longview/clients/$id#DELETE
     *
     * @return void
     */
    public function delete()
    {
        return $this->apiCall('delete', '');
    }
}
