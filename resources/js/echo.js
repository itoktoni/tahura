import Echo from 'laravel-echo';
import Pusher from 'pusher-js';

if(import.meta.env.VITE_BROADCAST_DRIVER != null){
    window.Pusher = Pusher;

    window.Echo = new Echo({
        broadcaster: import.meta.env.VITE_BROADCAST_DRIVER,
        key: import.meta.env.VITE_REVERB_APP_KEY,
        wsHost: import.meta.env.VITE_REVERB_HOST,
        wsPort: import.meta.env.VITE_REVERB_PORT ?? 80,
        wssPort: import.meta.env.VITE_REVERB_PORT ?? 443,
        forceTLS: (import.meta.env.VITE_REVERB_SCHEME ?? 'https') === 'https',
        enabledTransports: ['ws', 'wss'],
    });
}

