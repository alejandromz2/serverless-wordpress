<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/protobuf/descriptor.proto
namespace DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal;

use DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType;
use DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBWire;
use DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\RepeatedField;
use DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\InputStream;
use DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBUtil;
/**
 * Describes the relationship between generated code and its original source
 * file. A GeneratedCodeInfo message is associated with only one generated
 * source file, but may contain references to different source .proto files.
 *
 * Generated from protobuf message <code>google.protobuf.GeneratedCodeInfo</code>
 */
class GeneratedCodeInfo extends \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\Message
{
    /**
     * An Annotation connects some span of text in generated code to an element
     * of its generating .proto file.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.GeneratedCodeInfo.Annotation annotation = 1;</code>
     */
    private $annotation;
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Protobuf\Internal\GeneratedCodeInfo\Annotation>|\Google\Protobuf\Internal\RepeatedField $annotation
     *           An Annotation connects some span of text in generated code to an element
     *           of its generating .proto file.
     * }
     */
    public function __construct($data = NULL)
    {
        \DeliciousBrains\WP_Offload_Media\Gcp\GPBMetadata\Google\Protobuf\Internal\Descriptor::initOnce();
        parent::__construct($data);
    }
    /**
     * An Annotation connects some span of text in generated code to an element
     * of its generating .proto file.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.GeneratedCodeInfo.Annotation annotation = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAnnotation()
    {
        return $this->annotation;
    }
    /**
     * An Annotation connects some span of text in generated code to an element
     * of its generating .proto file.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.GeneratedCodeInfo.Annotation annotation = 1;</code>
     * @param array<\Google\Protobuf\Internal\GeneratedCodeInfo\Annotation>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAnnotation($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType::MESSAGE, \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GeneratedCodeInfo\Annotation::class);
        $this->annotation = $arr;
        return $this;
    }
}
