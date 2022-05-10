<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
//        $data = $request->all(); // получить все данные которые переданы из нашей формы
//        $data = $request->only(['name', 'email']); // получить только name И email
//        $data = $request->except(['name']); // получить все кроме name
//        $data = $request->input('name'); // получить только параметр name
//
//        $remember = !! $request->input('remember'); // !! - приведение к булеву значению, если необходимо получить true или fals
//        $remember = $request->boolean('remember'); // тоже самое что  выше
//
//        $request->has('name'); // проверяет если такой параметр и вывдит true или false
//        $request->filled('name'); // првоеряет заполнен ли этот параметр или нет
//
//        $name = $request->input('name');
//        $email = $request->input('email');
//        $password = $request->input('password');
//        $agreement = $request->input('agreement');
//
//        dd($name, $email, $password, $agreement);

        if(true)
            return redirect()->back()->withInput();

        return redirect()->route('user');
    }
}
