<?php

namespace JapSeyz\HasOneThrough;

use Illuminate\Database\Eloquent\Model;

class ModelExtender extends Model
{
    /*
        * Define a has-one-through relationship.
        *
        * @param  string  $related
        * @param  string  $through
        * @param  string|null  $firstKey
        * @param  string|null  $secondKey
        * @return \Illuminate\Database\Eloquent\Relations\HasOneThrough
        */
    public function hasOneThrough($related, $through, $firstKey = null, $secondKey = null, $localKey = null)
    {
        $through = app($through);
        $firstKey = $firstKey ?: $this->getForeignKey();
        $secondKey = $secondKey ?: $through->getForeignKey();
        $localKey = $localKey ?: $this->getKeyName();
        return new HasOneThrough(app($related)->newQuery(), $this, $through, $firstKey, $secondKey, $localKey);
    }
}