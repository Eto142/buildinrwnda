<?php

namespace App\Http\Controllers;

use App\Models\Proposal;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProposalController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'company' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:100'],
            'project_name' => ['required', 'string', 'max:255'],
            'sector' => ['required', 'string', 'max:100'],
            'estimated_investment' => ['required', 'string', 'max:100'],
            'land_required' => ['required', 'string', 'max:100'],
            'why_rwanda' => ['required', 'string', 'max:5000'],
            'business_plan' => ['nullable', 'file', 'mimes:pdf,doc,docx,zip', 'max:20480'],
        ]);

        $document = $request->file('business_plan');
        unset($validated['business_plan']);

        if ($document) {
            $validated['business_plan_path'] = $document->store('proposal-documents', 'local');
            $validated['business_plan_name'] = $document->getClientOriginalName();
        }

        Proposal::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Your proposal has been received. We will be in touch in due course.',
        ]);
    }
}