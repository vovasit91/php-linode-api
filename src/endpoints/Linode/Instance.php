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
 * This is the Instance class.
 *
 * This file is automatically generated.
 *
 * @link https://developers.linode.com/api/v4#tag/Linode-Instances
 *
 * @author Rocco Howard <rocco@hnh.digital>
 */
class Instance extends Base
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = 'linode/instances/%s';
    /**
     * Linode Id.
     *
     * @var 
     */
    protected $linode_id;

    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct($linode_id)
    {
        $this->linode_id = $linode_id;
        parent::__construct($linode_id);
    }

    /**
     * Get a specific Linode by ID.
     *
     * @link https://developers.linode.com/api/v4#operation/getLinodeInstance
     *
     * @return array
     */
    public function get()
    {
        return $this->apiCall('get', '');
    }

    /**
     * Returns information about this Linode's available backups.
     *
     * @link https://developers.linode.com/api/v4#operation/getBackups
     *
     * @return array
     */
    public function getBackups()
    {
        return $this->apiCall('get', '/backups');
    }

    /**
     * Lists Configuration profiles associated with a Linode.
     *
     * @link https://developers.linode.com/api/v4#operation/getLinodeConfigs
     *
     * @return array
     */
    public function getConfigs()
    {
        return $this->apiCall('get', '/configs');
    }

    /**
     * View Disk information for Disks associated with this Linode.
     *
     * @link https://developers.linode.com/api/v4#operation/getLinodeDisks
     *
     * @return array
     */
    public function getDisks()
    {
        return $this->apiCall('get', '/disks');
    }

    /**
     * Returns networking information for a single Linode.
     *
     * @link https://developers.linode.com/api/v4#operation/getLinodeIPs
     *
     * @return array
     */
    public function getIPs()
    {
        return $this->apiCall('get', '/ips');
    }

    /**
     * Returns CPU, IO, IPv4, and IPv6 statistics for your Linode for the past 24 hours.
     *
     * @link https://developers.linode.com/api/v4#operation/getLinodeStats
     *
     * @return array
     */
    public function getStats()
    {
        return $this->apiCall('get', '/stats');
    }

    /**
     * View Block Storage Volumes attached to this Linode.
     *
     * @link https://developers.linode.com/api/v4#operation/getLinodeVolumes
     *
     * @return array
     */
    public function getVolumes()
    {
        return $this->apiCall('get', '/volumes');
    }

    /**
     * Updates a Linode that you have permission to `read_write`.
     *
     * @param integer $linode_id ID of the Linode to look up
     *
     * @link https://developers.linode.com/api/v4#operation/updateLinodeInstance
     *
     * @return void
     */
    public function update()
    {
        return $this->apiCall('put', '', ['json' => [
            'linode_id' => $linode_id,
        ]]);
    }

    /**
     * Creates a snapshot Backup of a Linode.
     * -- If you already have a snapshot of this Linode, this is a destructive action. The previous snapshot will be deleted.--
     *
     * @param integer $linode_id The ID of the Linode the backups belong to.
     *
     * @link https://developers.linode.com/api/v4#operation/createSnapshot
     *
     * @return mixed
     */
    public function createSnapshot()
    {
        return $this->apiCall('post', '/backups', ['json' => [
            'linode_id' => $linode_id,
        ]]);
    }

    /**
     * Cancels the Backup service on the given Linode. Deletes all of this Linode's existing backups forever.
     *
     * @param integer $linode_id The ID of the Linode to cancel backup service for.
     *
     * @link https://developers.linode.com/api/v4#operation/cancelBackups
     *
     * @return mixed
     */
    public function cancelBackups()
    {
        return $this->apiCall('post', '/backups/cancel', ['json' => [
            'linode_id' => $linode_id,
        ]]);
    }

    /**
     * Enables backups for the specified Linode.
     *
     * @param integer $linode_id The ID of the Linode to enable backup service for.
     *
     * @link https://developers.linode.com/api/v4#operation/enableBackups
     *
     * @return mixed
     */
    public function enableBackups()
    {
        return $this->apiCall('post', '/backups/enable', ['json' => [
            'linode_id' => $linode_id,
        ]]);
    }

    /**
     * Boots a Linode you have permission to modify. If no parameters are given, a Config profile
     * will be chosen for this boot based on the following criteria:
     * 
     * - If there is only one Config profile for this Linode, it will be used.
     * - If there is more than one Config profile, the last booted config will be used.
     * - If there is more than one Config profile and none were the last to be booted (because the
     *   Linode was never booted or the last booted config was deleted) an error will be returned.
     *
     * @param integer $linode_id The ID of the Linode to boot.
     *
     * @link https://developers.linode.com/api/v4#operation/bootLinodeInstance
     *
     * @return mixed
     */
    public function boot()
    {
        return $this->apiCall('post', '/boot', ['json' => [
            'linode_id' => $linode_id,
        ]]);
    }

    /**
     * You can clone your Linode's existing Disks or Configuration profiles to another Linode on your Account. In order for
     * this request to complete successfully, your User must have the `add_linodes` grant. Cloning to a new Linode will incur a
     * charge on your Account.
     * If cloning to an existing Linode, any actions currently running or queued must be completed first before you can clone
     * to it.
     *
     * @param integer $linode_id ID of the Linode to clone.
     *
     * @link https://developers.linode.com/api/v4#operation/cloneLinodeInstance
     *
     * @return mixed
     */
    public function cloneLinodeInstance()
    {
        return $this->apiCall('post', '/clone', ['json' => [
            'linode_id' => $linode_id,
        ]]);
    }

    /**
     * Adds a new Configuration profile to a Linode.
     *
     * @param integer $linode_id ID of the Linode to look up Configuration profiles for.
     *
     * @link https://developers.linode.com/api/v4#operation/addLinodeConfig
     *
     * @return mixed
     */
    public function addConfig()
    {
        return $this->apiCall('post', '/configs', ['json' => [
            'linode_id' => $linode_id,
        ]]);
    }

    /**
     * Adds a new Disk to a Linode. You can optionally create a Disk from an Image (see [/images](/#operation/getImages) for a
     * list of available public images, or use one of your own), and optionally provide a StackScript to deploy with this Disk.
     *
     * @param integer $linode_id ID of the Linode to look up.
     *
     * @link https://developers.linode.com/api/v4#operation/addLinodeDisk
     *
     * @return mixed
     */
    public function addDisk()
    {
        return $this->apiCall('post', '/disks', ['json' => [
            'linode_id' => $linode_id,
        ]]);
    }

    /**
     * Allocates a public or private IPv4 address to a Linode. Public IP Addresses, after the one included with each Linode,
     * incur an additional monthly charge. If you need an additional public IP Address you must request one - please [open a
     * support ticket](/#operation/createTicket). You may not add more than one private IPv4 address to a single Linode.
     *
     * @param integer $linode_id ID of the Linode to look up.
     *
     * @link https://developers.linode.com/api/v4#operation/addLinodeIP
     *
     * @return mixed
     */
    public function addIP()
    {
        return $this->apiCall('post', '/ips', ['json' => [
            'linode_id' => $linode_id,
        ]]);
    }

    /**
     * Linodes created with now-deprecated Types are entitled to a free upgrade to the next generation. A mutating Linode will
     * be allocated any new resources the upgraded Type provides, and will be subsequently restarted if it was currently
     * running.
     * If any actions are currently running or queued, those actions must be completed first before you can initiate a mutate.
     *
     * @param integer $linode_id ID of the Linode to mutate.
     *
     * @link https://developers.linode.com/api/v4#operation/mutateLinodeInstance
     *
     * @return mixed
     */
    public function mutate()
    {
        return $this->apiCall('post', '/mutate', ['json' => [
            'linode_id' => $linode_id,
        ]]);
    }

    /**
     * Reboots a Linode you have permission to modify. If any actions are currently running or queued, those actions must be
     * completed first before you can initiate a reboot.
     *
     * @param integer $linode_id ID of the linode to reboot.
     *
     * @link https://developers.linode.com/api/v4#operation/rebootLinodeInstance
     *
     * @return mixed
     */
    public function reboot()
    {
        return $this->apiCall('post', '/reboot', ['json' => [
            'linode_id' => $linode_id,
        ]]);
    }

    /**
     * Rebuilds a Linode you have the `read_write` permission to modify.
     * A rebuild will first shut down the Linode, delete all disks and configs on the Linode, and then deploy a new `image` to
     * the Linode with the given attributes. Additionally:
     * 
     *   - Requires an `image` be supplied.
     *   - Requires a `root_pass` be supplied to use for the root User's Account.
     *   - It is recommended to supply SSH keys for the root User using the
     *     `authorized_keys` field.
     *
     * @param integer $linode_id ID of the Linode to rebuild.
     *
     * @link https://developers.linode.com/api/v4#operation/rebuildLinodeInstance
     *
     * @return mixed
     */
    public function rebuild()
    {
        return $this->apiCall('post', '/rebuild', ['json' => [
            'linode_id' => $linode_id,
        ]]);
    }

    /**
     * Rescue Mode is a safe environment for performing many system recovery and disk management tasks. Rescue Mode is based on
     * the Finnix recovery distribution, a self-contained and bootable Linux distribution. You can also use Rescue Mode for
     * tasks other than disaster recovery, such as formatting disks to use different filesystems, copying data between disks,
     * and downloading files from a disk via SSH and SFTP.
     * - Note that "sdh" is reserved and unavailable during rescue.
     *
     * @param integer $linode_id ID of the Linode to rescue.
     *
     * @link https://developers.linode.com/api/v4#operation/rescueLinodeInstance
     *
     * @return mixed
     */
    public function rescue()
    {
        return $this->apiCall('post', '/rescue', ['json' => [
            'linode_id' => $linode_id,
        ]]);
    }

    /**
     * Resizes a Linode you have the `read_write` permission to a different Type. If any actions are currently running or
     * queued, those actions must be completed first before you can initiate a resize. Additionally, the following criteria
     * must be met in order to resize a Linode:
     * 
     *   - Any pending free upgrades to the Linode's current Type must be performed
     *   before a resize can occur.
     *   - The Linode must not have a pending migration.
     *   - Your Account cannot have an outstanding balance.
     *   - The Linode must not have more disk allocation than the new Type allows.
     *     - In that situation, you must first delete or resize the disk to be smaller.
     *
     * @param integer $linode_id ID of the Linode to resize.
     *
     * @link https://developers.linode.com/api/v4#operation/resizeLinodeInstance
     *
     * @return mixed
     */
    public function resize()
    {
        return $this->apiCall('post', '/resize', ['json' => [
            'linode_id' => $linode_id,
        ]]);
    }

    /**
     * Shuts down a Linode you have permission to modify. If any actions are currently running or queued, those actions must be
     * completed first before you can initiate a shutdown.
     *
     * @param integer $linode_id ID of the Linode to shutdown.
     *
     * @link https://developers.linode.com/api/v4#operation/shutdownLinodeInstance
     *
     * @return mixed
     */
    public function shutdown()
    {
        return $this->apiCall('post', '/shutdown', ['json' => [
            'linode_id' => $linode_id,
        ]]);
    }

    /**
     * Deletes a Linode you have permission to `read_write`.
     * 
     * --Deleting a Linode is a destructive action and cannot be undone.--
     * 
     * Additionally, deleting a Linode:
     * 
     *   - Gives up any IP addresses the Linode was assigned.
     *   - Deletes all Disks, Backups, Configs, etc.
     *   - Stops billing for the Linode and its associated services. You will be billed for time used
     *     within the billing period the Linode was active.
     *
     * @param integer $linode_id ID of the Linode to look up
     *
     * @link https://developers.linode.com/api/v4#operation/deleteLinodeInstance
     *
     * @return void
     */
    public function delete()
    {
        return $this->apiCall('delete', '');
    }
}
