<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Backend\Account\OtherIncome;
use Illuminate\Auth\Access\HandlesAuthorization;

class OtherIncomePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the otherIncome can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the otherIncome can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\OtherIncome  $model
     * @return mixed
     */
    public function view(User $user, OtherIncome $model)
    {
        return true;
    }

    /**
     * Determine whether the otherIncome can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the otherIncome can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\OtherIncome  $model
     * @return mixed
     */
    public function update(User $user, OtherIncome $model)
    {
        return true;
    }

    /**
     * Determine whether the otherIncome can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\OtherIncome  $model
     * @return mixed
     */
    public function delete(User $user, OtherIncome $model)
    {
        return true;
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\OtherIncome  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the otherIncome can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\OtherIncome  $model
     * @return mixed
     */
    public function restore(User $user, OtherIncome $model)
    {
        return false;
    }

    /**
     * Determine whether the otherIncome can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\OtherIncome  $model
     * @return mixed
     */
    public function forceDelete(User $user, OtherIncome $model)
    {
        return false;
    }
}
