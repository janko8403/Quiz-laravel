<?php

namespace App\Repositories\Repositories;

use App\{SendedEmails, User, Role, Message, Competition, Language};
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\DatabaseNotification;
use App\Repositories\Interfaces\AdminRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Classes\GeneratePass;
use App\Classes\Country;
use URL;
use Carbon\Carbon;
use App\Mail\SendMail;
use App\Mail\SendQuiz;
use Illuminate\Support\Facades\File;

class AdminRepository implements AdminRepositoryInterface
{

    private $model;

    private const pass = 'test123';

    // Users
    public function getAllUsers()
    {
        return User::all();
    }

    public function getActiveUsers()
    {
        $active = User::whereHas(
            'roles', function ($q) {
            $q->where('name', 'User');
        }
        )->WhereNotNull('email_verified_at')->paginate(20);

        return $active;
    }

    public function getUsersWithRole()
    {
        $active = User::whereHas(
            'roles', function ($q) {
            $q->where('name', 'User');
        }
        )->WhereNotNull('email_verified_at')->get();

        return $active;
    }

    public function getUser($id)
    {
        return User::find($id);
    }

    public function createUser($request)
    {
        $role_user = Role::where('name', 'User')->first();

        $user = User::create([
            'email' => $request['email'],
            'password' => Hash::make(self::pass),
            'email_verified_at' => date("Y-m-d h:i:s")
        ]);

        $user->roles()->attach($role_user);
        return $user;

    }

    public function deleteUser($id)
    {
        return User::where('id', $id)->delete();
    }

    // form
    public function createMessage($request)
    {
        $message = Message::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'message' => $request['message']
        ]);

        Mail::to('conference2021@pepco.eu')
            ->send(new SendMail($request['name'], $request['email'], $request['message']));

        return $message;
    }

    public function getMessages()
    {
        return Message::all();
    }

    public function deleteMessage($id)
    {
        return Message::where('id', $id)->delete();
    }


    //competition
    public function createCompetition($request)
    {
        $competition = new Competition;
        $competition->id_competition = $request->input('id_competition');
        $competition->nr_shop = $request->input('nr_shop');
        $competition->size_team = $request->input('size_team');
        $competition->country = $request->input('country');
        $competition->name = $request->input('name');
        $competition->email = $request->input('email');
        $competition->link = $request->input('link');

        if ($request->file('image')) {
            $comp_images_path = 'public/comp/';
            $upload_path = $request->file('image')->store($comp_images_path);
            $images_filename = str_replace($comp_images_path . '', '', $upload_path);
            $competition->image = $images_filename;
        }

        $competition->save();
    }

    public function getCompetitionById($id)
    {
        $competitions = Competition::where('id_competition', $id)->get();
        return $competitions;
    }

    public function deleteCompetition($id)
    {
        return Competition::where('id', $id)->delete();
    }

    public function getAllCompetitionMessages()
    {
        return Competition::all();
    }

    // language
    public function getAllLanguage()
    {
        return Language::all();
    }

    public function createLanguage($request)
    {
        $gp = new Country;
        $lng = $gp->getCountryByLowerCase($request['lng']);

        $language = new Language;
        $language->lng = strtolower($request['lng']);
        $language->long_lng = $lng;
        $language->field_1 = $request['field_1'];
        $language->field_2 = strip_tags($request['field_2']);
        $language->field_3 = strip_tags($request['field_3']);
        $language->field_4 = $request['field_4'];
        $language->field_5 = strip_tags($request['field_5']);
        $language->field_6 = strip_tags($request['field_6']);
        $language->field_7 = strip_tags($request['field_7']);
        $language->field_8 = $request['field_8'];
        $language->field_9 = $request['field_9'];
        $language->field_10 = $request['field_10'];
        $language->agenda = strip_tags($request['agenda']);
        $language->agenda_txt = $request['agenda_txt'];
        $language->prelegenci = strip_tags($request['prelegenci']);
        $language->competition = strip_tags($request['competition']);
        $language->competition_1 = $request['competition_1'];
        $language->competition_2 = $request['competition_2'];
        $language->competition_3 = $request['competition_3'];
        $language->contact = strip_tags($request['contact']);
        $language->contact_txt = strip_tags($request['contact_txt']);

        if ($request->file('pdf')) {
            $comp_images_path = 'public/regulamin/';
            $upload_path = $request->file('pdf')->store($comp_images_path);
            $images_filename = str_replace($comp_images_path . '', '', $upload_path);
            $language->pdf = $images_filename;
        }
        if ($request->file('pdf2')) {
            $comp_images_path = 'public/regulamin/';
            $upload_path = $request->file('pdf2')->store($comp_images_path);
            $images_filename = str_replace($comp_images_path . '', '', $upload_path);
            $language->pdf2 = $images_filename;
        }
        if ($request->file('pdf3')) {
            $comp_images_path = 'public/regulamin/';
            $upload_path = $request->file('pdf3')->store($comp_images_path);
            $images_filename = str_replace($comp_images_path . '', '', $upload_path);
            $language->pdf3 = $images_filename;
        }

        $language->save();

    }

    public function getLanguageById($id)
    {
        return Language::find($id);
    }

    public function updateLanguage($request, $id)
    {
        $lng = Language::findOrFail($id);
        $lng->field_1 = $request->field_1;
        $lng->field_2 = strip_tags($request->field_2);
        $lng->field_3 = strip_tags($request->field_3);
        $lng->field_4 = $request->field_4;
        $lng->field_5 = strip_tags($request->field_5);
        $lng->field_6 = strip_tags($request->field_6);
        $lng->field_7 = strip_tags($request->field_7);
        $lng->field_8 = $request->field_8;
        $lng->field_9 = $request->field_9;
        $lng->field_10 = $request->field_10;
        $lng->agenda = strip_tags($request->agenda);
        $lng->agenda_txt = $request->agenda_txt;
        $lng->prelegenci = strip_tags($request->prelegenci);
        $lng->competition = strip_tags($request->competition);
        $lng->competition_1 = $request->competition_1;
        $lng->competition_2 = $request->competition_2;
        $lng->competition_3 = $request->competition_3;
        $lng->contact = strip_tags($request->contact);
        $lng->contact_txt = strip_tags($request->contact_txt);

        if ($request->file('pdf')) {
            $comp_images_path = 'public/regulamin/';
            $upload_path = $request->file('pdf')->store($comp_images_path);
            $images_filename = str_replace($comp_images_path . '', '', $upload_path);
            $lng->pdf = $images_filename;
        }
        if ($request->file('pdf2')) {
            $comp_images_path = 'public/regulamin/';
            $upload_path = $request->file('pdf2')->store($comp_images_path);
            $images_filename = str_replace($comp_images_path . '', '', $upload_path);
            $lng->pdf2 = $images_filename;
        }
        if ($request->file('pdf3')) {
            $comp_images_path = 'public/regulamin/';
            $upload_path = $request->file('pdf3')->store($comp_images_path);
            $images_filename = str_replace($comp_images_path . '', '', $upload_path);
            $lng->pdf3 = $images_filename;
        }

        $lng->save();

    }

    public function deleteLanguage($id)
    {
        return Language::where('id', $id)->delete();
    }

    public function getLng($lng)
    {
        return Language::where('lng', $lng)->first();
    }

    // quiz
    public function createQuiz($request)
    {
        SendedEmails::create([
            'email' => $request['email']
        ]);
        Mail::to($request['email'])
            ->send(new SendQuiz($request['respect'], $request['spirit'], $request['growth'], $request['simplicity'], $request['lovecustomer']));

        return;
    }
    public function getTestEmailsCount() {
        return SendedEmails::count();
    }


}
