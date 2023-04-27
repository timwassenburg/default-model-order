<?php

namespace TimWassenburg\DefaultModelOrder;

use Illuminate\Database\Eloquent\Builder;

trait DefaultOrder
{
    /**
     * @throws \Exception
     */
    protected static function boot()
    {
        parent::boot();

        $orderBy = self::getOrderColumn();
        $orderDirection = self::getOrderDirection();

        static::addGlobalScope('order', function (Builder $builder) use ($orderBy, $orderDirection) {
            $builder->orderBy($orderBy, $orderDirection);
        });
    }

    protected static function getOrderColumn(): string
    {
        return static::$orderBy ?? config('default-model-order.order_by');
    }

    protected static function getOrderDirection(): string
    {
        $direction = static::$orderDirection ?? config('default-model-order.order_direction');

        if (! in_array($direction, ['asc', 'desc'])) {
            throw new \Exception('Invalid order direction');
        }

        return $direction;
    }
}
