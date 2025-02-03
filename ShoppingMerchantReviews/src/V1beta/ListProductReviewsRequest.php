<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/reviews/v1beta/productreviews.proto

namespace Google\Shopping\Merchant\Reviews\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the ListProductReviews method.
 *
 * Generated from protobuf message <code>google.shopping.merchant.reviews.v1beta.ListProductReviewsRequest</code>
 */
class ListProductReviewsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The account to list product reviews for.
     * Format: accounts/{account}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. The maximum number of products to return. The service may return
     * fewer than this value.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. A page token, received from a previous `ListProductReviews` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListProductReviews`
     * must match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';

    /**
     * @param string $parent Required. The account to list product reviews for.
     *                       Format: accounts/{account}
     *                       Please see {@see ProductReviewsServiceClient::accountName()} for help formatting this field.
     *
     * @return \Google\Shopping\Merchant\Reviews\V1beta\ListProductReviewsRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The account to list product reviews for.
     *           Format: accounts/{account}
     *     @type int $page_size
     *           Optional. The maximum number of products to return. The service may return
     *           fewer than this value.
     *     @type string $page_token
     *           Optional. A page token, received from a previous `ListProductReviews` call.
     *           Provide this to retrieve the subsequent page.
     *           When paginating, all other parameters provided to `ListProductReviews`
     *           must match the call that provided the page token.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Reviews\V1Beta\Productreviews::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The account to list product reviews for.
     * Format: accounts/{account}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The account to list product reviews for.
     * Format: accounts/{account}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Optional. The maximum number of products to return. The service may return
     * fewer than this value.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of products to return. The service may return
     * fewer than this value.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. A page token, received from a previous `ListProductReviews` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListProductReviews`
     * must match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. A page token, received from a previous `ListProductReviews` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListProductReviews`
     * must match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

