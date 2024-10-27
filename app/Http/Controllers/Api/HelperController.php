<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Helpers\CategoryCollection;
use App\Http\Resources\Helpers\CategoryResource;
use App\Http\Resources\Helpers\GenderCollection;
use App\Http\Resources\Helpers\GenderResource;
use App\Http\Resources\Helpers\IndustryCollection;
use App\Http\Resources\Helpers\IndustryResource;
use App\Http\Resources\Helpers\RoleCollection;
use App\Http\Resources\Helpers\RoleResource;
use App\Http\Resources\Helpers\SubCategoryCollection;
use App\Http\Resources\Helpers\SubCategoryResource;
use App\Models\Category;
use App\Models\Gender;
use App\Models\Industry;
use App\Models\Role;
use App\Models\SubCategory;

class HelperController extends Controller
{
    /**
     * Get the roles resource
     */
    public function getRoles()
    {
        // get roles that should be exposed to API
        $roles = Role::whereNotIn('id', [Role::IS_ADMIN, Role::IS_CUSTOMER_SERVICE, Role::IS_DEVELOPER])->get();

        return response()->json([
            'status' => 200,
            'messsage' => 'Roles successfully retrieved',
            'data' => RoleResource::collection($roles),
        ], 200);
    }

    /**
     * Get the genders resource
     */
    public function getGenders()
    {
        return response()->json([
            'status' => 200,
            'messsage' => 'Genders successfully retrieved',
            'data' => GenderResource::collection(Gender::all()),
        ], 200);
    }

    /**
     * Get the categories resource
     */
    public function getCategories()
    {
        return response()->json([
            'status' => 200,
            'messsage' => 'Categories successfully retrieved',
            'data' => CategoryResource::collection(Category::all()),
        ], 200);
    }

    /**
     * Get the subcategories resource
     */
    public function getSubCategories()
    {
        return response()->json([
            'status' => 200,
            'messsage' => 'Sub Categories successfully retrieved',
            'data' => SubCategoryResource::collection(SubCategory::all()),
        ], 200);
    }

    /**
     * Get the industries resource
     */
    public function getIndustries()
    {
        return response()->json([
            'status' => 200,
            'messsage' => 'Industries successfully retrieved',
            'data' => IndustryResource::collection(Industry::all()),
        ], 200);
    }
}
