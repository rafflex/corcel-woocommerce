<?php

namespace Corcel\WooCommerce\Model\Meta;

use Corcel\Model\Meta\PostMeta;

class ItemMeta extends PostMeta
{
    /**
     * @var string
     */
    protected $table = 'woocommerce_order_itemmeta';
}
