<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use App\Repository\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userReposiory;
    public function __construct(UserRepository $userReposiory)
    {
        $this->userReposiory = $userReposiory;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('isAdmin');
        $data = [
            'users' => $this->userReposiory->getAllUser(),
        ];
        return view('pages.admin.users.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $this->authorize('isAdmin');
        $data = [
            'user' => $this->userReposiory->getUserById($id),
        ];
        return view('pages.admin.users.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $this->authorize('isAdmin');
        $data = [
            'user' => $this->userReposiory->getUserById($id),
        ];
        return view('pages.admin.users.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserUpdateRequest $request, string $id)
    {
        $this->authorize('isAdmin');
        $this->userReposiory->updateUser($id, $request->all());
        toast()->success('Pengguna berhasil diupdate!', 'Success');
        return redirect('users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->authorize('isAdmin');
        $this->userReposiory->deleteUser($id);
        toast()->success('Pengguna berhasil dihapus!', 'Success');
        return redirect('users');
    }
}
