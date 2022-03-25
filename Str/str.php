<?php 

/* Attr Sitaram koli
 Email : mail.imkoli.info
  Web  : imkoli.info
  project : Str
  url : https://github.com/koliboy/Str
  V :1
  
                                Apache License
                           Version 2.0, January 2004
                        http://www.apache.org/licenses/

 */


class Str {
      
public function  __construct 
($st = ""){
          $this->is = $st;
          $this->length  = strlen($st);
          
}
    
public  function call_back ($str = ""){ // ?$Object_String
    $obj  = new  Str($str);
    return $obj;
}

public function forEach  //?$object
($fun,$arg = null){ 
     $call = $fun; 

        for($i = 0; $i < $this->length; $i++){
        if(is_string($call)){
        $v = $this->is[$i];$self = $this->is;$arments = $arg;
           eval("$call(\"$v\",$i,\"$self\",\$arments);");
        }else {
            $fun($this->is[$i],$i,$this->is,$arg);
        }
        
} 
  return $this;
    }  //end  forEach();
public   function indexOf    // ? $INT
($val = null){  
       if($val == null){ return -1;}
    for($i = 0; $i < $this->length; $i++){
       if($val == $this->is[$i]){
           return $i;
          break;
       }
     } 
}//indexOf 

public function  filter 
($fun = null,$arg = null){  // ? $STRING
$filter_d = ""; $call = $fun;
for
($i =0; $i < $this->length;$i++) 
{ 
   if($fun($this->is[$i],$i,$this->is,$arg)) {
        if(is_string($call)){
        $v = $this->is[$i];$self = $this->is;$arments = $arg;
        $results = "";
           eval("\$results = $call(\"$v\",$i,\"$self\",\$arments);");
           $filter_d .=  $results;
        }else {
        $filter_d .=    $fun($this->is[$i],$i,$this->is,$arg);
        }
     // $filter_d .= $fun($this->is[$i],$i,$this->is,$arg);
   }    
}  
 return $this->call_back($filter_d);   
}


public function  cslashes    // ? $STRING
($chr = null){
return  $this->call_back(addcslashes($this->is,$chr));
}

public function  slashes   // ? $STRING
(){
return $this->call_back( addslashes($this->is));
}

public function  hex2     // ? $STRING
(){
return  $this->call_back(bin2hex($this->is));
}

public function  bin2  // ? $STRING
(){
return  $this->call_back(hex2bin($this->is));
}

public function  chunk  // ? $STRING
($length, $chunk = "\r\n"){ 
return  $this->call_back(chunk_split($this->is,$length,$chunk));
}



public function  udecode  // ? $STRING
(){ 
return  $this->call_back(convert_uudecode($this->is));
} 
public function  uencode  // ? $STRING
(){ 
return  $this->call_back(convert_uuencode($this->is));    
} 

public function  chars   // ? $STRING||$Array
($mode = 0){ 
return count_chars($this->is,$mode);    
} 

public function  c32   // ? $INT
(){ 
return crc32($this->is);    
} 

public function  crypt   // ? $INT
($salt){     // ? $String
      if($salt !=null){return $this->call_back(crypt($this->is,$salt));}
       else {return $this->call_back(crypt($this->is));}
} 

public function   echo   // ? $INT
($offsetA =null,$offsetB = null){     // ? $output Prinble
   echo  $offsetA.($this->is).$offsetB;
   return $this;
} 

public function  toArray   // ? $Array
($separator, $limit = PHP_INT_MAX){  
     return explode($separator,$this->is,$limit);    
} 

public function  arrayTo   // ? $Array
($separator = null , $array = []){
      if(is_array($separator)){
         return $this->call_back(implode($separator)); 
      }else {
         return $this->call_back(implode($separator,$array));  
      }
       
} 
public function  fromArray   // ? $Array
(){   
    $new_JOb =[];
 for($i =0;  $i < $this->length;$i++) {
      $new_JOb[$i] = $this->is[$i];
} 
 return  $new_JOb;
}

public function  htmlDecode  // ? $Str_Object
($Flags =  ENT_QUOTES,$encoding = null){ 
    return  $this->call_back(html_entity_decode($this->is,$Flags,$encoding));
} 

public function  htmlEncode  // ? $Str_Object
($Flags =  ENT_QUOTES,$encoding = null,$double_encode = true){ 
    return  $this->call_back(htmlentities($this->is,$Flags,$encoding,$double_encode));
} 

public function  htmlspecialEncode // ? $Str_Object
($Flags =  ENT_QUOTES,$encoding = null,$double_encode = true){ 
    return  $this->call_back(htmlspecialchars($this->is,$Flags,$encoding,$double_encode));
} 

public function   htmlspecialDecode  // ? $Str_Object
($Flags =  ENT_QUOTES){ 
    return  $this->call_back(htmlspecialchars_decode($this->is,$Flags));
} 

public function firstLower // ? $Str_Object
(){ 
    return  $this->call_back(lcfirst($this->is));
} 

public function firstUpper // ? $Str_Object
(){ 
    return  $this->call_back(ucfirst($this->is));
} 

public function distance  // ? $INT
($string2 = "", $insertion_cost = 1, $replacement_cost = 1, $deletion_cost = 1){ 
    return levenshtein($this->is,$string2,$insertion_cost,$replacement_cost,$deletion_cost);
} 

public function leftTrim  // ? $Str_Object
($characters = "\n\r\t\v\x00"){ 
    return  $this->call_back(ltrim($this->is,$characters));
}     
public function md5 // ? $Str_Object
($binary = false){ 
    return  $this->call_back(md5($this->is,$binary));
}


public function lineBreaks // ? $Str_Object
($use_xhtml = true){ 
    return  $this->call_back(nl2br($this->is,$use_xhtml));   
}

public function aByte  // ? $integer
(){ 
    return  ord($this->is);   
}

public function echoB // ? $Str_Object
($str){ 
    echo $str;
    return  $this;
}
 public function __toString
() {// ? String Object Name
            return "[object Str]"; 
        } 
        
        
public function dump // ? $Str_Object
(){ var_dump($this->is);
  return  $this;
}        
        
 
 
 public function parse_str  // ? $Str_Object
($result){    //? $String
  parse_str($this->is,$output); 
  $GLOBALS[$result] = $output;
    return $this;   
} 

public function print// ? $Str_Object
($offsetA = "",$offsetB = ""){ //$string
 $printbal = $offsetA.$this->is.$offsetB;
   print($printbal);
    return $this; 
}


public function printB// ? $Str_Object
($string = ""){ //$string
  print($string);
    return $this; 
}


public function  quotedP_decode // ? $Str_Object
(){ 
    return  $this->call_back(quoted_printable_decode($this->is));   
}

public function  quotedP_encode // ? $Str_Object
(){ 
    return  $this->call_back(quoted_printable_encode($this->is));   
}

public function quotemeta // ? $Str_Object
(){ 
    return  $this->call_back(quotemeta($this->is));   
}


public function rightTrim // ? $Str_Object
($characters = " \n\r\t\v\x00"){  //?$string
    return  $this->call_back(rtrim($this->is,$characters));   
}

public function sha1 // ? $Str_Object
( $binary = false){  //?bool
    return  $this->call_back(sha1($this->is,$binary));   
}

public function same //?object
($string2 = ""){  //$string
  $contruction =  similar_text($this->is,$string2,$percent);
 
   $obj = (object)["value"=>$contruction,
       "percent"=>$percent,
       ];
    return $obj;   //.value|.percent
}


public function soundex // ? $Str_Object
(){ 
    return  $this->call_back(soundex($this->is));   
}

public function formate // ? $Str_Object
(...$vales){ //mix

     return  $this->call_back(sprintf($this->is,...$vales));
}

public function includes// ? bool
($in = ""){ //$string
 preg_match('/'.$in.'/', $this->is, $matches, PREG_OFFSET_CAPTURE);
 return $matches[0] == null ? false:true;    
}
  


public function slice // ? $Str_Object
($start = null, $end = null){ //?Start And  End
 $to =    $end ?? $this->length;
 $from = $start;
 $to < 0 ?$to = $this->length += $end:$to;   
 $from < 0 ? $from = $this->length += $from:$from;
 $work = "";
   for($i_s = $from; $i_s < $to; $i_s++){
       $work .= $this->is[$i_s];
   }
   return  $this->call_back($work);
} 

public function endWith // ? bool
($needle = ""){ //?$string
   preg_match('/'.$needle.'$/',$this->is,$one_back);
  if(count($one_back) > 0){
      return true;
  }else {
      return false;
  }
}  

public function startWith // ? bool
($needle = ""){ //?$string
  preg_match('/^'.$needle.'/',$this->is,$one);
  if(count($one) > 0){
      return true;
  }else {
      return false;
  }
} 
public function replaceAll // ?$Str_Object
($search = "",$replace = null){ //?$string||reg_exp,string||function

preg_match_all('/'.$search.'/',$this->is,$ok);
$result = $this->is;
if(is_array($ok)){
    $count = 0;
  foreach($ok[0] as $re) {
        $count++;
      if(is_callable($replace)){
        $result = str_replace($re, $replace($re,$count), $result);
      }else {
        $result = str_replace($re, $replace, $result);
      }
    
  } //edn loop
  return $this->call_back($result);
}else {
  return $this;  
}

} 

public function replace // ? ?$Str_Object
($search = "",$replace = null){ //?$string||reg_exp,string||function
preg_match('/'.$search.'/',$this->is,$one);
$result = $this->is;
if(is_array($one)){
$count = 0;
  foreach($one as $re) {
      $count++;
       if(is_callable($replace)){
         $result = preg_replace('/'.$search.'/', $replace($re), $result,1);  
       }else {
           $result = preg_replace('/'.$search.'/', $replace, $result,1);
       }
      
     
      if( $count == 1){
          break; 
      }
     
  }  //end loop
}

 return $this->call_back($result);    
}

public function  findCount // ? $int||?$Str_Object
($search = "",$fun = null){ //? string,function
   preg_match_all('/'.$search.'/',$this->is,$one_);
    if(is_array($one_)){
$count = 0;
  for($i =0; $i < count($one_[0]); $i++) {
     
       $count++;
      }  //end loop
      if(is_callable($fun)){
        $fun($count) ;
        return $this;
      }else {
           return $count;
      }
     
    }
}    




public function replaceLast // ?$Str_Object
($search = "",$replace = null){ //?$string||reg_exp,string||function
preg_match_all('/'.$search.'/',$this->is,$ok);
 $no_replace = [];
  if(is_array($ok)){
     for($i =0; $i < count($ok[0]);$i++){
        if($i == (count($ok[0])-1)){
        if(is_callable($replace)){
            $no_replace[$i] =  $replace($ok[0][$i]);
        } else {
           $no_replace[$i] =  $replace;  
        }   
         
    }else {
          $no_replace[$i] = $ok[0][$i]; 
        }
     }  
  }
  $new_job = "";
$ok_2 = preg_split('/'.$search.'/',$this->is);
   for($i2 =0; $i2 < count($ok_2);$i2++){
       $new_job .=$ok_2[$i2].$no_replace[$i2];
}
   return $this->call_back($new_job);
} 

public function replaceEach // ?$Str_Object
($search = "",$replace = null,$arg = null){ //?$string||reg_exp,string||function || arg..
preg_match_all('/'.$search.'/',$this->is,$ok_each);
 $repalce_reach = [];
  if(is_array($ok_each)){
     for($i3 =0; $i3 < count($ok_each[0]);$i3++){
       if(is_callable($replace)){
           $repalce_reach[$i3]  =  $replace($ok_each[0][$i3],$i3,$ok_each,$arg);
       }else {
          $repalce_reach[$i3]  =  $replace;
       }
     }  
  }
  $new_job = "";
$ok_2 = preg_split('/'.$search.'/',$this->is);
   for($i2 =0; $i2 < count($ok_2);$i2++){
       $new_job .=$ok_2[$i2].$repalce_reach[$i2];
}
   return $this->call_back($new_job);
} 


public function padStart// ? $Str_Object
($length = 0,$pad_string = ""){  //?length,string
    return  $this->call_back(str_pad($this->is,$length,$pad_string,STR_PAD_LEFT));   
}

public function padEnd// ? $Str_Object
($length = 0,$pad_string = ""){  //?length,string
    return  $this->call_back(str_pad($this->is,$length,$pad_string));   
}

public function padBoth// ? $Str_Object
($length = 0,$pad_string = ""){  //?length,string
    return  $this->call_back(str_pad($this->is,$length,$pad_string, STR_PAD_BOTH));   
}

public function repeat// ? $Str_Object
($count = 0){  //?count
    return  $this->call_back(str_repeat($this->is,$count));   
}

public function shuffle// ? $Str_Object
(){  //?count
    return  $this->call_back(str_shuffle($this->is));   
}

public function split// ? $Str_Object
($split = ""){  //?string
    $new_job = "";
  $ok_split = preg_split('/'.$split.'/',$this->is);
  foreach( $ok_split as $cut){
       $new_job .= $cut;
       
  }
  return  $this->call_back($new_job);
}

public function splitB// ? $Array
($split = ""){  //?string
    $new_job = [];
  $ok_split = preg_split('/'.$split.'/',$this->is);
  for($i4 = 0; $i4 < count($ok_split);$i4++){
       $new_job[$i4] .= $ok_split[$i4];
       
  }
  return $new_job;
}

public function wordCount// ?Array
($formate =0,$characters = null){  //?int,chr
 return  str_word_count($this->is,$formate,$characters);   
}


public function compare // ? $int
($string2 = ""){ //string 
    return strcasecmp($this->is,$string2);  
}

public function left // ?$Str_Object
($concat = ""){ //string 
    return  $this->call_back($concat.$this->is);
}

public function right // ?$Str_Object
($concat = ""){ //string 
    return  $this->call_back($this->is.$concat);
}       
        
public function both // ?$Str_Object
($concata = "",$concatb = ""){ //string,string 
    return  $this->call_back($concata.$this->is.$concatb);
} 

 public function coll // ?$int
($string2){ //string 
    return strcoll($this->is,$string2);
} 

 public function tags // ?$Str_Object
($allowed_tags = null){ //array|string|null  
   return  $this->call_back(strip_tags($this->is,$allowed_tags));
} 

 public function reverse // ?$Str_Object
(){ 
   return  $this->call_back(strrev($this->is));
} 

public function toLowerCase // ?$Str_Object
(){ 
    return  $this->call_back(strtolower($this->is));
}   
 
public function toUpperCase// ?$Str_Object
(){ 
    return  $this->call_back(strtoupper($this->is));
} 

public function subCompare// ?$int
( $needle = "", $offset = 0, $length = 0, $case_insensitive = false){ //string,int,int,boll 
    return  substr_compare($this->is, $needle, $offset,$length,$case_insensitive);
}

public function subCount // ?$int
( $needle = "", $offset = 0, $length = 0){ //string,int,int,boll 
    return  substr_count($this->is, $needle, $offset,$length);
}

public function substring // ?$Str_Object
($length = null,$end = null){ //int
   $end == null?$end = $this->length:$end;
    return  $this->call_back(substr($this->is,$length,$end));
}

public function trim // ?$Str_Object
($characters = " \n\r\t\v\x00"){ //string
    return  $this->call_back(trim($this->is,$characters));
}

public function title // ?$Str_Object
($separators = " \t\r\n\f\v"){ //string
    return  $this->call_back(ucwords($this->is,$separators));
}

public function wordwrap // ?$Str_Object
($width = 75, $break = "\n",$cut_long_words = false){ //int,string,bool
    return  $this->call_back(wordwrap($this->is,$width,$break,$cut_long_words));
}

public function charAt // ?$Str_Object
($index = 0){ //int
    return  $this->call_back($this->is[$index]);
}

public function concat // ?$Str_Object
(...$string){ //arguments?string
$new_JOb = $this->is;
   foreach ($string as $adding){
       $new_JOb.= $adding;
   }
    return  $this->call_back($new_JOb);
}

public function match // ?$Array
($match= "", $flags = 0, $offset = 0){ //string,int,int
   preg_match('/'.$match.'/',$this->is,$matches,$flags,$offset);
   return  $matches;
}

public function matchAll // ?Array
($match= "", $flags = 0, $offset = 0){ //string,int,int
   preg_match_all('/'.$match.'/',$this->is,$matches,$flags,$offset);
   return  $matches;
}

public function search // ?int
($search = ""){ //string
  $this_postion =   preg_split('/'.$search.'/',$this->is);
 $postion = "";
  for($i=0; $i < count($this_postion);$i++){
      if($i == 0){
        $postion.= $this_postion[$i];
        break;
      }
  }
  return   $this->call_back($postion)->length;
}

public function join // ?int
($join = null){ //string
 $new_Job = "";
  for($i =0; $i < $this->length;$i++){
       if($join == null){
         if(!($this->is[$i] == ",")){
            $new_Job .= $this->is[$i];
         }   
       }else {
          $new_Job .= $this->is[$i].$join; 
       }
  }
  return  $this->call_back($new_Job);
}


public function cslice // ?$Str_Object
($from = "", $to = 0){ //string,int,int
  $s = $this->search($from);
  $e = $this->search($to);
  if(!($s > $e)) {
   return  $this->slice($s,$e);
  }else {
      return $this;
  }
     
}

}  //edn class

function Str($MIXED){
$call = new Str($MIXED);
$object  = $call;
return $object;
}
