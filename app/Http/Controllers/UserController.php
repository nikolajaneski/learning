<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return "All Users";
    }

    public function show(User $user) {
        return "Single user";
    }

    public function create(User $user) {
        return "This will return view with form for creating users";
    }

    public function store(User $user) {
        return "This will insert new user into DB";
    }

    public function edit(User $user) {
        return "This will return view with form for editing users";
    }

    public function update(User $user) {
        return "This will update a user into DB";
    }

    public function destroy(User $user) {
        return "This will delete a user from DB";
    }
}
