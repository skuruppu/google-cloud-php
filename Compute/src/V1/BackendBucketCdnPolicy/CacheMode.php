<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\BackendBucketCdnPolicy;

use UnexpectedValueException;

/**
 * Specifies the cache setting for all responses from this backend. The possible values are: USE_ORIGIN_HEADERS Requires the origin to set valid caching headers to cache content. Responses without these headers will not be cached at Google's edge, and will require a full trip to the origin on every request, potentially impacting performance and increasing load on the origin server. FORCE_CACHE_ALL Cache all content, ignoring any "private", "no-store" or "no-cache" directives in Cache-Control response headers. Warning: this may result in Cloud CDN caching private, per-user (user identifiable) content. CACHE_ALL_STATIC Automatically cache static content, including common image formats, media (video and audio), and web assets (JavaScript and CSS). Requests and responses that are marked as uncacheable, as well as dynamic content (including HTML), will not be cached. If no value is provided for cdnPolicy.cacheMode, it defaults to CACHE_ALL_STATIC.
 *
 * Protobuf type <code>google.cloud.compute.v1.BackendBucketCdnPolicy.CacheMode</code>
 */
class CacheMode
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_CACHE_MODE = 0;</code>
     */
    const UNDEFINED_CACHE_MODE = 0;
    /**
     * Automatically cache static content, including common image formats, media (video and audio), and web assets (JavaScript and CSS). Requests and responses that are marked as uncacheable, as well as dynamic content (including HTML), will not be cached.
     *
     * Generated from protobuf enum <code>CACHE_ALL_STATIC = 355027945;</code>
     */
    const CACHE_ALL_STATIC = 355027945;
    /**
     * Cache all content, ignoring any "private", "no-store" or "no-cache" directives in Cache-Control response headers. Warning: this may result in Cloud CDN caching private, per-user (user identifiable) content.
     *
     * Generated from protobuf enum <code>FORCE_CACHE_ALL = 486026928;</code>
     */
    const FORCE_CACHE_ALL = 486026928;
    /**
     * Generated from protobuf enum <code>INVALID_CACHE_MODE = 381295560;</code>
     */
    const INVALID_CACHE_MODE = 381295560;
    /**
     * Requires the origin to set valid caching headers to cache content. Responses without these headers will not be cached at Google's edge, and will require a full trip to the origin on every request, potentially impacting performance and increasing load on the origin server.
     *
     * Generated from protobuf enum <code>USE_ORIGIN_HEADERS = 55380261;</code>
     */
    const USE_ORIGIN_HEADERS = 55380261;

    private static $valueToName = [
        self::UNDEFINED_CACHE_MODE => 'UNDEFINED_CACHE_MODE',
        self::CACHE_ALL_STATIC => 'CACHE_ALL_STATIC',
        self::FORCE_CACHE_ALL => 'FORCE_CACHE_ALL',
        self::INVALID_CACHE_MODE => 'INVALID_CACHE_MODE',
        self::USE_ORIGIN_HEADERS => 'USE_ORIGIN_HEADERS',
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


