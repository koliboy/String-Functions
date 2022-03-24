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

public function  __construct
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


public function  chars
($mod?Number)?  (call_back()| Array)

public function  c32
()?  call_back()


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
($Flags?Number,$encoding = null)?  call_back()


public function  htmlEn 
($Flags=ENT_QUOTES?Number,$encoding= null$double_encode = true?Boolean)?  call_back()


public function  htmlspecial 
($Flags=ENT_QUOTES?Number,$encoding = null,$double_encode = true?Boolean)?  call_back()


public function   htmlspecialDe
($Flags=ENT_QUOTES?Number)?  call_back()


public function   firstLower
()?  call_back()


public function   firstUpper
()?  call_back()


public function   distance
($string2?String, $insertion_cost = 1?Number, $replacement_cost = 1?Number, $deletion_cost = 1?Number)?  Number


public function    ltrim
($characters = "\n\r\t\v\x00"?String)?  call_back()


public function    md5
($binary = false?Boolean)?  call_back()
}
```
