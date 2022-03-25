# Str("My Somentig String")
php String Objects Chains like length,forEach,filter,replace,repalcAll much More....
###Job
```php
Str("hello php")
->title ()->
 echo("<h1>","</h1">);
```
**Output**
```html
<h1>Hello Php </h1>
```


```php
$str = Str("koli");
$str->forEach(function($chr,$index,$string,$argu){
Str($chr)->firstUpper()
  ->echo();
  //K
  //O
  //L
  //I
});


function colors ($color,$index,$array){
  if($color == "red"){
   return "gray";
  }else  if($color == "red"){
   return "white";
  }else {
  return "black";
  }
}
Str(" My  favrouts colores red blue green")
->replaceEach("red|blue|green",colors)
->echo() //My  favrouts colores gray white  black

$strObject = Str("gurjar");
echo $strObject;  //[object Str]
echo gettype($strObject)  // object

```

## Interface Str class
```js
class Str {

public function  construct
($string?String)length?Number||is?String


public function call_back
($string?String)? new This


public function forEach
($call?Function,$arg...?Arguments)? void


public function filter
($call?Function,$arg...?Arguments)? call_back()


public function cslashes
($chr?String)? call_back()


public function slashes
()? call_back()


public function hex2
()? call_back()


public function bin2
()? this


public function chunk
($length?Number,$chunk?String)? call_back()


public function  udecode
()? call_back()


public function   uencode
()? call_back()


public function  chars
($mod?Number)?  (call_back()| Array)

public function  c32
()?  Number


public function  crypt
($salt?String)? call_back()


public function  echo
($offsetA?String,$offsetB?String)? call_back()


public  function toArray  
toArray($separator?String,$limit?PHP_INT_MAX)? Array


public  function arrayTo  
toArray($separator?String,$Array?Array)? call_back()


public  function fromArray  
()? Array


public function htmlDecode  
($Flags?Number,$encoding = null;?Null)?  call_back()


public function  htmlEncode 
($Flags=ENT_QUOTES;?Number,$encoding= null;?Null,$double_encode = true;?Boolean)?  call_back()


public function  htmlspecialEncode 
($Flags=ENT_QUOTES;?Number,$encoding = null;?Null,$double_encode = true;?Boolean)?  call_back()


public function   htmlspecialDecode
($Flags=ENT_QUOTES;?Number)?  call_back()


public function   firstLower
()?  call_back()


public function   firstUpper
()?  call_back()


public function   distance
($string2?String, $insertion_cost = 1;?Number, $replacement_cost = 1;?Number, $deletion_cost = 1;?Number)?  Number


public function    leftTrim
($characters = "\n\r\t\v\x00";?String)?  call_back()


public function    md5
($binary = false;?Boolean)?  call_back()


public function    lineBreaks
($use_xhtml = true;?Boolean)?  call_back()


public function    echoB
($string?String)?  call_back()


public function    aByte
()?  Number


public function    dump
()?  call_back()


public function     parse_str
($result?Global&String)?  call_back()


public function     print
($offsetA = "";?String,$offsetB = "";?String)?  call_back()


public function   printB
($string?String)?  call_back()


public function    quotedP_decode
()?  call_back()

public function    quotedP_encode
()?  call_back()

public function    quotemeta
()?  call_back()

public function    rightTrim
($characters = "\n\r\t\v\x00";?String)?  call_back()



public function    sha1
($binary = false;?Boolean)?  call_back()


public function    same
($string2?String)?  Object()?value|?percent


public function    soundex
()?  call_back()


public function    formate
(...$vales?Arguments)?  call_back()


public function    includes
($find?String)?  Boolean


public function    slice
($start?Number,$end?Number)?  call_back()

public function    endsWith
($needle?String)? Boolean


public function    startWith
($needle?String)? Boolean


public function    replaceAll
($search?String,$replace?String||Function,$arg...?Arguments)? call_back()



public function    replace
($search?String,$replace?String||Function,$arg...?Arguments)? call_back()



public function    replaceLast
($search?String,$replace?String||Function,$arg...?Arguments)? call_back()


public function    replaceEach
($search?String,$replace?Function,$arg...?Arguments)? call_back()


public function    findCount
($find?String,!$fun?Function)? (Number|call_back())

public function    padStart
($length =0;?Number,$pad_string?String)? call_back()


public function    padEnd
($length =0;?Number,$pad_string?String)? call_back()


public function    padBoth
($length =0;?Number,$pad_string?String)? call_back()


public function    repeat
($count?Number)? call_back()


public function    shuffle
($count?Number)? call_back()

public function    split
($split?String)? call_back()


public function    splitB
($split?String)? Array


public function    wordCount
($formate =0;?Number,$characters = null;?String)? (Array|Number)


public function   compare
($string2?String)? Number

public function   left
($concat?String)? call_back()


public function   right
($concat?String)? call_back()

public function   both
($concatA = "";?String,$concatB = "";?String)? call_back()

public function   coll
($string2?String)? (Number)


public function   tags
($allowed_tags = null;?Array||String||Null)? call_back()

public function   reverse
()? call_back()


public function   toLowerCase
()? call_back()


public function   toUpperCase
()? call_back()


public function   subCompare
($needle = "";?String, $offset = 0;?Number, $length = 0;?Number, $case_insensitive = false;?Boolean)? Number



public function   subCount
( $needle?String, $offset = 0;?Number, $length = 0;?Number)? Number


public function   substring
( $length?Number)? call_back()

public function   trim
($characters = " \n\r\t\v\x00";?String)? call_back()

public function   title
($separators = " \n\r\t\v\x00";?String)? call_back()


public function   wordwrap
($width = 75;?Number, $break = "\n";?String,$cut_long_words = false;?Boolean)? call_back()


public function   charAt
($index?Number)? call_back()


public function   concat
(...$string?String)? call_back()


public function   match
($match?String, $flags = 0;?Number, $offset = 0;?Number)? Array

public function   matchAll
($match?String, $flags = 0;?Number, $offset = 0;?Number)? Array


public function   search
($search?String)? Number


public function   cslice
($from?String, $to?String)? Number

}

```
