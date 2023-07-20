<?php

namespace App\Classes;

use Illuminate\Support\Collection;

class PullRequest
{
   public array $changedFiles = [];
   public array $checkedFiles = [];
   public array $comments = [];
   public array $uniqueComments = []; 

    public function changedFiles(array $pullRequests):Object
    {
      $arr = collect($pullRequests)->where('fileStatus','changed')->all();

      $this->changedFiles = $arr;

      return $this;
    }
	
	public function checkFile():Object
   {       

            $res = collect($this->changedFiles)->filter(function($value) {
           
                     $exts = array('php','html','css','js');
               
                     $ext = substr(strrchr($value["filename"], '.'),1);
           
                     return in_array(substr(strrchr($value["filename"], '.'),1),$exts) == 1;

                  });

            $this->checkedFiles = $res->toArray();      
   
            return $this;
   }      
 
 	public function comments():Object
    {
      
      $collectCheckedFiles = collect($this->checkedFiles);

      $comments = $collectCheckedFiles->pluck('comments');

      $this->comments = $comments->toArray();

      return $this;

    }

 	public function removeDuplicate():Object
    {
      $collComments = collect($this->comments);
 
      $this->uniqueComments = $collComments->unique()->toArray();

      return $this;
   
    }

 	public function getNonEmpty():Collection
    {
      return collect($this->uniqueComments)->reject(null);  
    }


		
 }