<?php

namespace Tests\Feature;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminAuthenticationTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_log_in_using_the_admin_guard(): void
    {
        $admin = Admin::create([
            'name' => 'Site Admin',
            'email' => 'admin@example.com',
            'password' => 'secure-password',
        ]);

        $response = $this->post(route('admin.login.submit'), [
            'email' => 'admin@example.com',
            'password' => 'secure-password',
        ]);

        $response->assertRedirect(route('admin.dashboard'));
        $this->assertAuthenticatedAs($admin, 'admin');
    }

    public function test_admin_dashboard_shows_proposal_count_and_recent_history(): void
    {
        $admin = Admin::create([
            'name' => 'Site Admin',
            'email' => 'admin@example.com',
            'password' => 'secure-password',
        ]);

        foreach (['First Project', 'Second Project', 'Third Project', 'Older Project'] as $projectName) {
            \App\Models\Proposal::create([
                'full_name' => 'Amina Uwimana',
                'email' => 'amina@example.com',
                'company' => 'Example Ventures',
                'country' => 'Rwanda',
                'project_name' => $projectName,
                'sector' => 'Agriculture',
                'estimated_investment' => '5000000',
                'land_required' => '50 ha',
                'why_rwanda' => 'A sustainable agriculture project.',
            ]);
        }

        $this->actingAs($admin, 'admin')
            ->get(route('admin.dashboard'))
            ->assertOk()
            ->assertViewHas('proposalCount', 4)
            ->assertViewHas('recentProposals', fn ($proposals) => $proposals->count() === 3);
    }

    public function test_regular_user_cannot_access_admin_routes(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user)
            ->get(route('admin.proposals.index'))
            ->assertRedirect(route('login'));

        $this->assertGuest('admin');
    }
}
