<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recaptchaenterprise/v1/recaptchaenterprise.proto

namespace Google\Cloud\RecaptchaEnterprise\V1\FraudSignals\CardSignals;

use UnexpectedValueException;

/**
 * Risk labels describing the card being assessed, such as its funding
 * mechanism.
 *
 * Protobuf type <code>google.cloud.recaptchaenterprise.v1.FraudSignals.CardSignals.CardLabel</code>
 */
class CardLabel
{
    /**
     * No label specified.
     *
     * Generated from protobuf enum <code>CARD_LABEL_UNSPECIFIED = 0;</code>
     */
    const CARD_LABEL_UNSPECIFIED = 0;
    /**
     * This card has been detected as prepaid.
     *
     * Generated from protobuf enum <code>PREPAID = 1;</code>
     */
    const PREPAID = 1;
    /**
     * This card has been detected as virtual, such as a card number generated
     * for a single transaction or merchant.
     *
     * Generated from protobuf enum <code>VIRTUAL = 2;</code>
     */
    const VIRTUAL = 2;
    /**
     * This card has been detected as being used in an unexpected geographic
     * location.
     *
     * Generated from protobuf enum <code>UNEXPECTED_LOCATION = 3;</code>
     */
    const UNEXPECTED_LOCATION = 3;

    private static $valueToName = [
        self::CARD_LABEL_UNSPECIFIED => 'CARD_LABEL_UNSPECIFIED',
        self::PREPAID => 'PREPAID',
        self::VIRTUAL => 'VIRTUAL',
        self::UNEXPECTED_LOCATION => 'UNEXPECTED_LOCATION',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


