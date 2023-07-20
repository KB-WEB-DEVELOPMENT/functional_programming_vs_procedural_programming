<?php
 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

use App\Functions\funcs;

class TagsController extends Controller
{

    public function show()
    {    
        $tags = getTags();

        $start = microtime(true);

        $normalizedTags = $this->normalizeTagsToIds($tags);

        $timespan = microtime(true) - $start;
        
        dd($timespan); // 0.0002892017364502 microseconds
       
    
    }

    public function normalizeTagsToIds($tags)
    {
        return collect($tags)->map(function ($nameOrId) {
            return $this->normalizeTagToId($nameOrId);
        });
    }

    public function normalizeTagToId($nameOrId)
    {
        $normalizedTags = [];
        $i = 0;
        if (is_numeric($nameOrId)) {
            $normalizedTags['id'][$i] = $nameOrId; 
            $i++;
        } else{
            $normalizedTags['name'][$i] = $nameOrId;
            $i++;
        }
        return $normalizedTags;
    }

}
