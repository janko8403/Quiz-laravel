<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\AdminRepositoryInterface;
use Illuminate\Support\Facades\DB;
use App\Classes\Country;
use App\User;
use App;
use Session;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function __construct(AdminRepositoryInterface $adminRepository)
    {
        $this->adminRepository = $adminRepository;
    }

    public function dashboard()
    {
        $all = $this->adminRepository->getUsersWithRole();
        $active = $this->adminRepository->getActiveUsers();
        $messages = $this->adminRepository->getMessages();
        $languages = $this->adminRepository->getAllLanguage();
        $competitions = $this->adminRepository->getAllCompetitionMessages();
        $testEmailsCount = $this->adminRepository->getTestEmailsCount();

    	return view('admin.dashboard', compact('all', 'active', 'messages', 'languages', 'competitions','testEmailsCount'));
    }

    public function users()
    {
        $users = $this->adminRepository->getActiveUsers();
    	return view('admin.users', compact('users'));
    }

    public function delete_user($id)
    {
        $this->adminRepository->deleteUser($id);
        $this->flashMsg('info', _('Poprawnie usunałeś użytkownika'));
        return redirect()->back();
    }

    public function add_user()
    {
        return view('admin.add_user');
    }

    public function create_user(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|unique:users'], [
            'required' => 'To pole jest wymagane', 'unique' => 'Taki e-mail juz istnieje w bazie']
        );


        if($request->isMethod('post'))
        {
            $this->adminRepository->createUser($request);
            $this->flashMsg('info', _('Poprawnie dodałeś użytkownika'));
            return redirect()->back();
        }
    }

    // import users
    public function import_user_view()
    {
       return view('admin.import_user');
    }
    public function import_user()
    {
        Excel::import(new UsersImport, request()->file('file'));

        $this->flashMsg('info', _('Poprawnie zaimportowałeś użytkowników'));
        return back();
    }
    // end import users

    //messages
    public function view_message()
    {
        $msgs = $this->adminRepository->getMessages();
    	return view('admin.message', compact('msgs'));
    }
    public function delete_message($id)
    {
        $this->adminRepository->deleteMessage($id);
        $this->flashMsg('info', _('Poprawnie usunałeś wiadomość'));
        return redirect()->back();
    }

    // competition
    public function competition($id)
    {
        $competitions = $this->adminRepository->getCompetitionById($id);
        if($id == 1) {
            $nr = 'LET’S DRESS CHARITY BEARS';
        }
        if($id == 2) {
            $nr = 'LOCAL DESIGN';
        }
        if($id == 3) {
            $nr = 'LET THE SONG GROW';
        }
        return view('admin.competition', compact('competitions', 'nr'));
    }

    public function delete_competition($id)
    {
        $this->adminRepository->deleteCompetition($id);
        $this->flashMsg('info', _('Poprawnie usunałeś wpis'));
        return redirect()->back();
    }


    // language
    public function language()
    {
        $languages = $this->adminRepository->getAllLanguage();
        return view('admin.language', compact('languages'));
    }

    public function add_language()
    {
        $gp = new Country;
        $countries = $gp->getAllCountry();

        return view('admin.add_language', compact('countries'));
    }

    public function create_language(Request $request)
    {
        if($request->isMethod('post')) {
            $this->adminRepository->createLanguage($request);
            $this->flashMsg('info', _('Poprawnie dodałeś język'));
            return redirect('admin/language');
        }
    }

    public function edit_language($id)
    {
        $language = $this->adminRepository->getLanguageById($id);
        return view('admin.edit_language', compact('language'));
    }

    public function update_language(Request $request, $id)
    {
        $this->adminRepository->updateLanguage($request, $id);
        $this->flashMsg('info', _('Poprawnie zedytowałeś język'));
        return redirect()->back();
    }

    public function delete_language($id)
    {
        $this->adminRepository->deleteLanguage($id);
        $this->flashMsg('info', _('Poprawnie usunałeś język'));
        return redirect()->back();
    }

    public function langman()
    {
        return view('admin.langman');
    }
}
