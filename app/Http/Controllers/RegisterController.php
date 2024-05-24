namespace App\Http\Controllers;
<?
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\RegisterProfile;
use App\Models\Staff;
use App\Models\Crmp;
use App\Models\Mentor;
use App\Models\Platinum;
use App\Models\userProfile;

class RegisterController extends Controller
{
    public function registerForm()
    {
        return view('Registration.Register');
    }

    public function registerPost(Request $request)
    {
        // Validation
        $request->validate([
            'Title' => 'required',
            'name' => 'required',
            'password' => 'required',
            'identityCard' => 'required',
            'gender' => 'required',
            'religion' => 'required|min:5|max:12',
            'race' => 'required',
            'citizenship' => 'required',
            'address' => 'required',
            'phoneNumber' => 'required',
            'facebook' => 'required',
            'email' => 'required|email',
            'currentEduLevel' => 'required',
            'eduField' => 'required',
            'eduInstitute' => 'required',
            'occupation' => 'required',
            'sponsor' => 'required',
            'program' => 'required',
            'size' => 'required',
            'batch' => 'required',
            'bio' => 'required',
            'position' => 'required',
            'experience' => 'required'
        ]);


        try {
            // Create and save the Staff instance
            $staff = new staff();
            $staff->name = $request->name;
            $staff->address = $request->address;
            $staff->phone_number = $request->phoneNumber;
            $staff->username = $request->email;
            $staff->save();

            // Create and save the Crmp instance
            $crmp = new crmp();
            $crmp->education_level = $request->currentEduLevel;
            $crmp->expertise = $request->eduField;
            $crmp->teaching = $request->eduInstitute;
            $crmp->biography = $request->bio;
            $crmp->name = $request->name;
            $crmp->username = $request->email;
            $crmp->save();

            // Create and save the Mentor instance
            $mentor = new mentor();
            $mentor->name = $request->name;
            $mentor->education_level = $request->currentEduLevel;
            $mentor->position = $request->position;
            $mentor->experience = $request->experience;
            $mentor->phone_number = $request->phoneNumber;
            $mentor->username = $request->email;
            $mentor->save();

            // Create and save the Platinum instance
            $platinum = new platinum();
            $platinum->crmp_id = $crmp->id;
            $platinum->staff_id = $staff->id;
            $platinum->username = $request->email;
            $platinum->save();

            // Create and save the RegisterProfile instance
            $registerProfile = new RegisterProfile();
            $registerProfile->title = $request->Title;
            $registerProfile->name = $request->name;
            $registerProfile->password = bcrypt($request->password);
            $registerProfile->identity_card = $request->identityCard;
            $registerProfile->gender = $request->gender;
            $registerProfile->religion = $request->religion;
            $registerProfile->race = $request->race;
            $registerProfile->citizenship = $request->citizenship;
            $registerProfile->address = $request->address;
            $registerProfile->phone_number = $request->phoneNumber;
            $registerProfile->facebook = $request->facebook;
            $registerProfile->email = $request->email;
            $registerProfile->current_edu_level = $request->currentEduLevel;
            $registerProfile->edu_field = $request->eduField;
            $registerProfile->edu_institute = $request->eduInstitute;
            $registerProfile->occupation = $request->occupation;
            $registerProfile->sponsor = $request->sponsor;
            $registerProfile->program = $request->program;
            $registerProfile->size = $request->size;
            $registerProfile->batch = $request->batch;
            $registerProfile->save();


            // Redirect with success message
            return redirect()->route("register")->with("success", "Success Registration!");
        } catch (\Exception $e) {
            // Rollback the transaction on failure
            DB::rollBack();

            // Log the error for debugging purposes
            Log::error('Failed to register user: ' . $e->getMessage());

            // Redirect with error message
            return redirect()->route("register")->with("error", "Failed to register: " . $e->getMessage());
        }
    }
}
