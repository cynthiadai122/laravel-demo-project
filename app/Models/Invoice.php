<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Invoice
 * 
 * @property string $id
 * @property string|null $create_by
 * @property Carbon|null $create_time
 * @property string|null $update_by
 * @property Carbon|null $update_time
 * @property string|null $sys_org_code
 * @property string|null $tenant_id
 * @property string|null $project_id
 * @property string|null $marketing_project_id
 * @property string|null $type
 * @property string|null $contact_id
 * @property Carbon|null $date
 * @property Carbon|null $due_date
 * @property string|null $status
 * @property string|null $line_amount_types
 * @property float|null $sub_total
 * @property float|null $total_tax
 * @property float|null $total
 * @property float|null $total_discount
 * @property Carbon|null $updated_date_utc
 * @property string|null $currency_code
 * @property float|null $currency_rate
 * @property string|null $invoice_id
 * @property string|null $invoice_number
 * @property string|null $reference
 * @property string|null $branding_theme_id
 * @property string|null $url
 * @property int|null $sent_to_contact
 * @property Carbon|null $expected_payment_date
 * @property Carbon|null $planned_payment_date
 * @property int|null $has_attachments
 * @property string|null $credit_notes
 * @property string|null $prepayments
 * @property string|null $overpayments
 * @property float|null $amount_due
 * @property float|null $amount_paid
 * @property string|null $cis_deduction
 * @property Carbon|null $fully_paid_on_date
 * @property float|null $amount_credited
 * @property string|null $repeating_invoice_id
 * @property int|null $is_discounted
 *
 * @package App\Models
 */
class Invoice extends Model
{
	protected $table = 'invoices';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'sub_total' => 'float',
		'total_tax' => 'float',
		'total' => 'float',
		'total_discount' => 'float',
		'currency_rate' => 'float',
		'sent_to_contact' => 'int',
		'has_attachments' => 'int',
		'amount_due' => 'float',
		'amount_paid' => 'float',
		'amount_credited' => 'float',
		'is_discounted' => 'int'
	];

	protected $dates = [
		'create_time',
		'update_time',
		'date',
		'due_date',
		'updated_date_utc',
		'expected_payment_date',
		'planned_payment_date',
		'fully_paid_on_date'
	];

	protected $fillable = [
		'create_by',
		'create_time',
		'update_by',
		'update_time',
		'sys_org_code',
		'tenant_id',
		'project_id',
		'marketing_project_id',
		'type',
		'contact_id',
		'date',
		'due_date',
		'status',
		'line_amount_types',
		'sub_total',
		'total_tax',
		'total',
		'total_discount',
		'updated_date_utc',
		'currency_code',
		'currency_rate',
		'invoice_id',
		'invoice_number',
		'reference',
		'branding_theme_id',
		'url',
		'sent_to_contact',
		'expected_payment_date',
		'planned_payment_date',
		'has_attachments',
		'credit_notes',
		'prepayments',
		'overpayments',
		'amount_due',
		'amount_paid',
		'cis_deduction',
		'fully_paid_on_date',
		'amount_credited',
		'repeating_invoice_id',
		'is_discounted'
	];
}
