<?php

namespace Gumball\Http\Controllers;

use Gumball\Http\Requests\Teacher\UpdateFormRequest;
use Gumball\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeachersController extends Controller
{
    /**
     * TeachersController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param $teacher_id
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function show($teacher_id)
    {
        $teacher = User::getProfile($teacher_id);

        return view('teachers.show', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit()
    {
        $current_user_id = Auth::id();

        $teacher = User::getProfile($current_user_id);

        return view('teachers.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateFormRequest|Request $request
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(UpdateFormRequest $request)
    {
        $current_user = Auth::user();

        // Profile
         $profile_data = $request->only('title', 'first_name', 'last_name', 'middle_name', 'last_name', 'gender');
         $current_user->profile()->updateOrCreate(array('model_id' => $current_user->id), $profile_data);

        //Birthday
         $birthday_data = array('when' => $request->get('birthday'));
         $current_user->birthday()->updateOrCreate(array('model_id' => $current_user->id), $birthday_data);

        // Phone
        $phone_data = array('number' => $request->get('phone'));
        $current_user->phone()->updateOrCreate(array('model_id' => $current_user->id), $phone_data);

        // Address
        $address_data = $request->only(array('street', 'city', 'parish'));
        $current_user->address()->updateOrCreate(array('model_id' => $current_user->id), $address_data);

        // Country
        $country = config('country.name');
        $current_user->address->setCountry($country);

        return redirect()->route('home');
    }

}
