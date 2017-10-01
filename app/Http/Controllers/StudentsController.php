<?php

namespace Gumball\Http\Controllers;

use Gumball\Http\Requests\Students\DeleteFormRequest;
use Gumball\Http\Requests\Students\StoreFormRequest;
use Gumball\Http\Requests\Students\UpdateFormRequest;
use Gumball\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StudentsController extends Controller
{
    /**
     * StudentsController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreFormRequest|Request $request
     * @return Response
     */
    public function store(StoreFormRequest $request)
    {
        $student = Student::create(array());

        // Profile
        $profile_data = $request->only('title', 'first_name', 'last_name', 'middle_name', 'last_name', 'gender');
        $student->profile()->create($profile_data);

        // Birthday
        $birthday_data = array('when' => $request->get('birthday'));
        $student->birthday()->create($birthday_data);

        return redirect()->route('students.show', $student->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $student = Student::getProfile($id);

        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $student = Student::getProfile($id);

        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateFormRequest $request
     * @param  int $id
     * @return Response
     */
    public function update(UpdateFormRequest $request, $id)
    {
        $student = Student::find($id);

        // Profile
        $profile_data = $request->only('title', 'first_name', 'last_name', 'middle_name', 'last_name', 'gender');
        $student->profile()->update($profile_data);

        // Birthday
        $birthday_data = array('when' => $request->get('birthday'));
        $student->birthday()->update($birthday_data);

        return redirect()->route('students.show', $student->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DeleteFormRequest $request
     * @param  int $id
     * @return Response
     */
    public function destroy(DeleteFormRequest $request, $id)
    {
        Student::destroy($id);

        return redirect()->route('students.index');
    }
}
