<?php

require_once(__DIR__ . '/../vendor/autoload.php');

use Appwrite\Client;
use Appwrite\Services\Users;

// This Appwrite function will be executed every time your function is triggered
return function ($context) {
    // You can use the Appwrite SDK to interact with other services
    // For this example, we're using the Users service
    /*$client = new Client();
    $client
        ->setEndpoint('https://cloud.appwrite.io/v1')
        ->setProject(getenv('APPWRITE_FUNCTION_PROJECT_ID'))
        ->setKey('standard_3637a48ddd85834bc1f93cacf485a962ff32ea0ac2f3c2e26e662d3812d2fbd8335294a6f77ff7f5883d03164ed1f8261fd88095d6277caa2a9812bf765c5cf6cad4484b34f0e16911fb9d2b1047327d420a96e16dfff6d4c7e78e0ccf3d608aa9c7dc2f088db34137d074f319222352ac6208a82d7bb0bef9396331cb41c8c7');
    $users = new Users($client);

    try {
        $response = $users->list();
        // Log messages and errors to the Appwrite Console
        // These logs won't be seen by your end users
        $context->log('Total users: ' . $response['total']);
    } catch(Throwable $error) {
        $context->error('Could not list users: ' . $error->getMessage());
    }

    // The req object contains the request data
    if ($context->req->path === '/ping') {
        // Use res object to respond with text(), json(), or binary()
        // Don't forget to return a response!
        return $context->res->text('Pong');
    }*/

    return $context->res->json([
        'motto' => 'Build like a team of hundreds_',
        'learn' => 'https://appwrite.io/docs',
        'connect' => 'https://appwrite.io/discord',
        'getInspired' => 'https://builtwith.appwrite.io',
    ]);
};
