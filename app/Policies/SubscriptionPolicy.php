<?php

namespace App\Policies;

use App\Models\Subscription;
use App\Models\User;

class SubscriptionPolicy
{
    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Subscription $subscription): bool
    {
        return $user->hasPermissionTo('view subscriptions') || $user->id === $subscription->user_id;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Subscription $subscription): bool
    {
        return $user->hasPermissionTo('update subscriptions') || $user->id === $subscription->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Subscription $subscription): bool
    {
        return $user->hasPermissionTo('delete subscriptions');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Subscription $subscription): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Subscription $subscription): bool
    {
        return false;
    }
}
