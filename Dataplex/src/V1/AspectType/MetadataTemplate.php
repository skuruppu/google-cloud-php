<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/catalog.proto

namespace Google\Cloud\Dataplex\V1\AspectType;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * MetadataTemplate definition for an AspectType.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.AspectType.MetadataTemplate</code>
 */
class MetadataTemplate extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Index is used to encode Template messages. The value of index
     * can range between 1 and 2,147,483,647. Index must be unique within all
     * fields in a Template. (Nested Templates can reuse indexes). Once a
     * Template is defined, the index cannot be changed, because it identifies
     * the field in the actual storage format. Index is a mandatory field, but
     * it is optional for top level fields, and map/array "values" definitions.
     *
     * Generated from protobuf field <code>int32 index = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $index = 0;
    /**
     * Required. The name of the field.
     *
     * Generated from protobuf field <code>string name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $name = '';
    /**
     * Required. The datatype of this field. The following values are supported:
     * Primitive types:
     * * string
     * * integer
     * * boolean
     * * double
     * * datetime. Must be of the format RFC3339 UTC "Zulu" (Examples:
     * "2014-10-02T15:01:23Z" and "2014-10-02T15:01:23.045123456Z").
     * Complex types:
     * * enum
     * * array
     * * map
     * * record
     *
     * Generated from protobuf field <code>string type = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $type = '';
    /**
     * Optional. Field definition. You must specify it if the type is record. It
     * defines the nested fields.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.AspectType.MetadataTemplate record_fields = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $record_fields;
    /**
     * Optional. The list of values for an enum type. You must define it if the
     * type is enum.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.AspectType.MetadataTemplate.EnumValue enum_values = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $enum_values;
    /**
     * Optional. If the type is map, set map_items. map_items can refer to a
     * primitive field or a complex (record only) field. To specify a primitive
     * field, you only need to set name and type in the nested
     * MetadataTemplate. The recommended value for the name field is item, as
     * this isn't used in the actual payload.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.AspectType.MetadataTemplate map_items = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $map_items = null;
    /**
     * Optional. If the type is array, set array_items. array_items can refer
     * to a primitive field or a complex (record only) field. To specify a
     * primitive field, you only need to set name and type in the nested
     * MetadataTemplate. The recommended value for the name field is item, as
     * this isn't used in the actual payload.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.AspectType.MetadataTemplate array_items = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $array_items = null;
    /**
     * Optional. You can use type id if this definition of the field needs to be
     * reused later. The type id must be unique across the entire template. You
     * can only specify it if the field type is record.
     *
     * Generated from protobuf field <code>string type_id = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $type_id = '';
    /**
     * Optional. A reference to another field definition (not an inline
     * definition). The value must be equal to the value of an id field defined
     * elsewhere in the MetadataTemplate. Only fields with record type can
     * refer to other fields.
     *
     * Generated from protobuf field <code>string type_ref = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $type_ref = '';
    /**
     * Optional. Specifies the constraints on this field.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.AspectType.MetadataTemplate.Constraints constraints = 50 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $constraints = null;
    /**
     * Optional. Specifies annotations on this field.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.AspectType.MetadataTemplate.Annotations annotations = 51 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $annotations = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $index
     *           Optional. Index is used to encode Template messages. The value of index
     *           can range between 1 and 2,147,483,647. Index must be unique within all
     *           fields in a Template. (Nested Templates can reuse indexes). Once a
     *           Template is defined, the index cannot be changed, because it identifies
     *           the field in the actual storage format. Index is a mandatory field, but
     *           it is optional for top level fields, and map/array "values" definitions.
     *     @type string $name
     *           Required. The name of the field.
     *     @type string $type
     *           Required. The datatype of this field. The following values are supported:
     *           Primitive types:
     *           * string
     *           * integer
     *           * boolean
     *           * double
     *           * datetime. Must be of the format RFC3339 UTC "Zulu" (Examples:
     *           "2014-10-02T15:01:23Z" and "2014-10-02T15:01:23.045123456Z").
     *           Complex types:
     *           * enum
     *           * array
     *           * map
     *           * record
     *     @type array<\Google\Cloud\Dataplex\V1\AspectType\MetadataTemplate>|\Google\Protobuf\Internal\RepeatedField $record_fields
     *           Optional. Field definition. You must specify it if the type is record. It
     *           defines the nested fields.
     *     @type array<\Google\Cloud\Dataplex\V1\AspectType\MetadataTemplate\EnumValue>|\Google\Protobuf\Internal\RepeatedField $enum_values
     *           Optional. The list of values for an enum type. You must define it if the
     *           type is enum.
     *     @type \Google\Cloud\Dataplex\V1\AspectType\MetadataTemplate $map_items
     *           Optional. If the type is map, set map_items. map_items can refer to a
     *           primitive field or a complex (record only) field. To specify a primitive
     *           field, you only need to set name and type in the nested
     *           MetadataTemplate. The recommended value for the name field is item, as
     *           this isn't used in the actual payload.
     *     @type \Google\Cloud\Dataplex\V1\AspectType\MetadataTemplate $array_items
     *           Optional. If the type is array, set array_items. array_items can refer
     *           to a primitive field or a complex (record only) field. To specify a
     *           primitive field, you only need to set name and type in the nested
     *           MetadataTemplate. The recommended value for the name field is item, as
     *           this isn't used in the actual payload.
     *     @type string $type_id
     *           Optional. You can use type id if this definition of the field needs to be
     *           reused later. The type id must be unique across the entire template. You
     *           can only specify it if the field type is record.
     *     @type string $type_ref
     *           Optional. A reference to another field definition (not an inline
     *           definition). The value must be equal to the value of an id field defined
     *           elsewhere in the MetadataTemplate. Only fields with record type can
     *           refer to other fields.
     *     @type \Google\Cloud\Dataplex\V1\AspectType\MetadataTemplate\Constraints $constraints
     *           Optional. Specifies the constraints on this field.
     *     @type \Google\Cloud\Dataplex\V1\AspectType\MetadataTemplate\Annotations $annotations
     *           Optional. Specifies annotations on this field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Catalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Index is used to encode Template messages. The value of index
     * can range between 1 and 2,147,483,647. Index must be unique within all
     * fields in a Template. (Nested Templates can reuse indexes). Once a
     * Template is defined, the index cannot be changed, because it identifies
     * the field in the actual storage format. Index is a mandatory field, but
     * it is optional for top level fields, and map/array "values" definitions.
     *
     * Generated from protobuf field <code>int32 index = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Optional. Index is used to encode Template messages. The value of index
     * can range between 1 and 2,147,483,647. Index must be unique within all
     * fields in a Template. (Nested Templates can reuse indexes). Once a
     * Template is defined, the index cannot be changed, because it identifies
     * the field in the actual storage format. Index is a mandatory field, but
     * it is optional for top level fields, and map/array "values" definitions.
     *
     * Generated from protobuf field <code>int32 index = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->index = $var;

        return $this;
    }

    /**
     * Required. The name of the field.
     *
     * Generated from protobuf field <code>string name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the field.
     *
     * Generated from protobuf field <code>string name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Required. The datatype of this field. The following values are supported:
     * Primitive types:
     * * string
     * * integer
     * * boolean
     * * double
     * * datetime. Must be of the format RFC3339 UTC "Zulu" (Examples:
     * "2014-10-02T15:01:23Z" and "2014-10-02T15:01:23.045123456Z").
     * Complex types:
     * * enum
     * * array
     * * map
     * * record
     *
     * Generated from protobuf field <code>string type = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Required. The datatype of this field. The following values are supported:
     * Primitive types:
     * * string
     * * integer
     * * boolean
     * * double
     * * datetime. Must be of the format RFC3339 UTC "Zulu" (Examples:
     * "2014-10-02T15:01:23Z" and "2014-10-02T15:01:23.045123456Z").
     * Complex types:
     * * enum
     * * array
     * * map
     * * record
     *
     * Generated from protobuf field <code>string type = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * Optional. Field definition. You must specify it if the type is record. It
     * defines the nested fields.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.AspectType.MetadataTemplate record_fields = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRecordFields()
    {
        return $this->record_fields;
    }

    /**
     * Optional. Field definition. You must specify it if the type is record. It
     * defines the nested fields.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.AspectType.MetadataTemplate record_fields = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\Dataplex\V1\AspectType\MetadataTemplate>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRecordFields($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataplex\V1\AspectType\MetadataTemplate::class);
        $this->record_fields = $arr;

        return $this;
    }

    /**
     * Optional. The list of values for an enum type. You must define it if the
     * type is enum.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.AspectType.MetadataTemplate.EnumValue enum_values = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEnumValues()
    {
        return $this->enum_values;
    }

    /**
     * Optional. The list of values for an enum type. You must define it if the
     * type is enum.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.AspectType.MetadataTemplate.EnumValue enum_values = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\Dataplex\V1\AspectType\MetadataTemplate\EnumValue>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEnumValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataplex\V1\AspectType\MetadataTemplate\EnumValue::class);
        $this->enum_values = $arr;

        return $this;
    }

    /**
     * Optional. If the type is map, set map_items. map_items can refer to a
     * primitive field or a complex (record only) field. To specify a primitive
     * field, you only need to set name and type in the nested
     * MetadataTemplate. The recommended value for the name field is item, as
     * this isn't used in the actual payload.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.AspectType.MetadataTemplate map_items = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataplex\V1\AspectType\MetadataTemplate|null
     */
    public function getMapItems()
    {
        return $this->map_items;
    }

    public function hasMapItems()
    {
        return isset($this->map_items);
    }

    public function clearMapItems()
    {
        unset($this->map_items);
    }

    /**
     * Optional. If the type is map, set map_items. map_items can refer to a
     * primitive field or a complex (record only) field. To specify a primitive
     * field, you only need to set name and type in the nested
     * MetadataTemplate. The recommended value for the name field is item, as
     * this isn't used in the actual payload.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.AspectType.MetadataTemplate map_items = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataplex\V1\AspectType\MetadataTemplate $var
     * @return $this
     */
    public function setMapItems($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\AspectType\MetadataTemplate::class);
        $this->map_items = $var;

        return $this;
    }

    /**
     * Optional. If the type is array, set array_items. array_items can refer
     * to a primitive field or a complex (record only) field. To specify a
     * primitive field, you only need to set name and type in the nested
     * MetadataTemplate. The recommended value for the name field is item, as
     * this isn't used in the actual payload.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.AspectType.MetadataTemplate array_items = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataplex\V1\AspectType\MetadataTemplate|null
     */
    public function getArrayItems()
    {
        return $this->array_items;
    }

    public function hasArrayItems()
    {
        return isset($this->array_items);
    }

    public function clearArrayItems()
    {
        unset($this->array_items);
    }

    /**
     * Optional. If the type is array, set array_items. array_items can refer
     * to a primitive field or a complex (record only) field. To specify a
     * primitive field, you only need to set name and type in the nested
     * MetadataTemplate. The recommended value for the name field is item, as
     * this isn't used in the actual payload.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.AspectType.MetadataTemplate array_items = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataplex\V1\AspectType\MetadataTemplate $var
     * @return $this
     */
    public function setArrayItems($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\AspectType\MetadataTemplate::class);
        $this->array_items = $var;

        return $this;
    }

    /**
     * Optional. You can use type id if this definition of the field needs to be
     * reused later. The type id must be unique across the entire template. You
     * can only specify it if the field type is record.
     *
     * Generated from protobuf field <code>string type_id = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getTypeId()
    {
        return $this->type_id;
    }

    /**
     * Optional. You can use type id if this definition of the field needs to be
     * reused later. The type id must be unique across the entire template. You
     * can only specify it if the field type is record.
     *
     * Generated from protobuf field <code>string type_id = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setTypeId($var)
    {
        GPBUtil::checkString($var, True);
        $this->type_id = $var;

        return $this;
    }

    /**
     * Optional. A reference to another field definition (not an inline
     * definition). The value must be equal to the value of an id field defined
     * elsewhere in the MetadataTemplate. Only fields with record type can
     * refer to other fields.
     *
     * Generated from protobuf field <code>string type_ref = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getTypeRef()
    {
        return $this->type_ref;
    }

    /**
     * Optional. A reference to another field definition (not an inline
     * definition). The value must be equal to the value of an id field defined
     * elsewhere in the MetadataTemplate. Only fields with record type can
     * refer to other fields.
     *
     * Generated from protobuf field <code>string type_ref = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setTypeRef($var)
    {
        GPBUtil::checkString($var, True);
        $this->type_ref = $var;

        return $this;
    }

    /**
     * Optional. Specifies the constraints on this field.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.AspectType.MetadataTemplate.Constraints constraints = 50 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataplex\V1\AspectType\MetadataTemplate\Constraints|null
     */
    public function getConstraints()
    {
        return $this->constraints;
    }

    public function hasConstraints()
    {
        return isset($this->constraints);
    }

    public function clearConstraints()
    {
        unset($this->constraints);
    }

    /**
     * Optional. Specifies the constraints on this field.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.AspectType.MetadataTemplate.Constraints constraints = 50 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataplex\V1\AspectType\MetadataTemplate\Constraints $var
     * @return $this
     */
    public function setConstraints($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\AspectType\MetadataTemplate\Constraints::class);
        $this->constraints = $var;

        return $this;
    }

    /**
     * Optional. Specifies annotations on this field.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.AspectType.MetadataTemplate.Annotations annotations = 51 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataplex\V1\AspectType\MetadataTemplate\Annotations|null
     */
    public function getAnnotations()
    {
        return $this->annotations;
    }

    public function hasAnnotations()
    {
        return isset($this->annotations);
    }

    public function clearAnnotations()
    {
        unset($this->annotations);
    }

    /**
     * Optional. Specifies annotations on this field.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.AspectType.MetadataTemplate.Annotations annotations = 51 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataplex\V1\AspectType\MetadataTemplate\Annotations $var
     * @return $this
     */
    public function setAnnotations($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\AspectType\MetadataTemplate\Annotations::class);
        $this->annotations = $var;

        return $this;
    }

}


