<?php
/**
 * CampaignDetailsModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  FomF\Ungerboeck\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Ungerboeck API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.19
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace FomF\Ungerboeck\Client\Model;

use \ArrayAccess;
use \FomF\Ungerboeck\Client\ObjectSerializer;

/**
 * CampaignDetailsModel Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FomF\Ungerboeck\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CampaignDetailsModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CampaignDetailsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'organization_code' => 'string',
        'campaign_designation' => 'string',
        'campaign' => 'string',
        'sequence_number' => 'int',
        'status' => 'string',
        'account' => 'string',
        'campaign_step_nbr' => 'int',
        'related_account' => 'string',
        'addedto_campaign_on' => '\DateTime',
        'entered_time' => '\DateTime',
        'addedto_campaign_by' => 'string',
        'changed_on' => '\DateTime',
        'update_time' => '\DateTime',
        'changed_by' => 'string',
        'next_call' => '\DateTime',
        'last_communication' => '\DateTime',
        'outgoing_calls' => 'int',
        'emails_sent' => 'int',
        'mailings' => 'int',
        'target_rep' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'organization_code' => null,
        'campaign_designation' => null,
        'campaign' => null,
        'sequence_number' => 'int32',
        'status' => null,
        'account' => null,
        'campaign_step_nbr' => 'int32',
        'related_account' => null,
        'addedto_campaign_on' => 'date-time',
        'entered_time' => 'date-time',
        'addedto_campaign_by' => null,
        'changed_on' => 'date-time',
        'update_time' => 'date-time',
        'changed_by' => null,
        'next_call' => 'date-time',
        'last_communication' => 'date-time',
        'outgoing_calls' => 'int32',
        'emails_sent' => 'int32',
        'mailings' => 'int32',
        'target_rep' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'organization_code' => 'OrganizationCode',
        'campaign_designation' => 'CampaignDesignation',
        'campaign' => 'Campaign',
        'sequence_number' => 'SequenceNumber',
        'status' => 'Status',
        'account' => 'Account',
        'campaign_step_nbr' => 'CampaignStepNbr',
        'related_account' => 'RelatedAccount',
        'addedto_campaign_on' => 'AddedtoCampaignOn',
        'entered_time' => 'EnteredTime',
        'addedto_campaign_by' => 'AddedtoCampaignBy',
        'changed_on' => 'ChangedOn',
        'update_time' => 'UpdateTime',
        'changed_by' => 'ChangedBy',
        'next_call' => 'NextCall',
        'last_communication' => 'LastCommunication',
        'outgoing_calls' => 'OutgoingCalls',
        'emails_sent' => 'EmailsSent',
        'mailings' => 'Mailings',
        'target_rep' => 'TargetRep'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'organization_code' => 'setOrganizationCode',
        'campaign_designation' => 'setCampaignDesignation',
        'campaign' => 'setCampaign',
        'sequence_number' => 'setSequenceNumber',
        'status' => 'setStatus',
        'account' => 'setAccount',
        'campaign_step_nbr' => 'setCampaignStepNbr',
        'related_account' => 'setRelatedAccount',
        'addedto_campaign_on' => 'setAddedtoCampaignOn',
        'entered_time' => 'setEnteredTime',
        'addedto_campaign_by' => 'setAddedtoCampaignBy',
        'changed_on' => 'setChangedOn',
        'update_time' => 'setUpdateTime',
        'changed_by' => 'setChangedBy',
        'next_call' => 'setNextCall',
        'last_communication' => 'setLastCommunication',
        'outgoing_calls' => 'setOutgoingCalls',
        'emails_sent' => 'setEmailsSent',
        'mailings' => 'setMailings',
        'target_rep' => 'setTargetRep'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'organization_code' => 'getOrganizationCode',
        'campaign_designation' => 'getCampaignDesignation',
        'campaign' => 'getCampaign',
        'sequence_number' => 'getSequenceNumber',
        'status' => 'getStatus',
        'account' => 'getAccount',
        'campaign_step_nbr' => 'getCampaignStepNbr',
        'related_account' => 'getRelatedAccount',
        'addedto_campaign_on' => 'getAddedtoCampaignOn',
        'entered_time' => 'getEnteredTime',
        'addedto_campaign_by' => 'getAddedtoCampaignBy',
        'changed_on' => 'getChangedOn',
        'update_time' => 'getUpdateTime',
        'changed_by' => 'getChangedBy',
        'next_call' => 'getNextCall',
        'last_communication' => 'getLastCommunication',
        'outgoing_calls' => 'getOutgoingCalls',
        'emails_sent' => 'getEmailsSent',
        'mailings' => 'getMailings',
        'target_rep' => 'getTargetRep'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['organization_code'] = isset($data['organization_code']) ? $data['organization_code'] : null;
        $this->container['campaign_designation'] = isset($data['campaign_designation']) ? $data['campaign_designation'] : null;
        $this->container['campaign'] = isset($data['campaign']) ? $data['campaign'] : null;
        $this->container['sequence_number'] = isset($data['sequence_number']) ? $data['sequence_number'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
        $this->container['campaign_step_nbr'] = isset($data['campaign_step_nbr']) ? $data['campaign_step_nbr'] : null;
        $this->container['related_account'] = isset($data['related_account']) ? $data['related_account'] : null;
        $this->container['addedto_campaign_on'] = isset($data['addedto_campaign_on']) ? $data['addedto_campaign_on'] : null;
        $this->container['entered_time'] = isset($data['entered_time']) ? $data['entered_time'] : null;
        $this->container['addedto_campaign_by'] = isset($data['addedto_campaign_by']) ? $data['addedto_campaign_by'] : null;
        $this->container['changed_on'] = isset($data['changed_on']) ? $data['changed_on'] : null;
        $this->container['update_time'] = isset($data['update_time']) ? $data['update_time'] : null;
        $this->container['changed_by'] = isset($data['changed_by']) ? $data['changed_by'] : null;
        $this->container['next_call'] = isset($data['next_call']) ? $data['next_call'] : null;
        $this->container['last_communication'] = isset($data['last_communication']) ? $data['last_communication'] : null;
        $this->container['outgoing_calls'] = isset($data['outgoing_calls']) ? $data['outgoing_calls'] : null;
        $this->container['emails_sent'] = isset($data['emails_sent']) ? $data['emails_sent'] : null;
        $this->container['mailings'] = isset($data['mailings']) ? $data['mailings'] : null;
        $this->container['target_rep'] = isset($data['target_rep']) ? $data['target_rep'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['organization_code'] === null) {
            $invalidProperties[] = "'organization_code' can't be null";
        }
        if ($this->container['campaign_designation'] === null) {
            $invalidProperties[] = "'campaign_designation' can't be null";
        }
        if ($this->container['campaign'] === null) {
            $invalidProperties[] = "'campaign' can't be null";
        }
        if ($this->container['sequence_number'] === null) {
            $invalidProperties[] = "'sequence_number' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['account'] === null) {
            $invalidProperties[] = "'account' can't be null";
        }
        if ($this->container['campaign_step_nbr'] === null) {
            $invalidProperties[] = "'campaign_step_nbr' can't be null";
        }
        if ($this->container['related_account'] === null) {
            $invalidProperties[] = "'related_account' can't be null";
        }
        if ($this->container['addedto_campaign_on'] === null) {
            $invalidProperties[] = "'addedto_campaign_on' can't be null";
        }
        if ($this->container['entered_time'] === null) {
            $invalidProperties[] = "'entered_time' can't be null";
        }
        if ($this->container['addedto_campaign_by'] === null) {
            $invalidProperties[] = "'addedto_campaign_by' can't be null";
        }
        if ($this->container['changed_on'] === null) {
            $invalidProperties[] = "'changed_on' can't be null";
        }
        if ($this->container['update_time'] === null) {
            $invalidProperties[] = "'update_time' can't be null";
        }
        if ($this->container['changed_by'] === null) {
            $invalidProperties[] = "'changed_by' can't be null";
        }
        if ($this->container['next_call'] === null) {
            $invalidProperties[] = "'next_call' can't be null";
        }
        if ($this->container['last_communication'] === null) {
            $invalidProperties[] = "'last_communication' can't be null";
        }
        if ($this->container['outgoing_calls'] === null) {
            $invalidProperties[] = "'outgoing_calls' can't be null";
        }
        if ($this->container['emails_sent'] === null) {
            $invalidProperties[] = "'emails_sent' can't be null";
        }
        if ($this->container['mailings'] === null) {
            $invalidProperties[] = "'mailings' can't be null";
        }
        if ($this->container['target_rep'] === null) {
            $invalidProperties[] = "'target_rep' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets organization_code
     *
     * @return string
     */
    public function getOrganizationCode()
    {
        return $this->container['organization_code'];
    }

    /**
     * Sets organization_code
     *
     * @param string $organization_code <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CC891_ORG_CODE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 2  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setOrganizationCode($organization_code)
    {
        $this->container['organization_code'] = $organization_code;

        return $this;
    }

    /**
     * Gets campaign_designation
     *
     * @return string
     */
    public function getCampaignDesignation()
    {
        return $this->container['campaign_designation'];
    }

    /**
     * Sets campaign_designation
     *
     * @param string $campaign_designation <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CC891_ACCT_DESIG  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 1  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setCampaignDesignation($campaign_designation)
    {
        $this->container['campaign_designation'] = $campaign_designation;

        return $this;
    }

    /**
     * Gets campaign
     *
     * @return string
     */
    public function getCampaign()
    {
        return $this->container['campaign'];
    }

    /**
     * Sets campaign
     *
     * @param string $campaign <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CC891_PRJ_ID  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setCampaign($campaign)
    {
        $this->container['campaign'] = $campaign;

        return $this;
    }

    /**
     * Gets sequence_number
     *
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->container['sequence_number'];
    }

    /**
     * Sets sequence_number
     *
     * @param int $sequence_number <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CC891_SEQ  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setSequenceNumber($sequence_number)
    {
        $this->container['sequence_number'] = $sequence_number;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CC891_PRJ_DTL_STS  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 3  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets account
     *
     * @return string
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param string $account <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CC891_EXT_ACCT_CODE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 8  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setAccount($account)
    {
        $this->container['account'] = $account;

        return $this;
    }

    /**
     * Gets campaign_step_nbr
     *
     * @return int
     */
    public function getCampaignStepNbr()
    {
        return $this->container['campaign_step_nbr'];
    }

    /**
     * Sets campaign_step_nbr
     *
     * @param int $campaign_step_nbr <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CC891_OCCURENCE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setCampaignStepNbr($campaign_step_nbr)
    {
        $this->container['campaign_step_nbr'] = $campaign_step_nbr;

        return $this;
    }

    /**
     * Gets related_account
     *
     * @return string
     */
    public function getRelatedAccount()
    {
        return $this->container['related_account'];
    }

    /**
     * Sets related_account
     *
     * @param string $related_account <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CC891_TEXT_40  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 40  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setRelatedAccount($related_account)
    {
        $this->container['related_account'] = $related_account;

        return $this;
    }

    /**
     * Gets addedto_campaign_on
     *
     * @return \DateTime
     */
    public function getAddedtoCampaignOn()
    {
        return $this->container['addedto_campaign_on'];
    }

    /**
     * Sets addedto_campaign_on
     *
     * @param \DateTime $addedto_campaign_on <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CC891_ENT_DATE_ISO  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setAddedtoCampaignOn($addedto_campaign_on)
    {
        $this->container['addedto_campaign_on'] = $addedto_campaign_on;

        return $this;
    }

    /**
     * Gets entered_time
     *
     * @return \DateTime
     */
    public function getEnteredTime()
    {
        return $this->container['entered_time'];
    }

    /**
     * Sets entered_time
     *
     * @param \DateTime $entered_time <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CC891_ENT_TIME_ISO  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setEnteredTime($entered_time)
    {
        $this->container['entered_time'] = $entered_time;

        return $this;
    }

    /**
     * Gets addedto_campaign_by
     *
     * @return string
     */
    public function getAddedtoCampaignBy()
    {
        return $this->container['addedto_campaign_by'];
    }

    /**
     * Sets addedto_campaign_by
     *
     * @param string $addedto_campaign_by <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CC891_ENT_USER_ID  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setAddedtoCampaignBy($addedto_campaign_by)
    {
        $this->container['addedto_campaign_by'] = $addedto_campaign_by;

        return $this;
    }

    /**
     * Gets changed_on
     *
     * @return \DateTime
     */
    public function getChangedOn()
    {
        return $this->container['changed_on'];
    }

    /**
     * Sets changed_on
     *
     * @param \DateTime $changed_on <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CC891_UPD_DATE_ISO  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setChangedOn($changed_on)
    {
        $this->container['changed_on'] = $changed_on;

        return $this;
    }

    /**
     * Gets update_time
     *
     * @return \DateTime
     */
    public function getUpdateTime()
    {
        return $this->container['update_time'];
    }

    /**
     * Sets update_time
     *
     * @param \DateTime $update_time <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CC891_UPD_TIME_ISO  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setUpdateTime($update_time)
    {
        $this->container['update_time'] = $update_time;

        return $this;
    }

    /**
     * Gets changed_by
     *
     * @return string
     */
    public function getChangedBy()
    {
        return $this->container['changed_by'];
    }

    /**
     * Sets changed_by
     *
     * @param string $changed_by <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CC891_UPD_USER_ID  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setChangedBy($changed_by)
    {
        $this->container['changed_by'] = $changed_by;

        return $this;
    }

    /**
     * Gets next_call
     *
     * @return \DateTime
     */
    public function getNextCall()
    {
        return $this->container['next_call'];
    }

    /**
     * Sets next_call
     *
     * @param \DateTime $next_call <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CC891_NEXT_CALL  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setNextCall($next_call)
    {
        $this->container['next_call'] = $next_call;

        return $this;
    }

    /**
     * Gets last_communication
     *
     * @return \DateTime
     */
    public function getLastCommunication()
    {
        return $this->container['last_communication'];
    }

    /**
     * Sets last_communication
     *
     * @param \DateTime $last_communication <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CC891_LAST_COMMUNICATION  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setLastCommunication($last_communication)
    {
        $this->container['last_communication'] = $last_communication;

        return $this;
    }

    /**
     * Gets outgoing_calls
     *
     * @return int
     */
    public function getOutgoingCalls()
    {
        return $this->container['outgoing_calls'];
    }

    /**
     * Sets outgoing_calls
     *
     * @param int $outgoing_calls <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CC891_NUM_OUTGOING_CALLS  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setOutgoingCalls($outgoing_calls)
    {
        $this->container['outgoing_calls'] = $outgoing_calls;

        return $this;
    }

    /**
     * Gets emails_sent
     *
     * @return int
     */
    public function getEmailsSent()
    {
        return $this->container['emails_sent'];
    }

    /**
     * Sets emails_sent
     *
     * @param int $emails_sent <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CC891_NUM_EMAILS_SENT  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setEmailsSent($emails_sent)
    {
        $this->container['emails_sent'] = $emails_sent;

        return $this;
    }

    /**
     * Gets mailings
     *
     * @return int
     */
    public function getMailings()
    {
        return $this->container['mailings'];
    }

    /**
     * Sets mailings
     *
     * @param int $mailings <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CC891_NUM_MAILINGS  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setMailings($mailings)
    {
        $this->container['mailings'] = $mailings;

        return $this;
    }

    /**
     * Gets target_rep
     *
     * @return string
     */
    public function getTargetRep()
    {
        return $this->container['target_rep'];
    }

    /**
     * Sets target_rep
     *
     * @param string $target_rep <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> CC891_OWNER_USER_ID  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setTargetRep($target_rep)
    {
        $this->container['target_rep'] = $target_rep;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


