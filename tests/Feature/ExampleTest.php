<?php

namespace Tests\Feature;

use App\Http\Controllers\UiKitController;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Guests hitting the root URL are redirected to the login screen,
     * and authenticated users land on the dashboard.
     */
    public function test_the_root_url_redirects_guests_to_login(): void
    {
        $response = $this->get('/');

        $response->assertRedirect('/login');
    }

    public function test_the_root_url_redirects_authenticated_users_to_the_dashboard(): void
    {
        $response = $this->actingAs(User::factory()->create())->get('/');

        $response->assertRedirect('/home');
    }

    public function test_the_dashboard_requires_authentication(): void
    {
        $response = $this->get('/home');

        $response->assertRedirect('/login');
    }

    /**
     * The UI Kit catalog lists every registered component.
     */
    public function test_the_ui_kit_catalog_requires_authentication(): void
    {
        $this->get('/ui-kit')->assertRedirect('/login');
    }

    public function test_the_ui_kit_catalog_lists_every_component(): void
    {
        $response = $this->actingAs(User::factory()->create())->get('/ui-kit');

        $response->assertOk();

        foreach (UiKitController::COMPONENTS as $component) {
            $response->assertSee($component['title']);
        }
    }

    /**
     * Every registered component page renders without errors.
     */
    public function test_every_registered_component_page_renders(): void
    {
        $user = User::factory()->create();

        foreach (UiKitController::COMPONENTS as $component) {
            $this->actingAs($user)
                ->get('/ui-kit/'.$component['slug'])
                ->assertOk()
                ->assertSee($component['title']);
        }
    }

    public function test_unknown_component_returns_404(): void
    {
        $this->actingAs(User::factory()->create())
            ->get('/ui-kit/does-not-exist')
            ->assertNotFound();
    }
}
