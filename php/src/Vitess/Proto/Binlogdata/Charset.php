<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: binlogdata.proto

namespace Vitess\Proto\Binlogdata {

  class Charset extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $client = null;
    
    /**  @var int */
    public $conn = null;
    
    /**  @var int */
    public $server = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'binlogdata.Charset');

      // OPTIONAL INT32 client = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "client";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL INT32 conn = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "conn";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL INT32 server = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "server";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <client> has a value
     *
     * @return boolean
     */
    public function hasClient(){
      return $this->_has(1);
    }
    
    /**
     * Clear <client> value
     *
     * @return \Vitess\Proto\Binlogdata\Charset
     */
    public function clearClient(){
      return $this->_clear(1);
    }
    
    /**
     * Get <client> value
     *
     * @return int
     */
    public function getClient(){
      return $this->_get(1);
    }
    
    /**
     * Set <client> value
     *
     * @param int $value
     * @return \Vitess\Proto\Binlogdata\Charset
     */
    public function setClient( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <conn> has a value
     *
     * @return boolean
     */
    public function hasConn(){
      return $this->_has(2);
    }
    
    /**
     * Clear <conn> value
     *
     * @return \Vitess\Proto\Binlogdata\Charset
     */
    public function clearConn(){
      return $this->_clear(2);
    }
    
    /**
     * Get <conn> value
     *
     * @return int
     */
    public function getConn(){
      return $this->_get(2);
    }
    
    /**
     * Set <conn> value
     *
     * @param int $value
     * @return \Vitess\Proto\Binlogdata\Charset
     */
    public function setConn( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <server> has a value
     *
     * @return boolean
     */
    public function hasServer(){
      return $this->_has(3);
    }
    
    /**
     * Clear <server> value
     *
     * @return \Vitess\Proto\Binlogdata\Charset
     */
    public function clearServer(){
      return $this->_clear(3);
    }
    
    /**
     * Get <server> value
     *
     * @return int
     */
    public function getServer(){
      return $this->_get(3);
    }
    
    /**
     * Set <server> value
     *
     * @param int $value
     * @return \Vitess\Proto\Binlogdata\Charset
     */
    public function setServer( $value){
      return $this->_set(3, $value);
    }
  }
}

