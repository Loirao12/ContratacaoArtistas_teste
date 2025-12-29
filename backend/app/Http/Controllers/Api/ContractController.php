<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contract;

class ContractController extends Controller
{

    /**
     * List all contracts.
     *
     * This endpoint is used to retrieve previously
     * submitted contracts.
     */
    public function index()
    {
        // Fetch all contracts ordered by latest first
        $contracts = Contract::orderBy('created_at', 'desc')->get();

        return response()->json($contracts);
    }
    
    /**
     * Store a new contract in the database.
     *
     * This method receives data from the frontend form,
     * validates it and persists the contract in PostgreSQL.
     */
    public function store(Request $request)
    {
        // Validate incoming request data
        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'artist_name' => 'required|string|max:255',
            'fee'         => 'required|numeric|min:0',
            'event_date'  => 'required|date',
            'address'     => 'nullable|string|max:255',
        ]);

        // Create the contract using mass assignment
        $contract = Contract::create($validated);

        // Return a success response with the created contract
        return response()->json([
            'message' => 'Contract created successfully',
            'data'    => $contract,
        ], 201);
    }

    /**
 * Update an existing contract
 */
public function update(Request $request, $id)
{
    $contract = Contract::findOrFail($id);

    $validated = $request->validate([
        'name'       => 'required|string|max:255',
        'event_date' => 'required|date',
        'address'    => 'nullable|string|max:255',
    ]);

    $contract->update($validated);

    return response()->json([
        'message' => 'Contract updated successfully',
        'data' => $contract
    ]);
}


    
}
