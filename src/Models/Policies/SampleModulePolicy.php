<?php

namespace Quill\SampleModule\Models\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization; 
use Quill\SampleModule\Models\SampleModule;

class SampleModulePolicy
{

    use HandlesAuthorization;

    protected $module = 'sample-module';

    /**
     * Determine if the given resource can be viewed by the user.
     *
     * @param  \App\User  $user
     * @param  \Quill\SampleModule\Models\SampleModule  $samplemodule
     * @return bool
     */
    public function view(User $user, SampleModule $samplemodule)
    {
        return $user->permissions($this->module)->contains('*') ||
                $user->permissions($this->module)->contains('view');
    }

    /**
     * Determine if the given resource can be updated by the user.
     *
     * @param  \App\User  $user
     * @param  \Quill\SampleModule\Models\SampleModule  $samplemodule
     * @return bool
     */
    public function update(User $user, SampleModule $samplemodule)
    {
        return $user->permissions($this->module)->contains('*') ||
                $user->permissions($this->module)->contains('update');
    }

    /**
     * Determine if the user can create a new resource.
     *
     * @param  \App\User  $user
     * @param  \Quill\SampleModule\Models\SampleModule  $samplemodule
     * @return bool
     */
    public function create(User $user)
    {
        return $user->permissions($this->module)->contains('*') ||
                $user->permissions($this->module)->contains('create');
    }

    /**
     * Determine if the given resource can be deleted by the user.
     *
     * @param  \App\User                $user
     * @param  \Quill\SampleModule\Models\SampleModule  $samplemodule
     * @return bool
     */
    public function delete(User $user, SampleModule $samplemodule)
    {
        return $user->permissions($this->module)->contains('*') ||
                $user->permissions($this->module)->contains('delete');
    }

}
