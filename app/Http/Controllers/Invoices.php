<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\Account;
use App\Models\LineItem;
use Illuminate\Support\Facades\DB;

class Invoices extends Controller
{
    //fetch monthly invoice amount during a period
    public function list($tenantId,$dateFrom,$dateTo){
        $tenant = Invoice::where('tenant_id', '=', $tenantId )->first();
        if($tenant==null){
            return Invoice::all();
        }

        $personal_invoices['monthlyInvoiceAmounts'] = Invoice::select(Invoice::raw('sum(sub_total) as `amount`'),Invoice::raw("CONCAT_WS('-',YEAR(date),MONTH(date)) as yearMonth"))
                        ->where('tenant_id', '=', $tenantId)
                        ->where('status', '=', 'PAID')
                        ->whereBetween('date', [$dateFrom,$dateTo])
                        ->orwhere('status', '=', 'AUTHORISED')
                        ->groupby('yearMonth')
                        ->get();

        return $personal_invoices;
    }


    //Complete an API to fetch invoice amount distribution during a period.
    public function list_ordered_by_amount($tenantId,$dateFrom,$dateTo){
        $tenant = Invoice::where('tenant_id', '=', $tenantId )->first();
        if($tenant==null){
            return Invoice::all();
        }


        $invoice_distribution['salesOfAccounts'] = DB::table('invoices')
                    ->join('accounts', 'invoices.tenant_id', '=', 'accounts.tenant_id')
                    ->join('line_items', 'line_items.account_code', '=', 'accounts.code')
                    ->select(['line_items.account_code as accountCode',Invoice::raw('sum(sub_total) as `amount`'),'invoices.tenant_id as tenantId','accounts.name'])
                    ->where('invoices.status', '=', 'PAID')
                    ->whereBetween('invoices.date', [$dateFrom,$dateTo])
                    ->orwhere('invoices.status', '=', 'AUTHORISED')
                    ->groupby('accounts.name')
                    ->orderby('amount','desc')
                    ->get();

        return $invoice_distribution;
    }

}