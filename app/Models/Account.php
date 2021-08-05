<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Account
 * 
 * @property string $id
 * @property string|null $tenant_id
 * @property string|null $account_id
 * @property string|null $code
 * @property string|null $name
 * @property string|null $type
 * @property string|null $tax_type
 * @property string|null $description
 * @property int|null $enable_payments_to_account
 * @property string|null $bank_account_number
 * @property string|null $bank_account_type
 * @property string|null $currency_code
 * @property string|null $status
 * @property int|null $show_in_expense_claims
 * @property string|null $system_account
 * @property string|null $reporting_code
 * @property string|null $reporting_code_name
 * @property int|null $has_attachments
 * @property Carbon|null $updated_date_utc
 * @property int|null $add_to_watchlist
 * @property string|null $property_class
 *
 * @package App\Models
 */
class Account extends Model
{
	protected $table = 'accounts';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'enable_payments_to_account' => 'int',
		'show_in_expense_claims' => 'int',
		'has_attachments' => 'int',
		'add_to_watchlist' => 'int'
	];

	protected $dates = [
		'updated_date_utc'
	];

	protected $fillable = [
		'tenant_id',
		'account_id',
		'code',
		'name',
		'type',
		'tax_type',
		'description',
		'enable_payments_to_account',
		'bank_account_number',
		'bank_account_type',
		'currency_code',
		'status',
		'show_in_expense_claims',
		'system_account',
		'reporting_code',
		'reporting_code_name',
		'has_attachments',
		'updated_date_utc',
		'add_to_watchlist',
		'property_class'
	];
}
