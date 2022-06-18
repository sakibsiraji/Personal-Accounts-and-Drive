<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    function store(Request $req)
    {
        $date=$req->input('date');
        $month=$req->input('month');
        $year=$req->input('year');
        $country=$req->input('country');
        $record_type=$req->input('record_type');
        $record_sector=$req->input('record_sector');
        $record_detail=$req->input('record_detail');
        $currency=$req->input('currency');
        $amount_bdt=$req->input('amount_bdt');
        $amount_usd=$req->input('amount_usd');
        $voucher=$req->file('voucher');
        if(!$voucher==null)
        {
            $voucher_name = time() . '.' . $voucher->extension();
            $voucher->move('voucher', $voucher_name);
        }
        else
        {
            $voucher_name="";
        }

        $result=DB::table('accounts')->insert([
            'date'=>$date,
            'month'=>$month,
            'year'=>$year,
            'country'=>$country,
            'record_type'=>$record_type,
            'record_sector'=>$record_sector,
            'record_detail'=>$record_detail,
            'currency'=>$currency,
            'amount_bdt'=>$amount_bdt,
            'amount_usd'=>$amount_usd,
            'voucher'=>$voucher_name
        ]);

        if($result==true)
        {
            return view('dashboard');
        }
    }

    public function IncomeRecordsByYear()
    {
        if(!session()->has('user_name')){
            return redirect('dashboard');
        }
        $data=DB::table('accounts')->select('year')->where('record_type', "Income")->distinct('year')->orderByDesc('year')->get();
        return view('IncomeRecordsByYear',['accounts'=>$data]);
    }

    public function IncomeRecordsByMonth($year)
    {
        if(!session()->has('user_name')){
            return redirect('dashboard');
        }
        $data=DB::table('accounts')->select('year','month')->where('record_type', "Income")->where('year',$year)->distinct()->orderBy('month')->get();
        return view('IncomeRecordsByMonth',['accounts'=>$data]);
    }

    function showIncome($id1,$id2)
    {
        if(!session()->has('user_name')){
            return redirect('dashboard');
        }
        $data=DB::table('accounts')->where('record_type', "Income")->where('year',$id1)->where('month',$id2)->orderBy('date')->get();
        return view('IncomeRecordsView',['accounts'=>$data]);
    }

    public function ExpenseRecordsByYear()
    {
        if(!session()->has('user_name')){
            return redirect('dashboard');
        }
        $data=DB::table('accounts')->select('year')->where('record_type', "Expense")->distinct('year')->orderByDesc('year')->get();
        return view('ExpenseRecordsByYear',['accounts'=>$data]);
    }

    public function ExpenseRecordsByMonth($year)
    {
        if(!session()->has('user_name')){
            return redirect('dashboard');
        }
        $data=DB::table('accounts')->select('year','month')->where('record_type', "Expense")->where('year',$year)->distinct()->orderBy('month')->get();
        return view('ExpenseRecordsByMonth',['accounts'=>$data]);
    }

    function showExpense($id1,$id2)
    {
        if(!session()->has('user_name')){
            return redirect('dashboard');
        }
        $data=DB::table('accounts')->where('record_type', "Expense")->where('year',$id1)->where('month',$id2)->orderBy('date')->get();
        return view('ExpenseRecordsView',['accounts'=>$data]);
    }

    public function MonthlySummaryByYear()
    {
        if(!session()->has('user_name')){
            return redirect('dashboard');
        }
        $data=DB::table('accounts')->select('year')->distinct('year')->orderByDesc('year')->get();
        return view('MonthlySummaryByYear',['accounts'=>$data]);
    }

    public function MonthlySummaryByMonth($year)
    {
        if(!session()->has('user_name')){
            return redirect('dashboard');
        }
        $data=DB::table('accounts')->select('year','month')->where('year',$year)->distinct()->orderBy('month')->get();
        return view('MonthlySummaryByMonth',['accounts'=>$data]);
    }

    function showMonthlySummary($id1,$id2)
    {
        if(!session()->has('user_name')){
            return redirect('dashboard');
        }
        $data=DB::table('accounts')->where('year',$id1)->where('month',$id2)->get();
        

        $m=$id2;
        $tiusd=DB::table('accounts')->where('year',$id1)->where('month',$id2)->where('record_type', "Income")->sum('amount_usd');
        $tibdt=DB::table('accounts')->where('year',$id1)->where('month',$id2)->where('record_type', "Income")->sum('amount_bdt');
        $teusd=DB::table('accounts')->where('year',$id1)->where('month',$id2)->where('record_type', "Expense")->sum('amount_usd');
        $tebdt=DB::table('accounts')->where('year',$id1)->where('month',$id2)->where('record_type', "Expense")->sum('amount_bdt');
        $niusd=$tiusd-$teusd;
        $nibdt=$tibdt-$tebdt;

        return view('MonthlySummaryView',compact('m','tiusd','tibdt','teusd','tebdt','niusd','nibdt'));
    }

    public function view($id)
    {
        $account=Account::find($id);
        return view ('voucher', compact('account'));
    }

    /*function edit($id){
        if(!session()->has('user_name')){
            return redirect('dashboard');
        }
        $account = Account::all();
        return view('edit_account_record',['records'=>$account]);
    }
    public function update(Request $req, $id)
    {
        $data=Account::find($req->id);

        $data->date=$req->input('date');
        $data->month=$req->input('month');
        $data->year=$req->input('year');
        $data->country=$req->input('country');
        $data->record_type=$req->input('record_type');
        $data->record_sector=$req->input('record_sector');
        $data->record_detail=$req->input('record_detail');
        $data->currency=$req->input('currency');
        $data->amount_bdt=$req->input('amount_bdt');
        $data->amount_usd=$req->input('amount_usd');
        $voucher=$req->file('voucher');
        if(!$voucher==null)
        {

            //$extension = $vouchher->getClientOriginalExtension(); // getting image extension
            $voucher_name = time() . '.' . $voucher->extension();
            $voucher->move('voucher', $voucher_name);
            $data->voucher = $voucher_name;
        }
        else
        {
            $voucher_name="";
        }
        $data->save();
        return redirect('dashboard')->with('success','Data Updated');
    }*/
    function delete($id){
        if(!session()->has('user_name')){
            return redirect('dashboard');
        }
        $account=Account::find($id);
        $account->delete();
        return redirect('dashboard');

    }
}
