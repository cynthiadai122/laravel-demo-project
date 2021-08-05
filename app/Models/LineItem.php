<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LineItem
 * 
 * @property string $id
 * @property string|null $create_by
 * @property Carbon|null $create_time
 * @property string|null $update_by
 * @property Carbon|null $update_time
 * @property string|null $sys_org_code
 * @property string|null $description
 * @property float|null $quantity
 * @property float|null $unit_amount
 * @property string|null $item_code
 * @property string|null $account_code
 * @property string|null $line_item_id
 * @property string|null $tax_type
 * @property float|null $tax_amount
 * @property float|null $line_amount
 * @property float|null $discount_rate
 * @property float|null $discount_amount
 * @property string|null $tracking
 * @property string|null $invoice_id
 *
 * @package App\Models
 */
class LineItem extends Model
{
	protected $table = 'line_items';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'quantity' => 'float',
		'unit_amount' => 'float',
		'tax_amount' => 'float',
		'line_amount' => 'float',
		'discount_rate' => 'float',
		'discount_amount' => 'float'
	];

	protected $dates = [
		'create_time',
		'update_time'
	];

	protected $fillable = [
		'create_by',
		'create_time',
		'update_by',
		'update_time',
		'sys_org_code',
		'description',
		'quantity',
		'unit_amount',
		'item_code',
		'account_code',
		'line_item_id',
		'tax_type',
		'tax_amount',
		'line_amount',
		'discount_rate',
		'discount_amount',
		'tracking',
		'invoice_id'
	];
}
