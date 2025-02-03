<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/cx/v3/security_settings.proto

namespace Google\Cloud\Dialogflow\Cx\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents the settings related to security issues, such as data redaction
 * and data retention. It may take hours for updates on the settings to
 * propagate to all the related components and take effect.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.cx.v3.SecuritySettings</code>
 */
class SecuritySettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name of the settings.
     * Required for the
     * [SecuritySettingsService.UpdateSecuritySettings][google.cloud.dialogflow.cx.v3.SecuritySettingsService.UpdateSecuritySettings]
     * method.
     * [SecuritySettingsService.CreateSecuritySettings][google.cloud.dialogflow.cx.v3.SecuritySettingsService.CreateSecuritySettings]
     * populates the name automatically. Format:
     * `projects/<ProjectID>/locations/<LocationID>/securitySettings/<SecuritySettingsID>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Required. The human-readable name of the security settings, unique within
     * the location.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $display_name = '';
    /**
     * Strategy that defines how we do redaction.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.SecuritySettings.RedactionStrategy redaction_strategy = 3;</code>
     */
    protected $redaction_strategy = 0;
    /**
     * Defines the data for which Dialogflow applies redaction. Dialogflow does
     * not redact data that it does not have access to – for example, Cloud
     * logging.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.SecuritySettings.RedactionScope redaction_scope = 4;</code>
     */
    protected $redaction_scope = 0;
    /**
     * [DLP](https://cloud.google.com/dlp/docs) inspect template name. Use this
     * template to define inspect base settings.
     * The `DLP Inspect Templates Reader` role is needed on the Dialogflow
     * service identity service account (has the form
     * `service-PROJECT_NUMBER&#64;gcp-sa-dialogflow.iam.gserviceaccount.com`)
     * for your agent's project.
     * If empty, we use the default DLP inspect config.
     * The template name will have one of the following formats:
     * `projects/<ProjectID>/locations/<LocationID>/inspectTemplates/<TemplateID>`
     * OR
     * `organizations/<OrganizationID>/locations/<LocationID>/inspectTemplates/<TemplateID>`
     * Note: `inspect_template` must be located in the same region as the
     * `SecuritySettings`.
     *
     * Generated from protobuf field <code>string inspect_template = 9 [(.google.api.resource_reference) = {</code>
     */
    protected $inspect_template = '';
    /**
     * [DLP](https://cloud.google.com/dlp/docs) deidentify template name. Use this
     * template to define de-identification configuration for the content.
     * The `DLP De-identify Templates Reader` role is needed on the Dialogflow
     * service identity service account (has the form
     * `service-PROJECT_NUMBER&#64;gcp-sa-dialogflow.iam.gserviceaccount.com`)
     * for your agent's project.
     * If empty, Dialogflow replaces sensitive info with `[redacted]` text.
     * The template name will have one of the following formats:
     * `projects/<ProjectID>/locations/<LocationID>/deidentifyTemplates/<TemplateID>`
     * OR
     * `organizations/<OrganizationID>/locations/<LocationID>/deidentifyTemplates/<TemplateID>`
     * Note: `deidentify_template` must be located in the same region as the
     * `SecuritySettings`.
     *
     * Generated from protobuf field <code>string deidentify_template = 17 [(.google.api.resource_reference) = {</code>
     */
    protected $deidentify_template = '';
    /**
     * List of types of data to remove when retention settings triggers purge.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.SecuritySettings.PurgeDataType purge_data_types = 8;</code>
     */
    private $purge_data_types;
    /**
     * Controls audio export settings for post-conversation analytics when
     * ingesting audio to conversations via [Participants.AnalyzeContent][] or
     * [Participants.StreamingAnalyzeContent][].
     * If
     * [retention_strategy][google.cloud.dialogflow.cx.v3.SecuritySettings.retention_strategy]
     * is set to REMOVE_AFTER_CONVERSATION or [audio_export_settings.gcs_bucket][]
     * is empty, audio export is disabled.
     * If audio export is enabled, audio is recorded and saved to
     * [audio_export_settings.gcs_bucket][], subject to retention policy of
     * [audio_export_settings.gcs_bucket][].
     * This setting won't effect audio input for implicit sessions via
     * [Sessions.DetectIntent][google.cloud.dialogflow.cx.v3.Sessions.DetectIntent]
     * or
     * [Sessions.StreamingDetectIntent][google.cloud.dialogflow.cx.v3.Sessions.StreamingDetectIntent].
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.SecuritySettings.AudioExportSettings audio_export_settings = 12;</code>
     */
    protected $audio_export_settings = null;
    /**
     * Controls conversation exporting settings to Insights after conversation is
     * completed.
     * If
     * [retention_strategy][google.cloud.dialogflow.cx.v3.SecuritySettings.retention_strategy]
     * is set to REMOVE_AFTER_CONVERSATION, Insights export is disabled no matter
     * what you configure here.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.SecuritySettings.InsightsExportSettings insights_export_settings = 13;</code>
     */
    protected $insights_export_settings = null;
    protected $data_retention;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Resource name of the settings.
     *           Required for the
     *           [SecuritySettingsService.UpdateSecuritySettings][google.cloud.dialogflow.cx.v3.SecuritySettingsService.UpdateSecuritySettings]
     *           method.
     *           [SecuritySettingsService.CreateSecuritySettings][google.cloud.dialogflow.cx.v3.SecuritySettingsService.CreateSecuritySettings]
     *           populates the name automatically. Format:
     *           `projects/<ProjectID>/locations/<LocationID>/securitySettings/<SecuritySettingsID>`.
     *     @type string $display_name
     *           Required. The human-readable name of the security settings, unique within
     *           the location.
     *     @type int $redaction_strategy
     *           Strategy that defines how we do redaction.
     *     @type int $redaction_scope
     *           Defines the data for which Dialogflow applies redaction. Dialogflow does
     *           not redact data that it does not have access to – for example, Cloud
     *           logging.
     *     @type string $inspect_template
     *           [DLP](https://cloud.google.com/dlp/docs) inspect template name. Use this
     *           template to define inspect base settings.
     *           The `DLP Inspect Templates Reader` role is needed on the Dialogflow
     *           service identity service account (has the form
     *           `service-PROJECT_NUMBER&#64;gcp-sa-dialogflow.iam.gserviceaccount.com`)
     *           for your agent's project.
     *           If empty, we use the default DLP inspect config.
     *           The template name will have one of the following formats:
     *           `projects/<ProjectID>/locations/<LocationID>/inspectTemplates/<TemplateID>`
     *           OR
     *           `organizations/<OrganizationID>/locations/<LocationID>/inspectTemplates/<TemplateID>`
     *           Note: `inspect_template` must be located in the same region as the
     *           `SecuritySettings`.
     *     @type string $deidentify_template
     *           [DLP](https://cloud.google.com/dlp/docs) deidentify template name. Use this
     *           template to define de-identification configuration for the content.
     *           The `DLP De-identify Templates Reader` role is needed on the Dialogflow
     *           service identity service account (has the form
     *           `service-PROJECT_NUMBER&#64;gcp-sa-dialogflow.iam.gserviceaccount.com`)
     *           for your agent's project.
     *           If empty, Dialogflow replaces sensitive info with `[redacted]` text.
     *           The template name will have one of the following formats:
     *           `projects/<ProjectID>/locations/<LocationID>/deidentifyTemplates/<TemplateID>`
     *           OR
     *           `organizations/<OrganizationID>/locations/<LocationID>/deidentifyTemplates/<TemplateID>`
     *           Note: `deidentify_template` must be located in the same region as the
     *           `SecuritySettings`.
     *     @type int $retention_window_days
     *           Retains the data for the specified number of days.
     *           User must set a value lower than Dialogflow's default 365d TTL (30 days
     *           for Agent Assist traffic), higher value will be ignored and use default.
     *           Setting a value higher than that has no effect. A missing value or
     *           setting to 0 also means we use default TTL.
     *           When data retention configuration is changed, it only applies to the data
     *           created after the change; the TTL of existing data created before the
     *           change stays intact.
     *     @type int $retention_strategy
     *           Specifies the retention behavior defined by
     *           [SecuritySettings.RetentionStrategy][google.cloud.dialogflow.cx.v3.SecuritySettings.RetentionStrategy].
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $purge_data_types
     *           List of types of data to remove when retention settings triggers purge.
     *     @type \Google\Cloud\Dialogflow\Cx\V3\SecuritySettings\AudioExportSettings $audio_export_settings
     *           Controls audio export settings for post-conversation analytics when
     *           ingesting audio to conversations via [Participants.AnalyzeContent][] or
     *           [Participants.StreamingAnalyzeContent][].
     *           If
     *           [retention_strategy][google.cloud.dialogflow.cx.v3.SecuritySettings.retention_strategy]
     *           is set to REMOVE_AFTER_CONVERSATION or [audio_export_settings.gcs_bucket][]
     *           is empty, audio export is disabled.
     *           If audio export is enabled, audio is recorded and saved to
     *           [audio_export_settings.gcs_bucket][], subject to retention policy of
     *           [audio_export_settings.gcs_bucket][].
     *           This setting won't effect audio input for implicit sessions via
     *           [Sessions.DetectIntent][google.cloud.dialogflow.cx.v3.Sessions.DetectIntent]
     *           or
     *           [Sessions.StreamingDetectIntent][google.cloud.dialogflow.cx.v3.Sessions.StreamingDetectIntent].
     *     @type \Google\Cloud\Dialogflow\Cx\V3\SecuritySettings\InsightsExportSettings $insights_export_settings
     *           Controls conversation exporting settings to Insights after conversation is
     *           completed.
     *           If
     *           [retention_strategy][google.cloud.dialogflow.cx.v3.SecuritySettings.retention_strategy]
     *           is set to REMOVE_AFTER_CONVERSATION, Insights export is disabled no matter
     *           what you configure here.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\Cx\V3\SecuritySettings::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource name of the settings.
     * Required for the
     * [SecuritySettingsService.UpdateSecuritySettings][google.cloud.dialogflow.cx.v3.SecuritySettingsService.UpdateSecuritySettings]
     * method.
     * [SecuritySettingsService.CreateSecuritySettings][google.cloud.dialogflow.cx.v3.SecuritySettingsService.CreateSecuritySettings]
     * populates the name automatically. Format:
     * `projects/<ProjectID>/locations/<LocationID>/securitySettings/<SecuritySettingsID>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Resource name of the settings.
     * Required for the
     * [SecuritySettingsService.UpdateSecuritySettings][google.cloud.dialogflow.cx.v3.SecuritySettingsService.UpdateSecuritySettings]
     * method.
     * [SecuritySettingsService.CreateSecuritySettings][google.cloud.dialogflow.cx.v3.SecuritySettingsService.CreateSecuritySettings]
     * populates the name automatically. Format:
     * `projects/<ProjectID>/locations/<LocationID>/securitySettings/<SecuritySettingsID>`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * Required. The human-readable name of the security settings, unique within
     * the location.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. The human-readable name of the security settings, unique within
     * the location.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Strategy that defines how we do redaction.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.SecuritySettings.RedactionStrategy redaction_strategy = 3;</code>
     * @return int
     */
    public function getRedactionStrategy()
    {
        return $this->redaction_strategy;
    }

    /**
     * Strategy that defines how we do redaction.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.SecuritySettings.RedactionStrategy redaction_strategy = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setRedactionStrategy($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\Cx\V3\SecuritySettings\RedactionStrategy::class);
        $this->redaction_strategy = $var;

        return $this;
    }

    /**
     * Defines the data for which Dialogflow applies redaction. Dialogflow does
     * not redact data that it does not have access to – for example, Cloud
     * logging.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.SecuritySettings.RedactionScope redaction_scope = 4;</code>
     * @return int
     */
    public function getRedactionScope()
    {
        return $this->redaction_scope;
    }

    /**
     * Defines the data for which Dialogflow applies redaction. Dialogflow does
     * not redact data that it does not have access to – for example, Cloud
     * logging.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.SecuritySettings.RedactionScope redaction_scope = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setRedactionScope($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\Cx\V3\SecuritySettings\RedactionScope::class);
        $this->redaction_scope = $var;

        return $this;
    }

    /**
     * [DLP](https://cloud.google.com/dlp/docs) inspect template name. Use this
     * template to define inspect base settings.
     * The `DLP Inspect Templates Reader` role is needed on the Dialogflow
     * service identity service account (has the form
     * `service-PROJECT_NUMBER&#64;gcp-sa-dialogflow.iam.gserviceaccount.com`)
     * for your agent's project.
     * If empty, we use the default DLP inspect config.
     * The template name will have one of the following formats:
     * `projects/<ProjectID>/locations/<LocationID>/inspectTemplates/<TemplateID>`
     * OR
     * `organizations/<OrganizationID>/locations/<LocationID>/inspectTemplates/<TemplateID>`
     * Note: `inspect_template` must be located in the same region as the
     * `SecuritySettings`.
     *
     * Generated from protobuf field <code>string inspect_template = 9 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getInspectTemplate()
    {
        return $this->inspect_template;
    }

    /**
     * [DLP](https://cloud.google.com/dlp/docs) inspect template name. Use this
     * template to define inspect base settings.
     * The `DLP Inspect Templates Reader` role is needed on the Dialogflow
     * service identity service account (has the form
     * `service-PROJECT_NUMBER&#64;gcp-sa-dialogflow.iam.gserviceaccount.com`)
     * for your agent's project.
     * If empty, we use the default DLP inspect config.
     * The template name will have one of the following formats:
     * `projects/<ProjectID>/locations/<LocationID>/inspectTemplates/<TemplateID>`
     * OR
     * `organizations/<OrganizationID>/locations/<LocationID>/inspectTemplates/<TemplateID>`
     * Note: `inspect_template` must be located in the same region as the
     * `SecuritySettings`.
     *
     * Generated from protobuf field <code>string inspect_template = 9 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setInspectTemplate($var)
    {
        GPBUtil::checkString($var, True);
        $this->inspect_template = $var;

        return $this;
    }

    /**
     * [DLP](https://cloud.google.com/dlp/docs) deidentify template name. Use this
     * template to define de-identification configuration for the content.
     * The `DLP De-identify Templates Reader` role is needed on the Dialogflow
     * service identity service account (has the form
     * `service-PROJECT_NUMBER&#64;gcp-sa-dialogflow.iam.gserviceaccount.com`)
     * for your agent's project.
     * If empty, Dialogflow replaces sensitive info with `[redacted]` text.
     * The template name will have one of the following formats:
     * `projects/<ProjectID>/locations/<LocationID>/deidentifyTemplates/<TemplateID>`
     * OR
     * `organizations/<OrganizationID>/locations/<LocationID>/deidentifyTemplates/<TemplateID>`
     * Note: `deidentify_template` must be located in the same region as the
     * `SecuritySettings`.
     *
     * Generated from protobuf field <code>string deidentify_template = 17 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getDeidentifyTemplate()
    {
        return $this->deidentify_template;
    }

    /**
     * [DLP](https://cloud.google.com/dlp/docs) deidentify template name. Use this
     * template to define de-identification configuration for the content.
     * The `DLP De-identify Templates Reader` role is needed on the Dialogflow
     * service identity service account (has the form
     * `service-PROJECT_NUMBER&#64;gcp-sa-dialogflow.iam.gserviceaccount.com`)
     * for your agent's project.
     * If empty, Dialogflow replaces sensitive info with `[redacted]` text.
     * The template name will have one of the following formats:
     * `projects/<ProjectID>/locations/<LocationID>/deidentifyTemplates/<TemplateID>`
     * OR
     * `organizations/<OrganizationID>/locations/<LocationID>/deidentifyTemplates/<TemplateID>`
     * Note: `deidentify_template` must be located in the same region as the
     * `SecuritySettings`.
     *
     * Generated from protobuf field <code>string deidentify_template = 17 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setDeidentifyTemplate($var)
    {
        GPBUtil::checkString($var, True);
        $this->deidentify_template = $var;

        return $this;
    }

    /**
     * Retains the data for the specified number of days.
     * User must set a value lower than Dialogflow's default 365d TTL (30 days
     * for Agent Assist traffic), higher value will be ignored and use default.
     * Setting a value higher than that has no effect. A missing value or
     * setting to 0 also means we use default TTL.
     * When data retention configuration is changed, it only applies to the data
     * created after the change; the TTL of existing data created before the
     * change stays intact.
     *
     * Generated from protobuf field <code>int32 retention_window_days = 6;</code>
     * @return int
     */
    public function getRetentionWindowDays()
    {
        return $this->readOneof(6);
    }

    public function hasRetentionWindowDays()
    {
        return $this->hasOneof(6);
    }

    /**
     * Retains the data for the specified number of days.
     * User must set a value lower than Dialogflow's default 365d TTL (30 days
     * for Agent Assist traffic), higher value will be ignored and use default.
     * Setting a value higher than that has no effect. A missing value or
     * setting to 0 also means we use default TTL.
     * When data retention configuration is changed, it only applies to the data
     * created after the change; the TTL of existing data created before the
     * change stays intact.
     *
     * Generated from protobuf field <code>int32 retention_window_days = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setRetentionWindowDays($var)
    {
        GPBUtil::checkInt32($var);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Specifies the retention behavior defined by
     * [SecuritySettings.RetentionStrategy][google.cloud.dialogflow.cx.v3.SecuritySettings.RetentionStrategy].
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.SecuritySettings.RetentionStrategy retention_strategy = 7;</code>
     * @return int
     */
    public function getRetentionStrategy()
    {
        return $this->readOneof(7);
    }

    public function hasRetentionStrategy()
    {
        return $this->hasOneof(7);
    }

    /**
     * Specifies the retention behavior defined by
     * [SecuritySettings.RetentionStrategy][google.cloud.dialogflow.cx.v3.SecuritySettings.RetentionStrategy].
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.SecuritySettings.RetentionStrategy retention_strategy = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setRetentionStrategy($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\Cx\V3\SecuritySettings\RetentionStrategy::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * List of types of data to remove when retention settings triggers purge.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.SecuritySettings.PurgeDataType purge_data_types = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPurgeDataTypes()
    {
        return $this->purge_data_types;
    }

    /**
     * List of types of data to remove when retention settings triggers purge.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.cx.v3.SecuritySettings.PurgeDataType purge_data_types = 8;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPurgeDataTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\Dialogflow\Cx\V3\SecuritySettings\PurgeDataType::class);
        $this->purge_data_types = $arr;

        return $this;
    }

    /**
     * Controls audio export settings for post-conversation analytics when
     * ingesting audio to conversations via [Participants.AnalyzeContent][] or
     * [Participants.StreamingAnalyzeContent][].
     * If
     * [retention_strategy][google.cloud.dialogflow.cx.v3.SecuritySettings.retention_strategy]
     * is set to REMOVE_AFTER_CONVERSATION or [audio_export_settings.gcs_bucket][]
     * is empty, audio export is disabled.
     * If audio export is enabled, audio is recorded and saved to
     * [audio_export_settings.gcs_bucket][], subject to retention policy of
     * [audio_export_settings.gcs_bucket][].
     * This setting won't effect audio input for implicit sessions via
     * [Sessions.DetectIntent][google.cloud.dialogflow.cx.v3.Sessions.DetectIntent]
     * or
     * [Sessions.StreamingDetectIntent][google.cloud.dialogflow.cx.v3.Sessions.StreamingDetectIntent].
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.SecuritySettings.AudioExportSettings audio_export_settings = 12;</code>
     * @return \Google\Cloud\Dialogflow\Cx\V3\SecuritySettings\AudioExportSettings|null
     */
    public function getAudioExportSettings()
    {
        return $this->audio_export_settings;
    }

    public function hasAudioExportSettings()
    {
        return isset($this->audio_export_settings);
    }

    public function clearAudioExportSettings()
    {
        unset($this->audio_export_settings);
    }

    /**
     * Controls audio export settings for post-conversation analytics when
     * ingesting audio to conversations via [Participants.AnalyzeContent][] or
     * [Participants.StreamingAnalyzeContent][].
     * If
     * [retention_strategy][google.cloud.dialogflow.cx.v3.SecuritySettings.retention_strategy]
     * is set to REMOVE_AFTER_CONVERSATION or [audio_export_settings.gcs_bucket][]
     * is empty, audio export is disabled.
     * If audio export is enabled, audio is recorded and saved to
     * [audio_export_settings.gcs_bucket][], subject to retention policy of
     * [audio_export_settings.gcs_bucket][].
     * This setting won't effect audio input for implicit sessions via
     * [Sessions.DetectIntent][google.cloud.dialogflow.cx.v3.Sessions.DetectIntent]
     * or
     * [Sessions.StreamingDetectIntent][google.cloud.dialogflow.cx.v3.Sessions.StreamingDetectIntent].
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.SecuritySettings.AudioExportSettings audio_export_settings = 12;</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\SecuritySettings\AudioExportSettings $var
     * @return $this
     */
    public function setAudioExportSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\Cx\V3\SecuritySettings\AudioExportSettings::class);
        $this->audio_export_settings = $var;

        return $this;
    }

    /**
     * Controls conversation exporting settings to Insights after conversation is
     * completed.
     * If
     * [retention_strategy][google.cloud.dialogflow.cx.v3.SecuritySettings.retention_strategy]
     * is set to REMOVE_AFTER_CONVERSATION, Insights export is disabled no matter
     * what you configure here.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.SecuritySettings.InsightsExportSettings insights_export_settings = 13;</code>
     * @return \Google\Cloud\Dialogflow\Cx\V3\SecuritySettings\InsightsExportSettings|null
     */
    public function getInsightsExportSettings()
    {
        return $this->insights_export_settings;
    }

    public function hasInsightsExportSettings()
    {
        return isset($this->insights_export_settings);
    }

    public function clearInsightsExportSettings()
    {
        unset($this->insights_export_settings);
    }

    /**
     * Controls conversation exporting settings to Insights after conversation is
     * completed.
     * If
     * [retention_strategy][google.cloud.dialogflow.cx.v3.SecuritySettings.retention_strategy]
     * is set to REMOVE_AFTER_CONVERSATION, Insights export is disabled no matter
     * what you configure here.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.cx.v3.SecuritySettings.InsightsExportSettings insights_export_settings = 13;</code>
     * @param \Google\Cloud\Dialogflow\Cx\V3\SecuritySettings\InsightsExportSettings $var
     * @return $this
     */
    public function setInsightsExportSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dialogflow\Cx\V3\SecuritySettings\InsightsExportSettings::class);
        $this->insights_export_settings = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getDataRetention()
    {
        return $this->whichOneof("data_retention");
    }

}

