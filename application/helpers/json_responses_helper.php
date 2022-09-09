<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('response_200')) {
    function response_200($context, string $message)
    {
        $context->response([
            'code' => $context::HTTP_OK,
            'message' => $message
        ], $context::HTTP_OK);
    }
}

if (!function_exists('response_201')) {
    function response_201($context, string $message)
    {
        $context->response([
            'code' => $context::HTTP_CREATED,
            'message' => $message
        ], $context::HTTP_CREATED);
    }
}

if (!function_exists('response_401')) {
    function response_401($context, string $message)
    {
        $context->response([
            'code' => $context::HTTP_UNAUTHORIZED,
            'message' => $message
        ], $context::HTTP_UNAUTHORIZED);
    }
}

if (!function_exists('response_404')) {
    function response_404($context, string $message)
    {
        $context->response([
            'code' => $context::HTTP_NOT_FOUND,
            'message' => $message
        ], $context::HTTP_NOT_FOUND);
    }
}

if (!function_exists('response_409')) {
    function response_409($context, string $message)
    {
        $context->response([
            'code' => $context::HTTP_CONFLICT,
            'message' => $message
        ], $context::HTTP_CONFLICT);
    }
}

if (!function_exists('response_422')) {
    function response_422($context, string $message)
    {
        $context->response([
            'code' => $context::HTTP_UNPROCESSABLE,
            'message' => $message
        ], $context::HTTP_UNPROCESSABLE);
    }
}

if (!function_exists('response_data')) {
    function response_data($context, array $data)
    {
        $context->response([
            'code' => $context::HTTP_OK,
            'payload' => $data
        ], $context::HTTP_OK);
    }
}
