<?php

namespace Illuminate\Foundation\Auth;

trait RedirectsUsers
{
    /**
     * Get the post register / login redirect path.
     *
     * @return string
     */
    public function redirectPath()
    {
        if (method_exists($this, 'redirectTo')) {
            return $this->redirectTo();
        }

        if (empty(auth()->user()) || empty(auth()->user()->role)) {
            return route('events');
        }

        if (method_exists($this, 'redirectAuthCustom')) {
            return $this->redirectAuthCustom();
        }

        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/home';
    }
}
