<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Repositories\Account\AccountRepositoryInterface;
use Illuminate\Http\Request;
use App\Utilities\Common;

class AccountController extends Controller
{
    private $accountService;

    public function __construct(AccountRepositoryInterface $accountService)
    {
        $this->accountService = $accountService;
    }

    public function index(){
        $accounts = $this->accountService->getAccountInDashboard();

        return view('dashboard.account.allAccount', compact('accounts'));
    }

    public function show($id){

        $account = $this->accountService->find($id);

        return view('dashboard.account.viewAccount', compact('account'));
    }

    public function edit($id){
        $account = $this->accountService->find($id);

        return view('dashboard.account.updateAccount', compact('account'));
    }

    public function update(Request $request, $id){

        $account = $this->accountService->find($id);

        $data = $request->all();

        // xu ly upload anh
        if ($request->hasFile('image')) {
            //Thêm file mới:
            $data['avatar'] = Common::uploadFile($request->file('image'),'dashboard/img');

            // Xóa file cũ:
            $file_name_old = $request->get('image_old');
            if ($file_name_old != '') {
                unlink('dashboard/img' . $file_name_old);
            }
        }

        $this->accountService->update($data,$account->id);

        return redirect('/admin/account/' . $account->id);
    }

    public function create()
    {
        return view('dashboard.account.addUser');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        /*var_dump($data);*/

        // Xử lý file:
        if ($request->hasFile('image')) {
            $data['avatar'] = Common::uploadFile($request->file('image'),'front/img');
        }

        $account = $this->accountService->create($data);
        return redirect('/admin/account/' . $account->id);
    }

    public function destroy(User $account)
    {
        $this->accountService->delete($account->id);

        // Xóa file
        $file_name = $account->avatar;
        if ($file_name != '') {
            unlink('dashboard/img/' . $file_name);
        }

        return redirect('admin/account');

    }
}
