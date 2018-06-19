<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\WebsiteSettings;
use App\NotificationTemplates;
use App\User;
use Hash;


class SettingsController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $websitesettings = WebsiteSettings::get();
        return view('admin.setting.index', compact('websitesettings'));
    }

    public function generalSettings()
    {
        
        $websitesettings = WebsiteSettings::get();

        return view('admin.setting.general', compact('websitesettings'));
    }

    function updateWebsite(Request $request){
       
        $data = [
            "website_name" => $request -> input('platform_name'),
            "website_account_email" => $request -> input('account_email'),
            "website_legal_name" => $request -> input('legal_name_business'),
            "website_desc" => $request -> input('desc_website'),
            "website_phone" => $request -> input('phone_business'),
            "website_street" => $request -> input('street'),
            "website_city" => $request -> input('city'),
            "website_postal_code" => $request -> input('postal_code'),
            "website_country" => $request -> input('country'),
            "website_region" => $request -> input('region'),
            "website_currency" => $request -> input('currency'),
            "website_iban" => $request -> input('nif_iban'),
            "website_order_prefix" => $request -> input('prefix_order'),
            "website_order_suffix" => $request -> input('suffix_order'),
            "website_url_facebook" => $request -> input('social_facebook'),
            "website_url_twitter" => $request -> input('social_twitter'),
            "website_url_instagram" => $request -> input('social_instagram'),
            "website_url_google" => $request -> input('social_google_plus'),
            "website_mode_store" => $request -> input('website_mode_store')
        ];

        WebsiteSettings::where('id',1)->update($data);

        return redirect(route('general'))->with('message', 'Alterado com sucesso!');;
    }

    public function accountSettings(){
        $websitesettings = WebsiteSettings::get();
        $usersettings = User::get();
        return view('admin.setting.account', compact('websitesettings','usersettings'));
    }

    function updateAccountSettings(Request $request){
        // user data
        $data = [
            "name" => $request -> input("username"),
            "email" => $request -> input("email_address"),
            "password" => Hash::make($request -> input("password_reset")),
            "user_about" => $request -> input("user_about")
        ];

        User::where('id',1)->update($data);

        return redirect(route("account"))->with("message","Alterado com sucesso!");
    }

    public function shippingSettings(){
        $websitesettings = WebsiteSettings::get();
        return view('admin.setting.shipping', compact('websitesettings'));
    }

    // to costumize settings of notifications
    public function NotificationsSettings(){
        $websitesettings = WebsiteSettings::get();
        $notifications = NotificationTemplates::get();
        return view('admin.setting.notifications.index', compact('websitesettings','notifications'));
    }

    function newNotification(){
        $websitesettings = WebsiteSettings::get();

        return view('admin.setting.notifications.create', compact('websitesettings'));
    }

    // CREATE NOTIFICATION TEMPLATE
    function createNotification(Request $request){

        $data = [
            "title" => $request -> input("title"),
            "description" => $request -> input('desc_product'),
            "observations" => $request -> input('observacoes_notification')
        ];

        $notificationCreated = NotificationTemplates::create($data);
        return redirect()->back()->with("message","Criado com sucesso!");
    }

    function editNotification($id){
        $websitesettings = WebsiteSettings::get();
        
        $notifications = NotificationTemplates::find($id);

        return view('admin.setting.notifications.edit', compact('websitesettings','notifications'));
    }

    function updateNotification(Request $request,$id){
        
        $data = [
            "title" => $request -> input("title"),
            "description" => $request -> input('desc_product'),
            "observations" => $request -> input('observacoes_notification')
        ];

        NotificationTemplates::where('id',$id)->update($data);

        return redirect()->back()->with("message","Alterado com sucesso!");
    }

    
}
