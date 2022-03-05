<?php

namespace App\Observers;

use Illuminate\Support\Str;
use App\Models\company;

class CompanyObserver
{
    /**
     * Handle the company "created" event.
     *
     * @param  \App\Models\company  $company
     * @return void
     */
    public function creating(company $company) {
        $company->uuid = Str::uuid();
        $company->url = Str::slug($company->name);
    }
    
    public function created(company $company)
    {
        //
    }
    
    /**
     * Handle the company "updated" event.
     *
     * @param  \App\Models\company  $company
     * @return void
     */
    public function updating(company $company) {
        $company->url = Str::slug($company->name);
    }

    public function updated(company $company)
    {
        //
    }

    /**
     * Handle the company "deleted" event.
     *
     * @param  \App\Models\company  $company
     * @return void
     */
    public function deleted(company $company)
    {
        //
    }

    /**
     * Handle the company "restored" event.
     *
     * @param  \App\Models\company  $company
     * @return void
     */
    public function restored(company $company)
    {
        //
    }

    /**
     * Handle the company "force deleted" event.
     *
     * @param  \App\Models\company  $company
     * @return void
     */
    public function forceDeleted(company $company)
    {
        //
    }
}
