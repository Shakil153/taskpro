<?php

namespace App\Services;
use App\Models\Client;
class ClientService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function createClient(array $data)
    {
        return Client::create($data);
    }

    public function updateClient(Client $client, array $data)
    {
        $client->update($data);
        return $client;
    }

    public function deleteClient(Client $client)
    {
        return $client->delete();
    }

    public function getAllClient()
    {
        return Client::all();
    }

    public function getClientById(int $clientId)
    {
        return Client::find($clientId);
    }
}
