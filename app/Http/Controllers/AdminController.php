<?php

namespace App\Http\Controllers;

use App\Models\Proposal;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function showLogin(): RedirectResponse|View
    {
        if (Auth::guard('admin')->check()) {

            return redirect()->route('admin.dashboard');
        }

        return view('admin.login');
    }

    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        if (! Auth::guard('admin')->attempt($credentials)) {
            return back()->withErrors(['email' => 'These admin credentials could not be verified.'])->onlyInput('email');
        }

        $request->session()->regenerate();

        return redirect()->intended(route('admin.dashboard'));
    }

    public function dashboard(Request $request): View
    {
        $this->authorizeAdmin($request);

        return view('admin.dashboard', [
            'proposalCount' => Proposal::count(),
            'recentProposals' => Proposal::latest()->take(3)->get(),
        ]);
    }

    public function index(Request $request): View
    {
        $this->authorizeAdmin($request);

        return view('admin.proposals.index', [
            'proposals' => Proposal::latest()->paginate(20),
        ]);
    }

    public function show(Request $request, Proposal $proposal): View
    {
        $this->authorizeAdmin($request);

        return view('admin.proposals.show', compact('proposal'));
    }

    public function download(Request $request, Proposal $proposal)
    {
        $this->authorizeAdmin($request);
        abort_unless($proposal->business_plan_path, 404);

        return Storage::disk('local')->download(
            $proposal->business_plan_path,
            $proposal->business_plan_name
        );
    }

    public function logout(Request $request): RedirectResponse
    {
        $this->authorizeAdmin($request);
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }

    private function authorizeAdmin(Request $request): void
    {
        abort_unless($request->user('admin'), 403);
    }
}
