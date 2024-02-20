<?php

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

// Broadcast::channel('App.User.{id}', function ($user, $id) {
//     return (int) $user->id === (int) $id;
// });

Broadcast::channel('privateChat.{id}', function ($user, $id) {
	// return (auth()->check() && auth()->user()->id === $id);
    return (int)$user->id === (int)$id;
});


Broadcast::channel('alert.{id}', function ($user, $id) {
    return (int)$user->id === (int)$id;
});
