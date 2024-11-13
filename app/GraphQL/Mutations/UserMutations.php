<?php

namespace App\GraphQL\Mutations;

use App\Models\User;

class UserMutations
{
    public function deleteUser($root, array $args)
    {
        // Find the user by ID and delete them
        $user = User::findOrFail($args['id']);
        $user->delete();

        // Return the deleted user or confirmation
        return $user;
    }
}
