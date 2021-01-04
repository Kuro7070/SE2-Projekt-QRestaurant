<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class FileUpload extends Controller
{
    public function fileUpload(Request $request)
    {
        $rules = [
            'file' => 'required|mimes:pdf|max:2048'
        ];

        $customMessages = [
            'required' => 'Das Uploadfeld darf nicht leer sein.',
            'mimes'    => "Bitte wählen Sie eine PDF-Datei aus.",
            'max'      => 'Die ausgewählte PDF-Datei ist zu groß. Die maximale Größe darf 2MB betragen.'
        ];
        $this->validate($request, $rules, $customMessages);

        $fileModel = new File;

        if ($request->file()) {
            $fileName = time() . '_' . $request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', uniqid(). \Illuminate\Support\Facades\File::extension($fileName), 'public');

            $fileModel->name         = time() . '_' . $request->file->getClientOriginalName();
            $fileModel->file_path    = '/storage/' . $filePath;
            $fileModel->gastronom_id = Auth::id();
            $fileModel->save();

            return back()
                ->with('upload-success', 'Speisekarte wurde erfolgreich hochgeladen.')
                ->with('file', $fileName);
        }
    }


    public static function getPDF()
    {
        $codes = [];
        if(Auth::check()){
            $query = 'Select * from files f ';
            $query .= 'where f.gastronom_id = ' . Auth::id();

            $result = DB::select($query);

            foreach ($result as $menus) {
            array_push($codes, [
                'qr'   => self::getQRUri(asset($menus->file_path)),
                'path' => asset($menus->file_path),
                'id'   => $menus->id,
                'name'   => $menus->name
            ]);
        }
        return array_reverse($codes);
        }

        return $codes;
    }

    public static function destroy(Request $request)
    {
        $id = $request['id'];
        DB::table('files')->where('id', '=', $id)->delete();
        Storage::delete($request['name']);

        return back()
            ->with('delete-success', 'Speisekarte wurde erfolgreich gelöscht.');
    }


    public static function getQRUri($url)
    {
        return QrCodeGenerator::generateQRCode($url);
    }
}
