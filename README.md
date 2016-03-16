## Laravel Relation: HasOneThrough
This package extends the laravel relationships to include a HasOneThrough method.

### Install
1. Add "japseyz/has-one-through": "~1.0" to your composer.json
2. Run composer update
3. In app/config.php aliases add **'Model' => JapSeyz\HasOneThrough\ModelExtender::class,**
4. Change your Models to import \Model

### Done.
Use it as you would use $this->hasMany etc.
