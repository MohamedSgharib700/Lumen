<?php namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Contracts\Auth\Guard;

class is_support_admin {

	/**
	 * The Guard implementation.
	 *
	 * @var Guard
	 */
	protected $auth;

	/**
	 * Create a new filter instance.
	 *
	 */
	public function __construct()
	{
		$this->auth = Auth();
	}

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if ( ($this->auth->user()->permission == 1) || ($this->auth->user()->permission == 3)|| ($this->auth->user()->permission == 4) )
		{
            return $next($request);

		}
		else {
            if ($request->ajax())
            {
                return response('Unauthorized.', 401);
            }
            else
            {
                $this->auth->logout();
                return redirect('/')->with('failed',trans('message.youraccountdeactivated'));
            }
        }




	}

}
