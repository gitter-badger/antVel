<?php namespace app\Http\Controllers;

use App\Company;
use App\Helpers\File;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Collection;

class CompanyController extends Controller
{
    private $form_rules = [
        'name'  => 'required|max:100',
        'slogan'  => 'required|max:150',
    ];

    private $panel = [
        'left'=>['width'=>'2'],
        'center'=>['width'=>'10'],
    ];

    private $company_id = '1';

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $panel = [
            'left'=>['width'=>'2'],
            'center'=>['width'=>'10']
        ];
        $company = Company::find(1);
        return view('company.index', compact('panel', 'company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        // $this->validate($request, $this->form_rules);

        $data = [
            'name' => $request->input('name'),
            'website_name' => $request->input('website_name'),
            'slogan' => $request->input('slogan'),
            'phone_number' => $request->input('phone_number'),
            'cell_phone' => $request->input('cell_phone'),
            'address' => $request->input('address'),
            'state' => $request->input('state'),
            'city' => $request->input('city'),
            'facebook' => $request->input('facebook'),
            'facebook_app_id' => $request->input('facebook_app_id'),
            'twitter' => $request->input('twitter'),
            'zip_code' => $request->input('zip_code'),
            'google_maps_key_api' => $request->input('google_maps_key_api'),

            'email' => $request->input('email'),
            'contact_email' => $request->input('contact_email'),
            'sales_email' => $request->input('sales_email'),
            'support_email' => $request->input('support_email'),
            //
            // 'website'  => $request->input('website'),
            'description' => $request->input('description'),
            'keywords'  => $request->input('keywords'),
            //
            'about_us' => $request->input('about_us'),
            //
            'refund_policy' => $request->input('refund_policy'),

            'privacy_policy' => $request->input('privacy_policy'),

            'terms_of_service' => $request->input('terms_of_service'),
        ];

        $company = Company::find($id);
        $company->update($data);
        return redirect()->to('wpanel/profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public static function defaultCompany()
    {
        return [
            'name' => 'antVel',
            'website_name' => 'hhtp://antvel.com',
            'slogan' => 'An Laravel eCommerce',
            'phone_number' => '+1 (405) - 669.63.31',
            'cell_phone' => '+1 (405) - 669.63.31',
            'address' => 'Northwest',
            'state' => 'Oklahoma',
            'city' => 'Oklahoma City',
            'facebook' => 'https://www.facebook.com/ocantog',
            'facebook_app_id' => 'antvel facebook appID',
            'twitter' => 'https://twitter.com/gocanto',
            'zip_code' => '73116',
            'google_maps_key_api' => 'antvel google appID',
            'email' => 'gustavoocanto@gmail.com',
            'contact_email' => 'gustavoocanto@gmail.com',
            'sales_email' => 'gustavoocanto@gmail.com',
            'support_email' => 'gustavoocanto@gmail.com',
            'description' => ' eStore ready to use',
            'keywords'  => 'antvel, gocanto, laravel, php',
            'about_us' => 'I am Web Developer',
            'refund_policy' => 'Refund Policy',
            'privacy_policy' => 'Privacy Policy',
            'terms_of_service' => 'Terms of Service'
        ];
    }
}
