<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News_and_event;
use App\Models\Partners;
use App\Models\Treyning;
use App\Models\Steering_committee;
use App\Models\About_us;
use App\Models\Alumni_association;
use App\Models\Cohort_text;
use App\Models\Ckeditor;

class FindeController extends Controller
{
    public function index(Request $request)
     {  
     	
          if(!empty($request['finde'])){
          
          $locale = $request['lang'];
                       
              $findenews = News_and_event::Where('date_en', 'like', '%' . $request['finde'] . '%')->
              orWhere('date_am', 'like', '%' . $request['finde'] . '%')->
              orWhere('title_text_en', 'like', '%' . $request['finde'] . '%')->
              orWhere('index_text_am', 'like', '%' . $request['finde'] . '%')->
              orWhere('index_text_en', 'like', '%' . $request['finde'] . '%')->
              orWhere('text_am', 'like', '%' . $request['finde'] . '%')->
              orWhere('text_en', 'like', '%' . $request['finde'] . '%')->get();


              $aboutindex=About_us::Where('paragraph_one_en','like','%'.$request['finde'].'%')->
              orWhere('paragraph_one_am','like','%'.$request['finde'].'%')->
              orWhere('paragraph_two_en','like','%'.$request['finde'].'%')->
              orWhere('paragraph_two_am','like','%'.$request['finde'].'%')->
              orWhere('paragraph_tree_en','like','%'.$request['finde'].'%')->
              orWhere('paragraph_tree_am','like','%'.$request['finde'].'%')->get();

             
    


             $partners=Partners::Where('name_am','like','%'.$request['finde'].'%')->
              orWhere('name_en','like','%'.$request['finde'].'%')->
              orWhere('min_text_en','like','%'.$request['finde'].'%')->
              orWhere('min_text_am','like','%'.$request['finde'].'%')->
              orWhere('des_am','like','%'.$request['finde'].'%')->
              orWhere('des_en','like','%'.$request['finde'].'%')->
              orWhere('text_one_am','like','%'.$request['finde'].'%')->
              orWhere('text_one_en','like','%'.$request['finde'].'%')->
              orWhere('text_two_am','like','%'.$request['finde'].'%')->
              orWhere('text_two_en','like','%'.$request['finde'].'%')->
              orWhere('text_tree_am','like','%'.$request['finde'].'%')->
              orWhere('text_three_en','like','%'.$request['finde'].'%')->get();


            $training=Ckeditor::where('ckeditor_en','like','%'.$request['finde'].'%')->
            orWhere('ckeditor_am','like','%'.$request['finde'].'%')->get();
 
            $cohort_text=Cohort_text::where('cohort_text_en','like','%'.$request['finde'].'%')->
            orWhere('cohort_text_am','like','%'.$request['finde'].'%')->
            orWhere('cohort_date_en','like','%'.$request['finde'].'%')->
            orWhere('cohort_date_am','like','%'.$request['finde'].'%')->
            orWhere('cohort_group_en','like','%'.$request['finde'].'%')->
            orWhere('cohort_group_am','like','%'.$request['finde'].'%')->
            orWhere('cohort_date_second_en','like','%'.$request['finde'].'%')->
            orWhere('cohort_date_second_am','like','%'.$request['finde'].'%')->get();


            $steering_committee=Steering_committee::where('title_en','like','%'.$request['finde'].'%')->
            orWhere('title_am','like','%'.$request['finde'].'%')->
            orWhere( 'paragraph_one_en','like','%'.$request['finde'].'%')->
            orWhere( 'paragraph_one_am','like','%'.$request['finde'].'%')->
            orWhere( 'paragraph_two_en','like','%'.$request['finde'].'%')->
            orWhere( 'paragraph_two_am','like','%'.$request['finde'].'%')->get();


            $alumni_association=Alumni_association::where('title_en','like','%'.$request['finde'].'%')->
            orWhere('title_am','like','%'.$request['finde'].'%')->
            orWhere('text_one_en','like','%'.$request['finde'].'%')->
            orWhere('text_one_am','like','%'.$request['finde'].'%')->
            orWhere('text_two_en','like','%'.$request['finde'].'%')->
            orWhere('text_two_am','like','%'.$request['finde'].'%')->get();
            
        
          if($locale == "en"){
          
           $array_en=[];
              
               foreach($aboutindex as $text){
                   $aboutindex= "<a href='/".$locale."/about"."'>"."About us"."</a>";  
                   array_push($array_en,$aboutindex);
                  
                }

                foreach($partners as $text){
                  $partners ="<a href='/".$locale."/partner/".$text->id."'>".$text->name_en."</a>";    
                  array_push($array_en,$partners);
              }
               foreach($training as $text){
                $training= "<a href='/".$locale."/training_programs"."'>"."Training Programs"."</a>";   
                array_push($array_en,$training);
              }
            
              foreach($findenews as $findenew){   
                $findenews = "<a href='/".$locale."/news/".$findenew->id."'>".$findenew->title_text_en."</a>"; 
                array_push($array_en,$findenews);
              
                }
                foreach($cohort_text as $text){
                  $cohort_text="<a href='/".$locale."/cohorts"."'>"."Cohorts"."</a>"; 
                  array_push($array_en,$cohort_text);  
                }
                foreach($steering_committee as $text){
                  $steering_committee= "<a href='/".$locale."/steeringcommittee"."'>"."Steering Committee"."</a>"; 
                  array_push($array_en,$steering_committee);    
                }
                foreach( $alumni_association as $text){
                   $alumni_association= "<a href='/".$locale."/aluminiassciation"."'>"."Alumni Association"."</a>";  
                  array_push($array_en, $alumni_association);  
                }
                $result=array_unique($array_en);
               
                
                  foreach($result as $key=>$text){
                      
                  echo $result[$key];
                     
                  }
               
            }else{
              $array_am=[];
                foreach($aboutindex as $text){
                  $aboutindex= "<a href='/".$locale."/about"."'>"."Մեր մասին"."</a>";  
                  array_push($array_am,$aboutindex);  
               }
               foreach($partners as $text){
                //  dd($text->name_am);
                $partners ="<a href='/".$locale."/partner/".$text->id."'>".$text->name_am."</a>";    
                array_push($array_am,$partners);
            }
              //kam el uxutyuny partner
              foreach($training as $text){
                $training= "<a href='/".$locale."/training_programs"."'>"."Դասընթացներ"."</a>";  
                array_push($array_am,$training);  
                }
                foreach($findenews as $findenew){   
                  $findenews="<a href='/".$locale."/news/".$findenew->id."'>".$findenew->title_text_am."</a>";
                  array_push($array_am,$findenews); 
                  }
                  foreach($cohort_text as $text){
                    $cohort_text="<a href='/".$locale."/cohorts"."'>"."ԴՀՎԾ խմբեր"."</a>"; 
                    array_push($array_am,$cohort_text);  
                  }
                  foreach($steering_committee as $text){
                    $steering_committee= "<a href='/".$locale."/steeringcommittee"."'>"."Ղեկավար հանձնախումբ"."</a>";   
                    array_push($array_am,$steering_committee);  
                  }
                  foreach( $alumni_association as $text){
                    $alumni_association= "<a href='/".$locale."/aluminiassciation"."'>"."Շրջանավարտների ասոցիացիա"."</a>";  
                    array_push($array_am, $alumni_association);  
                  }
                  
                  $result=array_unique($array_am);
                  
                  foreach($result as $key=>$text){
                      
                  echo $result[$key];
                     
                  }
                 
                  
            }
              
                  



        }else{
            
            echo "none";
          }

    }


}


      