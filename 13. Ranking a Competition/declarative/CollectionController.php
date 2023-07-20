<?php
 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Collection;

use App\Functions\funcs;

class CollectionController extends Controller
{
    
    public function show15()
    {  
        $scores = getScores();

        $start = microtime(true);

        $rankedCollection =  collect($scores)
                                ->pipe(function ($scores) {
                                    return $this->assign_initial_rankings($scores);
                                })    
                                ->pipe(function ($rankedScores) {
                                    return $this->adjust_rankings_for_ties($rankedScores);
                                })
                                ->sortBy('rank');  

        $timespan = microtime(true) - $start;

        dd($timespan); // 0.0056121349334717 microseconds

    }

    public function assign_initial_rankings($scores)
    {
        return $scores->sortByDesc('score')->zip(range(1, $scores->count()))->map(function ($scoreAndRank) {
            list($score, $rank) = $scoreAndRank;
            return array_merge($score, [
                'rank' => $rank
            ]);
        });
    }

    public function adjust_rankings_for_ties($rankedScores)
    {
        return $rankedScores->groupBy('score')->map(function ($tiedScores) {
            return $this->apply_min_rank($tiedScores);
        })->collapse();
    }

    public function apply_min_rank($tiedScores)
    {
        $lowestRank = $tiedScores->pluck('rank')->min();

        return $tiedScores->map(function ($rankedScore) use ($lowestRank) {
            return array_merge($rankedScore, [
                'rank' => $lowestRank
            ]);
        });
    }
}	
