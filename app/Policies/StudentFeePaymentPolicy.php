<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Backend\Account\StudentFeePayment;
use Illuminate\Auth\Access\HandlesAuthorization;

class StudentFeePaymentPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the studentFeePayment can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the studentFeePayment can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\StudentFeePayment  $model
     * @return mixed
     */
    public function view(User $user, StudentFeePayment $model)
    {
        return true;
    }

    /**
     * Determine whether the studentFeePayment can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the studentFeePayment can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\StudentFeePayment  $model
     * @return mixed
     */
    public function update(User $user, StudentFeePayment $model)
    {
        return true;
    }

    /**
     * Determine whether the studentFeePayment can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\StudentFeePayment  $model
     * @return mixed
     */
    public function delete(User $user, StudentFeePayment $model)
    {
        return true;
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\StudentFeePayment  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the studentFeePayment can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\StudentFeePayment  $model
     * @return mixed
     */
    public function restore(User $user, StudentFeePayment $model)
    {
        return false;
    }

    /**
     * Determine whether the studentFeePayment can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\StudentFeePayment  $model
     * @return mixed
     */
    public function forceDelete(User $user, StudentFeePayment $model)
    {
        return false;
    }
}
