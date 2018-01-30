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
 * This is the StackScript class.
 *
 * This file is automatically generated.
 *
 * @link https://developers.linode.com/v4/reference/endpoints/linode/stackscripts
 *
 * @author Rocco Howard <rocco@hnh.digital>
 */
class StackScript extends Base
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'linode/stackscripts/%s';
    /**
     * Stackscript Id.
     *
     * @var int
     */
    protected $stackscript_id;

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
    public function __construct($stackscript_id, $fill = [])
    {
        $this->stackscript_id = $stackscript_id;
        parent::__construct($stackscript_id, $fill);
    }

    /**
     * Returns information about this StackScript.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/linode/stackscripts/$id#GET
     *
     * @return array
     */
    public function get()
    {
        return $this->apiCall('get', '', [], ['auto-fill' => true]);
    }

    /**
     * Edits this StackScript.
     *
     * @param array $optional
     *                        - [label] (string) Label of the stackscript.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/linode/stackscripts/$id#PUT
     *
     * @return void
     */
    public function update($optional = [])
    {
        return $this->call('put', '', $this->getDirty($optional));
    }

    /**
     * Deletes this StackScript. This action cannot be undone.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/linode/stackscripts/$id#DELETE
     *
     * @return void
     */
    public function delete()
    {
        return $this->call('delete', '');
    }
}
