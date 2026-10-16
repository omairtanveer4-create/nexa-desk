<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    /**
     * Show the application dashboard with real account statistics
     * computed from the users table.
     */
    public function index(): View
    {
        $now = Carbon::now();

        $totalUsers = User::count();
        $newThisMonth = User::where('created_at', '>=', $now->copy()->startOfMonth())->count();
        $newLastMonth = User::whereBetween('created_at', [
            $now->copy()->subMonthNoOverflow()->startOfMonth(),
            $now->copy()->subMonthNoOverflow()->endOfMonth(),
        ])->count();
        $newThisWeek = User::where('created_at', '>=', $now->copy()->startOfWeek())->count();
        $verifiedUsers = User::whereNotNull('email_verified_at')->count();
        $verifiedPercent = $totalUsers > 0 ? (int) round(($verifiedUsers / $totalUsers) * 100) : 0;

        // Month-over-month growth of signups (null when there is no prior data).
        $monthlyGrowth = null;
        if ($newLastMonth > 0) {
            $monthlyGrowth = round((($newThisMonth - $newLastMonth) / $newLastMonth) * 100, 1);
        }

        $stats = [
            [
                'icon' => 'ti ti-users',
                'label' => 'Total Users',
                'value' => number_format($totalUsers),
                'sublabel' => number_format($newThisMonth) . ' joined this month',
                'color' => 'primary',
                'change' => $monthlyGrowth === null ? null : ($monthlyGrowth >= 0 ? '+' : '') . $monthlyGrowth . '%',
                'change_type' => $monthlyGrowth === null ? null : ($monthlyGrowth >= 0 ? 'increase' : 'decrease'),
            ],
            [
                'icon' => 'ti ti-user-plus',
                'label' => 'New This Month',
                'value' => number_format($newThisMonth),
                'sublabel' => 'Since ' . $now->copy()->startOfMonth()->format('M j'),
                'color' => 'success',
                'change' => null,
                'change_type' => null,
            ],
            [
                'icon' => 'ti ti-calendar-week',
                'label' => 'New This Week',
                'value' => number_format($newThisWeek),
                'sublabel' => 'Since ' . $now->copy()->startOfWeek()->format('M j'),
                'color' => 'info',
                'change' => null,
                'change_type' => null,
            ],
            [
                'icon' => 'ti ti-mail-check',
                'label' => 'Verified Emails',
                'value' => $verifiedPercent . '%',
                'sublabel' => number_format($verifiedUsers) . ' of ' . number_format($totalUsers) . ' users',
                'color' => 'warning',
                'change' => null,
                'change_type' => null,
            ],
        ];

        // Daily signups over the last 14 days for the overview chart.
        $days = collect(range(13, 0))->map(fn ($offset) => $now->copy()->subDays($offset)->startOfDay());

        $dailySignups = User::where('created_at', '>=', $days->first())
            ->selectRaw('DATE(created_at) as day, COUNT(*) as total')
            ->groupBy('day')
            ->pluck('total', 'day');

        $chartLabels = $days->map(fn (Carbon $day) => $day->format('M j'))->all();
        $chartValues = $days->map(fn (Carbon $day) => (int) ($dailySignups[$day->format('Y-m-d')] ?? 0))->all();

        // Latest registrations shown in the activity feed.
        $recentUsers = User::withTrashed()
            ->latest('created_at')
            ->take(8)
            ->get()
            ->map(fn (User $user) => [
                'name' => $user->name,
                'email' => $user->email,
                'initials' => collect(explode(' ', trim((string) $user->name)))
                    ->filter()
                    ->take(2)
                    ->map(fn (string $part) => mb_strtoupper(mb_substr($part, 0, 1)))
                    ->join(''),
                'time' => $user->created_at?->diffForHumans() ?? 'Unknown',
                'verified' => $user->email_verified_at !== null,
                'trashed' => $user->trashed(),
                'color' => ['primary', 'success', 'info', 'warning', 'danger', 'secondary'][mb_strlen((string) $user->name) % 6],
            ]);

        return view('home', compact(
            'stats',
            'chartLabels',
            'chartValues',
            'recentUsers',
            'verifiedPercent',
            'totalUsers',
            'newThisMonth',
        ));
    }
}