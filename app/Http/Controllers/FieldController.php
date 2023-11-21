<?php

namespace App\Http\Controllers;

use App\Models\Gor;
use App\Models\Field;
use App\Models\Type;
use App\Http\Requests\StoreFieldRequest;
use App\Http\Requests\UpdateFieldRequest;
use Illuminate\Support\Facades\Storage;


class FieldController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFieldRequest $request)
    {
        $validate = $request->validated();

        //field banner
        $fieldbanner = $validate['inpfieldbanner'];
        $filename = time() . '_' . $fieldbanner->getClientOriginalName();
        $path = 'images/fieldbanner/' . $filename;
        Storage::disk('public')->put($path, file_get_contents($fieldbanner));

        //field photos
        $fieldPhotos = $validate['inpfieldphotos'];
        $photoPaths = [];
        foreach ($fieldPhotos as $photo) {
            $photoFilename = time() . $photo->getClientOriginalName();
            $photoPath = 'images/fieldphotos/' . $photoFilename;
            Storage::disk('public')->put($photoPath, file_get_contents($photo));
            $photoPaths[] = $photoPath;
        }

        $field = new Field();
        $field->field_banner = $filename;
        $field->field_photos = json_encode($photoPaths);
        $field->gor_id = (int) $validate['gor_id'];
        $field->name = $validate['inpfieldname'];
        $field->type = (int) $validate['inpfieldtype'];

        dd($field);
        $field->save();

        $gor = Gor::where('id', $request->gor_id)->first();
        return redirect()->route('mygor.show', ['id' => $gor->id])->with('success', 'lapangan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($gor_id)
    {
        $types = Type::all();
        $field = Field::where('gor_id', $gor_id)->get();
        $gor = GOR::where('id', $gor_id)->first();
        return view('admin.addfield', compact('types', 'field', 'gor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($field_id)
    {
        $types = Type::all();
        $field = Field::find($field_id);
        $field->field_photos = json_decode($field->field_photos);
        return view('admin.editfield', compact('field', 'types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFieldRequest $request, Field $field)
    {
        // dd($request->all());
        $validate = $request->validated();

        //field banner
        if ($request->hasFile('inpfieldbanner')) {
            $fieldbanner = $validate['inpfieldbanner'];
            $filename = time() . '_' . $fieldbanner->getClientOriginalName();
            $path = 'images/fieldbanner/' . $filename;
            Storage::disk('public')->put($path, file_get_contents($fieldbanner));
            $field->field_banner = $filename;
        }else{
            $filename = $field->field_banner;
        }

        //field photos
        if ($request->hasFile('inpfieldphotos')) {
            $fieldPhotos = $validate['inpfieldphotos'];
            $photoPaths = [];
            foreach ($fieldPhotos as $photo) {
                $photoFilename = time() . $photo->getClientOriginalName();
                $photoPath = 'images/fieldphotos/' . $photoFilename;
                Storage::disk('public')->put($photoPath, file_get_contents($photo));
                $photoPaths[] = $photoPath;
            }
        }else{
            $photoPaths = json_decode($field->field_photos);
        }

        $field->field_banner = $filename;
        $field->field_photos = json_encode($photoPaths);
        $field->name = $validate['inpfieldname'];
        $field->type = (int) $validate['inpfieldtype'];
        $field->save();

        return redirect()->route('mygor.show', ['id' => $field->gor_id])->with('success', 'lapangan berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $field = Field::find($id);
        $field->delete();
        return redirect()->route('mygor.show', ['id' => $field->gor_id])->with('success', 'lapangan berhasil dihapus');
    }
}