<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showForm()
    {
        return view('category.form');
    }
    public function storeForm(Request $request)
    {
        $request->validate([
            'categoryname'=> 'required',
            'categorydescription'=> 'required|max:255',

        ]);
           //dd($request->all());
           $categorys = new Category();
           $categorys->categoryname = $request->categoryname;
           $categorys->categorydescription = $request->categorydescription;
           $categorys->save();
           return redirect()->back()->with('message','Added Successfully');
    }
    public function showList()
    {
         
         $categorys = Category::paginate(5);
         return view('category.list',compact('categorys'));
    }
//delete 
public function deleteCategory($id)
{
    category::find($id)->delete();
    return redirect()->back();
}
//edit & update
public function editCategory($id)
{
    $category = Category::find($id);
    return view('category.update',compact('category'));
}
public function updateCategory(Request $request,$id)
{


//dd($request->all());
$categorys = Category::find($id);
$categorys->categoryname = $request->categoryname;
$categorys->categorydescription = $request->categorydescription;
$categorys->save();
return redirect(route('category.list'))->with('message','Updated Successfully');

}

}

