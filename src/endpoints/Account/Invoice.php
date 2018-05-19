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
 * This is the Invoice class.
 *
 * This file is automatically generated.
 *
 * @link https://developers.linode.com/api/v4#tag/Account-Invoices
 *
 * @author Rocco Howard <rocco@hnh.digital>
 */
class Invoice extends Base
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'account/invoices/%s';
    /**
     * Invoice Id.
     *
     * @var integer
     */
    protected $invoice_id;

    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct($invoice_id)
    {
        $this->invoice_id = $invoice_id;
        parent::__construct($invoice_id);
    }

    /**
     * Returns a single Invoice object.
     *
     * @link https://developers.linode.com/api/v4#operation/getInvoice
     *
     * @return array
     */
    public function get()
    {
        return $this->apiCall('get', '');
    }

    /**
     * Returns a paginated list of Invoice items.
     *
     * @link https://developers.linode.com/api/v4#operation/getInvoiceItems
     *
     * @return array
     */
    public function getInvoiceItems()
    {
        return $this->apiCall('get', '/items');
    }
}
