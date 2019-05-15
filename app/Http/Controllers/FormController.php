<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Validator;


class FormController extends Controller
{
    public function update()
    {
        $post = [
            'name' => $_POST['name'],
            'genre' => $_POST['genre'],
            'text' => $_POST['text']
        ];

        $validator = Validator::make(
            $post,
            array(
                'name' => 'required|min:2',
                'genre' => 'required|min:3',
                'text' => 'required|min:8'
            )
        );
        if ($validator->fails()) {
            $message = 'Ошибки валидации';
            return view('plates.succesfullUpdate', compact('message'));
        } else {
            $message = 'Успешно обновленно';
            \App\Disc::where('id', $_POST['id'])
                ->update($post);
            return view('plates.succesfullUpdate', compact('message'));
        }
    }

    public function delete($discId)
    {
        $message = 'Успешно удаленно';
        \App\Disc::where('id', $discId)
            ->delete();
        return view('plates.succesfullUpdate', compact('message'));
    }

}
