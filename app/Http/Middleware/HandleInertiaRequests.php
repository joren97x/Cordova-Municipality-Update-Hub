<?php

namespace App\Http\Middleware;

use App\Models\Barangay;
use App\Models\Email;
use App\Models\Post;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that's loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Defines the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function share(Request $request): array
    {

        $barangay = Barangay::where('id', Auth::user() ? Auth::user()->area_id : null)->select('name', 'id')->first();

        return array_merge(parent::share($request), [
            //
            'auth' => Auth::user() ? 
                [
                    'user' => [
                        'id' => Auth::user()->id,
                        'area_id' => Auth::user()->area_id,
                        'role' => Auth::user()->role,
                        'email' => Auth::user()->email,
                        'barangay' => $barangay
                    ]
                ] : null
        ], [
            'shared' => [
                'pending_posts' => Post::where('status', 'pending')->count(),
                'email_notify_list' => Email::count(),
                'unanswered_q' => Question::where('status', 'unanswered')->count(),
                'answered_q' => Question::where('status', 'answered')->count(),
                'featured_q' => Question::where('status', 'featured')->count(),
            ]
        ]);
    }
}
