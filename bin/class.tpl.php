<?php
?>

namespace HnhDigital\LinodeApi<?= $namespace ?>;

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
 * This is the <?= $class ?> class.
 *
 * This file is automatically generated.
 *
 * @link <?= array_get($spec, 'url') ?>

 *
 * @author Rocco Howard <rocco@hnh.digital>
 */
class <?= $class ?> extends Base
{
    /**
     * Endpoint.
     *
     * @var string
     */
    protected $endpoint = '<?= array_get($spec, 'endpoint') ?>';
<?php
foreach (array_get($spec, 'parameters', []) as $name => $settings) {
?>
    /**
     * <?= title_case(str_replace('_', ' ', $name)) ?>.
     *
     * @var <?= array_get($settings, 'type') ?>

     */
    protected $<?= $name ?>;
<?php
}
?>

<?php
foreach (array_get($spec, 'lists', []) as $name => $list) {
?>
    /**
     * <?= title_case(str_replace('_', ' ', $name)) ?>.
     *
     * @var array
     */
    public $<?= $name ?> = [
<?php
    echo code_alignment($list)[2];
?>
    ];

<?php
}
?>
    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct(<?= generate_constructor_parameters($spec) ?>)
    {
<?php
foreach (array_get($spec, 'parameters', []) as $name => $settings) {
?>
        $this-><?= $name ?> = $<?= $name ?>;
<?php
}
if (array_has($spec, 'fillable')) {
?>
        $this->fillable = true;
<?php
}
?>
        parent::__construct(<?= generate_constructor_parameters($spec, true) ?>);
    }
<?php
foreach (array_get($spec, 'get', []) as $name => $settings) {
?>

    /**
     * <?= array_get($settings, 'description', '@todo Add description') ?>

     *
     * @link <?= array_get($settings, 'url', array_get($spec, 'url')) ?>

     *
     * @return array
     */
    public function <?= $name ?>(<?= generate_parameter_list($settings) ?>)
    {
<?php
if (array_has($settings, 'endpoint') && !array_has($settings, 'search')) {
?>
        return $this->apiCall('get', '<?= array_get($settings, 'endpoint', '') ?>');
<?php
} elseif (array_has($settings, 'endpoint') && array_has($settings, 'search')) {
?>
        return $this->apiSearch($this->endpoint<?= array_get($settings, 'endpoint', '') != '' ? ".'".array_get($settings, 'endpoint', '')."'" : '' ?><?= api_search_factory($settings) ?>);
<?php
} elseif (array_has($settings, 'model')) {
?>
        return (new <?= array_get($settings, 'model') ?>(<?= generate_new_class_parameter_list($settings) ?>))-><?= array_get($settings, 'model-load-method', 'all') ?>();
<?php
}
?>
    }
<?php
}
?>
<?php
foreach (array_get($spec, 'put', []) as $name => $settings) {
?>

    /**
     * <?= array_get($settings, 'description', '@todo Add description') ?>

     *
<?= generate_parameter_comments($settings) ?>
     * @link <?= array_get($settings, 'url', array_get($spec, 'url')) ?>

     *
     * @return void
     */
    public function <?= $name ?>($optional = [])
    {
        return $this->call('put', <?= generate_endpoint_entry($settings) ?>, <?= generate_put_function_payload($settings) ?>);
    }
<?php
}
?>
<?php
foreach (array_get($spec, 'post', []) as $name => $settings) {
?>

    /**
     * <?= array_get($settings, 'description', '@todo Add description') ?>

     *
<?= generate_parameter_comments($settings) ?>
     * @link <?= array_get($settings, 'url', array_get($spec, 'url')) ?>

     *
     * @return bool
     */
    public function <?= $name ?>(<?= generate_parameter_list($settings) ?>)
    {
        return $this->call('post', <?= generate_endpoint_entry($settings) ?>, <?= generate_post_function_payload($settings) ?>);
    }
<?php
}
?>
<?php
foreach (array_get($spec, 'delete', []) as $name => $settings) {
?>

    /**
     * <?= array_get($settings, 'description', '@todo Add description') ?>

     *
<?= generate_parameter_comments($settings) ?>
     * @link <?= array_get($settings, 'url', array_get($spec, 'url')) ?>

     *
     * @return void
     */
    public function <?= $name ?>()
    {
        return $this->call('delete', <?= generate_endpoint_entry($settings) ?>);
    }
<?php
}
?>
}
