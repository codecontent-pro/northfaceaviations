<?php

namespace App\Services;
use App\Models\Business;

class BusinessService
{
    public function getBusiness($id = null)
    {
        return $teamOwner =  auth()->user()->hasBusiness;
    }

    public function updateOrCreate($data, $id = null)
    {
        $business = Business::updateOrCreate(
            ['id' => $id],
            [
                'user_id' => auth()->user()->id,
                'name' => $data['name'],
                'email' => $data['email'],
                'team_size' => $data['team_size'],
                'description' => $data['description'],
            ]
        );

        return $business;
    }
}