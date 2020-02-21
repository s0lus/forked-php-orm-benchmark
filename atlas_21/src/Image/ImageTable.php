<?php
/**
 * This file was generated by Atlas. Changes will be overwritten.
 */
declare(strict_types=1);

namespace Image;

use Atlas\Table\Table;

/**
 * @method ImageRow|null fetchRow($primaryVal)
 * @method ImageRow[] fetchRows(array $primaryVals)
 * @method ImageTableSelect select(array $whereEquals = [])
 * @method ImageRow newRow(array $cols = [])
 * @method ImageRow newSelectedRow(array $cols)
 */
class ImageTable extends Table
{
    const DRIVER = 'sqlite';

    const NAME = 'images';

    const COLUMNS = [
        'id' => array (
  'name' => 'id',
  'type' => 'INTEGER',
  'size' => NULL,
  'scale' => NULL,
  'notnull' => true,
  'default' => NULL,
  'autoinc' => true,
  'primary' => true,
  'options' => NULL,
),
        'imageable_id' => array (
  'name' => 'imageable_id',
  'type' => 'INTEGER',
  'size' => NULL,
  'scale' => NULL,
  'notnull' => false,
  'default' => NULL,
  'autoinc' => false,
  'primary' => false,
  'options' => NULL,
),
        'imageable_type' => array (
  'name' => 'imageable_type',
  'type' => 'VARCHAR',
  'size' => 128,
  'scale' => NULL,
  'notnull' => false,
  'default' => NULL,
  'autoinc' => false,
  'primary' => false,
  'options' => NULL,
),
        'path' => array (
  'name' => 'path',
  'type' => 'VARCHAR',
  'size' => 128,
  'scale' => NULL,
  'notnull' => true,
  'default' => NULL,
  'autoinc' => false,
  'primary' => false,
  'options' => NULL,
),
    ];

    const COLUMN_NAMES = [
        'id',
        'imageable_id',
        'imageable_type',
        'path',
    ];

    const COLUMN_DEFAULTS = [
        'id' => null,
        'imageable_id' => null,
        'imageable_type' => null,
        'path' => null,
    ];

    const PRIMARY_KEY = [
        'id',
    ];

    const AUTOINC_COLUMN = 'id';

    const AUTOINC_SEQUENCE = null;
}