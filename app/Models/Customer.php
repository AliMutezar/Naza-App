<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;

class Customer extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function customer_services(): HasMany
    {
        return $this->hasMany(CustomerService::class);
    }

    public function getCustomerStatus(): string
    {
        switch ($this->status) {
            case 'uncontacted' :
                return 'bg-warning';
            case 'contacted' : 
                return 'bg-success';
            case 'completed':
                return 'bg-primary';
            default:
                return 'secondary';
        }
    }

    public function getStatusOptions($customerId = null): array
    {

        $statusOptions = [
            'uncontacted' => 'Uncontacted',
            'contacted' => 'Contacted',
            'completed' => 'Completed'
        ];

        if ($customerId) {
            $customer = self::find($customerId);
            $statusOptions = [
                'uncontacted' => 'Uncontacted',
                'contacted' => 'Contacted',
                'completed' => 'Completed'
            ];

            // set status
            $statusOptions[$customer->status] = $statusOptions[$customer->status] . ' (Selected)';
        }

        return $statusOptions;
    }

    public static function getCountByStatus($status) 
    {
        return static::where('status', $status)->count();
    }


    public static function getMonth()
    {
        
        $months = Customer::select(DB::raw("DISTINCT MONTH(created_at) as month"))
                    ->orderBy('month')
                    ->pluck('month')
                    ->map(function ($month) {
                        return date('M', mktime(0, 0, 0, $month, 1));
                    })
                    ->toArray();
        return $months;
    }

    public static function getChartStatus() 
    {
        $data = Customer::select(DB::raw('MONTH(created_at) as month'), 'status', DB::raw('COUNT(*) as count'))
                ->groupBy('month', 'status')
                ->orderBy('month')
                ->get();
        
        $processData = $data->groupBy('status')->map(function($statusData) {
            return $statusData->pluck('count')->toArray();
        });

        return $processData;
    }
}
