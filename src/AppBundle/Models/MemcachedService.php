<?php
namespace AppBundle\Models;

class MemcachedService
{
    public $connection = null;

    public $object = null;

    /**
     * MemcachedService constructor.
     * @param array $server
     */
    public function __construct(array $server)
    {
        $array = [];
        $Memcached = new \Memcached();
        $this->object = $Memcached;
        foreach ($server['end_point'] as $item) {
            echo $item['server'];
            $array[] = array($item['server'],$item['port']);
        }
        $this->connection = $Memcached->addServers($array);
    }

    /**
     * @return array
     */
    public function getMetrics()
    {
        $this->connection;
        return $this->object->getStats();
    }

    /**
     * @return array
     */
    public function getServerList()
    {
        $this->connection;
        return $this->object->getServerList();
    }
}