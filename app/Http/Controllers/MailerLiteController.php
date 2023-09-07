<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class MailerLiteController extends Controller
{
    protected $client;
    protected $apiKey;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://api.mailerlite.com/api/v2/',
        ]);

        $this->apiKey = config('services.mailer-lite.key');
    }

    public function createGroupIfNotExists($groupName)
    {
        $response = $this->client->request('GET', 'groups', [
            'headers' => [
                'Content-Type' => 'application/json',
                'X-MailerLite-ApiKey' => $this->apiKey,
            ],
        ]);

        $groups = json_decode($response->getBody(), true);

        /*Check if the group already exists*/
        $existingGroup = collect($groups)->firstWhere('name', $groupName);

        if (!$existingGroup) {
            /*Group does not exist, create it*/
            $response = $this->client->request('POST', 'groups', [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'X-MailerLite-ApiKey' => $this->apiKey,
                ],
                'json' => [
                    'name' => $groupName,
                ],
            ]);

            $body = json_decode($response->getBody(), true);

            return $body['id'];
        }

        return $existingGroup['id'];
    }

    public function addSubscriber(Request $request)
    {
        $email = $request->input('email');
        $groupName = $request->input('group_name');

        $groupId = $this->createGroupIfNotExists($groupName);

        $response = $this->client->request('POST', "groups/{$groupId}/subscribers", [
            'headers' => [
                'Content-Type' => 'application/json',
                'X-MailerLite-ApiKey' => $this->apiKey,
            ],
            'json' => [
                'email' => $email,
            ],
        ]);

        $body = json_decode($response->getBody(), true);

        return $body;
    }

    public function addSubscriberToGroup($email, $groupName)
    {
        $groupId = $this->createGroupIfNotExists($groupName);

        $response = $this->client->request('POST', "groups/{$groupId}/subscribers", [
            'headers' => [
                'Content-Type' => 'application/json',
                'X-MailerLite-ApiKey' => $this->apiKey,
            ],
            'json' => [
                'email' => $email,
            ],
        ]);

        $body = json_decode($response->getBody(), true);

        return $body;
    }
}
