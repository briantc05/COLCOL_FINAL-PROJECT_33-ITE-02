<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

    public function login(Request $request) {
        $incomingFields = $request->validate([
            'loginemail' => 'required',
            'loginpassword' => 'required'
        ]);

        if (auth()->attempt(['email' => $incomingFields['loginemail'], 'password' => $incomingFields['loginpassword']])) {
            $request->session()->regenerate();
        }

        return redirect('/');
    }
    public function logout () {
        auth()->logout();
        return redirect('/');
    }
    public function register(Request $request) {
        $incomingFields = $request->validate([
            'name' => ['required', 'min:3', 'max:100', Rule::unique('users', 'name')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8', 'max:200']
         ] );

         $incomingFields['password'] = bcrypt( $incomingFields['password'] );
         $user = User::create($incomingFields);
         auth()->login($user);

        return redirect('/');
    }

    public function createAvatar($name)
{
    $words = explode(' ', $name);
    $initials = strtoupper(substr($words[0], 0, 1) . substr($words[1], 0, 1));

    // Define a background color and text color for the avatar
    $bgColor = '#'.substr(md5($name), 0, 6); // Use a unique color based on the name
    $textColor = '#ffffff'; // White text color

    // Create an image with the initials and colors
    $image = imagecreate(200, 200);
    $bg = imagecolorallocate($image, hexdec(substr($bgColor, 1, 2)), hexdec(substr($bgColor, 3, 2)), hexdec(substr($bgColor, 5, 2)));
    $text = imagecolorallocate($image, hexdec(substr($textColor, 1, 2)), hexdec(substr($textColor, 3, 2)), hexdec(substr($textColor, 5, 2)));
    imagefill($image, 0, 0, $bg);
    imagettftext($image, 75, 0, 25, 130, $text, public_path('fonts/arial.ttf'), $initials);

    // Save the image to a file
    $avatarPath = 'storage/avatars/'.$name.'_avatar.png';
    imagepng($image, public_path($avatarPath));
    imagedestroy($image);

    return asset($avatarPath);
}

public function showAvatar($name)
{
    $avatarUrl = $this->createAvatar($name);

    return view('avatar', compact('avatarUrl'));

}
public function goLogin() {
    return view('blog.login');
}

}
