<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recaptchaenterprise/v1/recaptchaenterprise.proto

namespace Google\Cloud\RecaptchaEnterprise\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Transaction data associated with a payment protected by reCAPTCHA Enterprise.
 *
 * Generated from protobuf message <code>google.cloud.recaptchaenterprise.v1.TransactionData</code>
 */
class TransactionData extends \Google\Protobuf\Internal\Message
{
    /**
     * Unique identifier for the transaction. This custom identifier can be used
     * to reference this transaction in the future, for example, labeling a refund
     * or chargeback event. Two attempts at the same transaction should use the
     * same transaction id.
     *
     * Generated from protobuf field <code>optional string transaction_id = 11;</code>
     */
    protected $transaction_id = null;
    /**
     * Optional. The payment method for the transaction. The allowed values are:
     * * credit-card
     * * debit-card
     * * gift-card
     * * processor-{name} (If a third-party is used, for example,
     * processor-paypal)
     * * custom-{name} (If an alternative method is used, for example,
     * custom-crypto)
     *
     * Generated from protobuf field <code>string payment_method = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $payment_method = '';
    /**
     * Optional. The Bank Identification Number - generally the first 6 or 8
     * digits of the card.
     *
     * Generated from protobuf field <code>string card_bin = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $card_bin = '';
    /**
     * Optional. The last four digits of the card.
     *
     * Generated from protobuf field <code>string card_last_four = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $card_last_four = '';
    /**
     * Optional. The currency code in ISO-4217 format.
     *
     * Generated from protobuf field <code>string currency_code = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $currency_code = '';
    /**
     * Optional. The decimal value of the transaction in the specified currency.
     *
     * Generated from protobuf field <code>double value = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $value = 0.0;
    /**
     * Optional. The value of shipping in the specified currency. 0 for free or no
     * shipping.
     *
     * Generated from protobuf field <code>double shipping_value = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $shipping_value = 0.0;
    /**
     * Optional. Destination address if this transaction involves shipping a
     * physical item.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.TransactionData.Address shipping_address = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $shipping_address = null;
    /**
     * Optional. Address associated with the payment method when applicable.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.TransactionData.Address billing_address = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $billing_address = null;
    /**
     * Optional. Information about the user paying/initiating the transaction.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.TransactionData.User user = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $user = null;
    /**
     * Optional. Information about the user or users fulfilling the transaction.
     *
     * Generated from protobuf field <code>repeated .google.cloud.recaptchaenterprise.v1.TransactionData.User merchants = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $merchants;
    /**
     * Optional. Items purchased in this transaction.
     *
     * Generated from protobuf field <code>repeated .google.cloud.recaptchaenterprise.v1.TransactionData.Item items = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $items;
    /**
     * Optional. Information about the payment gateway's response to the
     * transaction.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.TransactionData.GatewayInfo gateway_info = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $gateway_info = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $transaction_id
     *           Unique identifier for the transaction. This custom identifier can be used
     *           to reference this transaction in the future, for example, labeling a refund
     *           or chargeback event. Two attempts at the same transaction should use the
     *           same transaction id.
     *     @type string $payment_method
     *           Optional. The payment method for the transaction. The allowed values are:
     *           * credit-card
     *           * debit-card
     *           * gift-card
     *           * processor-{name} (If a third-party is used, for example,
     *           processor-paypal)
     *           * custom-{name} (If an alternative method is used, for example,
     *           custom-crypto)
     *     @type string $card_bin
     *           Optional. The Bank Identification Number - generally the first 6 or 8
     *           digits of the card.
     *     @type string $card_last_four
     *           Optional. The last four digits of the card.
     *     @type string $currency_code
     *           Optional. The currency code in ISO-4217 format.
     *     @type float $value
     *           Optional. The decimal value of the transaction in the specified currency.
     *     @type float $shipping_value
     *           Optional. The value of shipping in the specified currency. 0 for free or no
     *           shipping.
     *     @type \Google\Cloud\RecaptchaEnterprise\V1\TransactionData\Address $shipping_address
     *           Optional. Destination address if this transaction involves shipping a
     *           physical item.
     *     @type \Google\Cloud\RecaptchaEnterprise\V1\TransactionData\Address $billing_address
     *           Optional. Address associated with the payment method when applicable.
     *     @type \Google\Cloud\RecaptchaEnterprise\V1\TransactionData\User $user
     *           Optional. Information about the user paying/initiating the transaction.
     *     @type array<\Google\Cloud\RecaptchaEnterprise\V1\TransactionData\User>|\Google\Protobuf\Internal\RepeatedField $merchants
     *           Optional. Information about the user or users fulfilling the transaction.
     *     @type array<\Google\Cloud\RecaptchaEnterprise\V1\TransactionData\Item>|\Google\Protobuf\Internal\RepeatedField $items
     *           Optional. Items purchased in this transaction.
     *     @type \Google\Cloud\RecaptchaEnterprise\V1\TransactionData\GatewayInfo $gateway_info
     *           Optional. Information about the payment gateway's response to the
     *           transaction.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recaptchaenterprise\V1\Recaptchaenterprise::initOnce();
        parent::__construct($data);
    }

    /**
     * Unique identifier for the transaction. This custom identifier can be used
     * to reference this transaction in the future, for example, labeling a refund
     * or chargeback event. Two attempts at the same transaction should use the
     * same transaction id.
     *
     * Generated from protobuf field <code>optional string transaction_id = 11;</code>
     * @return string
     */
    public function getTransactionId()
    {
        return isset($this->transaction_id) ? $this->transaction_id : '';
    }

    public function hasTransactionId()
    {
        return isset($this->transaction_id);
    }

    public function clearTransactionId()
    {
        unset($this->transaction_id);
    }

    /**
     * Unique identifier for the transaction. This custom identifier can be used
     * to reference this transaction in the future, for example, labeling a refund
     * or chargeback event. Two attempts at the same transaction should use the
     * same transaction id.
     *
     * Generated from protobuf field <code>optional string transaction_id = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setTransactionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->transaction_id = $var;

        return $this;
    }

    /**
     * Optional. The payment method for the transaction. The allowed values are:
     * * credit-card
     * * debit-card
     * * gift-card
     * * processor-{name} (If a third-party is used, for example,
     * processor-paypal)
     * * custom-{name} (If an alternative method is used, for example,
     * custom-crypto)
     *
     * Generated from protobuf field <code>string payment_method = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->payment_method;
    }

    /**
     * Optional. The payment method for the transaction. The allowed values are:
     * * credit-card
     * * debit-card
     * * gift-card
     * * processor-{name} (If a third-party is used, for example,
     * processor-paypal)
     * * custom-{name} (If an alternative method is used, for example,
     * custom-crypto)
     *
     * Generated from protobuf field <code>string payment_method = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPaymentMethod($var)
    {
        GPBUtil::checkString($var, True);
        $this->payment_method = $var;

        return $this;
    }

    /**
     * Optional. The Bank Identification Number - generally the first 6 or 8
     * digits of the card.
     *
     * Generated from protobuf field <code>string card_bin = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getCardBin()
    {
        return $this->card_bin;
    }

    /**
     * Optional. The Bank Identification Number - generally the first 6 or 8
     * digits of the card.
     *
     * Generated from protobuf field <code>string card_bin = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setCardBin($var)
    {
        GPBUtil::checkString($var, True);
        $this->card_bin = $var;

        return $this;
    }

    /**
     * Optional. The last four digits of the card.
     *
     * Generated from protobuf field <code>string card_last_four = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getCardLastFour()
    {
        return $this->card_last_four;
    }

    /**
     * Optional. The last four digits of the card.
     *
     * Generated from protobuf field <code>string card_last_four = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setCardLastFour($var)
    {
        GPBUtil::checkString($var, True);
        $this->card_last_four = $var;

        return $this;
    }

    /**
     * Optional. The currency code in ISO-4217 format.
     *
     * Generated from protobuf field <code>string currency_code = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currency_code;
    }

    /**
     * Optional. The currency code in ISO-4217 format.
     *
     * Generated from protobuf field <code>string currency_code = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setCurrencyCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->currency_code = $var;

        return $this;
    }

    /**
     * Optional. The decimal value of the transaction in the specified currency.
     *
     * Generated from protobuf field <code>double value = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Optional. The decimal value of the transaction in the specified currency.
     *
     * Generated from protobuf field <code>double value = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param float $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->value = $var;

        return $this;
    }

    /**
     * Optional. The value of shipping in the specified currency. 0 for free or no
     * shipping.
     *
     * Generated from protobuf field <code>double shipping_value = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return float
     */
    public function getShippingValue()
    {
        return $this->shipping_value;
    }

    /**
     * Optional. The value of shipping in the specified currency. 0 for free or no
     * shipping.
     *
     * Generated from protobuf field <code>double shipping_value = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param float $var
     * @return $this
     */
    public function setShippingValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->shipping_value = $var;

        return $this;
    }

    /**
     * Optional. Destination address if this transaction involves shipping a
     * physical item.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.TransactionData.Address shipping_address = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\RecaptchaEnterprise\V1\TransactionData\Address|null
     */
    public function getShippingAddress()
    {
        return $this->shipping_address;
    }

    public function hasShippingAddress()
    {
        return isset($this->shipping_address);
    }

    public function clearShippingAddress()
    {
        unset($this->shipping_address);
    }

    /**
     * Optional. Destination address if this transaction involves shipping a
     * physical item.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.TransactionData.Address shipping_address = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\RecaptchaEnterprise\V1\TransactionData\Address $var
     * @return $this
     */
    public function setShippingAddress($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\RecaptchaEnterprise\V1\TransactionData\Address::class);
        $this->shipping_address = $var;

        return $this;
    }

    /**
     * Optional. Address associated with the payment method when applicable.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.TransactionData.Address billing_address = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\RecaptchaEnterprise\V1\TransactionData\Address|null
     */
    public function getBillingAddress()
    {
        return $this->billing_address;
    }

    public function hasBillingAddress()
    {
        return isset($this->billing_address);
    }

    public function clearBillingAddress()
    {
        unset($this->billing_address);
    }

    /**
     * Optional. Address associated with the payment method when applicable.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.TransactionData.Address billing_address = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\RecaptchaEnterprise\V1\TransactionData\Address $var
     * @return $this
     */
    public function setBillingAddress($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\RecaptchaEnterprise\V1\TransactionData\Address::class);
        $this->billing_address = $var;

        return $this;
    }

    /**
     * Optional. Information about the user paying/initiating the transaction.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.TransactionData.User user = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\RecaptchaEnterprise\V1\TransactionData\User|null
     */
    public function getUser()
    {
        return $this->user;
    }

    public function hasUser()
    {
        return isset($this->user);
    }

    public function clearUser()
    {
        unset($this->user);
    }

    /**
     * Optional. Information about the user paying/initiating the transaction.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.TransactionData.User user = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\RecaptchaEnterprise\V1\TransactionData\User $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\RecaptchaEnterprise\V1\TransactionData\User::class);
        $this->user = $var;

        return $this;
    }

    /**
     * Optional. Information about the user or users fulfilling the transaction.
     *
     * Generated from protobuf field <code>repeated .google.cloud.recaptchaenterprise.v1.TransactionData.User merchants = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMerchants()
    {
        return $this->merchants;
    }

    /**
     * Optional. Information about the user or users fulfilling the transaction.
     *
     * Generated from protobuf field <code>repeated .google.cloud.recaptchaenterprise.v1.TransactionData.User merchants = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\RecaptchaEnterprise\V1\TransactionData\User>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMerchants($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\RecaptchaEnterprise\V1\TransactionData\User::class);
        $this->merchants = $arr;

        return $this;
    }

    /**
     * Optional. Items purchased in this transaction.
     *
     * Generated from protobuf field <code>repeated .google.cloud.recaptchaenterprise.v1.TransactionData.Item items = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Optional. Items purchased in this transaction.
     *
     * Generated from protobuf field <code>repeated .google.cloud.recaptchaenterprise.v1.TransactionData.Item items = 14 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\RecaptchaEnterprise\V1\TransactionData\Item>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\RecaptchaEnterprise\V1\TransactionData\Item::class);
        $this->items = $arr;

        return $this;
    }

    /**
     * Optional. Information about the payment gateway's response to the
     * transaction.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.TransactionData.GatewayInfo gateway_info = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\RecaptchaEnterprise\V1\TransactionData\GatewayInfo|null
     */
    public function getGatewayInfo()
    {
        return $this->gateway_info;
    }

    public function hasGatewayInfo()
    {
        return isset($this->gateway_info);
    }

    public function clearGatewayInfo()
    {
        unset($this->gateway_info);
    }

    /**
     * Optional. Information about the payment gateway's response to the
     * transaction.
     *
     * Generated from protobuf field <code>.google.cloud.recaptchaenterprise.v1.TransactionData.GatewayInfo gateway_info = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\RecaptchaEnterprise\V1\TransactionData\GatewayInfo $var
     * @return $this
     */
    public function setGatewayInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\RecaptchaEnterprise\V1\TransactionData\GatewayInfo::class);
        $this->gateway_info = $var;

        return $this;
    }

}

