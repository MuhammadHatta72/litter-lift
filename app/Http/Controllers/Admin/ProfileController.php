<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use App\Repository\ProfileRepository;
use App\Repository\UserRepository;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    protected $userReposiory, $profileRepository;
    public function __construct(UserRepository $userReposiory, ProfileRepository $profileRepository)
    {
        $this->userReposiory = $userReposiory;
        $this->profileRepository = $profileRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [];
        return view('pages.admin.profile.index', $data);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = [
            'user' => $this->userReposiory->getUserById($id),
        ];
        return view('pages.admin.profile.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProfileUpdateRequest $request, string $id)
    {
        $this->profileRepository->updateProfile($id, $request->all(), $request->file('image_new'));
        toast()->success('Profil berhasil diupdate!', 'Success');
        return redirect('profile');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->profileRepository->deletePhotoProfile($id);
        toast()->success('Foto Profil berhasil dihapus!', 'Success');
        return redirect('profile');
    }
}
