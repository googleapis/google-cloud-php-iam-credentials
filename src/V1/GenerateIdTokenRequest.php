<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/iam/credentials/v1/common.proto

namespace Google\Cloud\Iam\Credentials\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.iam.credentials.v1.GenerateIdTokenRequest</code>
 */
class GenerateIdTokenRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the service account for which the credentials
     * are requested, in the following format:
     * `projects/-/serviceAccounts/{ACCOUNT_EMAIL_OR_UNIQUEID}`. The `-` wildcard
     * character is required; replacing it with a project ID is invalid.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * The sequence of service accounts in a delegation chain. Each service
     * account must be granted the `roles/iam.serviceAccountTokenCreator` role
     * on its next service account in the chain. The last service account in the
     * chain must be granted the `roles/iam.serviceAccountTokenCreator` role
     * on the service account that is specified in the `name` field of the
     * request.
     * The delegates must have the following format:
     * `projects/-/serviceAccounts/{ACCOUNT_EMAIL_OR_UNIQUEID}`. The `-` wildcard
     * character is required; replacing it with a project ID is invalid.
     *
     * Generated from protobuf field <code>repeated string delegates = 2;</code>
     */
    private $delegates;
    /**
     * Required. The audience for the token, such as the API or account that this token
     * grants access to.
     *
     * Generated from protobuf field <code>string audience = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $audience = '';
    /**
     * Include the service account email in the token. If set to `true`, the
     * token will contain `email` and `email_verified` claims.
     *
     * Generated from protobuf field <code>bool include_email = 4;</code>
     */
    protected $include_email = false;

    /**
     * @param string   $name         Required. The resource name of the service account for which the credentials
     *                               are requested, in the following format:
     *                               `projects/-/serviceAccounts/{ACCOUNT_EMAIL_OR_UNIQUEID}`. The `-` wildcard
     *                               character is required; replacing it with a project ID is invalid. Please see
     *                               {@see IAMCredentialsClient::serviceAccountName()} for help formatting this field.
     * @param string[] $delegates    The sequence of service accounts in a delegation chain. Each service
     *                               account must be granted the `roles/iam.serviceAccountTokenCreator` role
     *                               on its next service account in the chain. The last service account in the
     *                               chain must be granted the `roles/iam.serviceAccountTokenCreator` role
     *                               on the service account that is specified in the `name` field of the
     *                               request.
     *
     *                               The delegates must have the following format:
     *                               `projects/-/serviceAccounts/{ACCOUNT_EMAIL_OR_UNIQUEID}`. The `-` wildcard
     *                               character is required; replacing it with a project ID is invalid.
     * @param string   $audience     Required. The audience for the token, such as the API or account that this token
     *                               grants access to.
     * @param bool     $includeEmail Include the service account email in the token. If set to `true`, the
     *                               token will contain `email` and `email_verified` claims.
     *
     * @return \Google\Cloud\Iam\Credentials\V1\GenerateIdTokenRequest
     *
     * @experimental
     */
    public static function build(string $name, array $delegates, string $audience, bool $includeEmail): self
    {
        return (new self())
            ->setName($name)
            ->setDelegates($delegates)
            ->setAudience($audience)
            ->setIncludeEmail($includeEmail);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the service account for which the credentials
     *           are requested, in the following format:
     *           `projects/-/serviceAccounts/{ACCOUNT_EMAIL_OR_UNIQUEID}`. The `-` wildcard
     *           character is required; replacing it with a project ID is invalid.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $delegates
     *           The sequence of service accounts in a delegation chain. Each service
     *           account must be granted the `roles/iam.serviceAccountTokenCreator` role
     *           on its next service account in the chain. The last service account in the
     *           chain must be granted the `roles/iam.serviceAccountTokenCreator` role
     *           on the service account that is specified in the `name` field of the
     *           request.
     *           The delegates must have the following format:
     *           `projects/-/serviceAccounts/{ACCOUNT_EMAIL_OR_UNIQUEID}`. The `-` wildcard
     *           character is required; replacing it with a project ID is invalid.
     *     @type string $audience
     *           Required. The audience for the token, such as the API or account that this token
     *           grants access to.
     *     @type bool $include_email
     *           Include the service account email in the token. If set to `true`, the
     *           token will contain `email` and `email_verified` claims.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Iam\Credentials\V1\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the service account for which the credentials
     * are requested, in the following format:
     * `projects/-/serviceAccounts/{ACCOUNT_EMAIL_OR_UNIQUEID}`. The `-` wildcard
     * character is required; replacing it with a project ID is invalid.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the service account for which the credentials
     * are requested, in the following format:
     * `projects/-/serviceAccounts/{ACCOUNT_EMAIL_OR_UNIQUEID}`. The `-` wildcard
     * character is required; replacing it with a project ID is invalid.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * The sequence of service accounts in a delegation chain. Each service
     * account must be granted the `roles/iam.serviceAccountTokenCreator` role
     * on its next service account in the chain. The last service account in the
     * chain must be granted the `roles/iam.serviceAccountTokenCreator` role
     * on the service account that is specified in the `name` field of the
     * request.
     * The delegates must have the following format:
     * `projects/-/serviceAccounts/{ACCOUNT_EMAIL_OR_UNIQUEID}`. The `-` wildcard
     * character is required; replacing it with a project ID is invalid.
     *
     * Generated from protobuf field <code>repeated string delegates = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDelegates()
    {
        return $this->delegates;
    }

    /**
     * The sequence of service accounts in a delegation chain. Each service
     * account must be granted the `roles/iam.serviceAccountTokenCreator` role
     * on its next service account in the chain. The last service account in the
     * chain must be granted the `roles/iam.serviceAccountTokenCreator` role
     * on the service account that is specified in the `name` field of the
     * request.
     * The delegates must have the following format:
     * `projects/-/serviceAccounts/{ACCOUNT_EMAIL_OR_UNIQUEID}`. The `-` wildcard
     * character is required; replacing it with a project ID is invalid.
     *
     * Generated from protobuf field <code>repeated string delegates = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDelegates($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->delegates = $arr;

        return $this;
    }

    /**
     * Required. The audience for the token, such as the API or account that this token
     * grants access to.
     *
     * Generated from protobuf field <code>string audience = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getAudience()
    {
        return $this->audience;
    }

    /**
     * Required. The audience for the token, such as the API or account that this token
     * grants access to.
     *
     * Generated from protobuf field <code>string audience = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setAudience($var)
    {
        GPBUtil::checkString($var, True);
        $this->audience = $var;

        return $this;
    }

    /**
     * Include the service account email in the token. If set to `true`, the
     * token will contain `email` and `email_verified` claims.
     *
     * Generated from protobuf field <code>bool include_email = 4;</code>
     * @return bool
     */
    public function getIncludeEmail()
    {
        return $this->include_email;
    }

    /**
     * Include the service account email in the token. If set to `true`, the
     * token will contain `email` and `email_verified` claims.
     *
     * Generated from protobuf field <code>bool include_email = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeEmail($var)
    {
        GPBUtil::checkBool($var);
        $this->include_email = $var;

        return $this;
    }

}

