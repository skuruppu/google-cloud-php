<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1/query.proto

namespace Google\Cloud\Datastore\V1\FindNearest;

use UnexpectedValueException;

/**
 * The distance measure to use when comparing vectors.
 *
 * Protobuf type <code>google.datastore.v1.FindNearest.DistanceMeasure</code>
 */
class DistanceMeasure
{
    /**
     * Should not be set.
     *
     * Generated from protobuf enum <code>DISTANCE_MEASURE_UNSPECIFIED = 0;</code>
     */
    const DISTANCE_MEASURE_UNSPECIFIED = 0;
    /**
     * Measures the EUCLIDEAN distance between the vectors. See
     * [Euclidean](https://en.wikipedia.org/wiki/Euclidean_distance) to learn
     * more. The resulting distance decreases the more similar two vectors are.
     *
     * Generated from protobuf enum <code>EUCLIDEAN = 1;</code>
     */
    const EUCLIDEAN = 1;
    /**
     * COSINE distance compares vectors based on the angle between them, which
     * allows you to measure similarity that isn't based on the vectors
     * magnitude. We recommend using DOT_PRODUCT with unit normalized vectors
     * instead of COSINE distance, which is mathematically equivalent with
     * better performance. See [Cosine
     * Similarity](https://en.wikipedia.org/wiki/Cosine_similarity) to learn
     * more about COSINE similarity and COSINE distance. The resulting COSINE
     * distance decreases the more similar two vectors are.
     *
     * Generated from protobuf enum <code>COSINE = 2;</code>
     */
    const COSINE = 2;
    /**
     * Similar to cosine but is affected by the magnitude of the vectors. See
     * [Dot Product](https://en.wikipedia.org/wiki/Dot_product) to learn more.
     * The resulting distance increases the more similar two vectors are.
     *
     * Generated from protobuf enum <code>DOT_PRODUCT = 3;</code>
     */
    const DOT_PRODUCT = 3;

    private static $valueToName = [
        self::DISTANCE_MEASURE_UNSPECIFIED => 'DISTANCE_MEASURE_UNSPECIFIED',
        self::EUCLIDEAN => 'EUCLIDEAN',
        self::COSINE => 'COSINE',
        self::DOT_PRODUCT => 'DOT_PRODUCT',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DistanceMeasure::class, \Google\Cloud\Datastore\V1\FindNearest_DistanceMeasure::class);

