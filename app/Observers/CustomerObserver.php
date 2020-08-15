<?php

namespace App\Observers;

use App\Customer;

class CustomerObserver
{
    public function created($model)
    {
        $model->account_number  = $model->id + 112210000 ;
        $model->save();
    }
}
