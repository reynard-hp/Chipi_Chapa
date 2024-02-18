<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.dashboard', [
            "title" => "Dashboard",
            "active" => "dashboard",
            "employees" => Employee::all()
        ]);
    }

    public function show(Employee $employee){
        return view('dashboard.view', [
            "title" => "Dashboard",
            "active" => "dashboard",
            "employee" => $employee
        ]);
    }

    public function create(){
        return view('dashboard.addKaryawan', [
            "title" => "Add Karyawan",
            "active" => "dashboard",
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|min:5|max:20',
            'age' => 'required|gt:20',
            'address' => 'required|min:10|max:40',
            'telp_num' => 'required|min:9|max:12|starts_with:08|regex:/^[0-9]+$/',
            'photo' => 'image|file|max:5120'
        ]);

        $filename = $request->file('photo')->getClientOriginalName();
        $request->file('photo')->storeAs('/public'.'/images'.'/'.$filename);

        Employee::create([
            'name' => $request->name,
            'age' => $request->age,
            'address' => $request->address,
            'telp_num' => $request->telp_num,
            'photo' => $filename
        ]);

        return redirect('/dashboard')->with('success','Karyawan baru telah ditambahkan!');
    }

    public function edit(Employee $employee){
        return view('dashboard.editKaryawan', [
            "title" => "Edit Karyawan",
            "active" => "dashboard",
            "employee" => $employee
        ]);
    }

    public function update(Request $request, Employee $employee){
        $request->validate([
            'name' => 'required|min:5|max:20',
            'age' => 'required|gt:20',
            'address' => 'required|min:10|max:40',
            'telp_num' => 'required|min:9|max:12|starts_with:08|regex:/^[0-9]+$/'
        ]);

        $employee->update([
            'name' => $request->name,
            'age' => $request->age,
            'address' => $request->address,
            'telp_num' => $request->telp_num,
        ]);

        return redirect('/dashboard')->with('success','Karyawan telah diupdate!');
    }

    public function delete(Employee $employee){
        $employee->delete();

        return redirect('/dashboard')->with('success','Karyawan telah dihapus!');
    }
}
