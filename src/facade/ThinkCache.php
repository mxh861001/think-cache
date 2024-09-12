<?php

declare (strict_types=1);

namespace ThinkCache\facade;

use think\Facade;

/**
 * Class ThinkCache
 * @package ThinkCache\facade
 * @see \ThinkCache\CacheManager
 * @mixin \ThinkCache\CacheManager
 */
class ThinkCache extends Facade
{
    /**
     * 获取当前Facade对应类名（或者已经绑定的容器对象标识）.
     *
     * @return string
     */
    protected static function getFacadeClass()
    {
        return 'ThinkCache\CacheManager';
    }
}