<?php
/**
 * LayoutSection
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  HubSpot\Client\Cms\Blogs\BlogPosts
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Blog Post endpoints
 *
 * Use these endpoints for interacting with Blog Posts, Blog Authors, and Blog Tags
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

namespace HubSpot\Client\Cms\Blogs\BlogPosts\Model;

use \ArrayAccess;
use \HubSpot\Client\Cms\Blogs\BlogPosts\ObjectSerializer;

/**
 * LayoutSection Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Cms\Blogs\BlogPosts
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class LayoutSection implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LayoutSection';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'x' => 'int',
        'w' => 'int',
        'name' => 'string',
        'label' => 'string',
        'type' => 'string',
        'params' => 'array<string,object>',
        'rows' => 'array<string,\HubSpot\Client\Cms\Blogs\BlogPosts\Model\LayoutSection>[]',
        'row_meta_data' => '\HubSpot\Client\Cms\Blogs\BlogPosts\Model\RowMetaData[]',
        'cells' => '\HubSpot\Client\Cms\Blogs\BlogPosts\Model\LayoutSection[]',
        'css_class' => 'string',
        'css_style' => 'string',
        'css_id' => 'string',
        'styles' => '\HubSpot\Client\Cms\Blogs\BlogPosts\Model\Styles'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'x' => 'int32',
        'w' => 'int32',
        'name' => null,
        'label' => null,
        'type' => null,
        'params' => null,
        'rows' => null,
        'row_meta_data' => null,
        'cells' => null,
        'css_class' => null,
        'css_style' => null,
        'css_id' => null,
        'styles' => null
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
        'x' => 'x',
        'w' => 'w',
        'name' => 'name',
        'label' => 'label',
        'type' => 'type',
        'params' => 'params',
        'rows' => 'rows',
        'row_meta_data' => 'rowMetaData',
        'cells' => 'cells',
        'css_class' => 'cssClass',
        'css_style' => 'cssStyle',
        'css_id' => 'cssId',
        'styles' => 'styles'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'x' => 'setX',
        'w' => 'setW',
        'name' => 'setName',
        'label' => 'setLabel',
        'type' => 'setType',
        'params' => 'setParams',
        'rows' => 'setRows',
        'row_meta_data' => 'setRowMetaData',
        'cells' => 'setCells',
        'css_class' => 'setCssClass',
        'css_style' => 'setCssStyle',
        'css_id' => 'setCssId',
        'styles' => 'setStyles'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'x' => 'getX',
        'w' => 'getW',
        'name' => 'getName',
        'label' => 'getLabel',
        'type' => 'getType',
        'params' => 'getParams',
        'rows' => 'getRows',
        'row_meta_data' => 'getRowMetaData',
        'cells' => 'getCells',
        'css_class' => 'getCssClass',
        'css_style' => 'getCssStyle',
        'css_id' => 'getCssId',
        'styles' => 'getStyles'
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
        $this->container['x'] = $data['x'] ?? null;
        $this->container['w'] = $data['w'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['label'] = $data['label'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['params'] = $data['params'] ?? null;
        $this->container['rows'] = $data['rows'] ?? null;
        $this->container['row_meta_data'] = $data['row_meta_data'] ?? null;
        $this->container['cells'] = $data['cells'] ?? null;
        $this->container['css_class'] = $data['css_class'] ?? null;
        $this->container['css_style'] = $data['css_style'] ?? null;
        $this->container['css_id'] = $data['css_id'] ?? null;
        $this->container['styles'] = $data['styles'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['x'] === null) {
            $invalidProperties[] = "'x' can't be null";
        }
        if ($this->container['w'] === null) {
            $invalidProperties[] = "'w' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['label'] === null) {
            $invalidProperties[] = "'label' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['params'] === null) {
            $invalidProperties[] = "'params' can't be null";
        }
        if ($this->container['rows'] === null) {
            $invalidProperties[] = "'rows' can't be null";
        }
        if ($this->container['row_meta_data'] === null) {
            $invalidProperties[] = "'row_meta_data' can't be null";
        }
        if ($this->container['cells'] === null) {
            $invalidProperties[] = "'cells' can't be null";
        }
        if ($this->container['css_class'] === null) {
            $invalidProperties[] = "'css_class' can't be null";
        }
        if ($this->container['css_style'] === null) {
            $invalidProperties[] = "'css_style' can't be null";
        }
        if ($this->container['css_id'] === null) {
            $invalidProperties[] = "'css_id' can't be null";
        }
        if ($this->container['styles'] === null) {
            $invalidProperties[] = "'styles' can't be null";
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
     * Gets x
     *
     * @return int
     */
    public function getX()
    {
        return $this->container['x'];
    }

    /**
     * Sets x
     *
     * @param int $x x
     *
     * @return self
     */
    public function setX($x)
    {
        $this->container['x'] = $x;

        return $this;
    }

    /**
     * Gets w
     *
     * @return int
     */
    public function getW()
    {
        return $this->container['w'];
    }

    /**
     * Sets w
     *
     * @param int $w w
     *
     * @return self
     */
    public function setW($w)
    {
        $this->container['w'] = $w;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label label
     *
     * @return self
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets params
     *
     * @return array<string,object>
     */
    public function getParams()
    {
        return $this->container['params'];
    }

    /**
     * Sets params
     *
     * @param array<string,object> $params null
     *
     * @return self
     */
    public function setParams($params)
    {
        $this->container['params'] = $params;

        return $this;
    }

    /**
     * Gets rows
     *
     * @return array<string,\HubSpot\Client\Cms\Blogs\BlogPosts\Model\LayoutSection>[]
     */
    public function getRows()
    {
        return $this->container['rows'];
    }

    /**
     * Sets rows
     *
     * @param array<string,\HubSpot\Client\Cms\Blogs\BlogPosts\Model\LayoutSection>[] $rows rows
     *
     * @return self
     */
    public function setRows($rows)
    {
        $this->container['rows'] = $rows;

        return $this;
    }

    /**
     * Gets row_meta_data
     *
     * @return \HubSpot\Client\Cms\Blogs\BlogPosts\Model\RowMetaData[]
     */
    public function getRowMetaData()
    {
        return $this->container['row_meta_data'];
    }

    /**
     * Sets row_meta_data
     *
     * @param \HubSpot\Client\Cms\Blogs\BlogPosts\Model\RowMetaData[] $row_meta_data row_meta_data
     *
     * @return self
     */
    public function setRowMetaData($row_meta_data)
    {
        $this->container['row_meta_data'] = $row_meta_data;

        return $this;
    }

    /**
     * Gets cells
     *
     * @return \HubSpot\Client\Cms\Blogs\BlogPosts\Model\LayoutSection[]
     */
    public function getCells()
    {
        return $this->container['cells'];
    }

    /**
     * Sets cells
     *
     * @param \HubSpot\Client\Cms\Blogs\BlogPosts\Model\LayoutSection[] $cells cells
     *
     * @return self
     */
    public function setCells($cells)
    {
        $this->container['cells'] = $cells;

        return $this;
    }

    /**
     * Gets css_class
     *
     * @return string
     */
    public function getCssClass()
    {
        return $this->container['css_class'];
    }

    /**
     * Sets css_class
     *
     * @param string $css_class css_class
     *
     * @return self
     */
    public function setCssClass($css_class)
    {
        $this->container['css_class'] = $css_class;

        return $this;
    }

    /**
     * Gets css_style
     *
     * @return string
     */
    public function getCssStyle()
    {
        return $this->container['css_style'];
    }

    /**
     * Sets css_style
     *
     * @param string $css_style css_style
     *
     * @return self
     */
    public function setCssStyle($css_style)
    {
        $this->container['css_style'] = $css_style;

        return $this;
    }

    /**
     * Gets css_id
     *
     * @return string
     */
    public function getCssId()
    {
        return $this->container['css_id'];
    }

    /**
     * Sets css_id
     *
     * @param string $css_id css_id
     *
     * @return self
     */
    public function setCssId($css_id)
    {
        $this->container['css_id'] = $css_id;

        return $this;
    }

    /**
     * Gets styles
     *
     * @return \HubSpot\Client\Cms\Blogs\BlogPosts\Model\Styles
     */
    public function getStyles()
    {
        return $this->container['styles'];
    }

    /**
     * Sets styles
     *
     * @param \HubSpot\Client\Cms\Blogs\BlogPosts\Model\Styles $styles styles
     *
     * @return self
     */
    public function setStyles($styles)
    {
        $this->container['styles'] = $styles;

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


