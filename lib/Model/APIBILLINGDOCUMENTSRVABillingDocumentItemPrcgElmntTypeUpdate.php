<?php
/**
 * APIBILLINGDOCUMENTSRVABillingDocumentItemPrcgElmntTypeUpdate
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
 * APIBILLINGDOCUMENTSRVABillingDocumentItemPrcgElmntTypeUpdate Class Doc Comment
 *
 * @category Class
 * @package  BeLenka\SAP\BillingDocumentRCG2
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class APIBILLINGDOCUMENTSRVABillingDocumentItemPrcgElmntTypeUpdate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'API_BILLING_DOCUMENT_SRV.A_BillingDocumentItemPrcgElmntType-update';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'condition_type' => 'string',
        'condition_rate_value' => 'float',
        'condition_currency' => 'string',
        'condition_quantity' => 'float',
        'condition_quantity_unit' => 'string',
        'transaction_currency' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'condition_type' => null,
        'condition_rate_value' => 'decimal',
        'condition_currency' => null,
        'condition_quantity' => 'decimal',
        'condition_quantity_unit' => null,
        'transaction_currency' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'condition_type' => true,
		'condition_rate_value' => true,
		'condition_currency' => true,
		'condition_quantity' => true,
		'condition_quantity_unit' => true,
		'transaction_currency' => true
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
        'condition_type' => 'ConditionType',
        'condition_rate_value' => 'ConditionRateValue',
        'condition_currency' => 'ConditionCurrency',
        'condition_quantity' => 'ConditionQuantity',
        'condition_quantity_unit' => 'ConditionQuantityUnit',
        'transaction_currency' => 'TransactionCurrency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'condition_type' => 'setConditionType',
        'condition_rate_value' => 'setConditionRateValue',
        'condition_currency' => 'setConditionCurrency',
        'condition_quantity' => 'setConditionQuantity',
        'condition_quantity_unit' => 'setConditionQuantityUnit',
        'transaction_currency' => 'setTransactionCurrency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'condition_type' => 'getConditionType',
        'condition_rate_value' => 'getConditionRateValue',
        'condition_currency' => 'getConditionCurrency',
        'condition_quantity' => 'getConditionQuantity',
        'condition_quantity_unit' => 'getConditionQuantityUnit',
        'transaction_currency' => 'getTransactionCurrency'
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
        $this->setIfExists('condition_type', $data ?? [], null);
        $this->setIfExists('condition_rate_value', $data ?? [], null);
        $this->setIfExists('condition_currency', $data ?? [], null);
        $this->setIfExists('condition_quantity', $data ?? [], null);
        $this->setIfExists('condition_quantity_unit', $data ?? [], null);
        $this->setIfExists('transaction_currency', $data ?? [], null);
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

        if (!is_null($this->container['condition_type']) && (mb_strlen($this->container['condition_type']) > 4)) {
            $invalidProperties[] = "invalid value for 'condition_type', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['condition_currency']) && (mb_strlen($this->container['condition_currency']) > 5)) {
            $invalidProperties[] = "invalid value for 'condition_currency', the character length must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['condition_quantity_unit']) && (mb_strlen($this->container['condition_quantity_unit']) > 3)) {
            $invalidProperties[] = "invalid value for 'condition_quantity_unit', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['transaction_currency']) && (mb_strlen($this->container['transaction_currency']) > 5)) {
            $invalidProperties[] = "invalid value for 'transaction_currency', the character length must be smaller than or equal to 5.";
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
     * Gets condition_type
     *
     * @return string|null
     */
    public function getConditionType()
    {
        return $this->container['condition_type'];
    }

    /**
     * Sets condition_type
     *
     * @param string|null $condition_type condition_type
     *
     * @return self
     */
    public function setConditionType($condition_type)
    {
        if (is_null($condition_type)) {
            array_push($this->openAPINullablesSetToNull, 'condition_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('condition_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($condition_type) && (mb_strlen($condition_type) > 4)) {
            throw new \InvalidArgumentException('invalid length for $condition_type when calling APIBILLINGDOCUMENTSRVABillingDocumentItemPrcgElmntTypeUpdate., must be smaller than or equal to 4.');
        }

        $this->container['condition_type'] = $condition_type;

        return $this;
    }

    /**
     * Gets condition_rate_value
     *
     * @return float|null
     */
    public function getConditionRateValue()
    {
        return $this->container['condition_rate_value'];
    }

    /**
     * Sets condition_rate_value
     *
     * @param float|null $condition_rate_value Condition Amount or Percentage
     *
     * @return self
     */
    public function setConditionRateValue($condition_rate_value)
    {
        if (is_null($condition_rate_value)) {
            array_push($this->openAPINullablesSetToNull, 'condition_rate_value');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('condition_rate_value', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }


        $this->container['condition_rate_value'] = $condition_rate_value;

        return $this;
    }

    /**
     * Gets condition_currency
     *
     * @return string|null
     */
    public function getConditionCurrency()
    {
        return $this->container['condition_currency'];
    }

    /**
     * Sets condition_currency
     *
     * @param string|null $condition_currency Currency Key
     *
     * @return self
     */
    public function setConditionCurrency($condition_currency)
    {
        if (is_null($condition_currency)) {
            array_push($this->openAPINullablesSetToNull, 'condition_currency');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('condition_currency', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($condition_currency) && (mb_strlen($condition_currency) > 5)) {
            throw new \InvalidArgumentException('invalid length for $condition_currency when calling APIBILLINGDOCUMENTSRVABillingDocumentItemPrcgElmntTypeUpdate., must be smaller than or equal to 5.');
        }

        $this->container['condition_currency'] = $condition_currency;

        return $this;
    }

    /**
     * Gets condition_quantity
     *
     * @return float|null
     */
    public function getConditionQuantity()
    {
        return $this->container['condition_quantity'];
    }

    /**
     * Sets condition_quantity
     *
     * @param float|null $condition_quantity Condition Pricing Unit
     *
     * @return self
     */
    public function setConditionQuantity($condition_quantity)
    {
        if (is_null($condition_quantity)) {
            array_push($this->openAPINullablesSetToNull, 'condition_quantity');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('condition_quantity', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }


        $this->container['condition_quantity'] = $condition_quantity;

        return $this;
    }

    /**
     * Gets condition_quantity_unit
     *
     * @return string|null
     */
    public function getConditionQuantityUnit()
    {
        return $this->container['condition_quantity_unit'];
    }

    /**
     * Sets condition_quantity_unit
     *
     * @param string|null $condition_quantity_unit Condition Unit in the Document
     *
     * @return self
     */
    public function setConditionQuantityUnit($condition_quantity_unit)
    {
        if (is_null($condition_quantity_unit)) {
            array_push($this->openAPINullablesSetToNull, 'condition_quantity_unit');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('condition_quantity_unit', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($condition_quantity_unit) && (mb_strlen($condition_quantity_unit) > 3)) {
            throw new \InvalidArgumentException('invalid length for $condition_quantity_unit when calling APIBILLINGDOCUMENTSRVABillingDocumentItemPrcgElmntTypeUpdate., must be smaller than or equal to 3.');
        }

        $this->container['condition_quantity_unit'] = $condition_quantity_unit;

        return $this;
    }

    /**
     * Gets transaction_currency
     *
     * @return string|null
     */
    public function getTransactionCurrency()
    {
        return $this->container['transaction_currency'];
    }

    /**
     * Sets transaction_currency
     *
     * @param string|null $transaction_currency SD Document Currency
     *
     * @return self
     */
    public function setTransactionCurrency($transaction_currency)
    {
        if (is_null($transaction_currency)) {
            array_push($this->openAPINullablesSetToNull, 'transaction_currency');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('transaction_currency', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($transaction_currency) && (mb_strlen($transaction_currency) > 5)) {
            throw new \InvalidArgumentException('invalid length for $transaction_currency when calling APIBILLINGDOCUMENTSRVABillingDocumentItemPrcgElmntTypeUpdate., must be smaller than or equal to 5.');
        }

        $this->container['transaction_currency'] = $transaction_currency;

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


