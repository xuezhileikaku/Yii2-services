<?php

namespace common\services;

use yii\base\Component;

/**
 *
 * Cache functions
 * get()：通过一个指定的键（key）从缓存中取回一项数据。 如果该项数据不存在于缓存中或者已经过期/失效，则返回值 false。
 * set()：将一个由键指定的数据项存放到缓存中。
 * add()：如果缓存中未找到该键，则将指定数据存放到缓存中。
 * getOrSet()：返回由键指定的缓存项，或者执行回调函数，把函数的返回值用键来关联存储到缓存中， 最后返回这个函数的返回值。
 * multiGet()：由指定的键获取多个缓存数据项。
 * multiSet()：一次存储多个数据项到缓存中，每个数据都由一个键来指明。
 * multiAdd()：一次存储多个数据项到缓存中，每个数据都由一个键来指明。 如果某个键已经存在，则略过该数据项不缓存。
 * exists()：返回一个值，指明某个键是否存在于缓存中。
 * delete()：通过一个键，删除缓存中对应的值。
 * flush()：删除缓存中的所有数据。
 * Class Service
 * @package common\services
 */
class Service extends Component
{
    public $cache;

    /**
     * $exam.'_MockPaperTypes'
     *
     */
    public function init()
    {
        $this->cache = \Yii::$app->cache;
    }
}