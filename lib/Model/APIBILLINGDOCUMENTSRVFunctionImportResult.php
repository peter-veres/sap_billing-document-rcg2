<?php
/**
 * APIBILLINGDOCUMENTSRVFunctionImportResult
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  BeLenka\SAP\BillingDocumentRCG2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Billing Document - Read, Cancel, GetPDF
 *
 * Consumers of this inbound service can read and cancel billing documents inside your system by sending OData requests. In addition, they can request entire billing documents in PDF format. The service makes billing document data available through its header, item, business partner, and pricing element entities.
 *
 * The version of the OpenAPI document: 1.1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace BeLenka\SAP\BillingDocumentRCG2\Model;

use \ArrayAccess;
use \BeLenka\SAP\BillingDocumentRCG2\ObjectSerializer;

/**
 * APIBILLINGDOCUMENTSRVFunctionImportResult Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\SAP\BillingDocumentRCG2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class APIBILLINGDOCUMENTSRVFunctionImportResult implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'API_BILLING_DOCUMENT_SRV.FunctionImportResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'billing_document' => 'string',
        'billing_document_item' => 'string',
        'message_id' => 'string',
        'message_type' => 'string',
        'message' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'billing_document' => null,
        'billing_document_item' => null,
        'message_id' => null,
        'message_type' => null,
        'message' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'billing_document' => false,
		'billing_document_item' => false,
		'message_id' => false,
		'message_type' => false,
		'message' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'billing_document' => 'BillingDocument',
        'billing_document_item' => 'BillingDocumentItem',
        'message_id' => 'MessageId',
        'message_type' => 'MessageType',
        'message' => 'Message'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'billing_document' => 'setBillingDocument',
        'billing_document_item' => 'setBillingDocumentItem',
        'message_id' => 'setMessageId',
        'message_type' => 'setMessageType',
        'message' => 'setMessage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'billing_document' => 'getBillingDocument',
        'billing_document_item' => 'getBillingDocumentItem',
        'message_id' => 'getMessageId',
        'message_type' => 'getMessageType',
        'message' => 'getMessage'
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
        $this->setIfExists('billing_document', $data ?? [], null);
        $this->setIfExists('billing_document_item', $data ?? [], null);
        $this->setIfExists('message_id', $data ?? [], null);
        $this->setIfExists('message_type', $data ?? [], null);
        $this->setIfExists('message', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['billing_document']) && (mb_strlen($this->container['billing_document']) > 10)) {
            $invalidProperties[] = "invalid value for 'billing_document', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['billing_document_item']) && (mb_strlen($this->container['billing_document_item']) > 10)) {
            $invalidProperties[] = "invalid value for 'billing_document_item', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['message_id']) && (mb_strlen($this->container['message_id']) > 3)) {
            $invalidProperties[] = "invalid value for 'message_id', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['message_type']) && (mb_strlen($this->container['message_type']) > 1)) {
            $invalidProperties[] = "invalid value for 'message_type', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) > 256)) {
            $invalidProperties[] = "invalid value for 'message', the character length must be smaller than or equal to 256.";
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
     * Gets billing_document
     *
     * @return string|null
     */
    public function getBillingDocument()
    {
        return $this->container['billing_document'];
    }

    /**
     * Sets billing_document
     *
     * @param string|null $billing_document billing_document
     *
     * @return self
     */
    public function setBillingDocument($billing_document)
    {
        if (is_null($billing_document)) {
            throw new \InvalidArgumentException('non-nullable billing_document cannot be null');
        }
        if ((mb_strlen($billing_document) > 10)) {
            throw new \InvalidArgumentException('invalid length for $billing_document when calling APIBILLINGDOCUMENTSRVFunctionImportResult., must be smaller than or equal to 10.');
        }

        $this->container['billing_document'] = $billing_document;

        return $this;
    }

    /**
     * Gets billing_document_item
     *
     * @return string|null
     */
    public function getBillingDocumentItem()
    {
        return $this->container['billing_document_item'];
    }

    /**
     * Sets billing_document_item
     *
     * @param string|null $billing_document_item billing_document_item
     *
     * @return self
     */
    public function setBillingDocumentItem($billing_document_item)
    {
        if (is_null($billing_document_item)) {
            throw new \InvalidArgumentException('non-nullable billing_document_item cannot be null');
        }
        if ((mb_strlen($billing_document_item) > 10)) {
            throw new \InvalidArgumentException('invalid length for $billing_document_item when calling APIBILLINGDOCUMENTSRVFunctionImportResult., must be smaller than or equal to 10.');
        }

        $this->container['billing_document_item'] = $billing_document_item;

        return $this;
    }

    /**
     * Gets message_id
     *
     * @return string|null
     */
    public function getMessageId()
    {
        return $this->container['message_id'];
    }

    /**
     * Sets message_id
     *
     * @param string|null $message_id message_id
     *
     * @return self
     */
    public function setMessageId($message_id)
    {
        if (is_null($message_id)) {
            throw new \InvalidArgumentException('non-nullable message_id cannot be null');
        }
        if ((mb_strlen($message_id) > 3)) {
            throw new \InvalidArgumentException('invalid length for $message_id when calling APIBILLINGDOCUMENTSRVFunctionImportResult., must be smaller than or equal to 3.');
        }

        $this->container['message_id'] = $message_id;

        return $this;
    }

    /**
     * Gets message_type
     *
     * @return string|null
     */
    public function getMessageType()
    {
        return $this->container['message_type'];
    }

    /**
     * Sets message_type
     *
     * @param string|null $message_type message_type
     *
     * @return self
     */
    public function setMessageType($message_type)
    {
        if (is_null($message_type)) {
            throw new \InvalidArgumentException('non-nullable message_type cannot be null');
        }
        if ((mb_strlen($message_type) > 1)) {
            throw new \InvalidArgumentException('invalid length for $message_type when calling APIBILLINGDOCUMENTSRVFunctionImportResult., must be smaller than or equal to 1.');
        }

        $this->container['message_type'] = $message_type;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message message
     *
     * @return self
     */
    public function setMessage($message)
    {
        if (is_null($message)) {
            throw new \InvalidArgumentException('non-nullable message cannot be null');
        }
        if ((mb_strlen($message) > 256)) {
            throw new \InvalidArgumentException('invalid length for $message when calling APIBILLINGDOCUMENTSRVFunctionImportResult., must be smaller than or equal to 256.');
        }

        $this->container['message'] = $message;

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

