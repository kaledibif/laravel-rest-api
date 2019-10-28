<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Image;
use Validator;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;

class ImageController extends BaseController
{
    /**
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->only(['item_id', 'file_name']);

        $validator = Validator::make($input, [
            'item_id' => 'required|integer',
            'file_name' => 'required|image|mimes:jpeg,jpg,png',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $file = Input::file('file_name');
        $destinationPath = storage_path() . '/app/public/images';
        $fileName = $input['item_id'] . '-' . substr(base_convert(time(), 10, 36) . md5(microtime()), 0, 16) . '.jpg';
        $file->move($destinationPath, $fileName);

        $input['file_name'] = $fileName;
        $image = Image::create($input);

        return $this->sendResponse($image->fresh()->toArray(), 'Image created successfully.');
    }

    /**
     * @param $item_id
     * @return Response
     */
    public function show($item_id)
    {
        $image = Image::where('item_id', $item_id)->get();

        if (is_null($image)) {
            return $this->sendError('Image not found.');
        }

        return $this->sendResponse($image->toArray(), 'Image retrieved successfully.');
    }

    /**
     * @param Image $image
     * @return Response
     * @throws \Exception
     */
    public function destroy(Image $image)
    {
        $image->delete();

        return $this->deleteResponse('Image deleted successfully.');
    }
}
