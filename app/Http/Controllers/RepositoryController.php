<?php

namespace App\Http\Controllers;

use App\Models\Commit;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RepositoryController extends Controller
{
    //
    public function index(){
            $repos = DB::table('repositories')
            ->leftJoin('contributors', 'repositories.contributor_login', '=', 'contributors.login')
            ->leftjoin('commits', 'repositories.id', '=', 'commits.repository_id')
            ->select(['repositories.name as Nom_du_depot','repositories.id as id_du_depot','contributors.name as Nom_utilisateur',DB::raw('count(commits.id) as nombre_de_commits')])
            ->groupBy('repositories.name','repositories.id','contributors.name')
            ->get();
           return view('repos',compact('repos'));
          //dd($repos);
    }

    public function getRepoInfo ($id)
    {
        //$test=Commit::getRepositories();
        $commits=DB::select('SELECT commits.message,commits.date FROM repositories left JOIN CONTRIBUTORS on repositories.contributor_login=CONTRIBUTORS.login left join commits on commits.repository_id=repositories.id where repositories.id=? order by repositories.name',[$id]);
       $users = DB::select('SELECT DISTINCT repositories.name as repository_name,contributors.name as user_name FROM repositories left JOIN CONTRIBUTORS on repositories.contributor_login=CONTRIBUTORS.login left join commits on commits.repository_id=repositories.id where repositories.id=? order by repositories.name', [$id]);
       return response()->json(['contributor'=>$users,
           'commits' => $commits
        ]);
    }
}
