<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Okex;


use Lin\Okex\Api\Spot\Accounts;
use Lin\Okex\Api\Spot\Fills;
use Lin\Okex\Api\Spot\Instruments;
use Lin\Okex\Api\Spot\Orders;
use Lin\Okex\Api\Spot\Trade;

class OkexSpot
{
    protected $key;
    protected $secret;
    protected $passphrase;
    protected $host;
    
    protected $options=[];
    
    function __construct(string $key='',string $secret='',string $passphrase='',string $host='https://www.okex.com'){
        $this->key=$key;
        $this->secret=$secret;
        $this->host=$host;
        $this->passphrase=$passphrase;
    }
    
    /**
     *
     * */
    private function init(){
        return [
            'key'=>$this->key,
            'secret'=>$this->secret,
            'passphrase'=>$this->passphrase,
            'host'=>$this->host,
            'options'=>$this->options,
        ];
    }
    
    /**
     *
     * */
    function setOptions(array $options=[]){
        $this->options=$options;
    }

    /**
     *
     * */
    public function account(){
        return  new Accounts($this->init());
    }
    
    /**
     *
     * */
    public function fill(){
        return  new Fills($this->init());
    }
    
    /**
     *
     * */
    public function instrument(){
        return  new Instruments($this->init());
    }
    
    /**
     *
     * */
    public function order(){
        return  new Orders($this->init());
    }
    
    /**
     *
     * */
    public function trade(){
        return  new Trade($this->init());
    }
}