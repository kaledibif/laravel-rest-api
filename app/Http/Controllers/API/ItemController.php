<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Item;
use App\Category;
use Validator;
use Illuminate\Http\Response;

class ItemController extends BaseController
{
    /**
     * Get all resources.
     *
     * @return Response
     */
    public function index()
    {
        $items = Category::where('user_id', auth()->user()->id)->with('items')->get();

        return $this->sendResponse($items->toArray(), 'Items retrieved successfully.');
    }

    /**
     * Store the new resource.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->only(['name', 'value', 'category_id', 'date', 'details']);

        $validator = Validator::make($input, [
            'name' => 'required|min:2|max:16',
            'value' => 'required|numeric|min:0',
            'category_id' => 'required|integer|exists:categories,id',
            'date' => 'required|date',
            'details' => 'nullable|max:256',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $item = Item::create($input);

        return $this->sendResponse($item->toArray(), 'Item created successfully.');
    }

    /**
     * Get the specific resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $item = Item::find($id);

        if (is_null($item)) {
            return $this->sendError('Item not found.');
        }

        return $this->sendResponse($item->toArray(), 'Item retrieved successfully.');
    }

    /**
     * Update the specific resource.
     *
     * @param Request $request
     * @param Item $item
     * @return Response
     */
    public function update(Request $request, Item $item)
    {
        $input = $request->only(['name', 'value', 'category_id', 'date', 'details']);

        $validator = Validator::make($input, [
            'name' => 'nullable|min:2|max:16',
            'value' => 'nullable|numeric|min:0',
            'category_id' => 'nullable|integer|exists:categories,id',
            'date' => 'nullable|date',
            'details' => 'nullable|max:256',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $item->update($input);

        return $this->sendResponse($item->toArray(), 'Item updated successfully.');
    }

    /**
     * Remove the specific resource.
     *
     * @param Item $item
     * @return Response
     * @throws \Exception
     */
    public function destroy(Item $item)
    {
        $item->delete();

        return $this->deleteResponse('Item deleted successfully.');
    }
}
