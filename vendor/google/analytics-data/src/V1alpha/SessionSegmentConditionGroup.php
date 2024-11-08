<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1alpha/data.proto

namespace Google\Analytics\Data\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Conditions tell Analytics what data to include in or exclude from the
 * segment.
 *
 * Generated from protobuf message <code>google.analytics.data.v1alpha.SessionSegmentConditionGroup</code>
 */
class SessionSegmentConditionGroup extends \Google\Protobuf\Internal\Message
{
    /**
     * Data is included or excluded from the segment based on if it matches
     * the condition group. This scoping defines how many events the
     * `segmentFilterExpression` is evaluated on before the condition group
     * is determined to be matched or not. For example if `conditionScoping =
     * SESSION_CRITERIA_WITHIN_SAME_SESSION`, the expression is evaluated on all
     * events in a session, and then, the condition group is determined to be
     * matched or not for this session. For example if `conditionScoping =
     * SESSION_CRITERIA_WITHIN_SAME_EVENT`, the expression is evaluated on a
     * single event, and then, the condition group is determined to be matched or
     * not for this session.
     * Optional. If unspecified, a `conditionScoping` of `WITHIN_SAME_SESSION`
     * is used.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.SessionCriteriaScoping condition_scoping = 1;</code>
     */
    private $condition_scoping = 0;
    /**
     * Data is included or excluded from the segment based on if it matches
     * this expression. Expressions express criteria on dimension, metrics,
     * and/or parameters.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.SegmentFilterExpression segment_filter_expression = 2;</code>
     */
    private $segment_filter_expression = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $condition_scoping
     *           Data is included or excluded from the segment based on if it matches
     *           the condition group. This scoping defines how many events the
     *           `segmentFilterExpression` is evaluated on before the condition group
     *           is determined to be matched or not. For example if `conditionScoping =
     *           SESSION_CRITERIA_WITHIN_SAME_SESSION`, the expression is evaluated on all
     *           events in a session, and then, the condition group is determined to be
     *           matched or not for this session. For example if `conditionScoping =
     *           SESSION_CRITERIA_WITHIN_SAME_EVENT`, the expression is evaluated on a
     *           single event, and then, the condition group is determined to be matched or
     *           not for this session.
     *           Optional. If unspecified, a `conditionScoping` of `WITHIN_SAME_SESSION`
     *           is used.
     *     @type \Google\Analytics\Data\V1alpha\SegmentFilterExpression $segment_filter_expression
     *           Data is included or excluded from the segment based on if it matches
     *           this expression. Expressions express criteria on dimension, metrics,
     *           and/or parameters.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Data\V1Alpha\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * Data is included or excluded from the segment based on if it matches
     * the condition group. This scoping defines how many events the
     * `segmentFilterExpression` is evaluated on before the condition group
     * is determined to be matched or not. For example if `conditionScoping =
     * SESSION_CRITERIA_WITHIN_SAME_SESSION`, the expression is evaluated on all
     * events in a session, and then, the condition group is determined to be
     * matched or not for this session. For example if `conditionScoping =
     * SESSION_CRITERIA_WITHIN_SAME_EVENT`, the expression is evaluated on a
     * single event, and then, the condition group is determined to be matched or
     * not for this session.
     * Optional. If unspecified, a `conditionScoping` of `WITHIN_SAME_SESSION`
     * is used.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.SessionCriteriaScoping condition_scoping = 1;</code>
     * @return int
     */
    public function getConditionScoping()
    {
        return $this->condition_scoping;
    }

    /**
     * Data is included or excluded from the segment based on if it matches
     * the condition group. This scoping defines how many events the
     * `segmentFilterExpression` is evaluated on before the condition group
     * is determined to be matched or not. For example if `conditionScoping =
     * SESSION_CRITERIA_WITHIN_SAME_SESSION`, the expression is evaluated on all
     * events in a session, and then, the condition group is determined to be
     * matched or not for this session. For example if `conditionScoping =
     * SESSION_CRITERIA_WITHIN_SAME_EVENT`, the expression is evaluated on a
     * single event, and then, the condition group is determined to be matched or
     * not for this session.
     * Optional. If unspecified, a `conditionScoping` of `WITHIN_SAME_SESSION`
     * is used.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.SessionCriteriaScoping condition_scoping = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setConditionScoping($var)
    {
        GPBUtil::checkEnum($var, \Google\Analytics\Data\V1alpha\SessionCriteriaScoping::class);
        $this->condition_scoping = $var;

        return $this;
    }

    /**
     * Data is included or excluded from the segment based on if it matches
     * this expression. Expressions express criteria on dimension, metrics,
     * and/or parameters.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.SegmentFilterExpression segment_filter_expression = 2;</code>
     * @return \Google\Analytics\Data\V1alpha\SegmentFilterExpression|null
     */
    public function getSegmentFilterExpression()
    {
        return $this->segment_filter_expression;
    }

    public function hasSegmentFilterExpression()
    {
        return isset($this->segment_filter_expression);
    }

    public function clearSegmentFilterExpression()
    {
        unset($this->segment_filter_expression);
    }

    /**
     * Data is included or excluded from the segment based on if it matches
     * this expression. Expressions express criteria on dimension, metrics,
     * and/or parameters.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.SegmentFilterExpression segment_filter_expression = 2;</code>
     * @param \Google\Analytics\Data\V1alpha\SegmentFilterExpression $var
     * @return $this
     */
    public function setSegmentFilterExpression($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Data\V1alpha\SegmentFilterExpression::class);
        $this->segment_filter_expression = $var;

        return $this;
    }

}
