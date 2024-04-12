<?php
/**
 * CreateInvoiceSubFeatures
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Extensions\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Accounting Extension
 *
 * These APIs allow you to interact with HubSpot's Accounting Extension. It allows you to: * Specify the URLs that HubSpot will use when making webhook requests to your external accounting system. * Respond to webhook calls made to your external accounting system by HubSpot
 *
 * The version of the OpenAPI document: v3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HubSpot\Client\Crm\Extensions\Accounting\Model;

use \ArrayAccess;
use \HubSpot\Client\Crm\Extensions\Accounting\ObjectSerializer;

/**
 * CreateInvoiceSubFeatures Class Doc Comment
 *
 * @category Class
 * @description Lists the individual aspects of creating invoices that are enabled for the integration, as part of the create invoice flow in HubSpot.
 * @package  HubSpot\Client\Crm\Extensions\Accounting
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateInvoiceSubFeatures implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateInvoiceSubFeatures';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'create_customer' => 'bool',
        'taxes' => 'bool',
        'exchange_rates' => 'bool',
        'terms' => 'bool',
        'invoice_comments' => 'bool',
        'invoice_discounts' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'create_customer' => null,
        'taxes' => null,
        'exchange_rates' => null,
        'terms' => null,
        'invoice_comments' => null,
        'invoice_discounts' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'create_customer' => 'createCustomer',
        'taxes' => 'taxes',
        'exchange_rates' => 'exchangeRates',
        'terms' => 'terms',
        'invoice_comments' => 'invoiceComments',
        'invoice_discounts' => 'invoiceDiscounts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'create_customer' => 'setCreateCustomer',
        'taxes' => 'setTaxes',
        'exchange_rates' => 'setExchangeRates',
        'terms' => 'setTerms',
        'invoice_comments' => 'setInvoiceComments',
        'invoice_discounts' => 'setInvoiceDiscounts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'create_customer' => 'getCreateCustomer',
        'taxes' => 'getTaxes',
        'exchange_rates' => 'getExchangeRates',
        'terms' => 'getTerms',
        'invoice_comments' => 'getInvoiceComments',
        'invoice_discounts' => 'getInvoiceDiscounts'
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
        return self::$openAPIModelName;
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
        $this->container['create_customer'] = $data['create_customer'] ?? null;
        $this->container['taxes'] = $data['taxes'] ?? null;
        $this->container['exchange_rates'] = $data['exchange_rates'] ?? null;
        $this->container['terms'] = $data['terms'] ?? null;
        $this->container['invoice_comments'] = $data['invoice_comments'] ?? null;
        $this->container['invoice_discounts'] = $data['invoice_discounts'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['create_customer'] === null) {
            $invalidProperties[] = "'create_customer' can't be null";
        }
        if ($this->container['taxes'] === null) {
            $invalidProperties[] = "'taxes' can't be null";
        }
        if ($this->container['exchange_rates'] === null) {
            $invalidProperties[] = "'exchange_rates' can't be null";
        }
        if ($this->container['terms'] === null) {
            $invalidProperties[] = "'terms' can't be null";
        }
        if ($this->container['invoice_comments'] === null) {
            $invalidProperties[] = "'invoice_comments' can't be null";
        }
        if ($this->container['invoice_discounts'] === null) {
            $invalidProperties[] = "'invoice_discounts' can't be null";
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
     * Gets create_customer
     *
     * @return bool
     */
    public function getCreateCustomer()
    {
        return $this->container['create_customer'];
    }

    /**
     * Sets create_customer
     *
     * @param bool $create_customer Indicates if a new customer can be created in the external accounting system.
     *
     * @return self
     */
    public function setCreateCustomer($create_customer)
    {
        $this->container['create_customer'] = $create_customer;

        return $this;
    }

    /**
     * Gets taxes
     *
     * @return bool
     */
    public function getTaxes()
    {
        return $this->container['taxes'];
    }

    /**
     * Sets taxes
     *
     * @param bool $taxes Indicates if taxes can be specified by the HubSpot user for line items.
     *
     * @return self
     */
    public function setTaxes($taxes)
    {
        $this->container['taxes'] = $taxes;

        return $this;
    }

    /**
     * Gets exchange_rates
     *
     * @return bool
     */
    public function getExchangeRates()
    {
        return $this->container['exchange_rates'];
    }

    /**
     * Sets exchange_rates
     *
     * @param bool $exchange_rates Indicates if the external accounting system supports fetching exchange rates when create an invoice in HubSpot for a customer billed in a different currency.
     *
     * @return self
     */
    public function setExchangeRates($exchange_rates)
    {
        $this->container['exchange_rates'] = $exchange_rates;

        return $this;
    }

    /**
     * Gets terms
     *
     * @return bool
     */
    public function getTerms()
    {
        return $this->container['terms'];
    }

    /**
     * Sets terms
     *
     * @param bool $terms Indicates if the external accounting system supports fetching payment terms.
     *
     * @return self
     */
    public function setTerms($terms)
    {
        $this->container['terms'] = $terms;

        return $this;
    }

    /**
     * Gets invoice_comments
     *
     * @return bool
     */
    public function getInvoiceComments()
    {
        return $this->container['invoice_comments'];
    }

    /**
     * Sets invoice_comments
     *
     * @param bool $invoice_comments Indicates if a visible comment can be added to invoices.
     *
     * @return self
     */
    public function setInvoiceComments($invoice_comments)
    {
        $this->container['invoice_comments'] = $invoice_comments;

        return $this;
    }

    /**
     * Gets invoice_discounts
     *
     * @return bool
     */
    public function getInvoiceDiscounts()
    {
        return $this->container['invoice_discounts'];
    }

    /**
     * Sets invoice_discounts
     *
     * @param bool $invoice_discounts Indicates if invoice-level discounts can be added to invoices.
     *
     * @return self
     */
    public function setInvoiceDiscounts($invoice_discounts)
    {
        $this->container['invoice_discounts'] = $invoice_discounts;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


