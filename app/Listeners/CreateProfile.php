<?php

namespace App\Listeners;
use App\Profile;
use App\Events\RegisteredUser;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreateProfile
{

    public function __construct()
    {

    }

    public function handle(RegisteredUser $event)
    {
        $profile=new Profile();
        $profile->city="No city Added";
        $profile->about="What about the city";
        $profile->image_link="http://www.lovemarks.com/wp-content/uploads/profile-avatars/default-avatar-knives-ninja.png";
        $event->user->profile()->save($profile);
    }
}
