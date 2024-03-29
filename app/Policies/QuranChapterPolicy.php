<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Backend\Quran\QuranChapter;
use Illuminate\Auth\Access\HandlesAuthorization;

class QuranChapterPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the quranChapter can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the quranChapter can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Backend\Quran\QuranChapter  $model
     * @return mixed
     */
    public function view(User $user, QuranChapter $model)
    {
        return true;
    }

    /**
     * Determine whether the quranChapter can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the quranChapter can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Backend\Quran\QuranChapter  $model
     * @return mixed
     */
    public function update(User $user, QuranChapter $model)
    {
        return true;
    }

    /**
     * Determine whether the quranChapter can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Backend\Quran\QuranChapter  $model
     * @return mixed
     */
    public function delete(User $user, QuranChapter $model)
    {
        return true;
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Backend\Quran\QuranChapter  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the quranChapter can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Backend\Quran\QuranChapter  $model
     * @return mixed
     */
    public function restore(User $user, QuranChapter $model)
    {
        return false;
    }

    /**
     * Determine whether the quranChapter can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Backend\Quran\QuranChapter  $model
     * @return mixed
     */
    public function forceDelete(User $user, QuranChapter $model)
    {
        return false;
    }
}
