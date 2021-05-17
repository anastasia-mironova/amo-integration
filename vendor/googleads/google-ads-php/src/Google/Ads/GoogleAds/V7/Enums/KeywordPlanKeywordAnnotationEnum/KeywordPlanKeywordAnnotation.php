<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v7/enums/keyword_plan_keyword_annotation.proto

namespace Google\Ads\GoogleAds\V7\Enums\KeywordPlanKeywordAnnotationEnum;

use UnexpectedValueException;

/**
 * Enumerates keyword plan annotations that can be requested.
 *
 * Protobuf type <code>google.ads.googleads.v7.enums.KeywordPlanKeywordAnnotationEnum.KeywordPlanKeywordAnnotation</code>
 */
class KeywordPlanKeywordAnnotation
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The value is unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Return the keyword concept and concept group data.
     *
     * Generated from protobuf enum <code>KEYWORD_CONCEPT = 2;</code>
     */
    const KEYWORD_CONCEPT = 2;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::KEYWORD_CONCEPT => 'KEYWORD_CONCEPT',
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
class_alias(KeywordPlanKeywordAnnotation::class, \Google\Ads\GoogleAds\V7\Enums\KeywordPlanKeywordAnnotationEnum_KeywordPlanKeywordAnnotation::class);

