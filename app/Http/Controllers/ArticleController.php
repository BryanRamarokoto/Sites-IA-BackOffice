<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;
use App\Services\UtilsService;

class ArticleController extends Controller
{
    //
    public function Search(Request $request) {
        $article = new Article();
        $article->categorie = $request->input('categorie');
        $article->titre = $request->input('titre');
        $article->contenu = $request->input('texte');
        $article->resume = $request->input('texte');
        $result = UtilsService::Search($article)->simplePaginate(6);
        return view('Home',[
            'liste_article' => $result,
            'links' => $result->links()
        ]);
    }

    public function getDetails($idarticle) {
        return view('Details',['article' => Article::find($idarticle)]);
    }

    /*-- article --*/
    public function UpdateArticle(Request $request) {
        $data = $request->all();
        $article = Article::find($requeset->input('id'));
        $article->fill($data);
        $article->save();
        return redirect()->back()->with('success','Modification enregistrée.');
    }

    public function CreateArticle(Request $request) {
        $data = [
            "categorie" => $request->input('categorie'),
            "titre" => $request->input('titre'),
            "resume" => $request->input('resume'),
            "image" => "default.jpg", // mettre "default.jpg" au lieu de "default"
            "contenu" => $request->input("contenu"),
            "idauteur" => session('author')
        ];
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            if ($file->isValid() && strpos($file->getClientMimeType(), 'image/') === 0) {
                $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('assets/img'), $filename);
                $data['image'] = 'assets/img/' . $filename;
            }
        }
        // dd($data);//VERIFIE LES DONNEES ENVOYEES
        $id =  Article::create($data)->id;
        $data_pub = [
            "idarticle" => $id,
            "etat" => 1,
            "datepubilcation" => $request->input("datepublication")
        ];
        Publication::create($data_pub);
        return redirect()->back()->with('success','Article enregistré.');
    }

    public function DeleteArticle($idarticle) {
        $article = Article::find($idarticle);
        $publicaion = $article->getPublication();
        $publication->etat = 11;
        $publication->save();
        return redirect()->back()->with('success','Article Supprimé.');
    }

    public function ToAddArticle() {
        $categorie = Article::distinct()->pluck('categorie')->toArray();
        return view('CreateArticle',['categorie' => $categorie]);
    }

    public function ReAddArticle($idartiicle) {
        $article = Article::find($idarticle);
        $publicaion = $article->getPublication();
        $publication->etat = 1;
        $publication->save();
        return redirect()->back()->with('success','Article republié.');
    }

    public function ToUpdateArticle() {
        $categorie = Article::distinct()->pluck('categorie')->toArray();
        return view('UpdateArticle',['categorie' => $categorie]);
    }
}
