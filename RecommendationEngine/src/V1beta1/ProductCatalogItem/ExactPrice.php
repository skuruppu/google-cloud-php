<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommendationengine/v1beta1/catalog.proto

namespace Google\Cloud\RecommendationEngine\V1beta1\ProductCatalogItem;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Exact product price.
 *
 * Generated from protobuf message <code>google.cloud.recommendationengine.v1beta1.ProductCatalogItem.ExactPrice</code>
 */
class ExactPrice extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Display price of the product.
     *
     * Generated from protobuf field <code>float display_price = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $display_price = 0.0;
    /**
     * Optional. Price of the product without any discount. If zero, by default
     * set to be the 'displayPrice'.
     *
     * Generated from protobuf field <code>float original_price = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $original_price = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $display_price
     *           Optional. Display price of the product.
     *     @type float $original_price
     *           Optional. Price of the product without any discount. If zero, by default
     *           set to be the 'displayPrice'.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recommendationengine\V1Beta1\Catalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Display price of the product.
     *
     * Generated from protobuf field <code>float display_price = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return float
     */
    public function getDisplayPrice()
    {
        return $this->display_price;
    }

    /**
     * Optional. Display price of the product.
     *
     * Generated from protobuf field <code>float display_price = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param float $var
     * @return $this
     */
    public function setDisplayPrice($var)
    {
        GPBUtil::checkFloat($var);
        $this->display_price = $var;

        return $this;
    }

    /**
     * Optional. Price of the product without any discount. If zero, by default
     * set to be the 'displayPrice'.
     *
     * Generated from protobuf field <code>float original_price = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return float
     */
    public function getOriginalPrice()
    {
        return $this->original_price;
    }

    /**
     * Optional. Price of the product without any discount. If zero, by default
     * set to be the 'displayPrice'.
     *
     * Generated from protobuf field <code>float original_price = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param float $var
     * @return $this
     */
    public function setOriginalPrice($var)
    {
        GPBUtil::checkFloat($var);
        $this->original_price = $var;

        return $this;
    }

}


