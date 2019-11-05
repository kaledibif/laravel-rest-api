<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Category;
use Validator;
use Illuminate\Http\Response;

class CategoryController extends BaseController
{
    /**
     * Get all resources.
     *
     * @return Response
     */
    public function index()
    {
        $categories = Category::where('user_id', auth()->user()->id)->get();

        return $this->sendResponse($categories->toArray(), 'Categories retrieved successfully.');
    }

    /**
     * Store the new resource.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->only(['name', 'color_id', 'icon_id', 'order']);

        $validator = Validator::make($input, [
            'name' => 'required|min:2|max:16',
            'color_id' => 'required|exists:colors,id',
            'icon_id' => 'required|exists:icons,id',
            'order' => 'nullable|integer',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $input['user_id'] = auth()->user()->id;
        $category = Category::create($input);

        return $this->sendResponse($category->fresh()->toArray(), 'Category created successfully.');
    }

    /**
     * Get the specific resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $category = Category::where('user_id', auth()->user()->id)->find($id);

        if (is_null($category)) {
            return $this->sendError('Category not found.');
        }

        return $this->sendResponse($category->toArray(), 'Category retrieved successfully.');
    }

    /**
     * Update the specific resource.
     *
     * @param Request $request
     * @param Category $category
     * @return Response
     */
    public function update(Request $request, Category $category)
    {
        $input = $request->only(['name', 'color_id', 'icon_id', 'order', 'user_id']);

        $validator = Validator::make($input, [
            'name' => 'nullable|min:2|max:16',
            'color_id' => 'nullable|exists:colors,id',
            'icon_id' => 'nullable|exists:icons,id',
            'order' => 'nullable|integer',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $category->update($input);

        return $this->sendResponse($category->toArray(), 'Category updated successfully.');
    }

    /**
     * @param Category $category
     * @return Response
     * @throws \Exception
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return $this->deleteResponse('Category deleted successfully.');
    }
}
