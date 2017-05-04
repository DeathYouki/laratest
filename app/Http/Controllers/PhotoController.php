<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ImagesRequest;
use Illuminate\Http\Request;

class PhotoController extends Controller 
{

    public function getForm()
	{
		return view('photo');
	}

	public function postForm(ImagesRequest $request)
	{
		$image = $request->file('image');//Fetchs the uploaded file 

		if($image->isValid())//Vérifie la validité (consulter symfony)
		{
			$chemin = config('images.path');//Gets the path of the images folder

			$extension = $image->getClientOriginalExtension();//Get file extension

			do {
				$nom = str_random(10) . '.' . $extension;//Generates a random name for the file
			} while(file_exists($chemin . '/' . $nom));//Verify if that the name doesn't alrady exist in images folder

			if($image->move($chemin, $nom)) {//Save the image in images folder
				return view('photo_ok');//If all good
			}
		}
		//If something went wrong
		return redirect('photo')
			->with('error','Désolé mais votre image ne peut pas être envoyée !');
	}

}