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
 * This is the Instance class.
 *
 * This file is automatically generated.
 *
 * @link https://developers.linode.com/v4/reference/linode
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
     * @var int
     */
    protected $linode_id;

    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct($linode_id, $fill = [])
    {
        $this->linode_id = $linode_id;
        $this->fillable = true;
        parent::__construct($linode_id, $fill);
    }

    /**
     * Manage a particular Linode your account may access.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/linode/instances/$id
     *
     * @return array
     */
    public function get()
    {
        return $this->apiCall('get', '');
    }

    /**
     * View Block Storage Volumes attached to this Linode.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/linode/instances/$id/volumes
     *
     * @return array
     */
    public function volumes()
    {
        return $this->apiCall('get', '/volumes');
    }

    /**
     * Returns information about this Linode's available backups.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/linode/instances/$id/backups
     *
     * @return array
     */
    public function backups()
    {
        return (new Instance/Backups($this->linode_id))->all();
    }

    /**
     * Returns a list of configs.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/linode/instances/$id/configs
     *
     * @return array
     */
    public function configs()
    {
        return (new Instance/Configs($this->linode_id))->all();
    }

    /**
     * View networking information for this Linode.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/linode/instances/$id/ips
     *
     * @return array
     */
    public function ips()
    {
        return (new Instance/Ips($this->linode_id))->all();
    }

    /**
     * Returns a list of disks.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/linode/instances/$id/disks
     *
     * @return array
     */
    public function disks()
    {
        return (new Instance/Disks($this->linode_id))->all();
    }

    /**
     * Returns CPU, IO, IPv4, and IPv6 stats for the last 24 hours.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/linode/instances/$id/stats
     *
     * @return array
     */
    public function statsCurrent()
    {
        return (new Instance/Stats($this->linode_id))->current();
    }

    /**
     * Returns CPU, IO, IPv4, and IPv6 stats for a specific month.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/linode/instances/$id/stats/$year/$month
     *
     * @return array
     */
    public function statsForPeriod($year, $month)
    {
        return (new Instance/Stats($this->linode_id, $year, $month))->period();
    }

    /**
     * Edits this Linode.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/linode/instances/$id#PUT
     *
     * @return void
     */
    public function update($optional = [])
    {
        return $this->call('put', '', $this->getDirty($optional));
    }

    /**
     * Boots a Linode.
     *
     * @param int $config_id=null (optional)
     *
     * @link https://developers.linode.com/v4/reference/endpoints/linode/instances/$id/boot
     *
     * @return bool
     */
    public function boot($config_id = null)
    {
        return $this->call('post', '/boot', array_merge([
            'config_id' => $config_id,
        ], $optional));
    }

    /**
     * Clones a Linode to a new or existing Linode.
     *
     * @param string $region   A region ID to provision this Linode in. Required when cloning to a new Linode.
     * @param string $type     A Linode type ID to use for this Linode. Required when cloning to a new Linode.
     * @param array  $optional
     *                         - [linode_id=null] (string) An existing Linode can be a target clone location.
     *                         - [label='linode'] (string) The label to assign this Linode when cloning to a new Linode. Defaults to "linode".
     *                         - [group='empty'] (string) The group to assign this Linode when cloning to a new Linode. Defaults to "empty".
     *                         - [backups_enabled=false] (bool) Subscribes this Linode with the Backup service when cloning to a new Linode. (Additional charges apply.) Defaults to "false".
     *                         - [disks=[]] (array) A list of disk ID's to include in the clone process. All disks attached to configs will be cloned from the source Linode if not provided.
     *                         - [configs=[]] (array) A list of config ID's to include in the clone process. All configs will be cloned from the source Linode if not provided.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/linode/instances/$id/clone
     *
     * @return bool
     */
    public function clone($region, $type, $optional = [])
    {
        return $this->call('post', '/clone', array_merge([
            'region' => $region,
            'type'   => $type,
        ], $optional));
    }

    /**
     * Changes a Linode's hypervisor from Xen (legacy) to KVM (modern). Doing this restarts and migrates your Linode, and can take several minutes depending on the size of the Linode. Upgrading to KVM has significant performance improvements. This endpoint will only work for Linodes currently running on the Xen hypervisor.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/linode/instances/$id/kvmify
     *
     * @return bool
     */
    public function kvmify()
    {
        return $this->call('post', '/kvmify', array_merge([
        ], $optional));
    }

    /**
     * Upgrades a Linode to its next generation.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/linode/instances/$id/mutate
     *
     * @return bool
     */
    public function mutate()
    {
        return $this->call('post', '/mutate', array_merge([
        ], $optional));
    }

    /**
     * Reboots a Linode.
     *
     * @param int $config_id=null (optional)
     *
     * @link https://developers.linode.com/v4/reference/endpoints/linode/instances/$id/reboot
     *
     * @return bool
     */
    public function reboot($config_id = null)
    {
        return $this->call('post', '/reboot', array_merge([
            'config_id' => $config_id,
        ], $optional));
    }

    /**
     * Deletes all Disks and Configs on this Linode, then deploys a new Distribution or Image to this Linode with the given attributes. Returns a JSON object representation of the Linode's disks and configs.
     *
     * @param string $root_pass The root password for the new deployment.
     * @param array  $optional
     *                          - [image=null] (string) The gold-master image to use for this Linode. May not be included if 'distribution' is sent. Official images start with "linode/", while your own images start with "private/"
     *                          - [authorized_keys=[]] (array) An array of public SSH keys to be installed into the distribution's default user's `authorized_keys` file when rebuilding a Linode.
     *                          - [stackscript_id] (int) The stackscript ID to deploy with this disk. Must provide a distribution. Distribution must be one that the stackscript can be deployed to.
     *                          - [stackscript_data] (json) UDF (user-defined fields) for this stackscript. Defaults to "{}". Must match UDFs required by stackscript.
     *                          - [booted] (boolean) Whether the instance should be booted upon completion of rebuild. This defaults to true.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/linode/instances/$id/rebuild
     *
     * @return bool
     */
    public function rebuild($root_pass, $optional = [])
    {
        return $this->call('post', '/rebuild', array_merge([
            'root_pass' => $root_pass,
        ], $optional));
    }

    /**
     * Reboots a Linode in Rescue Mode.
     *
     * @param json $devices Disks and volumes attached to this Linode config. Note that "sdh" is reserved and unavailable for rescue.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/linode/instances/$id/rescue
     *
     * @return bool
     */
    public function rescue($devices)
    {
        return $this->call('post', '/rescue', array_merge([
            'devices' => $devices,
        ], $optional));
    }

    /**
     * Resizes a Linode to a new Linode type.
     *
     * @param string $devices A Linode type to use for this Linode.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/linode/instances/$id/resize
     *
     * @return bool
     */
    public function resize($devices)
    {
        return $this->call('post', '/resize', array_merge([
            'devices' => $devices,
        ], $optional));
    }

    /**
     * Restores a backup to a Linode.
     *
     * @param int     $backup_id      The ID of the backup.
     * @param boolean $overwrite=null (optional)If true, deletes all disks and configs on the target linode before restoring.
     *
     * @link https://developers.linode.com/v4/reference/linode
     *
     * @return bool
     */
    public function restore($backup_id, $overwrite = null)
    {
        return $this->call('post', "$entry", array_merge([
            'backup_id' => $backup_id,
            'overwrite' => $overwrite,
        ], $optional));
    }

    /**
     * Shuts down a Linode.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/linode/instances/$id/shutdown
     *
     * @return bool
     */
    public function shutdown()
    {
        return $this->call('post', '/shutdown', array_merge([
        ], $optional));
    }

    /**
     * Deletes this Linode. This action cannot be undone.
     *
     * @link https://developers.linode.com/v4/reference/endpoints/linode/instances/$id#DELETE
     *
     * @return void
     */
    public function delete()
    {
        return $this->call('delete', '');
    }
}
