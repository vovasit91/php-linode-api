<?php

namespace HnhDigital\LinodeApi\Linode\Instances;

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
 * This is the Stat class.
 *
 * This file is automatically generated.
 *
 * @link https://developers.linode.com/api/v4#tag/Linode-Instances-Stats
 *
 * @author Rocco Howard <rocco@hnh.digital>
 */
class Stat extends Base
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'linode/instances/%s/stats/%s/%s';
    /**
     * Linode Id.
     *
     * @var integer
     */
    protected $linode_id;
    /**
     * Year.
     *
     * @var integer
     */
    protected $year;

    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct($linode_id, $year)
    {
        $this->linode_id = $linode_id;
        $this->year = $year;
        parent::__construct($linode_id, $year);
    }

    /**
* Returns statistics for a specific month. The year/month values must be either a date in the past, or the current month.
     * If the current month, statistics will be retrieved for the past 30 days.
     *
     * @link https://developers.linode.com/api/v4#operation/getLinodeStatsByYearMonth
     *
     * @return array
     */
    public function get($month)
    {
        return $this->apiCall('get', '');
    }
}
