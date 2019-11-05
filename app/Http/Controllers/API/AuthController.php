<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\User;
use Illuminate\Support\Carbon;
use App\PasswordReset;
use Illuminate\Http\Response;
use Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends BaseController
{
    /**
     * @return Response
     */
    public function login()
    {
        $credentials = [
            'email' => request('email'),
            'password' => request('password')
        ];

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('App')->accessToken;
            return $this->sendResponse($token, 'User logged in successfully.');
        } else {
            return $this->sendError('Unauthorized.', [], 400);
        }
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:16',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6|max:16',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] = $user->createToken('App')->accessToken;
        $success['name'] = $user->name;

        return $this->sendResponse($success, 'User registered successfully.');
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function forgotPassword(Request $request)
    {
        $validator = Validator::make($request->toArray(), [
            'email' => 'required|string|email|exists:users',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        // Delete existing reset tokens if exists
        PasswordReset::where('email', $request->email)->delete();

        PasswordReset::create([
            'email' => $request->email,
            'token' => str_random(60),
        ]);

        return $this->sendResponse(null, 'Reset password requested successfully.');
    }

    /**
     * @param $token
     * @return JsonResponse
     */
    public function resetPasswordConfirm($token)
    {
        $passwordReset = PasswordReset::where('token', $token)->first();

        if (!$passwordReset)
            return response()->json([
                'message' => 'Message A.'
            ], 404);

        if (Carbon::parse($passwordReset->creted_at)->addMinutes(720)->isPast()) {
            $passwordReset->delete();
            return response()->json([
                'message' => 'Message B.'
            ], 404);
        }

        return response()->json($passwordReset);
    }

    /**
     * @param Request $request
     * @return JsonResponse|Response
     */
    public function resetPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|exists:users',
            'password' => 'required|string|min:6|max:16confirmed',
            'token' => 'required|string'
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $user = User::where('email', $request->email)->first();
        $user->password = bcrypt($request->password);
        $user->save();

        PasswordReset::where('email', $request->email)->delete();

        return $this->sendResponse($user, 'Reset password requested successfully.');
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return $this->sendResponse(null, 'User logged out successfully.');
    }

    /**
     * @return Response
     */
    public function profile()
    {
        return $this->sendResponse(auth()->user(), 'Profile data retrieved successfully.');
    }
}
