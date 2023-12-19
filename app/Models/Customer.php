<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

}
