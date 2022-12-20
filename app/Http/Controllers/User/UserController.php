<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\AdminRepositoryInterface;
use App\Ip2lang;
use App\Classes\Country;
use App\Classes\ValuesQuiz;
use App\User;
use Auth;
use Session;
use Config;
use App;
use Illuminate\Support\Facades\Log;


class UserController extends Controller
{

    private const pass = 'test123';

    public function __construct(AdminRepositoryInterface $adminRepository)
    {
        $this->adminRepository = $adminRepository;
    }

    public function start()
    {
        $languages = $this->adminRepository->getAllLanguage();
        return view('start', compact('languages'));
    }

    public function live_broadcast()
    {
        return view('live_broadcast');
    }

    public function quiz_values()
    {
        $val = new ValuesQuiz;
        return view('quiz_values')->with([
                'values' => $val->getValues()
            ]
        );

        // return view('quiz_values');
    }

    public function quiz()
    {
        $quiz = new App\Classes\Quiz();
        return view('quiz')->with([
                'questions' => $quiz->getQuestions()
            ]
        );
    }

    public function start_quiz(Request $request)
    {
        $session_id = \Session::getId();
        App\QuizStarts::create([
            'session_id' => $session_id
        ]);

        return 200;
    }

    public function end_quiz(Request $request)
    {
        $session_id = \Session::getId();
        App\QuizEnds::create([
            'session_id' => $session_id
        ]);

        return 200;
    }

    public function index()
    {
        $language = \Session::get('locale');
        #iptable
        if (!$language) {
            $headers = apache_request_headers();
            if (isset($headers["X-Forwarded-For"])) {
                $ip = $headers["X-Forwarded-For"];
                $dblang = Ip2lang::where('ip', $ip)->first();
                if ($dblang->lang) {
                    $language = $dblang->lang;
                }
            }
        }
        #fallback en
        if (!$language) {
            $language = 'en';
        }

        $lng = $this->adminRepository->getLng($language);
        $languages = $this->adminRepository->getAllLanguage();

        return view('home', compact('lng', 'languages'));
    }

    public function signup_login(Request $request)
    {
        // comment
        $user = User::all()->where('email', $request['email'])->first();

        if (!$user) {
            Session::flash('user_exist', 'This email does not exist in the database!');
            return redirect('/');
        }
        // end comment

        $locale = $request['language'];

        $headers = apache_request_headers();
        // $ip = $headers["X-Forwarded-For"];
        // comment
        $ip = '233.123.22.3';
        // end comment
        $userLang = Ip2lang::firstOrCreate(['ip' => $ip]);
        $userLang->lang = $locale;
        $userLang->save();

        App::setLocale($locale);
        \Session::put('locale', $locale);

        // return redirect('/signin');

        // comment
        if (Auth::attempt(['email' => $request['email'], 'password' => self::pass])) {
            return redirect('/home');
        }
        // end comment

    }

    public function send_message(Request $request)
    {
        if (request()->ajax()) {
            $this->adminRepository->createMessage($request);
            return ['status' => 'ok'];
        }
    }


    public function send_competition(Request $request)
    {
        if (request()->ajax()) {
            $this->adminRepository->createCompetition($request);
            return ['status' => 'ok'];
        }
    }

    public function send_quiz(Request $request)
    {
        if (request()->ajax()) {
            $this->adminRepository->createQuiz($request);
            return ['status' => 'ok'];
        }
    }

}
