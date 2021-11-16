<?php

namespace App\Controllers;
use App\Models\MemberModel;
use phpDocumentor\Reflection\Types\This;

class Member extends BaseController
{
    protected $MemberModel;

    public function __construct()
    {
        $this->MemberModel = new MemberModel();
    }
    public function index()
    {
        // $member = $/this->MemberModel->findAll();

        $currentPage = $this->request->getvar('page_member') ? $this->request->getvar
        ('page_member') : 1;

        $search = $this->request->getVar('search');
        if($search){
            $member = $this->MemberModel->search($search);
        } else {
            $member = $this->MemberModel;

        }

        $data = [
            'title' => 'Member',
            'member' => $member->paginate(10, 'member'),
            'pager'  =>  $this->MemberModel->pager,
            'currentPage' => $currentPage
        ];
        return view('member/index', $data);
    }
}
