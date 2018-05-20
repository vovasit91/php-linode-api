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
 * This is the Stackscript class.
 *
 * This file is automatically generated.
 *
 * @link https://developers.linode.com/api/v4#tag/Linode-Stackscripts
 *
 * @author Rocco Howard <rocco@hnh.digital>
 */
class Stackscript extends Base
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
     * @var string
     */
    protected $stackscript_id;

    /**
     * This model is fillable.
     *
     * @var bool
     */
    protected $fillable = true;

    /**
     * This model's method that provides the data to fill it.
     *
     * @var string
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
     * Returns all of the information about a specified StackScript, including the contents of the script.
     *
     * @link https://developers.linode.com/api/v4#operation/getStackScript
     *
     * @return array
     */
    public function get()
    {
        return $this->apiCall('get', '');
    }

    /**
     * Updates a StackScript.
     *
     * Once a StackScript is made public, it cannot be made private.
     *
     * @param string $stackscript_id The ID of the StackScript to look up.
     *
     * @link https://developers.linode.com/api/v4#operation/updateStackScript
     *
     * @return void
     */
    public function update($optional = [])
    {
        return $this->apiCall('put', '', ['json' => $this->getDirty($optional)]);
    }

    /**
     * Deletes a private StackScript you have permission to `read_write`. You cannot delete a public StackScript.
     *
     * @param string $stackscript_id The ID of the StackScript to look up.
     *
     * @link https://developers.linode.com/api/v4#operation/deleteStackScript
     *
     * @return void
     */
    public function delete()
    {
        return $this->apiCall('delete', '');
    }
}
