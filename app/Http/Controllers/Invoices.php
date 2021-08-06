<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;


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
}
