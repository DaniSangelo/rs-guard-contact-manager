<?php

namespace App\Controllers;

use App\Core\BaseController;
use App\Models\Contact;

class DashboardController extends BaseController
{
    public function index()
    {
        $user = session()->get('auth');
        $contacts = Contact::getUserContacts($user->id);
        return $this->view('dashboard', compact('contacts', 'user'));
    }
}