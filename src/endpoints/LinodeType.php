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
 * This is the LinodeType class.
 *
 * This file is automatically generated.
 *
 * @link https://developers.linode.com/v4/reference/endpoints/linode/types/$id
 *
 * @author Rocco Howard <rocco@hnh.digital>
 */
class LinodeType extends Base
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'linode/types/%s';
    /**
     * Type Id.
     *
     * @var int
     */
    protected $type_id;

    /**
     * This model is fillable.
     *
     * @type bool
     */
    protected $fillable = true;

    /**
     * This model's method that provides the data to fill it.
     *
     * @type string
     */
    protected $fill_method = 'get';

    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct($type_id, $fill = [])
    {
        $this->type_id = $type_id;
        parent::__construct($type_id, $fill);
    }

    /**
     * Returns information about this type.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/linode/types/$id#GET
     *
     * @return array
     */
    public function get()
    {
        return $this->apiCall('get', '', [], ['auto-fill' => true]);
    }
}
