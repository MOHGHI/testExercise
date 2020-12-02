<?php

final class Item
{

    /**
     * Object to imitate data from database.
     *
     * @var array
     */
    private $object = [
        'id' => 1,
        'name' => 'ccc',
        'status' => 1,
    ];

    /**
     * Id of the Instanced object.
     *
     * @var int
     */
    private $id;

    /**
     * Name of the Instanced object.
     *
     * @var string
     */
    private $name = '';

    /**
     * Status of the Instanced object.
     *
     * @var int
     */
    private $status = 0;

    /**
     * Indicates if the object are was changed.
     *
     * @var bool
     */
    private $changed = false;

    /**
     * Create a new Item instance.
     *
     * @param $id
     * @return void
     */
    public function __construct(int $id)
    {
        $this->id = $id;
        $this->init($this->object);
    }

    /**
     * Initialize instance attributes.
     *
     * @param $object
     * @return void
     */
    private function init($object)
    {
        static $init_called = false;
        if ($init_called) return;

        $init_called = true;
        $this->name = $object['name'];
        $this->status = $object['status'];
        $this->save();
    }

    /**
     * Attributes getter.
     *
     * @param $property
     * @return mixed|null
     */
    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }

        return null;
    }

    /**
     * Attributes setter.
     *
     * @param $property
     * @param $value
     * @return void
     */
    public function __set($property, $value)
    {
        if (property_exists($this, $property)
            && !empty($value)
            && $property !== 'id'
            && gettype($this->$property) === gettype($value)) {
            $this->$property = $value;
            $this->changed = true;
        }
    }

    /**
     * Save attributes to object
     *
     * @return void
     */
    public function save()
    {
        if ($this->changed) {
            $this->object['id'] = $this->id;
            $this->object['name'] = $this->name;
            $this->object['status'] = $this->status;
        }
    }


}


