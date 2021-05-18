<?php
/**
 * ParameterInfo
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
 * ParameterInfo Class Doc Comment
 *
 * @category Class
 * @package  FomF\Ungerboeck\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ParameterInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ParameterInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'prompt_text' => 'string',
        'parameter_name' => 'string',
        'type' => 'int',
        'multi_select' => 'bool',
        'ranged' => 'bool',
        'allow_custom_values' => 'bool',
        'default_values' => 'map[string,string]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'prompt_text' => null,
        'parameter_name' => null,
        'type' => 'int32',
        'multi_select' => null,
        'ranged' => null,
        'allow_custom_values' => null,
        'default_values' => null
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
        'prompt_text' => 'PromptText',
        'parameter_name' => 'ParameterName',
        'type' => 'Type',
        'multi_select' => 'MultiSelect',
        'ranged' => 'Ranged',
        'allow_custom_values' => 'AllowCustomValues',
        'default_values' => 'DefaultValues'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'prompt_text' => 'setPromptText',
        'parameter_name' => 'setParameterName',
        'type' => 'setType',
        'multi_select' => 'setMultiSelect',
        'ranged' => 'setRanged',
        'allow_custom_values' => 'setAllowCustomValues',
        'default_values' => 'setDefaultValues'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'prompt_text' => 'getPromptText',
        'parameter_name' => 'getParameterName',
        'type' => 'getType',
        'multi_select' => 'getMultiSelect',
        'ranged' => 'getRanged',
        'allow_custom_values' => 'getAllowCustomValues',
        'default_values' => 'getDefaultValues'
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
        $this->container['prompt_text'] = isset($data['prompt_text']) ? $data['prompt_text'] : null;
        $this->container['parameter_name'] = isset($data['parameter_name']) ? $data['parameter_name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['multi_select'] = isset($data['multi_select']) ? $data['multi_select'] : null;
        $this->container['ranged'] = isset($data['ranged']) ? $data['ranged'] : null;
        $this->container['allow_custom_values'] = isset($data['allow_custom_values']) ? $data['allow_custom_values'] : null;
        $this->container['default_values'] = isset($data['default_values']) ? $data['default_values'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['prompt_text'] === null) {
            $invalidProperties[] = "'prompt_text' can't be null";
        }
        if ($this->container['parameter_name'] === null) {
            $invalidProperties[] = "'parameter_name' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['multi_select'] === null) {
            $invalidProperties[] = "'multi_select' can't be null";
        }
        if ($this->container['ranged'] === null) {
            $invalidProperties[] = "'ranged' can't be null";
        }
        if ($this->container['allow_custom_values'] === null) {
            $invalidProperties[] = "'allow_custom_values' can't be null";
        }
        if ($this->container['default_values'] === null) {
            $invalidProperties[] = "'default_values' can't be null";
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
     * Gets prompt_text
     *
     * @return string
     */
    public function getPromptText()
    {
        return $this->container['prompt_text'];
    }

    /**
     * Sets prompt_text
     *
     * @param string $prompt_text <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">API Help:</span> This is the prompt text from the report parameter  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Database column:</span>  None  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span></span></div>
     *
     * @return $this
     */
    public function setPromptText($prompt_text)
    {
        $this->container['prompt_text'] = $prompt_text;

        return $this;
    }

    /**
     * Gets parameter_name
     *
     * @return string
     */
    public function getParameterName()
    {
        return $this->container['parameter_name'];
    }

    /**
     * Sets parameter_name
     *
     * @param string $parameter_name <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">API Help:</span> This is the parameter name needed to pass the values for  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Database column:</span>  None  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span></span></div>
     *
     * @return $this
     */
    public function setParameterName($parameter_name)
    {
        $this->container['parameter_name'] = $parameter_name;

        return $this;
    }

    /**
     * Gets type
     *
     * @return int
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param int $type <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">API Help:</span> This is the parameter type. Use USISDKConstants.ReportConstants.ParameterType to decode.  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Database column:</span>  None  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span></span></div>
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets multi_select
     *
     * @return bool
     */
    public function getMultiSelect()
    {
        return $this->container['multi_select'];
    }

    /**
     * Sets multi_select
     *
     * @param bool $multi_select <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">API Help:</span> This is if the parameter is configured to allow multiple values  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Database column:</span>  None  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span></span></div>
     *
     * @return $this
     */
    public function setMultiSelect($multi_select)
    {
        $this->container['multi_select'] = $multi_select;

        return $this;
    }

    /**
     * Gets ranged
     *
     * @return bool
     */
    public function getRanged()
    {
        return $this->container['ranged'];
    }

    /**
     * Sets ranged
     *
     * @param bool $ranged <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">API Help:</span> Set to true if it is a range. 0 index is the start and 1 index is the end and both are needed. The first value can not be greater then the last value.  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Database column:</span>  None  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span></span></div>
     *
     * @return $this
     */
    public function setRanged($ranged)
    {
        $this->container['ranged'] = $ranged;

        return $this;
    }

    /**
     * Gets allow_custom_values
     *
     * @return bool
     */
    public function getAllowCustomValues()
    {
        return $this->container['allow_custom_values'];
    }

    /**
     * Sets allow_custom_values
     *
     * @param bool $allow_custom_values <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">API Help:</span> Set to true if it allows values outside of its DefaultValues. If its false, it wil only allow keys from DefaultValues read from the report file.  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Database column:</span>  None  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span></span></div>
     *
     * @return $this
     */
    public function setAllowCustomValues($allow_custom_values)
    {
        $this->container['allow_custom_values'] = $allow_custom_values;

        return $this;
    }

    /**
     * Gets default_values
     *
     * @return map[string,string]
     */
    public function getDefaultValues()
    {
        return $this->container['default_values'];
    }

    /**
     * Sets default_values
     *
     * @param map[string,string] $default_values <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">API Help:</span> This is the default values pulled from the report parameter  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Database column:</span>  None  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span></span></div>
     *
     * @return $this
     */
    public function setDefaultValues($default_values)
    {
        $this->container['default_values'] = $default_values;

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

