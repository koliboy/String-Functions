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
($string?String)? this

public function forEach
($call?function,arg...?mix)? void

public function filter
($call?Function,arg...?Arguments)? this

public function cslashes
($chr?string)? this
public function slashes
()? this
public function hex2
()? this
public function bin2
()? this
public function chunk
($length?int,$chunk?string)? this
public function  udecode
()? this
public function  chars
($mod?int)? this|Array
public function  c32
()? this
public function  crypt
($salt?string)? this
public function  echo
($offsetA?string,$offsetB?string)? this
public function  
toArray($separator?string,$limit?string|int)? Array
}


```
