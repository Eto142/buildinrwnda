<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProposalSubmissionTest extends TestCase
{
    use RefreshDatabase;

    public function test_valid_proposal_submission_is_saved(): void
    {
        $proposal = [
            'full_name' => 'Amina Uwimana',
            'email' => 'amina@example.com',
            'phone' => '+250 700 000 000',
            'company' => 'Example Ventures',
            'country' => 'Rwanda',
            'project_name' => 'Green Growth',
            'sector' => 'Agriculture',
            'estimated_investment' => '5000000',
            'land_required' => '50 ha in Eastern Province',
            'why_rwanda' => 'A sustainable agriculture project.',
        ];

        $this->postJson(route('proposal.submit'), $proposal)
            ->assertOk()
            ->assertJson(['success' => true]);

        $this->assertDatabaseHas('proposals', $proposal);
    }
}