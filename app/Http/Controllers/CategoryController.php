<?php

namespace App\Http\Controllers;
use App\Category;
use App\Job;
use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
   public function showCategoryForm(){
       return view('admin.category.add-category');
   }

   public function saveCategoryInfo(Request $request){

       $categoryInfo= new Category();
       $categoryInfo->category_name=$request->category_name;
       $categoryInfo->category_description=$request->category_description;
       $categoryInfo->publication_status=$request->publication_status;
       $categoryInfo->save();

       return redirect('category/add-category')->with('message', 'Job Category Added Successfully!');


   }

   public function manageCategoryInfo(){
       $categories=Category::orderBy('id', 'desc')->get();
       return view('admin.category.manage-category', ['categories'=>$categories]);
   }

   public function unpublishedCategoryInfo($id){
        $unpublishedCategory=Category::find($id);
        $unpublishedCategory->publication_status=0;
        $unpublishedCategory->save();
       return redirect('category/manage-category')->with('message', 'Job Category Unpublished Successfully!');
   }

    public function publishedCategoryInfo($id){
        $publishedCategory=Category::find($id);
        $publishedCategory->publication_status=1;
        $publishedCategory->save();
        return redirect('category/manage-category')->with('message', 'Job Category Published Successfully!');
    }

    public function editCategoryInfo($id){
        $categoryInfoById=Category::find($id);
        return view('admin.category.edit-category',['categoryInfoById'=> $categoryInfoById]);
    }

    public function deleteCategoryInfo($id){
        $deleteCategory=Category::find($id);
        $deleteCategory->delete();
        return redirect('category/manage-category')->with('deleteMessage', 'Job Category Deleted Successfully!');
    }

    public function updateCategoryInfo(Request $request)
    {
        $updateCategory = Category::find($request->category_id);
        $updateCategory->category_name = $request->category_name;
        $updateCategory->category_description = $request->category_description;
        $updateCategory->publication_status = $request->publication_status;
        $updateCategory->save();
        return redirect('category/manage-category')->with('message', 'Job Category Update Successfully!');
    }

}
