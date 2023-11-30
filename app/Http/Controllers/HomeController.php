<?php

namespace App\Http\Controllers;

use App\Models\PersonalDetail;
use App\Models\User;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        // $this->user = Auth::user()->id;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        if (!auth()->user()->view) {

            return view('page1');
        } else {
            $view = auth()->user()->view;
            return redirect()->route($view);
        }
    }
    public function page1()
    {
        User::find(auth()->user()->id)->update([
            'view' => 'page1'
        ]);
        return view('page1');
    }
    public function page2()
    {
        User::find(auth()->user()->id)->update([
            'view' => 'page2'
        ]);
        return view('page2');
    }
    public function page3()
    {

        User::find(auth()->user()->id)->update([
            'view' => 'page3'
        ]);
        return view('page3');
    }
    public function page4()
    {

        User::find(auth()->user()->id)->update([
            'view' => 'page4'
        ]);
        return view('page4');
    }
    public function page5()
    {

        User::find(auth()->user()->id)->update([
            'view' => 'page5'
        ]);
        return view('page5');
    }
    public function page6()
    {

        User::find(auth()->user()->id)->update([
            'view' => 'page6'
        ]);
        return view('page6');
    }
    public function page7()
    {

        User::find(auth()->user()->id)->update([
            'view' => 'page7'
        ]);
        return view('page7');
    }
    public function page8()
    {

        User::find(auth()->user()->id)->update([
            'view' => 'page8'
        ]);
        return view('page8');
    }
    public function page9()
    {

        User::find(auth()->user()->id)->update([
            'view' => 'page9'
        ]);
        return view('page9');
    }
    public function page10()
    {
        $personalDetail = PersonalDetail::where('user_id', auth()->user()->id)->first();
        if (!$personalDetail) {
            $personalDetail = new PersonalDetail;
        }
        User::find(auth()->user()->id)->update([
            'view' => 'page10'
        ]);
        return view('page10', compact('personalDetail'));
    }
    public function page11()
    {
        $personalDetail = PersonalDetail::where('user_id', auth()->user()->id)->first();
        if (!$personalDetail) {
            $personalDetail = new PersonalDetail;
        }
        User::find(auth()->user()->id)->update([
            'view' => 'page11'
        ]);

        return view('page11', compact('personalDetail'));
    }
    public function page11Store(Request $request)
    {
        // dd($request);
        $data = $request->except('_token');
        if (isset($data['proof_id_img'])) {
            $data['proof_id_img'] = $this->saveImage($data['proof_id_img']);
        }
        if (isset($data['proof_of_address_img'])) {
            $data['proof_of_address_img'] = $this->saveImage($data['proof_of_address_img']);
        }
        if (isset($data['proof_of_public_img'])) {
            $data['proof_of_public_img'] = $this->saveImage($data['proof_of_public_img']);
        }
        if (isset($data['proof_of_dbs_img'])) {
            $data['proof_of_dbs_img'] = $this->saveImage($data['proof_of_dbs_img']);
        }
        if (isset($data['proof_of_gas_front_img'])) {
            $data['proof_of_gas_front_img'] = $this->saveImage($data['proof_of_gas_front_img']);
        }
        if (isset($data['proof_of_gas_back_img'])) {
            $data['proof_of_gas_back_img'] = $this->saveImage($data['proof_of_gas_back_img']);
        }


        PersonalDetail::updateOrCreate(['user_id' => auth()->user()->id], $data);
        return redirect()->route('page11');
    }
    public function page12Store(Request $request)
    {

        $data = $request->except('_token');
        PersonalDetail::updateOrCreate(['user_id' => auth()->user()->id], $data);
        return redirect()->route('page12');
    }
    public function page12()
    {
        $personalDetail = PersonalDetail::where('user_id', auth()->user()->id)->first();
        if (!$personalDetail) {
            $personalDetail = new PersonalDetail;
        }

        User::find(auth()->user()->id)->update([
            'view' => 'page12'
        ]);
        return view('page12', compact('personalDetail'));
    }
    public function page13()
    {
        $personalDetail = PersonalDetail::where('user_id', auth()->user()->id)->first();
        if (!$personalDetail) {
            $personalDetail = new PersonalDetail;
        }

        User::find(auth()->user()->id)->update([
            'view' => 'page13'
        ]);
        return view('page13', compact('personalDetail'));
    }
    public function page13Store(Request $request)
    {

        $data = $request->except('_token');
        $personalDetail = PersonalDetail::where('user_id', auth()->user()->id)->first()->toArray();
        $pdf1 = \Barryvdh\DomPDF\Facade\Pdf::loadView('pdf.page10', $personalDetail);
        $pdf2 = \Barryvdh\DomPDF\Facade\Pdf::loadView('pdf.page11', $personalDetail);
        $pdf3 = \Barryvdh\DomPDF\Facade\Pdf::loadView('pdf.page12', $personalDetail);

        Mail::send('emails.page10', $personalDetail, function ($message) use ($personalDetail, $pdf1, $pdf2, $pdf3) {
            $message->to($personalDetail["email"], $personalDetail["email"])
                ->subject("Subject")
                ->attachData($pdf1->output(), "personalDetail.pdf")
                ->attachData($pdf2->output(), "health&Safety.pdf")
                ->attachData($pdf3->output(), "Term&Condition.pdf");
            if (isset($personalDetail['proof_id_img'])) {

                $message->attach(asset($personalDetail['proof_id_img']));
            }
            if (isset($personalDetail['proof_of_address_img'])) {

                $message->attach(asset($personalDetail['proof_of_address_img']));
            }
            if (isset($personalDetail['proof_of_public_img'])) {

                $message->attach(asset($personalDetail['proof_of_public_img']));
            }
            if (isset($personalDetail['proof_of_dbs_img'])) {

                $message->attach(asset($personalDetail['proof_of_dbs_img']));
            }
            if (isset($personalDetail['proof_of_gas_front_img'])) {

                $message->attach(asset($personalDetail['proof_of_gas_front_img']));
            }
            if (isset($personalDetail['proof_of_gas_back_img'])) {

                $message->attach(asset($personalDetail['proof_of_gas_back_img']));
            }
            $message->to("info@pm247.co.uk", $personalDetail["email"])
                ->subject("Subject")
                ->attachData($pdf1->output(), "personalDetail.pdf")
                ->attachData($pdf2->output(), "health&Safety.pdf")
                ->attachData($pdf3->output(), "Term&Condition.pdf");
            if (isset($personalDetail['proof_id_img'])) {

                $message->attach(asset($personalDetail['proof_id_img']));
            }
            if (isset($personalDetail['proof_of_address_img'])) {

                $message->attach(asset($personalDetail['proof_of_address_img']));
            }
            if (isset($personalDetail['proof_of_public_img'])) {

                $message->attach(asset($personalDetail['proof_of_public_img']));
            }
            if (isset($personalDetail['proof_of_dbs_img'])) {

                $message->attach(asset($personalDetail['proof_of_dbs_img']));
            }
            if (isset($personalDetail['proof_of_gas_front_img'])) {

                $message->attach(asset($personalDetail['proof_of_gas_front_img']));
            }
            if (isset($personalDetail['proof_of_gas_back_img'])) {

                $message->attach(asset($personalDetail['proof_of_gas_back_img']));
            }
        });
        PersonalDetail::updateOrCreate(['user_id' => auth()->user()->id], $data);
        return redirect()->route('page13');
    }
}
