<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Laravel\Sanctum\HasApiTokens;
use Symfony\Component\HttpFoundation\Response as HTTPResponse;

class RegisterController extends Controller
{
    use HasApiTokens;

    /*********************************************
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * Register Sanctum
     */
    public function register(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'validationError' => $validator->errors()
            ], HTTPResponse::HTTP_BAD_REQUEST);
        }
        $password = Hash::make($request->password);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $password,
        ]);
        $token = $user->createToken($request->email, ['*']);
        $this->accessToken = $token->accessToken;
        return response()->json([
            'token' => $token->plainTextToken,
            'name' => $user->name,
            'message' => 'ثبت نام شما با موفقیت انجام شد'
        ], HTTPResponse::HTTP_OK);
    }

    /*******************************************
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * Login Sanctum
     */
    public function login(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'validationError' => $validator->errors()
            ], HTTPResponse::HTTP_BAD_REQUEST);
        }
        $user = User::where('email', $request->email)->first();
        if (!$user || !Hash::check(\request('password'), $user->password)) {
            return response()->json([
                'errorMessage' => 'خطا! شما در احراز هویت موفق نبوده اید'
            ], HTTPResponse::HTTP_BAD_REQUEST);
        }
        $token = $user->createToken($request->email, ['*']);

        return response()->json([
            'token' => $token->plainTextToken,
            'name' => $user->name,
            'message' => 'ورود موفقیت آمیز بود'
        ], HTTPResponse::HTTP_OK);
    }

    /**************************************
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * Logout Sanctum
     */
    public function logout(Request $request)
    {
        $user = $request->user();
        $user->tokens()->delete();
        request()->user()->tokens()->delete();
        $user = request()->user();
        $user->tokens()->where('id', $user->currentAccessToken()->id)->delete();
        return response()->json([
            'message' => 'successfully logged out',
        ], 200);
    }

}
