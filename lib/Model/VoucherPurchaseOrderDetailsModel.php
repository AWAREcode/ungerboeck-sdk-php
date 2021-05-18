<?php
/**
 * VoucherPurchaseOrderDetailsModel
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
 * VoucherPurchaseOrderDetailsModel Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  FomF\Ungerboeck\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VoucherPurchaseOrderDetailsModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VoucherPurchaseOrderDetailsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'organization' => 'string',
        'po_number' => 'int',
        'sequence' => 'int',
        'voucher' => 'int',
        'po_line' => 'int',
        'quantity' => 'double',
        'amount_invoiced' => 'double',
        'supplier' => 'string',
        'vendor_invoice' => 'string',
        'entered_by' => 'string',
        'entered_on' => '\DateTime',
        'changed_by' => 'string',
        'changed_on' => '\DateTime',
        'item' => 'string',
        'item_description' => 'string',
        'um' => 'string',
        'close' => 'string',
        'tax_invoiced' => 'double',
        'freight_invoiced' => 'double',
        'total_invoiced' => 'double',
        'taxable' => 'string',
        'ut' => 'string',
        'time_units' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'organization' => null,
        'po_number' => 'int32',
        'sequence' => 'int32',
        'voucher' => 'int32',
        'po_line' => 'int32',
        'quantity' => 'double',
        'amount_invoiced' => 'double',
        'supplier' => null,
        'vendor_invoice' => null,
        'entered_by' => null,
        'entered_on' => 'date-time',
        'changed_by' => null,
        'changed_on' => 'date-time',
        'item' => null,
        'item_description' => null,
        'um' => null,
        'close' => null,
        'tax_invoiced' => 'double',
        'freight_invoiced' => 'double',
        'total_invoiced' => 'double',
        'taxable' => null,
        'ut' => null,
        'time_units' => 'double'
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
        'organization' => 'Organization',
        'po_number' => 'PONumber',
        'sequence' => 'Sequence',
        'voucher' => 'Voucher',
        'po_line' => 'POLine',
        'quantity' => 'Quantity',
        'amount_invoiced' => 'AmountInvoiced',
        'supplier' => 'Supplier',
        'vendor_invoice' => 'VendorInvoice',
        'entered_by' => 'EnteredBy',
        'entered_on' => 'EnteredOn',
        'changed_by' => 'ChangedBy',
        'changed_on' => 'ChangedOn',
        'item' => 'Item',
        'item_description' => 'ItemDescription',
        'um' => 'UM',
        'close' => 'Close',
        'tax_invoiced' => 'TaxInvoiced',
        'freight_invoiced' => 'FreightInvoiced',
        'total_invoiced' => 'TotalInvoiced',
        'taxable' => 'Taxable',
        'ut' => 'UT',
        'time_units' => 'TimeUnits'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'organization' => 'setOrganization',
        'po_number' => 'setPoNumber',
        'sequence' => 'setSequence',
        'voucher' => 'setVoucher',
        'po_line' => 'setPoLine',
        'quantity' => 'setQuantity',
        'amount_invoiced' => 'setAmountInvoiced',
        'supplier' => 'setSupplier',
        'vendor_invoice' => 'setVendorInvoice',
        'entered_by' => 'setEnteredBy',
        'entered_on' => 'setEnteredOn',
        'changed_by' => 'setChangedBy',
        'changed_on' => 'setChangedOn',
        'item' => 'setItem',
        'item_description' => 'setItemDescription',
        'um' => 'setUm',
        'close' => 'setClose',
        'tax_invoiced' => 'setTaxInvoiced',
        'freight_invoiced' => 'setFreightInvoiced',
        'total_invoiced' => 'setTotalInvoiced',
        'taxable' => 'setTaxable',
        'ut' => 'setUt',
        'time_units' => 'setTimeUnits'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'organization' => 'getOrganization',
        'po_number' => 'getPoNumber',
        'sequence' => 'getSequence',
        'voucher' => 'getVoucher',
        'po_line' => 'getPoLine',
        'quantity' => 'getQuantity',
        'amount_invoiced' => 'getAmountInvoiced',
        'supplier' => 'getSupplier',
        'vendor_invoice' => 'getVendorInvoice',
        'entered_by' => 'getEnteredBy',
        'entered_on' => 'getEnteredOn',
        'changed_by' => 'getChangedBy',
        'changed_on' => 'getChangedOn',
        'item' => 'getItem',
        'item_description' => 'getItemDescription',
        'um' => 'getUm',
        'close' => 'getClose',
        'tax_invoiced' => 'getTaxInvoiced',
        'freight_invoiced' => 'getFreightInvoiced',
        'total_invoiced' => 'getTotalInvoiced',
        'taxable' => 'getTaxable',
        'ut' => 'getUt',
        'time_units' => 'getTimeUnits'
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
        $this->container['organization'] = isset($data['organization']) ? $data['organization'] : null;
        $this->container['po_number'] = isset($data['po_number']) ? $data['po_number'] : null;
        $this->container['sequence'] = isset($data['sequence']) ? $data['sequence'] : null;
        $this->container['voucher'] = isset($data['voucher']) ? $data['voucher'] : null;
        $this->container['po_line'] = isset($data['po_line']) ? $data['po_line'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['amount_invoiced'] = isset($data['amount_invoiced']) ? $data['amount_invoiced'] : null;
        $this->container['supplier'] = isset($data['supplier']) ? $data['supplier'] : null;
        $this->container['vendor_invoice'] = isset($data['vendor_invoice']) ? $data['vendor_invoice'] : null;
        $this->container['entered_by'] = isset($data['entered_by']) ? $data['entered_by'] : null;
        $this->container['entered_on'] = isset($data['entered_on']) ? $data['entered_on'] : null;
        $this->container['changed_by'] = isset($data['changed_by']) ? $data['changed_by'] : null;
        $this->container['changed_on'] = isset($data['changed_on']) ? $data['changed_on'] : null;
        $this->container['item'] = isset($data['item']) ? $data['item'] : null;
        $this->container['item_description'] = isset($data['item_description']) ? $data['item_description'] : null;
        $this->container['um'] = isset($data['um']) ? $data['um'] : null;
        $this->container['close'] = isset($data['close']) ? $data['close'] : null;
        $this->container['tax_invoiced'] = isset($data['tax_invoiced']) ? $data['tax_invoiced'] : null;
        $this->container['freight_invoiced'] = isset($data['freight_invoiced']) ? $data['freight_invoiced'] : null;
        $this->container['total_invoiced'] = isset($data['total_invoiced']) ? $data['total_invoiced'] : null;
        $this->container['taxable'] = isset($data['taxable']) ? $data['taxable'] : null;
        $this->container['ut'] = isset($data['ut']) ? $data['ut'] : null;
        $this->container['time_units'] = isset($data['time_units']) ? $data['time_units'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['organization'] === null) {
            $invalidProperties[] = "'organization' can't be null";
        }
        if ($this->container['po_number'] === null) {
            $invalidProperties[] = "'po_number' can't be null";
        }
        if ($this->container['sequence'] === null) {
            $invalidProperties[] = "'sequence' can't be null";
        }
        if ($this->container['voucher'] === null) {
            $invalidProperties[] = "'voucher' can't be null";
        }
        if ($this->container['po_line'] === null) {
            $invalidProperties[] = "'po_line' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['amount_invoiced'] === null) {
            $invalidProperties[] = "'amount_invoiced' can't be null";
        }
        if ($this->container['supplier'] === null) {
            $invalidProperties[] = "'supplier' can't be null";
        }
        if ($this->container['vendor_invoice'] === null) {
            $invalidProperties[] = "'vendor_invoice' can't be null";
        }
        if ($this->container['entered_by'] === null) {
            $invalidProperties[] = "'entered_by' can't be null";
        }
        if ($this->container['entered_on'] === null) {
            $invalidProperties[] = "'entered_on' can't be null";
        }
        if ($this->container['changed_by'] === null) {
            $invalidProperties[] = "'changed_by' can't be null";
        }
        if ($this->container['changed_on'] === null) {
            $invalidProperties[] = "'changed_on' can't be null";
        }
        if ($this->container['item'] === null) {
            $invalidProperties[] = "'item' can't be null";
        }
        if ($this->container['item_description'] === null) {
            $invalidProperties[] = "'item_description' can't be null";
        }
        if ($this->container['um'] === null) {
            $invalidProperties[] = "'um' can't be null";
        }
        if ($this->container['close'] === null) {
            $invalidProperties[] = "'close' can't be null";
        }
        if ($this->container['tax_invoiced'] === null) {
            $invalidProperties[] = "'tax_invoiced' can't be null";
        }
        if ($this->container['freight_invoiced'] === null) {
            $invalidProperties[] = "'freight_invoiced' can't be null";
        }
        if ($this->container['total_invoiced'] === null) {
            $invalidProperties[] = "'total_invoiced' can't be null";
        }
        if ($this->container['taxable'] === null) {
            $invalidProperties[] = "'taxable' can't be null";
        }
        if ($this->container['ut'] === null) {
            $invalidProperties[] = "'ut' can't be null";
        }
        if ($this->container['time_units'] === null) {
            $invalidProperties[] = "'time_units' can't be null";
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
     * Gets organization
     *
     * @return string
     */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
     * Sets organization
     *
     * @param string $organization <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP104_ORG_CODE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 2  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->container['organization'] = $organization;

        return $this;
    }

    /**
     * Gets po_number
     *
     * @return int
     */
    public function getPoNumber()
    {
        return $this->container['po_number'];
    }

    /**
     * Sets po_number
     *
     * @param int $po_number <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP104_PO_NBR  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setPoNumber($po_number)
    {
        $this->container['po_number'] = $po_number;

        return $this;
    }

    /**
     * Gets sequence
     *
     * @return int
     */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
     * Sets sequence
     *
     * @param int $sequence <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP104_SEQ  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setSequence($sequence)
    {
        $this->container['sequence'] = $sequence;

        return $this;
    }

    /**
     * Gets voucher
     *
     * @return int
     */
    public function getVoucher()
    {
        return $this->container['voucher'];
    }

    /**
     * Sets voucher
     *
     * @param int $voucher <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP104_VOUCHER  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setVoucher($voucher)
    {
        $this->container['voucher'] = $voucher;

        return $this;
    }

    /**
     * Gets po_line
     *
     * @return int
     */
    public function getPoLine()
    {
        return $this->container['po_line'];
    }

    /**
     * Sets po_line
     *
     * @param int $po_line <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP104_PO_SEQ  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setPoLine($po_line)
    {
        $this->container['po_line'] = $po_line;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return double
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param double $quantity <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP104_QTY_INVOICED  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 114  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets amount_invoiced
     *
     * @return double
     */
    public function getAmountInvoiced()
    {
        return $this->container['amount_invoiced'];
    }

    /**
     * Sets amount_invoiced
     *
     * @param double $amount_invoiced <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP104_AMT_INVOICED  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 112  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setAmountInvoiced($amount_invoiced)
    {
        $this->container['amount_invoiced'] = $amount_invoiced;

        return $this;
    }

    /**
     * Gets supplier
     *
     * @return string
     */
    public function getSupplier()
    {
        return $this->container['supplier'];
    }

    /**
     * Sets supplier
     *
     * @param string $supplier <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP104_SUPPLIER  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 8  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setSupplier($supplier)
    {
        $this->container['supplier'] = $supplier;

        return $this;
    }

    /**
     * Gets vendor_invoice
     *
     * @return string
     */
    public function getVendorInvoice()
    {
        return $this->container['vendor_invoice'];
    }

    /**
     * Sets vendor_invoice
     *
     * @param string $vendor_invoice <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP104_VENDOR_INVOICE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 30  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setVendorInvoice($vendor_invoice)
    {
        $this->container['vendor_invoice'] = $vendor_invoice;

        return $this;
    }

    /**
     * Gets entered_by
     *
     * @return string
     */
    public function getEnteredBy()
    {
        return $this->container['entered_by'];
    }

    /**
     * Sets entered_by
     *
     * @param string $entered_by <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP104_ENT_USER_ID  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setEnteredBy($entered_by)
    {
        $this->container['entered_by'] = $entered_by;

        return $this;
    }

    /**
     * Gets entered_on
     *
     * @return \DateTime
     */
    public function getEnteredOn()
    {
        return $this->container['entered_on'];
    }

    /**
     * Sets entered_on
     *
     * @param \DateTime $entered_on <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP104_ENT_STAMP  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setEnteredOn($entered_on)
    {
        $this->container['entered_on'] = $entered_on;

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
     * @param string $changed_by <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP104_UPD_USER_ID  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 10  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setChangedBy($changed_by)
    {
        $this->container['changed_by'] = $changed_by;

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
     * @param \DateTime $changed_on <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP104_UPD_STAMP  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setChangedOn($changed_on)
    {
        $this->container['changed_on'] = $changed_on;

        return $this;
    }

    /**
     * Gets item
     *
     * @return string
     */
    public function getItem()
    {
        return $this->container['item'];
    }

    /**
     * Sets item
     *
     * @param string $item <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP104_ITEM  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 12  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setItem($item)
    {
        $this->container['item'] = $item;

        return $this;
    }

    /**
     * Gets item_description
     *
     * @return string
     */
    public function getItemDescription()
    {
        return $this->container['item_description'];
    }

    /**
     * Sets item_description
     *
     * @param string $item_description <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP104_ITEM_DESC  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 255  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setItemDescription($item_description)
    {
        $this->container['item_description'] = $item_description;

        return $this;
    }

    /**
     * Gets um
     *
     * @return string
     */
    public function getUm()
    {
        return $this->container['um'];
    }

    /**
     * Sets um
     *
     * @param string $um <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP104_UOM_PUR  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 3  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setUm($um)
    {
        $this->container['um'] = $um;

        return $this;
    }

    /**
     * Gets close
     *
     * @return string
     */
    public function getClose()
    {
        return $this->container['close'];
    }

    /**
     * Sets close
     *
     * @param string $close <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP104_CLOSE_ITEM  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 1  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setClose($close)
    {
        $this->container['close'] = $close;

        return $this;
    }

    /**
     * Gets tax_invoiced
     *
     * @return double
     */
    public function getTaxInvoiced()
    {
        return $this->container['tax_invoiced'];
    }

    /**
     * Sets tax_invoiced
     *
     * @param double $tax_invoiced <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP104_TAX_INVOICED  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 178  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setTaxInvoiced($tax_invoiced)
    {
        $this->container['tax_invoiced'] = $tax_invoiced;

        return $this;
    }

    /**
     * Gets freight_invoiced
     *
     * @return double
     */
    public function getFreightInvoiced()
    {
        return $this->container['freight_invoiced'];
    }

    /**
     * Sets freight_invoiced
     *
     * @param double $freight_invoiced <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP104_FREIGHT_INVOICED  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 112  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setFreightInvoiced($freight_invoiced)
    {
        $this->container['freight_invoiced'] = $freight_invoiced;

        return $this;
    }

    /**
     * Gets total_invoiced
     *
     * @return double
     */
    public function getTotalInvoiced()
    {
        return $this->container['total_invoiced'];
    }

    /**
     * Sets total_invoiced
     *
     * @param double $total_invoiced <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP104_TOT_INVOICED  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 178  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setTotalInvoiced($total_invoiced)
    {
        $this->container['total_invoiced'] = $total_invoiced;

        return $this;
    }

    /**
     * Gets taxable
     *
     * @return string
     */
    public function getTaxable()
    {
        return $this->container['taxable'];
    }

    /**
     * Sets taxable
     *
     * @param string $taxable <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP104_TAXABLE  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 1  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setTaxable($taxable)
    {
        $this->container['taxable'] = $taxable;

        return $this;
    }

    /**
     * Gets ut
     *
     * @return string
     */
    public function getUt()
    {
        return $this->container['ut'];
    }

    /**
     * Sets ut
     *
     * @param string $ut <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP104_UOT_PUR  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 3  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setUt($ut)
    {
        $this->container['ut'] = $ut;

        return $this;
    }

    /**
     * Gets time_units
     *
     * @return double
     */
    public function getTimeUnits()
    {
        return $this->container['time_units'];
    }

    /**
     * Sets time_units
     *
     * @param double $time_units <div class=\"tooltip\">Info<span class=\"tooltiptext\"><span class=\"tooltipHeader\">Database column:</span> AP104_TIME_QTY_INVOICED  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Length:</span> 134  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Read Only</span>  <div class=\"TooltipSpace\"></div>  <span class=\"tooltipHeader\">Searchable</span></span></div>
     *
     * @return $this
     */
    public function setTimeUnits($time_units)
    {
        $this->container['time_units'] = $time_units;

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

