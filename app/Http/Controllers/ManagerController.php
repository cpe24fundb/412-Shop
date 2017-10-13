<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manager;

class ManagerController extends Controller
{
    /**
     * Create a new flight instance.
     *
     * @param  Request  $request
     * @return Response
     */

     public function __construct()
     {
         
     }
 
     public function list()
     {
         $managers = Manager::all();
 
         return view('admin.manager.crud', [
             'managers' => $managers
         ]);
     }
 
     public function editForm($mid)
     {
         $manager = Manager::findOrFail($mid);
 
         return view('admin.category.update_form', [
             'manager' => $manager
         ]);
     }
 
     public function create(Request $request)
     {
         $manager = new manager;
 
         $manager->name = $request->input('name');
         $manager->username = $request->input('username');
         $manager->password = $request->input('password');

         $manager->save();
 
         return redirect('admin/manager');
     }
 
     public function update(Request $request, $mid)
     {
         $manager = Manager::findOrFail($mid);
 
         $manager->name = $request->input('name');
         $manager->username = $request->input('username');
         $manager->password = $request->input('password');

         $manager->save();
 
         return redirect('admin/manager');
     }
 
     public function delete($mid)
     {
         $manager = Manager::findOrFail($mid);
 
         $manager->delete();
 
         return redirect('admin/manager');
     }
}