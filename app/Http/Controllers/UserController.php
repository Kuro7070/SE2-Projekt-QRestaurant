<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\PasswordValidationRules;
use App\Actions\Jetstream\DeleteUser;
use App\Models\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\File;
use Laravolt\Avatar\Avatar;

class UserController extends Controller
{
    use PasswordValidationRules;

    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $result = null;

        // *** Build a basic query for active users
        $query  = User::query();
        $result = $query->get();

        // Prepare and send the JSON response
        try {
            return self::sendResponse($result, "Alle User erfolgreich gefunden");
        } catch (\Exception $e) {
            return self::sendError($e->getMessage());
        }
    }

    public function getUserById(int $user_id)
    {
        // Load the Event with the given ID or throw an Exception

        try {
            $user = User::findOrFail($user_id);
            return self::sendResponse($user, "User mit ID $user_id erfolgreich gefunden");
        } catch (\Exception $e) {
            return self::sendError($e->getMessage());
        }
    }

    public static function deleteUser()
    {
        User::find(auth()->user()->id)->delete();

        session()->push('deleteSuccess', 'Account gelöscht');
        return redirect()->to('/');
    }

    public static function getProfilePic()
    {
        $user = User::find(Auth::id());

        if (!is_null($user->profile_photo_path)) {
            return asset($user->profile_photo_path);
        } else {
            $avatar = new Avatar(config('laravolt.avatar'));
            return $avatar->create($user->vorname.' '.$user->nachname)->setTheme('colorful')->toBase64();
        }
    }

    public static function destroyProfilePic()
    {
        $user = User::find(Auth::id());

        if (!is_null($user->profile_photo_path)) {
            $user->profile_photo_path = '';
            $user->save();
        }
    }

    public function uploadOne(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null)
    {
        $name = !is_null($filename) ? $filename : Str::random(25);

        $file = $uploadedFile->storeAs('uploads', $name . '.' . $uploadedFile->getClientOriginalExtension(), 'public');


        return $file;
    }

    public function updateData(Request $request)
    {
        $user  = User::find(Auth::id());
        $rules = [
            'vorname'  => 'string|max:255',
            'nachname' => 'string|max:255',
            'email'    => 'email',
            'photo'    => 'mimes:jpg,png|max:2048',
        ];

        $customMessages = [
            'required' => 'Das Uploadfeld darf nicht leer sein.',
            'mimes'    => "Bitte wählen Sie eine PDF-Datei aus.",
            'max'      => 'Die ausgewählte PDF-Datei ist zu groß. Die maximale Größe darf 2MB betragen.'
        ];

        $this->validate($request, $rules, $customMessages);

        if (isset($request['photo']) && !empty($request['photo'])) {
            // Check if a profile image has been uploaded
            // Get image file
            $image = $request->file('photo');
            // Make a image name based on user name and current timestamp
            $name = uniqid() . File::extension(Auth::user()->name . '_' . time());
            // Define folder path
            $folder = '/storage/uploads/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name . '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadOne($image, $folder, 'public', $name);
            // Set user profile image path in database to filePath
            $user->profile_photo_path = $filePath;

            // Persist user record to database
            $user->save();
        }

        if (isset($request['email']) && !empty($request['email'])) {
            $user->forceFill([
                'email' => $request['email']
            ])->save();
        }

        if (isset($request['vorname']) && !empty($request['vorname'])) {
            if (old('vorname', auth()->user()->vorname) !== $request['vorname']) {
                $user->vorname = $request['vorname'];
                $user->save();
            }
        }

        if (isset($request['nachname']) && !empty($request['nachname'])) {
            if (old('nachname', auth()->user()->nachname) !== $request['nachname']) {
                $user->nachname = $request['nachname'];
                $user->save();
            }
        }

        if (isset($request['street']) && !empty($request['street'])) {
            if (old('street', auth()->user()->street) !== $request['street']) {
                $user->street = $request['street'];
                $user->save();
            }
        }

        if (isset($request['telefonnummer']) && !empty($request['telefonnummer'])) {
            if (old('telefonnummer', auth()->user()->telefonnummer) !== $request['telefonnummer']) {
                $user->telefonnummer = $request['telefonnummer'];
                $user->save();
            }
        }

        if (isset($request['ort']) && !empty($request['ort'])) {
            if (old('ort', auth()->user()->ort) !== $request['ort']) {
                $user->ort = $request['ort'];
                $user->save();
            }
        }

        if (isset($request['streetno']) && !empty($request['streetno'])) {
            if (old('streetno', auth()->user()->streetno) !== $request['streetno']) {
                $user->streetno = $request['streetno'];
                $user->save();
            }
        }

        if (isset($request['zip']) && !empty($request['zip'])) {
            if (old('zip', auth()->user()->zip) !== $request['zip']) {
                $user->zip = $request['zip'];
                $user->save();
            }
        }

        if ((isset($request['new-password']) && !empty($request['new-password'])) && (isset($request['current-password']) && !empty($request['current-password']))) {
            $rules = [
                'current-password'     => 'string',
                'new-password'         => 'string',
                'new-password-confirm' => 'string|same:new-password',
            ];

            $customMessages = [];

            $this->validate($request, $rules, $customMessages);
            if (!Hash::check($request['current-password'], $user->password)) {
                return back()->with('error', 'You have entered wrong password');
            } else {
//                $user->forceFill([
//                    'password' => Hash::make($request['new-password']),
//                ])->save();
                $user->reg_password = Hash::make($request['new-password']);
                $user->save();
            }
        }

        return back();
    }
}
